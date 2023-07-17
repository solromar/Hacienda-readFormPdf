<?php

namespace App\Entity;

use App\Repository\ModelD6Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=ModelD6Repository::class)
 */
class ModelD6 extends AbstractTimetrackeableEntity
{
    /**
     * @ORM\Column(type="string", length=4)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $financialExerciseType;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $financialPeriod;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $economicActivitiesNationalClassification;


    public function getFinancialExercise(): ?string
    {
        return $this->financialExercise;
    }

    public function setFinancialExercise(string $financialExercise): self
    {
        $this->financialExercise = $financialExercise;

        return $this;
    }

    public function getFinancialExerciseType(): ?string
    {
        return $this->financialExerciseType;
    }

    public function setFinancialExerciseType(string $financialExerciseType): self
    {
        $this->financialExerciseType = $financialExerciseType;

        return $this;
    }

    public function getFinancialPeriod(): ?string
    {
        return $this->financialPeriod;
    }

    public function setFinancialPeriod(string $financialPeriod): self
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
}
