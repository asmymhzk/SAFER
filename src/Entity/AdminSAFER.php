<?php

namespace App\Entity;

use App\Repository\AdminSAFERRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminSAFERRepository::class)
 */
class AdminSAFER
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
    private $id_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_de_passe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAdmin(): ?int
    {
        return $this->id_admin;
    }

    public function setIdAdmin(int $id_admin): self
    {
        $this->id_admin = $id_admin;

        return $this;
    }

    public function getNomAdmin(): ?string
    {
        return $this->nom_admin;
    }

    public function setNomAdmin(string $nom_admin): self
    {
        $this->nom_admin = $nom_admin;

        return $this;
    }

    public function getPrenomAdmin(): ?string
    {
        return $this->prenom_admin;
    }

    public function setPrenomAdmin(string $prenom_admin): self
    {
        $this->prenom_admin = $prenom_admin;

        return $this;
    }

    public function getMailAdmin(): ?string
    {
        return $this->mail_admin;
    }

    public function setMailAdmin(string $mail_admin): self
    {
        $this->mail_admin = $mail_admin;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }
}
