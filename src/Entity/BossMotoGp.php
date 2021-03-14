<?php

namespace App\Entity;

use App\Repository\BossMotoGpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BossMotoGpRepository::class)
 */
class BossMotoGp
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
    private $age;

    /**
     * @ORM\Column(type="date")
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $place_of_birth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SecondName;

    /**
     * @ORM\ManyToOne(targetEntity=nation::class, inversedBy="bossMotoGps")
     */
    private $nation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSecondName(): ?string
    {
        return $this->SecondName;
    }

    public function setSecondName(string $SecondName): self
    {
        $this->SecondName = $SecondName;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getPlaceOfBirth(): ?string
    {
        return $this->place_of_birth;
    }

    public function setPlaceOfBirth(string $place_of_birth): self
    {
        $this->place_of_birth = $place_of_birth;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getNation(): ?nation
    {
        return $this->nation;
    }

    public function setNation(?nation $nation): self
    {
        $this->nation = $nation;

        return $this;
    }
}
