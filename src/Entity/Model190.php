<?php

namespace App\Entity;

use App\Repository\Model190Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model190Repository::class)
 */
class Model190 extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $supplementaryStatement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $substituteStatement;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box01;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box02;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box03;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box04;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box05;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box06;

    /**
     * @ORM\OneToMany(targetEntity=Perception::class, mappedBy="Model190Perceptions")
     */
    private $perceptions;

    public function __construct()
    {
        parent::__construct();
        $this->perceptions = new ArrayCollection();
    }

    
    public function getFinancialExercise(): ?string
    {
        return $this->financialExercise;
    }

    public function setFinancialExercise(?string $financialExercise): self
    {
        $this->financialExercise = $financialExercise;

        return $this;
    }

    public function getSupplementaryStatement(): ?bool
    {
        return $this->supplementaryStatement;
    }

    public function setSupplementaryStatement(?bool $supplementaryStatement): self
    {
        $this->supplementaryStatement = $supplementaryStatement;

        return $this;
    }

    public function getSubstituteStatement(): ?bool
    {
        return $this->substituteStatement;
    }

    public function setSubstituteStatement(?bool $substituteStatement): self
    {
        $this->substituteStatement = $substituteStatement;

        return $this;
    }

    public function getAssociatedSupportingDocumentNumber(): ?string
    {
        return $this->associatedSupportingDocumentNumber;
    }

    public function setAssociatedSupportingDocumentNumber(?string $associatedSupportingDocumentNumber): self
    {
        $this->associatedSupportingDocumentNumber = $associatedSupportingDocumentNumber;

        return $this;
    }

    public function getBox01(): ?int
    {
        return $this->box01;
    }

    public function setBox01(?int $box01): self
    {
        $this->box01 = $box01;

        return $this;
    }

    public function getBox02(): ?float
    {
        return $this->box02;
    }

    public function setBox02(?float $box02): self
    {
        $this->box02 = $box02;

        return $this;
    }

    public function getBox03(): ?float
    {
        return $this->box03;
    }

    public function setBox03(?float $box03): self
    {
        $this->box03 = $box03;

        return $this;
    }

    public function getBox04(): ?int
    {
        return $this->box04;
    }

    public function setBox04(?int $box04): self
    {
        $this->box04 = $box04;

        return $this;
    }

    public function getBox05(): ?int
    {
        return $this->box05;
    }

    public function setBox05(?int $box05): self
    {
        $this->box05 = $box05;

        return $this;
    }

    public function getBox06(): ?string
    {
        return $this->box06;
    }

    public function setBox06(?string $box06): self
    {
        $this->box06 = $box06;

        return $this;
    }

    /**
     * @return Collection<int, Perception>
     */
    public function getPerceptions(): Collection
    {
        return $this->perceptions;
    }

    public function addPerception(Perception $perception): self
    {
        if (!$this->perceptions->contains($perception)) {
            $this->perceptions[] = $perception;
            $perception->setModel190Perceptions($this);
        }

        return $this;
    }

    public function removePerception(Perception $perception): self
    {
        if ($this->perceptions->removeElement($perception)) {
            // set the owning side to null (unless already changed)
            if ($perception->getModel190Perceptions() === $this) {
                $perception->setModel190Perceptions(null);
            }
        }

        return $this;
    }
}
