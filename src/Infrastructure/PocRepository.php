<?php

namespace App\Infrastructure;

use App\Domain\Model\Poc;
use App\Domain\Repository\PocRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

final class PocRepository extends ServiceEntityRepository implements PocRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Poc::class);
    }

    public function save(Poc $poc): void
    {
        $this->_em->persist($poc);
        $this->_em->flush();
    }
}