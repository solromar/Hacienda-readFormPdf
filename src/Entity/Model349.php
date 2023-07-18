<?php

namespace App\Entity;

use App\Repository\Model349Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model349Repository::class)
 */
class Model349 extends AbstractTimetrackeableEntity
{

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialPeriod;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box01;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box02;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box03;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box04;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box05;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box06;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box07;

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
     * @ORM\OneToMany(targetEntity=PreviousPeriodRectification::class, mappedBy="Model349previousPeriodRectifications")
     */
    private $previousPeriodRectifications;

    /**
     * @ORM\OneToMany(targetEntity=IntracommunityOperation::class, mappedBy="model349intracommunityOperation")
     */
    private $intracommunityOperations;

    public function __construct()
    {
        $this->previousPeriodRectifications = new ArrayCollection();
        $this->intracommunityOperations = new ArrayCollection();
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

    public function getFinancialPeriod(): ?string
    {
        return $this->financialPeriod;
    }

    public function setFinancialPeriod(?string $financialPeriod): self
    {
        $this->financialPeriod = $financialPeriod;

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

    public function getBox03(): ?int
    {
        return $this->box03;
    }

    public function setBox03(?int $box03): self
    {
        $this->box03 = $box03;

        return $this;
    }

    public function getBox04(): ?float
    {
        return $this->box04;
    }

    public function setBox04(?float $box04): self
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

    public function getBox06(): ?int
    {
        return $this->box06;
    }

    public function setBox06(?int $box06): self
    {
        $this->box06 = $box06;

        return $this;
    }

    public function getBox07(): ?string
    {
        return $this->box07;
    }

    public function setBox07(?string $box07): self
    {
        $this->box07 = $box07;

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

    /**
     * @return Collection<int, PreviousPeriodRectification>
     */
    public function getPreviousPeriodRectifications(): Collection
    {
        return $this->previousPeriodRectifications;
    }

    public function addPreviousPeriodRectification(PreviousPeriodRectification $previousPeriodRectification): self
    {
        if (!$this->previousPeriodRectifications->contains($previousPeriodRectification)) {
            $this->previousPeriodRectifications[] = $previousPeriodRectification;
            $previousPeriodRectification->setModel349previousPeriodRectifications($this);
        }

        return $this;
    }

    public function removePreviousPeriodRectification(PreviousPeriodRectification $previousPeriodRectification): self
    {
        if ($this->previousPeriodRectifications->removeElement($previousPeriodRectification)) {
            // set the owning side to null (unless already changed)
            if ($previousPeriodRectification->getModel349previousPeriodRectifications() === $this) {
                $previousPeriodRectification->setModel349previousPeriodRectifications(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, IntracommunityOperation>
     */
    public function getIntracommunityOperations(): Collection
    {
        return $this->intracommunityOperations;
    }

    public function addIntracommunityOperation(IntracommunityOperation $intracommunityOperation): self
    {
        if (!$this->intracommunityOperations->contains($intracommunityOperation)) {
            $this->intracommunityOperations[] = $intracommunityOperation;
            $intracommunityOperation->setModel349intracommunityOperation($this);
        }

        return $this;
    }

    public function removeIntracommunityOperation(IntracommunityOperation $intracommunityOperation): self
    {
        if ($this->intracommunityOperations->removeElement($intracommunityOperation)) {
            // set the owning side to null (unless already changed)
            if ($intracommunityOperation->getModel349intracommunityOperation() === $this) {
                $intracommunityOperation->setModel349intracommunityOperation(null);
            }
        }

        return $this;
    }
}
