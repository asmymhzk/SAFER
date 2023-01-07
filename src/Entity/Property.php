<?php

namespace App\Entity;
use Cocur\Slugify\Slugify;
use App\Entity\Traits\Timestampable;
use App\Repository\PropertyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 * @ORM\Table(name="properties")
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity("title")
 */
 class Property
                                                   {
                                                       const CATEGORIE = [
                                                           0 => 'Terrain agricole',
                                                           1 => 'Prairie',
                                                           2 => 'Bois',
                                                           3 => 'Batiments',
                                                           4 => 'Exploitations'
                                                       ];
                                                       
                                                       const STATUS = [
                                                           0 => 'A louer',
                                                           1 => 'A vendre'
                                                       ];    
                                                       
                                                       /**
                                                        * @ORM\Id
                                                        * @ORM\GeneratedValue
                                                        * @ORM\Column(type="integer")
                                                        */
                                                       private $id;
                                                   
                                                       /**
                                                        * @ORM\Column(type="string", length=200)
                                                        * @Assert\NotBlank(message= "Donnez un titre à votre bien")
                                                        * @Assert\Length(min=4)
                                                        */
                                                       private $titre;
                                                   
                                                       /**
                                                        * @ORM\Column(type="text")
                                                        * @Assert\NotBlank(message = "Une description est nécessaire")
                                                        * @Assert\Length(min=15)
                                                        */
                                                       private $description;
                                                   
                                                       /**
                                                        * @ORM\Column(type="string")
                                                        * @Assert\NotBlank(message = "La superficie est obligatoire")
                                                        */
                                                       private $surface;
                                                   
                                                       /**
                                                        * @ORM\Column(type="string", length=200)
                                                        * @Assert\NotBlank(message = "Dites dans quelle ville se trouve le bien")
                                                        */
                                                       private $ville;
                                                   
                                                       /**
                                                        * @ORM\Column(type="integer", nullable=true)
                                                        */
                                                       private $CodePostal;
                                                   
                                                       /**
                                                        * @ORM\Column(type="string", length=255)
                                                        */
                                                       private $Status;
                                                   
                                                       /**
                                                        * @ORM\Column(type="string", length=255)
                                                        * @Assert\NotBlank(message = "Mentionnez la catégorie du bien")
                                                        */
                                                       private $Categorie;
                                                       
                                                       /**
                                                        * @ORM\Column(type="integer", nullable=true)
                                                        */
                                                       private $Prix;
                                                   
                                                       /**
                                                        * @ORM\Column(type="boolean")
                                                        * @Assert\NotBlank(message = "Mentionnez si le bien est vendu ou non/louer ou libre")
                                                        */
                                                       private $sold = false;
                                       
                                                       /**
                                                        * @ORM\OneToMany(targetEntity=Images::class, mappedBy="annonces", orphanRemoval=true)
                                                        */
                                                       private $images;
                     
                                                       /**
                                                        * @ORM\ManyToMany(targetEntity=PorteurProjet::class, inversedBy="Favoris")
                                                        */
                                                       private $Favoris;
      
                                                      
                                    
                                                       public function __construct()
                                                       {
                                                           $this->images = new ArrayCollection();
                                                           $this->Favoris = new ArrayCollection();
                                                       }
                                                
                                                   
                                                       public function getId(): ?int
                                                       {
                                                           return $this->id;
                                                       }
                                                   
                                                       public function getTitre(): ?string
                                                       {
                                                           return $this->titre;
                                                       }
                                                   
                                                       public function setTitre(string $titre): self
                                                       {
                                                           $this->titre = $titre;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function getSlug(): string
                                                       {
                                                           return (new Slugify())-> slugify($this->titre);
                                                       }
                                                       
                                                       public function getDescription(): ?string
                                                       {
                                                           return $this->description;
                                                       }
                                                   
                                                       public function setDescription(string $description): self
                                                       {
                                                           $this->description = $description;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function getSurface(): ?string
                                                       {
                                                           return $this->surface;
                                                       }
                                                   
                                                       public function setSurface(string $surface): self
                                                       {
                                                           $this->surface = $surface;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function getVille(): ?string
                                                       {
                                                           return $this->ville;
                                                       }
                                                   
                                                       public function setVille(string $ville): self
                                                       {
                                                           $this->ville = $ville;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function getAdresse(): ?string
                                                       {
                                                           return $this->adresse;
                                                       }
                                                   
                                                       public function setAdresse(string $adresse): self
                                                       {
                                                           $this->adresse = $adresse;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function getCodePostal(): ?int
                                                       {
                                                           return $this->CodePostal;
                                                       }
                                                   
                                                       public function setCodePostal(?int $CodePostal): self
                                                       {
                                                           $this->CodePostal = $CodePostal;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function getStatus(): ?string
                                                       {
                                                           return $this->Status;
                                                       }
                                                   
                                                       public function setStatus(string $Status): self
                                                       {
                                                           $this->Status = $Status;
                                                   
                                                           return $this;
                                                       }
                                                       
                                                       public function getStatusType(): string
                                                       {
                                                           return self::STATUS [$this->Status];
                                                       }
                                                       
                                                       public function getCategorie(): ?string
                                                       {
                                                           return $this->Categorie;
                                                       }
                                                   
                                                       public function setCategorie(string $Categorie): self
                                                       {
                                                           $this->Categorie = $Categorie;
                                                   
                                                           return $this;
                                                       }
                                                       
                                                       public function getCategorieType(): string
                                                       {
                                                           return self::CATEGORIE [$this->Categorie];
                                                       }
                                                   
                                                       public function getPrix(): ?int
                                                       {
                                                           return $this->Prix;
                                                       }
                                                       
                                                       public function getFormattedPrix(): string
                                                       {
                                                           return number_format($this->Prix, 0, '', ' ');
                                                       }
                                                   
                                                       public function setPrix(int $Prix): self
                                                       {
                                                           $this->Prix = $Prix;
                                                   
                                                           return $this;
                                                       }
                                                   
                                                       public function isSold(): ?bool
                                                       {
                                                           return $this->sold;
                                                       }
                                                   
                                                       public function setSold(bool $sold): self
                                                       {
                                                           $this->sold = $sold;
                                                   
                                                           return $this;
                                                       }
                                                       
                                                       public static function loadValidatorMetadata(ClassMetadata $metadata): void
                                                       {
                                                           $metadata->addPropertyConstraint('Categorie', new NotBlank());
                                                   
                                                           $metadata->addPropertyConstraint('Status', new NotBlank());
                                                   
                                                           $metadata->addPropertyConstraint('ville', new NotBlank());
                                                           
                                                           $metadata->addPropertyConstraint('surface', new NotBlank());
                                                           
                                                           $metadata->addPropertyConstraint('CodePostal', new NotBlank());
                                                           
                                                           $metadata->addPropertyConstraint('titre', new NotBlank());
                                                       }
                              
                                                       /**
                                                        * @return Collection<int, Images>
                                                        */
                                                       public function getImages(): Collection
                                                       {
                                                           return $this->images;
                                                       }
                           
                                                       public function addImage(Images $image): self
                                                       {
                                                           if (!$this->images->contains($image)) {
                                                               $this->images[] = $image;
                                                               $image->setAnnonces($this);
                                                           }
                           
                                                           return $this;
                                                       }
                        
                                                       public function removeImage(Images $image): self
                                                       {
                                                           if ($this->images->removeElement($image)) {
                                                               // set the owning side to null (unless already changed)
                                                               if ($image->getAnnonces() === $this) {
                                                                   $image->setAnnonces(null);
                                                               }
                                                           }
                        
                                                           return $this;
                                                       }
               
                                                       /**
                                                        * @return Collection<int, PorteurProjet>
                                                        */
                                                       public function getFavoris(): Collection
                                                       {
                                                           return $this->Favoris;
                                                       }
            
                                                       public function addFavori(PorteurProjet $favori): self
                                                       {
                                                           if (!$this->Favoris->contains($favori)) {
                                                               $this->Favoris[] = $favori;
                                                           }
            
                                                           return $this;
                                                       }
         
                                                       public function removeFavori(PorteurProjet $favori): self
                                                       {
                                                           $this->Favoris->removeElement($favori);
         
                                                           return $this;
                                                       }
   
                                                      
                                                      
                                                   }


