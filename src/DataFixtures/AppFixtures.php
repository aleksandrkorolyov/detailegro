<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1-> setEmail('user1@user.com');
        $user1-> setRoles(['ROLE_USER']);
        $user1-> setPassword('1234');
        $manager->persist($user1);

        $user2 = new User();
        $user2-> setEmail('user2@user.com');
        $user2-> setRoles(['ROLE_USER']);
        $user2-> setPassword('1234');
        $manager->persist($user2);

        $user3 = new User();
        $user3-> setEmail('user3@user.com');
        $user3-> setRoles(['ROLE_USER']);
        $user3-> setPassword('1234');
        $manager->persist($user3);

        $manager->flush();
    }
}
