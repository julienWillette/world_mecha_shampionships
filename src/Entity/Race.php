<?php

namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RaceRepository::class)
 */
class Race
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=nation::class, inversedBy="races")
     */
    private $nation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\Column(type="integer")
     */
    private $distance;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $cornerRight;

    /**
     * @ORM\Column(type="integer")
     */
    private $cornerLeft;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCornerRight(): ?int
    {
        return $this->cornerRight;
    }

    public function setCornerRight(int $cornerRight): self
    {
        $this->cornerRight = $cornerRight;

        return $this;
    }

    public function getCornerLeft(): ?int
    {
        return $this->cornerLeft;
    }

    public function setCornerLeft(int $cornerLeft): self
    {
        $this->cornerLeft = $cornerLeft;

        return $this;
    }
}
