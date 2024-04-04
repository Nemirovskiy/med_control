<?php

namespace App\Entity;

use App\Repository\PressRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PressRepository::class)]
class Press
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $user = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $sist = null;

    #[ORM\Column]
    private ?int $diast = null;

    #[ORM\Column]
    private ?int $puls = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getSist(): ?int
    {
        return $this->sist;
    }

    public function setSist(int $sist): static
    {
        $this->sist = $sist;

        return $this;
    }

    public function getDiast(): ?int
    {
        return $this->diast;
    }

    public function setDiast(int $diast): static
    {
        $this->diast = $diast;

        return $this;
    }

    public function getPuls(): ?int
    {
        return $this->puls;
    }

    public function setPuls(int $puls): static
    {
        $this->puls = $puls;

        return $this;
    }
}
