<?php

namespace App\Entity;

use App\Repository\CrudRepository;
use Doctrine\ORM\Mapping as ORM;



#[ORM\Entity(repositoryClass:CrudRepository::class)]


class Crud
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column( type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Matiere;

    #[ORM\Column(type: 'string', length: 10)]
    private $note;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatiere(): ?string
    {
        return $this->Matiere;
    }

    public function setMatiere(string $Matiere): self
    {
        $this->Matiere = $Matiere;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
