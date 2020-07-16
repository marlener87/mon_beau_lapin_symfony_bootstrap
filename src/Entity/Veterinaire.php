<?php

namespace App\Entity;

use App\Repository\VeterinaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VeterinaireRepository::class)
 */
class Veterinaire
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
    private $veterinaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVeterinaire(): ?string
    {
        return $this->veterinaire;
    }

    public function setVeterinaire(string $veterinaire): self
    {
        $this->veterinaire = $veterinaire;

        return $this;
    }
}
