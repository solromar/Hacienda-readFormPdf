<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\Model130Repository;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model130Repository::class)
 */
class Model130 extends AbstractTimetrackeableEntity
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
     * @ORM\Column(type="float", nullable=true)
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
     * @ORM\Column(type="float", nullable=true)
     */
    private $box6;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box7;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box8;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box9;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box10;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box11;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box12;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box13;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box14;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box15;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box16;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box17;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box18;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box19;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $incomeAmount;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $paymentMethod;

    /**
     * @ORM\Column(type="string", length=34, nullable=true)
     */
    private $ibanCode;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $negativeStatement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toDeduct;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $complementaryStatement;

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

    public function getFinancialPeriod(): ?string
    {
        return $this->financialPeriod;
    }

    public function setFinancialPeriod(?string $financialPeriod): self
    {
        $this->financialPeriod = $financialPeriod;

        return $this;
    }

    public function getBox1(): ?float
    {
        return $this->box1;
    }

    public function setBox1(?float $box1): self
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

    public function getBox6(): ?float
    {
        return $this->box6;
    }

    public function setBox6(?float $box6): self
    {
        $this->box6 = $box6;

        return $this;
    }

    public function getBox7(): ?float
    {
        return $this->box7;
    }

    public function setBox7(?float $box7): self
    {
        $this->box7 = $box7;

        return $this;
    }

    public function getBox8(): ?float
    {
        return $this->box8;
    }

    public function setBox8(?float $box8): self
    {
        $this->box8 = $box8;

        return $this;
    }

    public function getBox9(): ?float
    {
        return $this->box9;
    }

    public function setBox9(?float $box9): self
    {
        $this->box9 = $box9;

        return $this;
    }

    public function getBox10(): ?float
    {
        return $this->box10;
    }

    public function setBox10(?float $box10): self
    {
        $this->box10 = $box10;

        return $this;
    }

    public function getBox11(): ?float
    {
        return $this->box11;
    }

    public function setBox11(?float $box11): self
    {
        $this->box11 = $box11;

        return $this;
    }

    public function getBox12(): ?float
    {
        return $this->box12;
    }

    public function setBox12(?float $box12): self
    {
        $this->box12 = $box12;

        return $this;
    }

    public function getBox13(): ?float
    {
        return $this->box13;
    }

    public function setBox13(?float $box13): self
    {
        $this->box13 = $box13;

        return $this;
    }

    public function getBox14(): ?float
    {
        return $this->box14;
    }

    public function setBox14(?float $box14): self
    {
        $this->box14 = $box14;

        return $this;
    }

    public function getBox15(): ?float
    {
        return $this->box15;
    }

    public function setBox15(?float $box15): self
    {
        $this->box15 = $box15;

        return $this;
    }

    public function getBox16(): ?float
    {
        return $this->box16;
    }

    public function setBox16(?float $box16): self
    {
        $this->box16 = $box16;

        return $this;
    }

    public function getBox17(): ?float
    {
        return $this->box17;
    }

    public function setBox17(?float $box17): self
    {
        $this->box17 = $box17;

        return $this;
    }

    public function getBox18(): ?float
    {
        return $this->box18;
    }

    public function setBox18(?float $box18): self
    {
        $this->box18 = $box18;

        return $this;
    }

    public function getBox19(): ?float
    {
        return $this->box19;
    }

    public function setBox19(?float $box19): self
    {
        $this->box19 = $box19;

        return $this;
    }

    public function getIncomeAmount(): ?float
    {
        return $this->incomeAmount;
    }

    public function setIncomeAmount(?float $incomeAmount): self
    {
        $this->incomeAmount = $incomeAmount;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getIbanCode(): ?string
    {
        return $this->ibanCode;
    }

    public function setIbanCode(?string $ibanCode): self
    {
        $this->ibanCode = $ibanCode;

        return $this;
    }

    public function getNegativeStatement(): ?bool
    {
        return $this->negativeStatement;
    }

    public function setNegativeStatement(?bool $negativeStatement): self
    {
        $this->negativeStatement = $negativeStatement;

        return $this;
    }

    public function getToDeduct(): ?bool
    {
        return $this->toDeduct;
    }

    public function setToDeduct(?bool $toDeduct): self
    {
        $this->toDeduct = $toDeduct;

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
}
