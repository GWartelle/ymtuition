<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $product = new Product();
            $product->setName("Product $i");
            $product->setPrice(rand(10, 100));
            $product->setDescription("Description du produit $i");

            $manager->persist($product);
        }

        $manager->flush();
    }
}
