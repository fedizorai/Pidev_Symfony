<?php

namespace App\Entity;



use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert; 
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message:"Remplir svp")]
    #[ORM\Column(length: 255, nullable: true)]
   private ?string $nomEvent = null;
   #[ORM\Column(nullable: true)]
   #[Assert\Regex(
       pattern: "/^\d+$/",
       message: "Veuillez entrer uniquement des chiffres.")]
   private ?int $maxPlacesEvent = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEvent ;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieuEvent = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    private ?CategorieEvent $categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(?string $nomEvent): static
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getMaxPlacesEvent(): ?int
    {
        return $this->maxPlacesEvent;
    }

    public function setMaxPlacesEvent(?int $maxPlacesEvent): static
    {
        $this->maxPlacesEvent = $maxPlacesEvent;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(?\DateTimeInterface $dateEvent): static
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    public function getLieuEvent(): ?string
    {
        return $this->lieuEvent;
    }

    public function setLieuEvent(?string $lieuEvent): static
    {
        $this->lieuEvent = $lieuEvent;

        return $this;
    }

    public function getCategorie(): ?CategorieEvent
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieEvent $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

 


}
