<?php

namespace App\Entity;

use App\Repository\DemandeContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=DemandeContactRepository::class)
 */
class DemandeContact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Le format de l'email est incorrect")
     * @Assert\Email(message="Aucun serveur mail n'a été trouvé pour ce domaine")
     */
    private $mail_DC;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prix_min;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_max;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_DC;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostal_DC;

    /**
     * @ORM\Column(type="text")
     */
    private $Message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailDC(): ?string
    {
        return $this->mail_DC;
    }

    public function setMailDC(string $mail_DC): self
    {
        $this->mail_DC = $mail_DC;

        return $this;
    }

    public function getPrixMin(): ?int
    {
        return $this->prix_min;
    }

    public function setPrixMin(?int $prix_min): self
    {
        $this->prix_min = $prix_min;

        return $this;
    }

    public function getPrixMax(): ?int
    {
        return $this->prix_max;
    }

    public function setPrixMax(int $prix_max): self
    {
        $this->prix_max = $prix_max;

        return $this;
    }

    public function getVilleDC(): ?string
    {
        return $this->ville_DC;
    }

    public function setVilleDC(string $ville_DC): self
    {
        $this->ville_DC = $ville_DC;

        return $this;
    }

    public function getCodePostalDC(): ?int
    {
        return $this->codePostal_DC;
    }

    public function setCodePostalDC(int $codePostal_DC): self
    {
        $this->codePostal_DC = $codePostal_DC;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): self
    {
        $this->Message = $Message;

        return $this;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('mail_DC', new NotBlank());

        $metadata->addPropertyConstraint('Ville_DC', new NotBlank());
        
        $metadata->addPropertyConstraint('codePostal_DC', new NotBlank());
        
        $metadata->addPropertyConstraint('Message', new NotBlank());
              
        $metadata->addPropertyConstraint('mail_DC', new Assert\Email([
            'message' => 'The email "{{ value }}" is not a valid email.',
        ]));
    }
}
