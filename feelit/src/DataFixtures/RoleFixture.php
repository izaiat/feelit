<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoleFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $roles = [
            'CEO' => 'Company CEO',
            'MANAGER' => 'Company manager',
            'SUPERVISOR' => 'Company supervisor',
            'EMPLOYEE' => 'A company employee',
            'ACCOUNTANT' => 'Company accountant'
        ];

        foreach ($roles as $role => $description) {
            $roleEntity = new Role();
            $roleEntity->setLabel($role);
            $roleEntity->setDescription($description);
            $manager->persist($roleEntity);
        }

        $manager->flush();
    }
}