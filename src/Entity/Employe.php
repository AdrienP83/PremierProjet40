<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Lieu;

/**
 * @ORM\Entity(repositoryClass=EmployeRepository::class)
 */
class Employe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Nom;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    private $Salaire;
    /**
     *@ORM\ManyToOne(targetEntity="Lieu", inversedBy="lesEmployes")
     *@ORM\JoinColumn(name = "idLieu" , nullable=false)
     */
    private $lieu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->Salaire;
    }

    public function setSalaire(string $Salaire): self
    {
        $this->Salaire = $Salaire;

        return $this;
    }
    public function getLieu(){
        return $this->lieu;
    }
}
