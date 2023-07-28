<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppCarFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $car1 = new Car();
        $car1->setBrand('Nissan');
        $car1->setModel('Skyline');
        $car1->setFuel('petrol');
        $car1->setImageUrl('https://devil-cars.pl/storage/images/LpmMWa1EwmcwDvhPed071mHlgTi3N4NOZ05VrCqc.jpeg');
        $manager->persist($car1);

        $car2 = new Car();
        $car2->setBrand('Mercedes');
        $car2->setModel('S-class');
        $car2->setFuel('diesel');
        $car2->setImageUrl('https://www.motortrend.com/uploads/2023/01/2023-Mercedes-Benz-S580-4Matic-13.jpg');
        $manager->persist($car2);

        $car3 = new Car();
        $car3->setBrand('BMW');
        $car3->setModel('5-series');
        $car3->setFuel('petrol');
        $car3->setImageUrl('https://media.ed.edmunds-media.com/bmw/5-series/2021/oem/2021_bmw_5-series_sedan_530e_fq_oem_1_1600x1067.jpg');
        $manager->persist($car3);

        $manager->flush();
    }
}
