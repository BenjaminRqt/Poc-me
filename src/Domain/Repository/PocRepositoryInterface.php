<?php

namespace App\Domain\Repository;

use App\Domain\Model\Poc;

interface PocRepositoryInterface
{
    public function save(Poc $poc): void;
}