<?php

namespace App\Entity;

use App\Repository\TeamMotoGpRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeamMotoGpRepository::class)
 */
class TeamMotoGp
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=nation::class, inversedBy="teamMotoGps")
     */
    private $nation;

    /**
     * @ORM\OneToMany(targetEntity=pilotemotogp::class, mappedBy="teamMotoGp")
     */
    private $pilote;

    /**
     * @ORM\OneToOne(targetEntity=bossmotogp::class, cascade={"persist", "remove"})
     */
    private $boss;

    public function __construct()
    {
        $this->pilote = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNation(): ?nation
    {
        return $this->nation;
    }

    public function setNation(?nation $nation): self
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * @return Collection|pilotemotogp[]
     */
    public function getPilote(): Collection
    {
        return $this->pilote;
    }

    public function addPilote(pilotemotogp $pilote): self
    {
        if (!$this->pilote->contains($pilote)) {
            $this->pilote[] = $pilote;
            $pilote->setTeamMotoGp($this);
        }

        return $this;
    }

    public function removePilote(pilotemotogp $pilote): self
    {
        if ($this->pilote->removeElement($pilote)) {
            // set the owning side to null (unless already changed)
            if ($pilote->getTeamMotoGp() === $this) {
                $pilote->setTeamMotoGp(null);
            }
        }

        return $this;
    }

    public function getBoss(): ?bossmotogp
    {
        return $this->boss;
    }

    public function setBoss(?bossmotogp $boss): self
    {
        $this->boss = $boss;

        return $this;
    }
}
