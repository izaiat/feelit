<?php

namespace App\DataFixtures;

use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CompanyFixtures extends BaseDataFixture
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Company::class, 50, function(Company $company, $count) {
            $company->setName($this->faker->company());
        });
        $manager->flush();
    }
}
