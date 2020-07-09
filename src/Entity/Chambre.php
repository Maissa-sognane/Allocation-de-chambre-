<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type("numeric")
     * @Assert\Positive
     */
    private $numeroBatiment;

    /**
     * @ORM\ManyToOne(targetEntity=TypeChambre::class, inversedBy="chambres")
     */
    private $TypeChambre;

    /**
     * @ORM\OneToMany(targetEntity=Etudiant::class, mappedBy="Chambre")
     */
    private $etudiants;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroChambre;

    public function __construct()
    {
        $this->etudiants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroBatiment(): ?string
    {
        return $this->numeroBatiment;
    }

    public function setNumeroBatiment(string $numeroBatiment): self
    {
        $this->numeroBatiment = $numeroBatiment;

        return $this;
    }

    public function getTypeChambre(): ?TypeChambre
    {
        return $this->TypeChambre;
    }

    public function setTypeChambre(?TypeChambre $TypeChambre): self
    {
        $this->TypeChambre = $TypeChambre;

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getEtudiants(): Collection
    {
        return $this->etudiants;
    }

    public function addEtudiant(Etudiant $etudiant): self
    {
        if (!$this->etudiants->contains($etudiant)) {
            $this->etudiants[] = $etudiant;
            $etudiant->setChambre($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->contains($etudiant)) {
            $this->etudiants->removeElement($etudiant);
            // set the owning side to null (unless already changed)
            if ($etudiant->getChambre() === $this) {
                $etudiant->setChambre(null);
            }
        }

        return $this;
    }

    public function getNumeroChambre(): ?string
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(string $numeroChambre): self
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }
}
