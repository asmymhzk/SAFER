<?php

namespace App\Entity;

use App\Repository\StatistiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatistiqueRepository::class)
 */
class Statistique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Categorie_pref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Biens_pref;

    /**
     * @ORM\Column(type="integer")
     */
    private $departement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoriePref(): ?string
    {
        return $this->Categorie_pref;
    }

    public function setCategoriePref(string $Categorie_pref): self
    {
        $this->Categorie_pref = $Categorie_pref;

        return $this;
    }

    public function getBiensPref(): ?string
    {
        return $this->Biens_pref;
    }

    public function setBiensPref(string $Biens_pref): self
    {
        $this->Biens_pref = $Biens_pref;

        return $this;
    }

    public function getDepartement(): ?int
    {
        return $this->departement;
    }

    public function setDepartement(int $departement): self
    {
        $this->departement = $departement;

        return $this;
    }
}
