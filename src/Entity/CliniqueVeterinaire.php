<?php

namespace App\Entity;

use App\Repository\CliniqueVeterinaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CliniqueVeterinaireRepository::class)
 */
class CliniqueVeterinaire
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
    private $clinique_veterinaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCliniqueVeterinaire(): ?string
    {
        return $this->clinique_veterinaire;
    }

    public function setCliniqueVeterinaire(string $clinique_veterinaire): self
    {
        $this->clinique_veterinaire = $clinique_veterinaire;

        return $this;
    }
}
