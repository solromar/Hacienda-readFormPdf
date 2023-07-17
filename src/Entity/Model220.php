<?php

namespace App\Entity;

use App\Repository\Model220Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model220Repository::class)
 */
class Model220 extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $financialExerciseType;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startPeriodDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $finishPeriodDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $supplementaryStatement;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    
    public function getFinancialExercise(): ?string
    {
        return $this->financialExercise;
    }

    public function setFinancialExercise(?string $financialExercise): self
    {
        $this->financialExercise = $financialExercise;

        return $this;
    }

    public function getFinancialExerciseType(): ?string
    {
        return $this->financialExerciseType;
    }

    public function setFinancialExerciseType(?string $financialExerciseType): self
    {
        $this->financialExerciseType = $financialExerciseType;

        return $this;
    }

    public function getStartPeriodDate(): ?\DateTimeInterface
    {
        return $this->startPeriodDate;
    }

    public function setStartPeriodDate(?\DateTimeInterface $startPeriodDate): self
    {
        $this->startPeriodDate = $startPeriodDate;

        return $this;
    }

    public function getFinishPeriodDate(): ?\DateTimeInterface
    {
        return $this->finishPeriodDate;
    }

    public function setFinishPeriodDate(?\DateTimeInterface $finishPeriodDate): self
    {
        $this->finishPeriodDate = $finishPeriodDate;

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

    public function getAssociatedSupportingDocumentNumber(): ?string
    {
        return $this->associatedSupportingDocumentNumber;
    }

    public function setAssociatedSupportingDocumentNumber(?string $associatedSupportingDocumentNumber): self
    {
        $this->associatedSupportingDocumentNumber = $associatedSupportingDocumentNumber;

        return $this;
    }
}
