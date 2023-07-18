<?php

namespace App\Entity;

use App\Repository\Model115Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model115Repository::class)
 */
class Model115 extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="string", length=4)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $financialPeriod;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box3;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box4;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box5;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $complementaryStatement;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models115s")
     */
    private $taxModels;

    
    public function getFinancialExercise(): ?string
    {
        return $this->financialExercise;
    }

    public function setFinancialExercise(string $financialExercise): self
    {
        $this->financialExercise = $financialExercise;

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

    public function getBox1(): ?int
    {
        return $this->box1;
    }

    public function setBox1(?int $box1): self
    {
        $this->box1 = $box1;

        return $this;
    }

    public function getBox2(): ?float
    {
        return $this->box2;
    }

    public function setBox2(?float $box2): self
    {
        $this->box2 = $box2;

        return $this;
    }

    public function getBox3(): ?float
    {
        return $this->box3;
    }

    public function setBox3(?float $box3): self
    {
        $this->box3 = $box3;

        return $this;
    }

    public function getBox4(): ?float
    {
        return $this->box4;
    }

    public function setBox4(?float $box4): self
    {
        $this->box4 = $box4;

        return $this;
    }

    public function getBox5(): ?float
    {
        return $this->box5;
    }

    public function setBox5(?float $box5): self
    {
        $this->box5 = $box5;

        return $this;
    }

    public function getComplementaryStatement(): ?bool
    {
        return $this->complementaryStatement;
    }

    public function setComplementaryStatement(?bool $complementaryStatement): self
    {
        $this->complementaryStatement = $complementaryStatement;

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
