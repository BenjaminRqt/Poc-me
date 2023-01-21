<?php

namespace App\Domain\UseCase\CreatePOC;

use App\Domain\Model\Poc;
use App\Domain\Repository\PocRepositoryInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

final class Handler
{
    private PocRepositoryInterface $pocRepository;

    public function __construct(PocRepositoryInterface $pocRepository)
    {
        $this->pocRepository = $pocRepository;
    }

    #[AsMessageHandler]
    public function __invoke(Input $input)
    {
        $this->pocRepository->save(Poc::create());
    }
}