<?php

namespace App\Entity;

use App\Repository\PorteurProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PorteurProjetRepository::class)
 */
class PorteurProjet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_PP;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_PP;

    /**
     * @ORM\ManyToMany(targetEntity=Property::class, mappedBy="Favoris")
     */
    private $Favoris;

    public function __construct()
    {
        $this->Favoris = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPP(): ?int
    {
        return $this->id_PP;
    }

    public function setIdPP(int $id_PP): self
    {
        $this->id_PP = $id_PP;

        return $this;
    }

    public function getMailPP(): ?string
    {
        return $this->mail_PP;
    }

    public function setMailPP(string $mail_PP): self
    {
        $this->mail_PP = $mail_PP;

        return $this;
    }

    /**
     * @return Collection<int, Property>
     */
    public function getFavoris(): Collection
    {
        return $this->Favoris;
    }

    public function addFavori(Property $favori): self
    {
        if (!$this->Favoris->contains($favori)) {
            $this->Favoris[] = $favori;
            $favori->addFavori($this);
        }

        return $this;
    }

    public function removeFavori(Property $favori): self
    {
        if ($this->Favoris->removeElement($favori)) {
            $favori->removeFavori($this);
        }

        return $this;
    }
}
