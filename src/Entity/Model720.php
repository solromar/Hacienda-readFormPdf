<?php

namespace App\Entity;

use App\Repository\Model720Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model720Repository::class)
 */
class Model720 extends AbstractTimetrackeableEntity
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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialPeriod;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $economicActivitiesNationalClassification;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models720s")
     */
    private $taxModels;

    
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

    public function getFinancialPeriod(): ?string
    {
        return $this->financialPeriod;
    }

    public function setFinancialPeriod(?string $financialPeriod): self
    {
        $this->financialPeriod = $financialPeriod;

        return $this;
    }

    public function getEconomicActivitiesNationalClassification(): ?string
    {
        return $this->economicActivitiesNationalClassification;
    }

    public function setEconomicActivitiesNationalClassification(?string $economicActivitiesNationalClassification): self
    {
        $this->economicActivitiesNationalClassification = $economicActivitiesNationalClassification;

        return $this;
    }

    public function getTaxModels(): ?TaxModel
    {
        return $this->taxModels;
    }

    public function setTaxModels(?TaxModel $taxModels): self
    {
        $this->taxModels = $taxModels;

        return $this;
    }
}
