<?php

namespace App\Entity;

use App\Repository\Model206Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model206Repository::class)
 */
class Model206 extends AbstractTimetrackeableEntity
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
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $PeriodDateFrom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $PeriodDateTo;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00552;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00562;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00621;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxA;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxC;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zeroFee;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models206s")
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

    public function getPeriodDateFrom(): ?\DateTimeInterface
    {
        return $this->PeriodDateFrom;
    }

    public function setPeriodDateFrom(?\DateTimeInterface $PeriodDateFrom): self
    {
        $this->PeriodDateFrom = $PeriodDateFrom;

        return $this;
    }

    public function getPeriodDateTo(): ?\DateTimeInterface
    {
        return $this->PeriodDateTo;
    }

    public function setPeriodDateTo(?\DateTimeInterface $PeriodDateTo): self
    {
        $this->PeriodDateTo = $PeriodDateTo;

        return $this;
    }

    public function getBox00552(): ?float
    {
        return $this->box00552;
    }

    public function setBox00552(?float $box00552): self
    {
        $this->box00552 = $box00552;

        return $this;
    }

    public function getBox00562(): ?float
    {
        return $this->box00562;
    }

    public function setBox00562(?float $box00562): self
    {
        $this->box00562 = $box00562;

        return $this;
    }

    public function getBox00621(): ?float
    {
        return $this->box00621;
    }

    public function setBox00621(?float $box00621): self
    {
        $this->box00621 = $box00621;

        return $this;
    }

    public function getBoxA(): ?float
    {
        return $this->boxA;
    }

    public function setBoxA(?float $boxA): self
    {
        $this->boxA = $boxA;

        return $this;
    }

    public function getBoxC(): ?float
    {
        return $this->boxC;
    }

    public function setBoxC(?float $boxC): self
    {
        $this->boxC = $boxC;

        return $this;
    }

    public function getZeroFee(): ?bool
    {
        return $this->zeroFee;
    }

    public function setZeroFee(?bool $zeroFee): self
    {
        $this->zeroFee = $zeroFee;

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
