<?php

namespace App\Entity;

use App\Repository\NationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NationRepository::class)
 */
class Nation
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
    private $flag;

    /**
     * @ORM\OneToMany(targetEntity=Race::class, mappedBy="nation")
     */
    private $races;

    /**
     * @ORM\OneToMany(targetEntity=PiloteMotoGp::class, mappedBy="nation")
     */
    private $piloteMotoGps;

    /**
     * @ORM\OneToMany(targetEntity=BossMotoGp::class, mappedBy="nation")
     */
    private $bossMotoGps;

    /**
     * @ORM\OneToMany(targetEntity=TeamMotoGp::class, mappedBy="nation")
     */
    private $teamMotoGps;

    public function __construct()
    {
        $this->races = new ArrayCollection();
        $this->piloteMotoGps = new ArrayCollection();
        $this->bossMotoGps = new ArrayCollection();
        $this->teamMotoGps = new ArrayCollection();
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

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(string $flag): self
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * @return Collection|Race[]
     */
    public function getRaces(): Collection
    {
        return $this->races;
    }

    public function addRace(Race $race): self
    {
        if (!$this->races->contains($race)) {
            $this->races[] = $race;
            $race->setNation($this);
        }

        return $this;
    }

    public function removeRace(Race $race): self
    {
        if ($this->races->removeElement($race)) {
            // set the owning side to null (unless already changed)
            if ($race->getNation() === $this) {
                $race->setNation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PiloteMotoGp[]
     */
    public function getPiloteMotoGps(): Collection
    {
        return $this->piloteMotoGps;
    }

    public function addPiloteMotoGp(PiloteMotoGp $piloteMotoGp): self
    {
        if (!$this->piloteMotoGps->contains($piloteMotoGp)) {
            $this->piloteMotoGps[] = $piloteMotoGp;
            $piloteMotoGp->setNation($this);
        }

        return $this;
    }

    public function removePiloteMotoGp(PiloteMotoGp $piloteMotoGp): self
    {
        if ($this->piloteMotoGps->removeElement($piloteMotoGp)) {
            // set the owning side to null (unless already changed)
            if ($piloteMotoGp->getNation() === $this) {
                $piloteMotoGp->setNation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BossMotoGp[]
     */
    public function getBossMotoGps(): Collection
    {
        return $this->bossMotoGps;
    }

    public function addBossMotoGp(BossMotoGp $bossMotoGp): self
    {
        if (!$this->bossMotoGps->contains($bossMotoGp)) {
            $this->bossMotoGps[] = $bossMotoGp;
            $bossMotoGp->setNation($this);
        }

        return $this;
    }

    public function removeBossMotoGp(BossMotoGp $bossMotoGp): self
    {
        if ($this->bossMotoGps->removeElement($bossMotoGp)) {
            // set the owning side to null (unless already changed)
            if ($bossMotoGp->getNation() === $this) {
                $bossMotoGp->setNation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TeamMotoGp[]
     */
    public function getTeamMotoGps(): Collection
    {
        return $this->teamMotoGps;
    }

    public function addTeamMotoGp(TeamMotoGp $teamMotoGp): self
    {
        if (!$this->teamMotoGps->contains($teamMotoGp)) {
            $this->teamMotoGps[] = $teamMotoGp;
            $teamMotoGp->setNation($this);
        }

        return $this;
    }

    public function removeTeamMotoGp(TeamMotoGp $teamMotoGp): self
    {
        if ($this->teamMotoGps->removeElement($teamMotoGp)) {
            // set the owning side to null (unless already changed)
            if ($teamMotoGp->getNation() === $this) {
                $teamMotoGp->setNation(null);
            }
        }

        return $this;
    }
}
