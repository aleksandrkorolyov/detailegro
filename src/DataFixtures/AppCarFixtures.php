<?php

namespace App\DataFixtures;

use App\Entity\Car;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppCarFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $userPasswordHasher
    )
    {
    }
    public function load(ObjectManager $manager): void
    {

        $user1 = new User();
        $user1-> setEmail('user1@user.com');
        $user1-> setRoles(['ROLE_USER']);
        $user1-> setPassword(
            $this->userPasswordHasher->hashPassword(
                $user1,
                '12345678'
            )
        );
        $manager->persist($user1);

        $user2 = new User();
        $user2-> setEmail('user2@user.com');
        $user2-> setRoles(['ROLE_USER']);
        $user2-> setPassword(
            $this->userPasswordHasher->hashPassword(
                $user2,
                '12345678'
            )
        );
        $manager->persist($user2);

        $user3 = new User();
        $user3-> setEmail('user3@user.com');
        $user3-> setRoles(['ROLE_USER']);
        $user3-> setPassword(
            $this->userPasswordHasher->hashPassword(
                $user3,
                '12345678'
            )
        );
        $manager->persist($user3);

        $car1 = new Car();
        $car1->setBrand('Nissan');
        $car1->setModel('Skyline');
        $car1->setFuel('petrol');
        $car1->setImageUrl('https://devil-cars.pl/storage/images/LpmMWa1EwmcwDvhPed071mHlgTi3N4NOZ05VrCqc.jpeg');
        $car1->setOwner($user1);
        $manager->persist($car1);

        $car2 = new Car();
        $car2->setBrand('Mercedes');
        $car2->setModel('S-class');
        $car2->setFuel('diesel');
        $car2->setImageUrl('https://www.motortrend.com/uploads/2023/01/2023-Mercedes-Benz-S580-4Matic-13.jpg');
        $car2->setOwner($user1);
        $manager->persist($car2);

        $car3 = new Car();
        $car3->setBrand('BMW');
        $car3->setModel('5-series');
        $car3->setFuel('petrol');
        $car3->setImageUrl('https://media.ed.edmunds-media.com/bmw/5-series/2021/oem/2021_bmw_5-series_sedan_530e_fq_oem_1_1600x1067.jpg');
        $car3->setOwner($user1);
        $manager->persist($car3);

        $manager->flush();
    }
}
