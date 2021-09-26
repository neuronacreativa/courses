<?php

namespace App\registry\infrastructure\persistence\repository\registry;

use App\registry\domain\entity\Registry;
use App\registry\domain\repository\RegistryRepository;
use App\registry\infrastructure\persistence\model\RegistryModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class MySqlRegistryRepository extends ServiceEntityRepository implements RegistryRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, RegistryModel::class);
        $this->manager = $manager;
    }
    function save(Registry $registry)
    {
        $registryModel = RegistryModel::setRegistry($registry);
        $this->manager->persist($registryModel);
        $this->manager->flush();
    }
}