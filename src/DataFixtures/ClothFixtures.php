<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Cloth;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class ClothFixtures extends Fixture implements DependentFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // $product = new Product();
    // $manager->persist($product);

    $faker = Factory::create('fr_FR');

    $types = [
      'Tshirt'  => [
        'https://cdn.tzy.li/tzy/previews/images/001/549/014/398/normal/biere-edition-limitee.jpg?1545992533',
        'https://cdn.tzy.li/tzy/previews/images/001/299/987/601/normal/moto-et-biere.jpg?1535236300',
        'https://cdn.tzy.li/tzy/previews/images/001/173/563/759/normal/biere-jetaime.jpg?1529072469',
        'https://cdn.tzy.li/tzy/previews/images/001/126/862/044/normal/velo-et-biere.png?1527112546',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
        'https://cdn.tzy.li/tzy/previews/images/001/278/906/681/normal/velo-biere.png?1534715072',
        'https://cdn.tzy.li/tzy/previews/images/001/560/524/584/normal/biere-entierefr.jpg?1547198585',
        'https://cdn.tzy.li/tzy/previews/images/840/895/093/normal/velo-biere1.png?1512128943',
        'https://cdn.tzy.li/tzy/previews/images/840/890/895/normal/velo-biere3.png?1512128759',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
      ],
      'basket' =>  [
        'https://cdn.tzy.li/tzy/previews/images/001/549/014/398/normal/biere-edition-limitee.jpg?1545992533',
        'https://cdn.tzy.li/tzy/previews/images/001/299/987/601/normal/moto-et-biere.jpg?1535236300',
        'https://cdn.tzy.li/tzy/previews/images/001/173/563/759/normal/biere-jetaime.jpg?1529072469',
        'https://cdn.tzy.li/tzy/previews/images/001/126/862/044/normal/velo-et-biere.png?1527112546',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
        'https://cdn.tzy.li/tzy/previews/images/001/278/906/681/normal/velo-biere.png?1534715072',
        'https://cdn.tzy.li/tzy/previews/images/001/560/524/584/normal/biere-entierefr.jpg?1547198585',
        'https://cdn.tzy.li/tzy/previews/images/840/895/093/normal/velo-biere1.png?1512128943',
        'https://cdn.tzy.li/tzy/previews/images/840/890/895/normal/velo-biere3.png?1512128759',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
      ],
      'jogging' => [
        'https://cdn.tzy.li/tzy/previews/images/001/549/014/398/normal/biere-edition-limitee.jpg?1545992533',
        'https://cdn.tzy.li/tzy/previews/images/001/299/987/601/normal/moto-et-biere.jpg?1535236300',
        'https://cdn.tzy.li/tzy/previews/images/001/173/563/759/normal/biere-jetaime.jpg?1529072469',
        'https://cdn.tzy.li/tzy/previews/images/001/126/862/044/normal/velo-et-biere.png?1527112546',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
        'https://cdn.tzy.li/tzy/previews/images/001/278/906/681/normal/velo-biere.png?1534715072',
        'https://cdn.tzy.li/tzy/previews/images/001/560/524/584/normal/biere-entierefr.jpg?1547198585',
        'https://cdn.tzy.li/tzy/previews/images/840/895/093/normal/velo-biere1.png?1512128943',
        'https://cdn.tzy.li/tzy/previews/images/840/890/895/normal/velo-biere3.png?1512128759',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
      ],
      'Jean'    => [
        'https://cdn.tzy.li/tzy/previews/images/001/549/014/398/normal/biere-edition-limitee.jpg?1545992533',
        'https://cdn.tzy.li/tzy/previews/images/001/299/987/601/normal/moto-et-biere.jpg?1535236300',
        'https://cdn.tzy.li/tzy/previews/images/001/173/563/759/normal/biere-jetaime.jpg?1529072469',
        'https://cdn.tzy.li/tzy/previews/images/001/126/862/044/normal/velo-et-biere.png?1527112546',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
        'https://cdn.tzy.li/tzy/previews/images/001/278/906/681/normal/velo-biere.png?1534715072',
        'https://cdn.tzy.li/tzy/previews/images/001/560/524/584/normal/biere-entierefr.jpg?1547198585',
        'https://cdn.tzy.li/tzy/previews/images/840/895/093/normal/velo-biere1.png?1512128943',
        'https://cdn.tzy.li/tzy/previews/images/840/890/895/normal/velo-biere3.png?1512128759',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
      ],
      'Veste'   => [
        'https://cdn.tzy.li/tzy/previews/images/001/549/014/398/normal/biere-edition-limitee.jpg?1545992533',
        'https://cdn.tzy.li/tzy/previews/images/001/299/987/601/normal/moto-et-biere.jpg?1535236300',
        'https://cdn.tzy.li/tzy/previews/images/001/173/563/759/normal/biere-jetaime.jpg?1529072469',
        'https://cdn.tzy.li/tzy/previews/images/001/126/862/044/normal/velo-et-biere.png?1527112546',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
        'https://cdn.tzy.li/tzy/previews/images/001/278/906/681/normal/velo-biere.png?1534715072',
        'https://cdn.tzy.li/tzy/previews/images/001/560/524/584/normal/biere-entierefr.jpg?1547198585',
        'https://cdn.tzy.li/tzy/previews/images/840/895/093/normal/velo-biere1.png?1512128943',
        'https://cdn.tzy.li/tzy/previews/images/840/890/895/normal/velo-biere3.png?1512128759',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
      ],
      'Casquette' => [
        'https://cdn.tzy.li/tzy/previews/images/001/549/014/398/normal/biere-edition-limitee.jpg?1545992533',
        'https://cdn.tzy.li/tzy/previews/images/001/299/987/601/normal/moto-et-biere.jpg?1535236300',
        'https://cdn.tzy.li/tzy/previews/images/001/173/563/759/normal/biere-jetaime.jpg?1529072469',
        'https://cdn.tzy.li/tzy/previews/images/001/126/862/044/normal/velo-et-biere.png?1527112546',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
        'https://cdn.tzy.li/tzy/previews/images/001/278/906/681/normal/velo-biere.png?1534715072',
        'https://cdn.tzy.li/tzy/previews/images/001/560/524/584/normal/biere-entierefr.jpg?1547198585',
        'https://cdn.tzy.li/tzy/previews/images/840/895/093/normal/velo-biere1.png?1512128943',
        'https://cdn.tzy.li/tzy/previews/images/840/890/895/normal/velo-biere3.png?1512128759',
        'https://cdn.tzy.li/tzy/previews/images/855/149/157/normal/velo-biere2.png?1512946790',
        'https://cdn.tzy.li/tzy/previews/images/001/174/395/465/normal/biere-et-peche.jpg?1529270880',
      ],
    ];
    for ($a = 0; $a < 1; $a++) {
      foreach ($types as $type => $picture) {
        for ($i = 0; $i < count($picture); $i++) {
          $cloth = new Cloth();
          $name = (ucfirst($faker->word) . rand(0, 100));
          $cloth->setType($type)
            ->setPrice(rand(10, 20))
            ->setName($name)
            ->setNote(rand(2, 5))
            ->setDescription($faker->paragraph)
            ->setPicture($picture[$i]);
          for ($p = 0; $p < 6; $p++) {
            $cloth->addSize($this->getReference('size' . rand(0, 12)));
          }
          for ($j = 0; $j < 3; $j++) {
            $cloth->addMaterial($this->getReference('material' . rand(0, 6)));
          }
          for ($k = 0; $k < 3; $k++) {
            $cloth->addColor($this->getReference('color' . rand(0, 6)));
          }
          $manager->persist($cloth);
        }
      }
    }


    // foreach ($tshirts as $tshirt) {

    // $cloth = new Cloth();
    // $cloth->setType('Tshirt')
    //       ->setPrice(rand(10, 20))
    //       ->setName(ucfirst($faker->word))
    //       ->setNote(rand(2, 5))
    //       ->setDescription($faker->sentence)
    //       ->setPicture($tshirt)
    //       ->setSize(['S', 'M', 'L', 'XL', 'XXL','3XL', '4Xl', '5XL']);
    // $manager->persist($cloth);
    // }

    // foreach ($joggings as $jogging) {

    // $cloth = new Cloth();
    // $cloth->setType('Jogging')
    //       ->setPrice(rand(10, 20))
    //       ->setName(ucfirst($faker->word))
    //       ->setNote(rand(2, 5))
    //       ->setDescription($faker->sentence)
    //       ->setPicture($jogging)
    //       ->setSize(['S', 'M', 'L', 'XL', 'XXL','3XL', '4Xl', '5XL']);
    // $manager->persist($cloth);
    // }


    $manager->flush();
  }

  public function getDependencies()
  {
    return [
      SizeFixtures::class,
      MaterialFixtures::class,
      ColorFixtures::class,
    ];
  }
}
