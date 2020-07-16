<?php

namespace App\Entity;

use App\Repository\EleveurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EleveurRepository::class)
 */
class Eleveur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eleveur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEleveur(): ?string
    {
        return $this->eleveur;
    }

    public function setEleveur(string $eleveur): self
    {
        $this->eleveur = $eleveur;

        return $this;
    }
}
