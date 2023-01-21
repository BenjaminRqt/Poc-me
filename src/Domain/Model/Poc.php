<?php

namespace App\Domain\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity]

final class Poc
{
    #[ORM\Id]
    #[ORM\Column(type:"uuid", unique: true)]
    private Uuid $id;

    private function __construct()
    {
    }

    public static function create(): self
    {
        $self = new self();
        $self->id = Uuid::v4();

        return $self;
    }

    public function getId(): Uuid
    {
        return $this->id;
    }
}