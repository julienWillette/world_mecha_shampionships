<?php

namespace App\Entity;

use App\Repository\PiloteMotoGpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PiloteMotoGpRepository::class)
 */
class PiloteMotoGp
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondName;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $placeOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weight;

    /**
     * @ORM\ManyToOne(targetEntity=nation::class, inversedBy="piloteMotoGps")
     */
    private $nation;

    /**
     * @ORM\ManyToOne(targetEntity=TeamMotoGp::class, inversedBy="pilote")
     */
    private $teamMotoGp;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(string $secondName): self
    {
        $this->secondName = $secondName;

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
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTimeInterface $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getPlaceOfBirth(): ?string
    {
        return $this->placeOfBirth;
    }

    public function setPlaceOfBirth(string $placeOfBirth): self
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    public function getCut(): ?string
    {
        return $this->cut;
    }

    public function setCut(string $cut): self
    {
        $this->cut = $cut;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

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

    public function getTeamMotoGp(): ?TeamMotoGp
    {
        return $this->teamMotoGp;
    }

    public function setTeamMotoGp(?TeamMotoGp $teamMotoGp): self
    {
        $this->teamMotoGp = $teamMotoGp;

        return $this;
    }
}
