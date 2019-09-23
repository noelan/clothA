<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\LoginAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginAuthenticator $authenticator, \Swift_Mailer $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setToken(0);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email
            $message = (new \Swift_Message('Votre compte a bien été crée. Pour l\'activer merci de valider votre adresse mail'))
                ->setFrom('noel.an.dev@gmail.com')
                ->setTo($_POST['registration_form']['email'])
                ->setBody(
                    $this->renderView(
                        'emails/inscription.txt.twig',
                        ['email' => $_POST['registration_form']['email']]),
                        'text/html'
                        );
            $mailer->send($message);    
            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/confirmAccount/{email}", name="confirmAccount")
     */
    public function confirmAccount($email, UserRepository $userRepository) 
    {
        $user = $userRepository->findOneBy(['email' => $email]);
        $entityManager = $this->getDoctrine()->getManager();
        $user->setToken(1);

        $entityManager->flush();

        return $this->redirectToRoute('home');
    }
}
