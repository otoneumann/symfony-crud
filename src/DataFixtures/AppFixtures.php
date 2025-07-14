<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $product = new Product();
         $product->setName('Product 1');
         $product->setDescription('Description 1');
         $product->setSize(100);
         $product->setSurname('Surname 1');
         $product->setCity('City 1');

        // The persist()(In Doctrine’s Unit of Work (memory)) method notifies the entity manager to manage (track) this object
         $manager->persist($product);

        $product = new Product();
        $product->setName('Product 2');
        $product->setDescription('Description 2');
        $product->setSize(200);
        $product->setSurname('Surname 2');
        $product->setCity('City 2');

        $manager->persist($product);

        $manager->flush();
    }
}
