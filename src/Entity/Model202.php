<?php

namespace App\Entity;

use App\Repository\Model202Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model202Repository::class)
 */
class Model202 extends AbstractTimetrackeableEntity
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
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $PeriodDateFrom;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $economicActivitiesNationalClassification;

    /**
     * @ORM\Column(type="float", nullable=true)
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
     * @ORM\Column(type="float", nullable=true)
     */
    private $box04;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box05;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box06;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box07;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box08;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box13;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box14;

    /**
     * @ORM\Column(type="float")
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
    private $box20;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box21;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box22;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box23;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box24;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box25;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box26;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box27;

    /**
     * @ORM\Column(type="float")
     */
    private $box28;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $f;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box30;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box31;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $box32;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box33;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box34;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box37;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box38;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box39;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box40;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box42;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box44;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box45;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box46;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box48;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box49;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box51;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box52;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $preivousCorrectionsTotalIncreases;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $preivousCorrectionsTotalDecreases;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $resultTotalNetCorrections;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxA;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxB;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxC1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxC2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxD;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxE;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxF;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxG;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxH;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxI;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxI1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxI2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxI3;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxI4;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxI5;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxJ;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxK1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxK2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxL;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $boxM;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $financialExpensesTotal;

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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $negativeStatement;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models202s")
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

    public function getEconomicActivitiesNationalClassification(): ?string
    {
        return $this->economicActivitiesNationalClassification;
    }

    public function setEconomicActivitiesNationalClassification(?string $economicActivitiesNationalClassification): self
    {
        $this->economicActivitiesNationalClassification = $economicActivitiesNationalClassification;

        return $this;
    }

    public function getBox01(): ?float
    {
        return $this->box01;
    }

    public function setBox01(?float $box01): self
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

    public function getBox04(): ?float
    {
        return $this->box04;
    }

    public function setBox04(?float $box04): self
    {
        $this->box04 = $box04;

        return $this;
    }

    public function getBox05(): ?float
    {
        return $this->box05;
    }

    public function setBox05(?float $box05): self
    {
        $this->box05 = $box05;

        return $this;
    }

    public function getBox06(): ?float
    {
        return $this->box06;
    }

    public function setBox06(?float $box06): self
    {
        $this->box06 = $box06;

        return $this;
    }

    public function getBox07(): ?float
    {
        return $this->box07;
    }

    public function setBox07(?float $box07): self
    {
        $this->box07 = $box07;

        return $this;
    }

    public function getBox08(): ?float
    {
        return $this->box08;
    }

    public function setBox08(?float $box08): self
    {
        $this->box08 = $box08;

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

    public function getBox16(): ?float
    {
        return $this->box16;
    }

    public function setBox16(float $box16): self
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

    public function getBox20(): ?float
    {
        return $this->box20;
    }

    public function setBox20(?float $box20): self
    {
        $this->box20 = $box20;

        return $this;
    }

    public function getBox21(): ?float
    {
        return $this->box21;
    }

    public function setBox21(?float $box21): self
    {
        $this->box21 = $box21;

        return $this;
    }

    public function getBox22(): ?float
    {
        return $this->box22;
    }

    public function setBox22(?float $box22): self
    {
        $this->box22 = $box22;

        return $this;
    }

    public function getBox23(): ?float
    {
        return $this->box23;
    }

    public function setBox23(?float $box23): self
    {
        $this->box23 = $box23;

        return $this;
    }

    public function getBox24(): ?float
    {
        return $this->box24;
    }

    public function setBox24(?float $box24): self
    {
        $this->box24 = $box24;

        return $this;
    }

    public function getBox25(): ?float
    {
        return $this->box25;
    }

    public function setBox25(?float $box25): self
    {
        $this->box25 = $box25;

        return $this;
    }

    public function getBox26(): ?float
    {
        return $this->box26;
    }

    public function setBox26(?float $box26): self
    {
        $this->box26 = $box26;

        return $this;
    }

    public function getBox27(): ?float
    {
        return $this->box27;
    }

    public function setBox27(?float $box27): self
    {
        $this->box27 = $box27;

        return $this;
    }

    public function getBox28(): ?float
    {
        return $this->box28;
    }

    public function setBox28(float $box28): self
    {
        $this->box28 = $box28;

        return $this;
    }

    public function getF(): ?float
    {
        return $this->f;
    }

    public function setF(?float $f): self
    {
        $this->f = $f;

        return $this;
    }

    public function getBox30(): ?float
    {
        return $this->box30;
    }

    public function setBox30(?float $box30): self
    {
        $this->box30 = $box30;

        return $this;
    }

    public function getBox31(): ?float
    {
        return $this->box31;
    }

    public function setBox31(?float $box31): self
    {
        $this->box31 = $box31;

        return $this;
    }

    public function getBox32(): ?string
    {
        return $this->box32;
    }

    public function setBox32(?string $box32): self
    {
        $this->box32 = $box32;

        return $this;
    }

    public function getBox33(): ?float
    {
        return $this->box33;
    }

    public function setBox33(?float $box33): self
    {
        $this->box33 = $box33;

        return $this;
    }

    public function getBox34(): ?float
    {
        return $this->box34;
    }

    public function setBox34(?float $box34): self
    {
        $this->box34 = $box34;

        return $this;
    }

    public function getBox37(): ?float
    {
        return $this->box37;
    }

    public function setBox37(?float $box37): self
    {
        $this->box37 = $box37;

        return $this;
    }

    public function getBox38(): ?float
    {
        return $this->box38;
    }

    public function setBox38(?float $box38): self
    {
        $this->box38 = $box38;

        return $this;
    }

    public function getBox39(): ?float
    {
        return $this->box39;
    }

    public function setBox39(?float $box39): self
    {
        $this->box39 = $box39;

        return $this;
    }

    public function getBox40(): ?float
    {
        return $this->box40;
    }

    public function setBox40(?float $box40): self
    {
        $this->box40 = $box40;

        return $this;
    }

    public function getBox42(): ?float
    {
        return $this->box42;
    }

    public function setBox42(?float $box42): self
    {
        $this->box42 = $box42;

        return $this;
    }

    public function getBox44(): ?float
    {
        return $this->box44;
    }

    public function setBox44(?float $box44): self
    {
        $this->box44 = $box44;

        return $this;
    }

    public function getBox45(): ?float
    {
        return $this->box45;
    }

    public function setBox45(?float $box45): self
    {
        $this->box45 = $box45;

        return $this;
    }

    public function getBox46(): ?float
    {
        return $this->box46;
    }

    public function setBox46(?float $box46): self
    {
        $this->box46 = $box46;

        return $this;
    }

    public function getBox48(): ?float
    {
        return $this->box48;
    }

    public function setBox48(?float $box48): self
    {
        $this->box48 = $box48;

        return $this;
    }

    public function getBox49(): ?float
    {
        return $this->box49;
    }

    public function setBox49(?float $box49): self
    {
        $this->box49 = $box49;

        return $this;
    }

    public function getBox51(): ?float
    {
        return $this->box51;
    }

    public function setBox51(?float $box51): self
    {
        $this->box51 = $box51;

        return $this;
    }

    public function getBox52(): ?float
    {
        return $this->box52;
    }

    public function setBox52(?float $box52): self
    {
        $this->box52 = $box52;

        return $this;
    }

    public function getPreivousCorrectionsTotalIncreases(): ?float
    {
        return $this->preivousCorrectionsTotalIncreases;
    }

    public function setPreivousCorrectionsTotalIncreases(?float $preivousCorrectionsTotalIncreases): self
    {
        $this->preivousCorrectionsTotalIncreases = $preivousCorrectionsTotalIncreases;

        return $this;
    }

    public function getPreivousCorrectionsTotalDecreases(): ?float
    {
        return $this->preivousCorrectionsTotalDecreases;
    }

    public function setPreivousCorrectionsTotalDecreases(?float $preivousCorrectionsTotalDecreases): self
    {
        $this->preivousCorrectionsTotalDecreases = $preivousCorrectionsTotalDecreases;

        return $this;
    }

    public function getResultTotalNetCorrections(): ?float
    {
        return $this->resultTotalNetCorrections;
    }

    public function setResultTotalNetCorrections(?float $resultTotalNetCorrections): self
    {
        $this->resultTotalNetCorrections = $resultTotalNetCorrections;

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

    public function getBoxB(): ?float
    {
        return $this->boxB;
    }

    public function setBoxB(?float $boxB): self
    {
        $this->boxB = $boxB;

        return $this;
    }

    public function getBoxC1(): ?float
    {
        return $this->boxC1;
    }

    public function setBoxC1(?float $boxC1): self
    {
        $this->boxC1 = $boxC1;

        return $this;
    }

    public function getBoxC2(): ?float
    {
        return $this->boxC2;
    }

    public function setBoxC2(?float $boxC2): self
    {
        $this->boxC2 = $boxC2;

        return $this;
    }

    public function getBoxD(): ?float
    {
        return $this->boxD;
    }

    public function setBoxD(?float $boxD): self
    {
        $this->boxD = $boxD;

        return $this;
    }

    public function getBoxE(): ?float
    {
        return $this->boxE;
    }

    public function setBoxE(?float $boxE): self
    {
        $this->boxE = $boxE;

        return $this;
    }

    public function getBoxF(): ?float
    {
        return $this->boxF;
    }

    public function setBoxF(?float $boxF): self
    {
        $this->boxF = $boxF;

        return $this;
    }

    public function getBoxG(): ?float
    {
        return $this->boxG;
    }

    public function setBoxG(?float $boxG): self
    {
        $this->boxG = $boxG;

        return $this;
    }

    public function getBoxH(): ?float
    {
        return $this->boxH;
    }

    public function setBoxH(?float $boxH): self
    {
        $this->boxH = $boxH;

        return $this;
    }

    public function getBoxI(): ?float
    {
        return $this->boxI;
    }

    public function setBoxI(?float $boxI): self
    {
        $this->boxI = $boxI;

        return $this;
    }

    public function getBoxI1(): ?float
    {
        return $this->boxI1;
    }

    public function setBoxI1(?float $boxI1): self
    {
        $this->boxI1 = $boxI1;

        return $this;
    }

    public function getBoxI2(): ?float
    {
        return $this->boxI2;
    }

    public function setBoxI2(?float $boxI2): self
    {
        $this->boxI2 = $boxI2;

        return $this;
    }

    public function getBoxI3(): ?float
    {
        return $this->boxI3;
    }

    public function setBoxI3(?float $boxI3): self
    {
        $this->boxI3 = $boxI3;

        return $this;
    }

    public function getBoxI4(): ?float
    {
        return $this->boxI4;
    }

    public function setBoxI4(?float $boxI4): self
    {
        $this->boxI4 = $boxI4;

        return $this;
    }

    public function getBoxI5(): ?float
    {
        return $this->boxI5;
    }

    public function setBoxI5(?float $boxI5): self
    {
        $this->boxI5 = $boxI5;

        return $this;
    }

    public function getBoxJ(): ?float
    {
        return $this->boxJ;
    }

    public function setBoxJ(?float $boxJ): self
    {
        $this->boxJ = $boxJ;

        return $this;
    }

    public function getBoxK1(): ?float
    {
        return $this->boxK1;
    }

    public function setBoxK1(?float $boxK1): self
    {
        $this->boxK1 = $boxK1;

        return $this;
    }

    public function getBoxK2(): ?float
    {
        return $this->boxK2;
    }

    public function setBoxK2(?float $boxK2): self
    {
        $this->boxK2 = $boxK2;

        return $this;
    }

    public function getBoxL(): ?float
    {
        return $this->boxL;
    }

    public function setBoxL(?float $boxL): self
    {
        $this->boxL = $boxL;

        return $this;
    }

    public function getBoxM(): ?float
    {
        return $this->boxM;
    }

    public function setBoxM(?float $boxM): self
    {
        $this->boxM = $boxM;

        return $this;
    }

    public function getFinancialExpensesTotal(): ?float
    {
        return $this->financialExpensesTotal;
    }

    public function setFinancialExpensesTotal(?float $financialExpensesTotal): self
    {
        $this->financialExpensesTotal = $financialExpensesTotal;

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

    public function getNegativeStatement(): ?bool
    {
        return $this->negativeStatement;
    }

    public function setNegativeStatement(?bool $negativeStatement): self
    {
        $this->negativeStatement = $negativeStatement;

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
