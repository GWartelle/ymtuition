<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $plantsAndFlowers = [
            'Rose',
            'Tulipe',
            'Tournesol',
            'Lys',
            'Orchidée',
            'Marguerite',
            'Pivoine',
            'Lavande',
            'Hortensia',
            'Hibiscus',
            'Bégonia',
            'Géranium',
            'Pensée',
            'Cyclamen',
            'Edelweiss',
            'Anémone',
            'Jonquille',
            'Camélia',
            'Clématite',
            'Fuchsia',
            'Glycine',
            'Iris',
            'Jacinthe',
            'Magnolia',
            'Muguet',
            'Narcisse',
            'Oeillet',
            'Pétunia',
            'Renoncule',
            'Volubilis',
            'Acacia',
            'Ail d\'ornement',
            'Arbousier',
            'Aster',
            'Azalée',
            'Bleuet',
            'Bougainvillier',
            'Buddleja',
            'Cactus',
            'Calla',
            'Capucine',
            'Cèdre',
            'Chrysanthème',
            'Cognassier du Japon',
            'Colchique',
            'Conifère',
            'Crocus',
            ' Dahlia',
            ' Deutzia',
            'Echinacea',
            'Eglantine',
            'Epicea',
            'Erica',
            'Eucalyptus',
            'Forsythia',
            'Freesia',
            'Gaillarde',
            'Gazania',
            'Genêt',
            'Giroflée',
            'Glaïeul',
            'Hélianthus',
            'Hellebore',
            'Hesperis',
            'Impatiente',
            'Ipomea',
            'Jasmin',
            'Kalmia',
            'Kniphofia',
            'Lantana',
            'Lilas',
            'Lisianthus',
            'Lobelia',
            'Lupin',
            'Mimosa',
            'Muflier',
            'Myosotis',
            'Nénuphar',
            'Nérine',
            'Olivier',
            'Ophiopogon',
            'Pachysandra',
            'Pavot',
            'Pervenche',
            'Phlox',
            'Plumbago',
            'Podocarpus',
            'Pommier d\'ornement',
            'Primevère',
            'Rosier',
            'Rudbeckia',
            'Sauge',
            'Scabieuse',
            'Sedum',
            'Seringat',
            'Silène',
            'Solidago',
            'Sorbaria',
            'Statice',
            'Thym',
            'Tiarella',
            'Trille',
            'Valériane',
            'Véronique',
            'Viburnum',
            'Viola',
            'Wisteria',
            'Xanthoceras',
            'Yucca'
        ];

        for ($i = 1; $i <= 100; $i++) {
            $product = new Product();
            $product->setName($faker->randomElement($plantsAndFlowers));
            $product->setPrice($faker->randomFloat(2, 5, 150));
            $product->setDescription($faker->paragraph(3));
            $product->setShortDescription($faker->sentence(15));
            $product->setQuantity($faker->numberBetween(1, 50));

            $manager->persist($product);
        }

        $manager->flush();
    }
}
