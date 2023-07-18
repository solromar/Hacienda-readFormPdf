<?php

namespace App\Entity;

use App\Repository\Model303Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model303Repository::class)
 */
class Model303 extends AbstractTimetrackeableEntity
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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $exclusivelyStatutory;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $monthlyReturnRecord;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $simplifiedRegime;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $jointSelfAssessment;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cashCriteriaSpecialRegimeWelcomed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cashCriteriaSpecialRegimeReceiver;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $specialProrate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $operationRevocated;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bankruptcyDeclared;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $siiVoluntarilyWelcomed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $model390Exonerated;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $nonZeroTradingVolume;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $bankruptcyStatementDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $preBankruptcy;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $postBankruptcy;

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
    private $box09;

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
     * @ORM\Column(type="float", nullable=true)
     */
    private $box28;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box29;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box30;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box31;

    /**
     * @ORM\Column(type="float", nullable=true)
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
    private $box35;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box36;

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
    private $box41;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box42;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box43;

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
    private $box47;

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
    private $box50;

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
    private $box53;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box54;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box55;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box56;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box57;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box58;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box59;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box60;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box61;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box62;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box63;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box64;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box65;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box66;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box67;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box68;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box69;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box70;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box71;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box72;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $withoutActivity;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box73;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $complementarySelfAssessment;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box74;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box75;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box76;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box77;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models303s")
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

    public function getExclusivelyStatutory(): ?bool
    {
        return $this->exclusivelyStatutory;
    }

    public function setExclusivelyStatutory(?bool $exclusivelyStatutory): self
    {
        $this->exclusivelyStatutory = $exclusivelyStatutory;

        return $this;
    }

    public function getMonthlyReturnRecord(): ?bool
    {
        return $this->monthlyReturnRecord;
    }

    public function setMonthlyReturnRecord(?bool $monthlyReturnRecord): self
    {
        $this->monthlyReturnRecord = $monthlyReturnRecord;

        return $this;
    }

    public function getSimplifiedRegime(): ?bool
    {
        return $this->simplifiedRegime;
    }

    public function setSimplifiedRegime(?bool $simplifiedRegime): self
    {
        $this->simplifiedRegime = $simplifiedRegime;

        return $this;
    }

    public function getJointSelfAssessment(): ?bool
    {
        return $this->jointSelfAssessment;
    }

    public function setJointSelfAssessment(?bool $jointSelfAssessment): self
    {
        $this->jointSelfAssessment = $jointSelfAssessment;

        return $this;
    }

    public function getCashCriteriaSpecialRegimeWelcomed(): ?bool
    {
        return $this->cashCriteriaSpecialRegimeWelcomed;
    }

    public function setCashCriteriaSpecialRegimeWelcomed(?bool $cashCriteriaSpecialRegimeWelcomed): self
    {
        $this->cashCriteriaSpecialRegimeWelcomed = $cashCriteriaSpecialRegimeWelcomed;

        return $this;
    }

    public function getCashCriteriaSpecialRegimeReceiver(): ?bool
    {
        return $this->cashCriteriaSpecialRegimeReceiver;
    }

    public function setCashCriteriaSpecialRegimeReceiver(?bool $cashCriteriaSpecialRegimeReceiver): self
    {
        $this->cashCriteriaSpecialRegimeReceiver = $cashCriteriaSpecialRegimeReceiver;

        return $this;
    }

    public function getSpecialProrate(): ?bool
    {
        return $this->specialProrate;
    }

    public function setSpecialProrate(?bool $specialProrate): self
    {
        $this->specialProrate = $specialProrate;

        return $this;
    }

    public function getOperationRevocated(): ?bool
    {
        return $this->operationRevocated;
    }

    public function setOperationRevocated(?bool $operationRevocated): self
    {
        $this->operationRevocated = $operationRevocated;

        return $this;
    }

    public function getBankruptcyDeclared(): ?bool
    {
        return $this->bankruptcyDeclared;
    }

    public function setBankruptcyDeclared(?bool $bankruptcyDeclared): self
    {
        $this->bankruptcyDeclared = $bankruptcyDeclared;

        return $this;
    }

    public function getSiiVoluntarilyWelcomed(): ?bool
    {
        return $this->siiVoluntarilyWelcomed;
    }

    public function setSiiVoluntarilyWelcomed(?bool $siiVoluntarilyWelcomed): self
    {
        $this->siiVoluntarilyWelcomed = $siiVoluntarilyWelcomed;

        return $this;
    }

    public function getModel390Exonerated(): ?bool
    {
        return $this->model390Exonerated;
    }

    public function setModel390Exonerated(?bool $model390Exonerated): self
    {
        $this->model390Exonerated = $model390Exonerated;

        return $this;
    }

    public function getNonZeroTradingVolume(): ?bool
    {
        return $this->nonZeroTradingVolume;
    }

    public function setNonZeroTradingVolume(?bool $nonZeroTradingVolume): self
    {
        $this->nonZeroTradingVolume = $nonZeroTradingVolume;

        return $this;
    }

    public function getBankruptcyStatementDate(): ?\DateTimeInterface
    {
        return $this->bankruptcyStatementDate;
    }

    public function setBankruptcyStatementDate(?\DateTimeInterface $bankruptcyStatementDate): self
    {
        $this->bankruptcyStatementDate = $bankruptcyStatementDate;

        return $this;
    }

    public function getPreBankruptcy(): ?bool
    {
        return $this->preBankruptcy;
    }

    public function setPreBankruptcy(?bool $preBankruptcy): self
    {
        $this->preBankruptcy = $preBankruptcy;

        return $this;
    }

    public function getPostBankruptcy(): ?bool
    {
        return $this->postBankruptcy;
    }

    public function setPostBankruptcy(?bool $postBankruptcy): self
    {
        $this->postBankruptcy = $postBankruptcy;

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

    public function getBox09(): ?float
    {
        return $this->box09;
    }

    public function setBox09(?float $box09): self
    {
        $this->box09 = $box09;

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

    public function setBox28(?float $box28): self
    {
        $this->box28 = $box28;

        return $this;
    }

    public function getBox29(): ?float
    {
        return $this->box29;
    }

    public function setBox29(?float $box29): self
    {
        $this->box29 = $box29;

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

    public function getBox32(): ?float
    {
        return $this->box32;
    }

    public function setBox32(?float $box32): self
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

    public function getBox35(): ?float
    {
        return $this->box35;
    }

    public function setBox35(?float $box35): self
    {
        $this->box35 = $box35;

        return $this;
    }

    public function getBox36(): ?float
    {
        return $this->box36;
    }

    public function setBox36(?float $box36): self
    {
        $this->box36 = $box36;

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

    public function getBox41(): ?float
    {
        return $this->box41;
    }

    public function setBox41(?float $box41): self
    {
        $this->box41 = $box41;

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

    public function getBox43(): ?float
    {
        return $this->box43;
    }

    public function setBox43(?float $box43): self
    {
        $this->box43 = $box43;

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

    public function getBox47(): ?float
    {
        return $this->box47;
    }

    public function setBox47(?float $box47): self
    {
        $this->box47 = $box47;

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

    public function getBox50(): ?float
    {
        return $this->box50;
    }

    public function setBox50(?float $box50): self
    {
        $this->box50 = $box50;

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

    public function getBox53(): ?float
    {
        return $this->box53;
    }

    public function setBox53(?float $box53): self
    {
        $this->box53 = $box53;

        return $this;
    }

    public function getBox54(): ?float
    {
        return $this->box54;
    }

    public function setBox54(?float $box54): self
    {
        $this->box54 = $box54;

        return $this;
    }

    public function getBox55(): ?float
    {
        return $this->box55;
    }

    public function setBox55(?float $box55): self
    {
        $this->box55 = $box55;

        return $this;
    }

    public function getBox56(): ?float
    {
        return $this->box56;
    }

    public function setBox56(?float $box56): self
    {
        $this->box56 = $box56;

        return $this;
    }

    public function getBox57(): ?float
    {
        return $this->box57;
    }

    public function setBox57(?float $box57): self
    {
        $this->box57 = $box57;

        return $this;
    }

    public function getBox58(): ?float
    {
        return $this->box58;
    }

    public function setBox58(?float $box58): self
    {
        $this->box58 = $box58;

        return $this;
    }

    public function getBox59(): ?float
    {
        return $this->box59;
    }

    public function setBox59(?float $box59): self
    {
        $this->box59 = $box59;

        return $this;
    }

    public function getBox60(): ?float
    {
        return $this->box60;
    }

    public function setBox60(?float $box60): self
    {
        $this->box60 = $box60;

        return $this;
    }

    public function getBox61(): ?float
    {
        return $this->box61;
    }

    public function setBox61(?float $box61): self
    {
        $this->box61 = $box61;

        return $this;
    }

    public function getBox62(): ?float
    {
        return $this->box62;
    }

    public function setBox62(?float $box62): self
    {
        $this->box62 = $box62;

        return $this;
    }

    public function getBox63(): ?float
    {
        return $this->box63;
    }

    public function setBox63(?float $box63): self
    {
        $this->box63 = $box63;

        return $this;
    }

    public function getBox64(): ?float
    {
        return $this->box64;
    }

    public function setBox64(?float $box64): self
    {
        $this->box64 = $box64;

        return $this;
    }

    public function getBox65(): ?float
    {
        return $this->box65;
    }

    public function setBox65(?float $box65): self
    {
        $this->box65 = $box65;

        return $this;
    }

    public function getBox66(): ?float
    {
        return $this->box66;
    }

    public function setBox66(?float $box66): self
    {
        $this->box66 = $box66;

        return $this;
    }

    public function getBox67(): ?float
    {
        return $this->box67;
    }

    public function setBox67(?float $box67): self
    {
        $this->box67 = $box67;

        return $this;
    }

    public function getBox68(): ?float
    {
        return $this->box68;
    }

    public function setBox68(?float $box68): self
    {
        $this->box68 = $box68;

        return $this;
    }

    public function getBox69(): ?float
    {
        return $this->box69;
    }

    public function setBox69(?float $box69): self
    {
        $this->box69 = $box69;

        return $this;
    }

    public function getBox70(): ?float
    {
        return $this->box70;
    }

    public function setBox70(?float $box70): self
    {
        $this->box70 = $box70;

        return $this;
    }

    public function getBox71(): ?float
    {
        return $this->box71;
    }

    public function setBox71(?float $box71): self
    {
        $this->box71 = $box71;

        return $this;
    }

    public function getBox72(): ?float
    {
        return $this->box72;
    }

    public function setBox72(?float $box72): self
    {
        $this->box72 = $box72;

        return $this;
    }

    public function getWithoutActivity(): ?bool
    {
        return $this->withoutActivity;
    }

    public function setWithoutActivity(?bool $withoutActivity): self
    {
        $this->withoutActivity = $withoutActivity;

        return $this;
    }

    public function getBox73(): ?float
    {
        return $this->box73;
    }

    public function setBox73(?float $box73): self
    {
        $this->box73 = $box73;

        return $this;
    }

    public function getComplementarySelfAssessment(): ?bool
    {
        return $this->complementarySelfAssessment;
    }

    public function setComplementarySelfAssessment(?bool $complementarySelfAssessment): self
    {
        $this->complementarySelfAssessment = $complementarySelfAssessment;

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

    public function getBox74(): ?float
    {
        return $this->box74;
    }

    public function setBox74(?float $box74): self
    {
        $this->box74 = $box74;

        return $this;
    }

    public function getBox75(): ?float
    {
        return $this->box75;
    }

    public function setBox75(?float $box75): self
    {
        $this->box75 = $box75;

        return $this;
    }

    public function getBox76(): ?float
    {
        return $this->box76;
    }

    public function setBox76(?float $box76): self
    {
        $this->box76 = $box76;

        return $this;
    }

    public function getBox77(): ?float
    {
        return $this->box77;
    }

    public function setBox77(?float $box77): self
    {
        $this->box77 = $box77;

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
