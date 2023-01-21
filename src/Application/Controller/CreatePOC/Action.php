<?php

namespace App\Application\Controller\CreatePOC;

use App\Domain\UseCase\CreatePOC\Input;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

final class Action extends AbstractController
{
    private MessageBusInterface $bus;

    public function __construct(MessageBusInterface $bus)
    {
        $this->bus = $bus;
    }

    #[Route('/pocs', name: 'create_poc', methods: 'get')]
    public function number(): Response
    {
        $this->bus->dispatch(new Input());
        return new Response(
            'ij'
        );
    }
}