<?php

namespace App\Entity;

use App\Repository\Model390Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model390Repository::class)
 */
class Model390 extends AbstractTimetrackeableEntity
{
    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $substituteStatement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bankruptcySubstituteStatement;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $monthlyReturnRecord;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $entitiesGroupSpecialRegime;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $groupNumber;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dominant;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dependent;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $specialRegimeApplicableType;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dominantEntityNifNumber;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $bankruptcy;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $cashCriteriaSpecialRegime;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $cashCriteriaSpecialRegimeReceiver;

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
    private $box84;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box85;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box86;

    /**
     * @ORM\Column(type="float")
     */
    private $box092;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box093;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box094;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box095;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box096;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box097;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box098;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box099;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box100;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box101;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box102;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box103;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box104;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box105;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box106;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box107;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box108;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box109;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box110;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box111;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box112;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box113;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box190;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box191;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box196;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box197;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box202;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box203;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box208;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box209;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box214;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box215;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box220;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box221;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box227;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box228;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box230;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box231;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box232;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box500;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box501;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box502;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box503;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box504;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box505;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box506;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box507;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box512;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box513;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box514;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box515;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box520;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box521;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box522;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box523;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box524;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box525;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box526;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box545;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box546;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box547;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box548;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box551;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box552;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box587;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box588;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box597;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box598;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box599;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box600;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box601;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box602;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box603;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box604;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box605;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box606;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box607;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box608;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box609;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box610;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box611;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box612;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box613;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box614;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box615;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box616;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box617;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box618;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box619;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box620;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box621;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box622;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box623;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box624;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box625;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box626;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box627;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box628;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box629;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box630;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box631;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box632;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box633;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box634;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box635;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box636;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box637;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box638;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box639;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box643;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box644;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box645;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box646;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box647;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box648;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box649;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box650;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box651;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box652;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box653;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box654;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box655;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box656;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box657;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box658;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box659;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box660;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box661;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box662;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models390s")
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

    public function getSubstituteStatement(): ?bool
    {
        return $this->substituteStatement;
    }

    public function setSubstituteStatement(?bool $substituteStatement): self
    {
        $this->substituteStatement = $substituteStatement;

        return $this;
    }

    public function getBankruptcySubstituteStatement(): ?bool
    {
        return $this->bankruptcySubstituteStatement;
    }

    public function setBankruptcySubstituteStatement(?bool $bankruptcySubstituteStatement): self
    {
        $this->bankruptcySubstituteStatement = $bankruptcySubstituteStatement;

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

    public function getMonthlyReturnRecord(): ?bool
    {
        return $this->monthlyReturnRecord;
    }

    public function setMonthlyReturnRecord(?bool $monthlyReturnRecord): self
    {
        $this->monthlyReturnRecord = $monthlyReturnRecord;

        return $this;
    }

    public function getEntitiesGroupSpecialRegime(): ?bool
    {
        return $this->entitiesGroupSpecialRegime;
    }

    public function setEntitiesGroupSpecialRegime(?bool $entitiesGroupSpecialRegime): self
    {
        $this->entitiesGroupSpecialRegime = $entitiesGroupSpecialRegime;

        return $this;
    }

    public function getGroupNumber(): ?string
    {
        return $this->groupNumber;
    }

    public function setGroupNumber(?string $groupNumber): self
    {
        $this->groupNumber = $groupNumber;

        return $this;
    }

    public function getDominant(): ?bool
    {
        return $this->dominant;
    }

    public function setDominant(?bool $dominant): self
    {
        $this->dominant = $dominant;

        return $this;
    }

    public function getDependent(): ?bool
    {
        return $this->dependent;
    }

    public function setDependent(?bool $dependent): self
    {
        $this->dependent = $dependent;

        return $this;
    }

    public function getSpecialRegimeApplicableType(): ?string
    {
        return $this->specialRegimeApplicableType;
    }

    public function setSpecialRegimeApplicableType(?string $specialRegimeApplicableType): self
    {
        $this->specialRegimeApplicableType = $specialRegimeApplicableType;

        return $this;
    }

    public function getDominantEntityNifNumber(): ?string
    {
        return $this->dominantEntityNifNumber;
    }

    public function setDominantEntityNifNumber(?string $dominantEntityNifNumber): self
    {
        $this->dominantEntityNifNumber = $dominantEntityNifNumber;

        return $this;
    }

    public function getBankruptcy(): ?string
    {
        return $this->bankruptcy;
    }

    public function setBankruptcy(?string $bankruptcy): self
    {
        $this->bankruptcy = $bankruptcy;

        return $this;
    }

    public function getCashCriteriaSpecialRegime(): ?string
    {
        return $this->cashCriteriaSpecialRegime;
    }

    public function setCashCriteriaSpecialRegime(?string $cashCriteriaSpecialRegime): self
    {
        $this->cashCriteriaSpecialRegime = $cashCriteriaSpecialRegime;

        return $this;
    }

    public function getCashCriteriaSpecialRegimeReceiver(): ?string
    {
        return $this->cashCriteriaSpecialRegimeReceiver;
    }

    public function setCashCriteriaSpecialRegimeReceiver(?string $cashCriteriaSpecialRegimeReceiver): self
    {
        $this->cashCriteriaSpecialRegimeReceiver = $cashCriteriaSpecialRegimeReceiver;

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

    public function getBox84(): ?float
    {
        return $this->box84;
    }

    public function setBox84(?float $box84): self
    {
        $this->box84 = $box84;

        return $this;
    }

    public function getBox85(): ?float
    {
        return $this->box85;
    }

    public function setBox85(?float $box85): self
    {
        $this->box85 = $box85;

        return $this;
    }

    public function getBox86(): ?float
    {
        return $this->box86;
    }

    public function setBox86(?float $box86): self
    {
        $this->box86 = $box86;

        return $this;
    }

    public function getBox092(): ?float
    {
        return $this->box092;
    }

    public function setBox092(float $box092): self
    {
        $this->box092 = $box092;

        return $this;
    }

    public function getBox093(): ?float
    {
        return $this->box093;
    }

    public function setBox093(?float $box093): self
    {
        $this->box093 = $box093;

        return $this;
    }

    public function getBox094(): ?float
    {
        return $this->box094;
    }

    public function setBox094(?float $box094): self
    {
        $this->box094 = $box094;

        return $this;
    }

    public function getBox095(): ?float
    {
        return $this->box095;
    }

    public function setBox095(?float $box095): self
    {
        $this->box095 = $box095;

        return $this;
    }

    public function getBox096(): ?float
    {
        return $this->box096;
    }

    public function setBox096(?float $box096): self
    {
        $this->box096 = $box096;

        return $this;
    }

    public function getBox097(): ?float
    {
        return $this->box097;
    }

    public function setBox097(?float $box097): self
    {
        $this->box097 = $box097;

        return $this;
    }

    public function getBox098(): ?float
    {
        return $this->box098;
    }

    public function setBox098(?float $box098): self
    {
        $this->box098 = $box098;

        return $this;
    }

    public function getBox099(): ?float
    {
        return $this->box099;
    }

    public function setBox099(?float $box099): self
    {
        $this->box099 = $box099;

        return $this;
    }

    public function getBox100(): ?float
    {
        return $this->box100;
    }

    public function setBox100(?float $box100): self
    {
        $this->box100 = $box100;

        return $this;
    }

    public function getBox101(): ?float
    {
        return $this->box101;
    }

    public function setBox101(?float $box101): self
    {
        $this->box101 = $box101;

        return $this;
    }

    public function getBox102(): ?float
    {
        return $this->box102;
    }

    public function setBox102(?float $box102): self
    {
        $this->box102 = $box102;

        return $this;
    }

    public function getBox103(): ?float
    {
        return $this->box103;
    }

    public function setBox103(?float $box103): self
    {
        $this->box103 = $box103;

        return $this;
    }

    public function getBox104(): ?float
    {
        return $this->box104;
    }

    public function setBox104(?float $box104): self
    {
        $this->box104 = $box104;

        return $this;
    }

    public function getBox105(): ?float
    {
        return $this->box105;
    }

    public function setBox105(?float $box105): self
    {
        $this->box105 = $box105;

        return $this;
    }

    public function getBox106(): ?float
    {
        return $this->box106;
    }

    public function setBox106(?float $box106): self
    {
        $this->box106 = $box106;

        return $this;
    }

    public function getBox107(): ?float
    {
        return $this->box107;
    }

    public function setBox107(?float $box107): self
    {
        $this->box107 = $box107;

        return $this;
    }

    public function getBox108(): ?float
    {
        return $this->box108;
    }

    public function setBox108(?float $box108): self
    {
        $this->box108 = $box108;

        return $this;
    }

    public function getBox109(): ?float
    {
        return $this->box109;
    }

    public function setBox109(?float $box109): self
    {
        $this->box109 = $box109;

        return $this;
    }

    public function getBox110(): ?float
    {
        return $this->box110;
    }

    public function setBox110(?float $box110): self
    {
        $this->box110 = $box110;

        return $this;
    }

    public function getBox111(): ?float
    {
        return $this->box111;
    }

    public function setBox111(?float $box111): self
    {
        $this->box111 = $box111;

        return $this;
    }

    public function getBox112(): ?float
    {
        return $this->box112;
    }

    public function setBox112(?float $box112): self
    {
        $this->box112 = $box112;

        return $this;
    }

    public function getBox113(): ?float
    {
        return $this->box113;
    }

    public function setBox113(?float $box113): self
    {
        $this->box113 = $box113;

        return $this;
    }

    public function getBox190(): ?float
    {
        return $this->box190;
    }

    public function setBox190(?float $box190): self
    {
        $this->box190 = $box190;

        return $this;
    }

    public function getBox191(): ?float
    {
        return $this->box191;
    }

    public function setBox191(?float $box191): self
    {
        $this->box191 = $box191;

        return $this;
    }

    public function getBox196(): ?float
    {
        return $this->box196;
    }

    public function setBox196(?float $box196): self
    {
        $this->box196 = $box196;

        return $this;
    }

    public function getBox197(): ?float
    {
        return $this->box197;
    }

    public function setBox197(?float $box197): self
    {
        $this->box197 = $box197;

        return $this;
    }

    public function getBox202(): ?float
    {
        return $this->box202;
    }

    public function setBox202(?float $box202): self
    {
        $this->box202 = $box202;

        return $this;
    }

    public function getBox203(): ?float
    {
        return $this->box203;
    }

    public function setBox203(?float $box203): self
    {
        $this->box203 = $box203;

        return $this;
    }

    public function getBox208(): ?float
    {
        return $this->box208;
    }

    public function setBox208(?float $box208): self
    {
        $this->box208 = $box208;

        return $this;
    }

    public function getBox209(): ?float
    {
        return $this->box209;
    }

    public function setBox209(?float $box209): self
    {
        $this->box209 = $box209;

        return $this;
    }

    public function getBox214(): ?float
    {
        return $this->box214;
    }

    public function setBox214(?float $box214): self
    {
        $this->box214 = $box214;

        return $this;
    }

    public function getBox215(): ?float
    {
        return $this->box215;
    }

    public function setBox215(?float $box215): self
    {
        $this->box215 = $box215;

        return $this;
    }

    public function getBox220(): ?float
    {
        return $this->box220;
    }

    public function setBox220(?float $box220): self
    {
        $this->box220 = $box220;

        return $this;
    }

    public function getBox221(): ?float
    {
        return $this->box221;
    }

    public function setBox221(?float $box221): self
    {
        $this->box221 = $box221;

        return $this;
    }

    public function getBox227(): ?float
    {
        return $this->box227;
    }

    public function setBox227(?float $box227): self
    {
        $this->box227 = $box227;

        return $this;
    }

    public function getBox228(): ?float
    {
        return $this->box228;
    }

    public function setBox228(?float $box228): self
    {
        $this->box228 = $box228;

        return $this;
    }

    public function getBox230(): ?float
    {
        return $this->box230;
    }

    public function setBox230(?float $box230): self
    {
        $this->box230 = $box230;

        return $this;
    }

    public function getBox231(): ?float
    {
        return $this->box231;
    }

    public function setBox231(?float $box231): self
    {
        $this->box231 = $box231;

        return $this;
    }

    public function getBox232(): ?float
    {
        return $this->box232;
    }

    public function setBox232(?float $box232): self
    {
        $this->box232 = $box232;

        return $this;
    }

    public function getBox500(): ?float
    {
        return $this->box500;
    }

    public function setBox500(?float $box500): self
    {
        $this->box500 = $box500;

        return $this;
    }

    public function getBox501(): ?float
    {
        return $this->box501;
    }

    public function setBox501(?float $box501): self
    {
        $this->box501 = $box501;

        return $this;
    }

    public function getBox502(): ?float
    {
        return $this->box502;
    }

    public function setBox502(?float $box502): self
    {
        $this->box502 = $box502;

        return $this;
    }

    public function getBox503(): ?float
    {
        return $this->box503;
    }

    public function setBox503(?float $box503): self
    {
        $this->box503 = $box503;

        return $this;
    }

    public function getBox504(): ?float
    {
        return $this->box504;
    }

    public function setBox504(?float $box504): self
    {
        $this->box504 = $box504;

        return $this;
    }

    public function getBox505(): ?float
    {
        return $this->box505;
    }

    public function setBox505(?float $box505): self
    {
        $this->box505 = $box505;

        return $this;
    }

    public function getBox506(): ?float
    {
        return $this->box506;
    }

    public function setBox506(?float $box506): self
    {
        $this->box506 = $box506;

        return $this;
    }

    public function getBox507(): ?float
    {
        return $this->box507;
    }

    public function setBox507(?float $box507): self
    {
        $this->box507 = $box507;

        return $this;
    }

    public function getBox512(): ?float
    {
        return $this->box512;
    }

    public function setBox512(?float $box512): self
    {
        $this->box512 = $box512;

        return $this;
    }

    public function getBox513(): ?float
    {
        return $this->box513;
    }

    public function setBox513(?float $box513): self
    {
        $this->box513 = $box513;

        return $this;
    }

    public function getBox514(): ?float
    {
        return $this->box514;
    }

    public function setBox514(?float $box514): self
    {
        $this->box514 = $box514;

        return $this;
    }

    public function getBox515(): ?float
    {
        return $this->box515;
    }

    public function setBox515(?float $box515): self
    {
        $this->box515 = $box515;

        return $this;
    }

    public function getBox520(): ?float
    {
        return $this->box520;
    }

    public function setBox520(?float $box520): self
    {
        $this->box520 = $box520;

        return $this;
    }

    public function getBox521(): ?float
    {
        return $this->box521;
    }

    public function setBox521(?float $box521): self
    {
        $this->box521 = $box521;

        return $this;
    }

    public function getBox522(): ?float
    {
        return $this->box522;
    }

    public function setBox522(?float $box522): self
    {
        $this->box522 = $box522;

        return $this;
    }

    public function getBox523(): ?float
    {
        return $this->box523;
    }

    public function setBox523(?float $box523): self
    {
        $this->box523 = $box523;

        return $this;
    }

    public function getBox524(): ?float
    {
        return $this->box524;
    }

    public function setBox524(?float $box524): self
    {
        $this->box524 = $box524;

        return $this;
    }

    public function getBox525(): ?float
    {
        return $this->box525;
    }

    public function setBox525(?float $box525): self
    {
        $this->box525 = $box525;

        return $this;
    }

    public function getBox526(): ?float
    {
        return $this->box526;
    }

    public function setBox526(?float $box526): self
    {
        $this->box526 = $box526;

        return $this;
    }

    public function getBox545(): ?float
    {
        return $this->box545;
    }

    public function setBox545(?float $box545): self
    {
        $this->box545 = $box545;

        return $this;
    }

    public function getBox546(): ?float
    {
        return $this->box546;
    }

    public function setBox546(?float $box546): self
    {
        $this->box546 = $box546;

        return $this;
    }

    public function getBox547(): ?float
    {
        return $this->box547;
    }

    public function setBox547(?float $box547): self
    {
        $this->box547 = $box547;

        return $this;
    }

    public function getBox548(): ?float
    {
        return $this->box548;
    }

    public function setBox548(?float $box548): self
    {
        $this->box548 = $box548;

        return $this;
    }

    public function getBox551(): ?float
    {
        return $this->box551;
    }

    public function setBox551(?float $box551): self
    {
        $this->box551 = $box551;

        return $this;
    }

    public function getBox552(): ?float
    {
        return $this->box552;
    }

    public function setBox552(?float $box552): self
    {
        $this->box552 = $box552;

        return $this;
    }

    public function getBox587(): ?float
    {
        return $this->box587;
    }

    public function setBox587(?float $box587): self
    {
        $this->box587 = $box587;

        return $this;
    }

    public function getBox588(): ?float
    {
        return $this->box588;
    }

    public function setBox588(?float $box588): self
    {
        $this->box588 = $box588;

        return $this;
    }

    public function getBox597(): ?float
    {
        return $this->box597;
    }

    public function setBox597(?float $box597): self
    {
        $this->box597 = $box597;

        return $this;
    }

    public function getBox598(): ?float
    {
        return $this->box598;
    }

    public function setBox598(?float $box598): self
    {
        $this->box598 = $box598;

        return $this;
    }

    public function getBox599(): ?float
    {
        return $this->box599;
    }

    public function setBox599(?float $box599): self
    {
        $this->box599 = $box599;

        return $this;
    }

    public function getBox600(): ?float
    {
        return $this->box600;
    }

    public function setBox600(?float $box600): self
    {
        $this->box600 = $box600;

        return $this;
    }

    public function getBox601(): ?float
    {
        return $this->box601;
    }

    public function setBox601(?float $box601): self
    {
        $this->box601 = $box601;

        return $this;
    }

    public function getBox602(): ?float
    {
        return $this->box602;
    }

    public function setBox602(?float $box602): self
    {
        $this->box602 = $box602;

        return $this;
    }

    public function getBox603(): ?float
    {
        return $this->box603;
    }

    public function setBox603(?float $box603): self
    {
        $this->box603 = $box603;

        return $this;
    }

    public function getBox604(): ?float
    {
        return $this->box604;
    }

    public function setBox604(?float $box604): self
    {
        $this->box604 = $box604;

        return $this;
    }

    public function getBox605(): ?float
    {
        return $this->box605;
    }

    public function setBox605(?float $box605): self
    {
        $this->box605 = $box605;

        return $this;
    }

    public function getBox606(): ?float
    {
        return $this->box606;
    }

    public function setBox606(?float $box606): self
    {
        $this->box606 = $box606;

        return $this;
    }

    public function getBox607(): ?float
    {
        return $this->box607;
    }

    public function setBox607(?float $box607): self
    {
        $this->box607 = $box607;

        return $this;
    }

    public function getBox608(): ?float
    {
        return $this->box608;
    }

    public function setBox608(?float $box608): self
    {
        $this->box608 = $box608;

        return $this;
    }

    public function getBox609(): ?float
    {
        return $this->box609;
    }

    public function setBox609(?float $box609): self
    {
        $this->box609 = $box609;

        return $this;
    }

    public function getBox610(): ?float
    {
        return $this->box610;
    }

    public function setBox610(?float $box610): self
    {
        $this->box610 = $box610;

        return $this;
    }

    public function getBox611(): ?float
    {
        return $this->box611;
    }

    public function setBox611(?float $box611): self
    {
        $this->box611 = $box611;

        return $this;
    }

    public function getBox612(): ?float
    {
        return $this->box612;
    }

    public function setBox612(?float $box612): self
    {
        $this->box612 = $box612;

        return $this;
    }

    public function getBox613(): ?float
    {
        return $this->box613;
    }

    public function setBox613(?float $box613): self
    {
        $this->box613 = $box613;

        return $this;
    }

    public function getBox614(): ?float
    {
        return $this->box614;
    }

    public function setBox614(?float $box614): self
    {
        $this->box614 = $box614;

        return $this;
    }

    public function getBox615(): ?float
    {
        return $this->box615;
    }

    public function setBox615(?float $box615): self
    {
        $this->box615 = $box615;

        return $this;
    }

    public function getBox616(): ?float
    {
        return $this->box616;
    }

    public function setBox616(?float $box616): self
    {
        $this->box616 = $box616;

        return $this;
    }

    public function getBox617(): ?float
    {
        return $this->box617;
    }

    public function setBox617(?float $box617): self
    {
        $this->box617 = $box617;

        return $this;
    }

    public function getBox618(): ?float
    {
        return $this->box618;
    }

    public function setBox618(?float $box618): self
    {
        $this->box618 = $box618;

        return $this;
    }

    public function getBox619(): ?float
    {
        return $this->box619;
    }

    public function setBox619(?float $box619): self
    {
        $this->box619 = $box619;

        return $this;
    }

    public function getBox620(): ?float
    {
        return $this->box620;
    }

    public function setBox620(?float $box620): self
    {
        $this->box620 = $box620;

        return $this;
    }

    public function getBox621(): ?float
    {
        return $this->box621;
    }

    public function setBox621(?float $box621): self
    {
        $this->box621 = $box621;

        return $this;
    }

    public function getBox622(): ?float
    {
        return $this->box622;
    }

    public function setBox622(?float $box622): self
    {
        $this->box622 = $box622;

        return $this;
    }

    public function getBox623(): ?float
    {
        return $this->box623;
    }

    public function setBox623(?float $box623): self
    {
        $this->box623 = $box623;

        return $this;
    }

    public function getBox624(): ?float
    {
        return $this->box624;
    }

    public function setBox624(?float $box624): self
    {
        $this->box624 = $box624;

        return $this;
    }

    public function getBox625(): ?float
    {
        return $this->box625;
    }

    public function setBox625(?float $box625): self
    {
        $this->box625 = $box625;

        return $this;
    }

    public function getBox626(): ?float
    {
        return $this->box626;
    }

    public function setBox626(?float $box626): self
    {
        $this->box626 = $box626;

        return $this;
    }

    public function getBox627(): ?float
    {
        return $this->box627;
    }

    public function setBox627(?float $box627): self
    {
        $this->box627 = $box627;

        return $this;
    }

    public function getBox628(): ?float
    {
        return $this->box628;
    }

    public function setBox628(?float $box628): self
    {
        $this->box628 = $box628;

        return $this;
    }

    public function getBox629(): ?float
    {
        return $this->box629;
    }

    public function setBox629(?float $box629): self
    {
        $this->box629 = $box629;

        return $this;
    }

    public function getBox630(): ?float
    {
        return $this->box630;
    }

    public function setBox630(?float $box630): self
    {
        $this->box630 = $box630;

        return $this;
    }

    public function getBox631(): ?float
    {
        return $this->box631;
    }

    public function setBox631(?float $box631): self
    {
        $this->box631 = $box631;

        return $this;
    }

    public function getBox632(): ?float
    {
        return $this->box632;
    }

    public function setBox632(?float $box632): self
    {
        $this->box632 = $box632;

        return $this;
    }

    public function getBox633(): ?float
    {
        return $this->box633;
    }

    public function setBox633(?float $box633): self
    {
        $this->box633 = $box633;

        return $this;
    }

    public function getBox634(): ?float
    {
        return $this->box634;
    }

    public function setBox634(?float $box634): self
    {
        $this->box634 = $box634;

        return $this;
    }

    public function getBox635(): ?float
    {
        return $this->box635;
    }

    public function setBox635(?float $box635): self
    {
        $this->box635 = $box635;

        return $this;
    }

    public function getBox636(): ?float
    {
        return $this->box636;
    }

    public function setBox636(?float $box636): self
    {
        $this->box636 = $box636;

        return $this;
    }

    public function getBox637(): ?float
    {
        return $this->box637;
    }

    public function setBox637(?float $box637): self
    {
        $this->box637 = $box637;

        return $this;
    }

    public function getBox638(): ?float
    {
        return $this->box638;
    }

    public function setBox638(?float $box638): self
    {
        $this->box638 = $box638;

        return $this;
    }

    public function getBox639(): ?float
    {
        return $this->box639;
    }

    public function setBox639(?float $box639): self
    {
        $this->box639 = $box639;

        return $this;
    }

    public function getBox643(): ?float
    {
        return $this->box643;
    }

    public function setBox643(?float $box643): self
    {
        $this->box643 = $box643;

        return $this;
    }

    public function getBox644(): ?float
    {
        return $this->box644;
    }

    public function setBox644(?float $box644): self
    {
        $this->box644 = $box644;

        return $this;
    }

    public function getBox645(): ?float
    {
        return $this->box645;
    }

    public function setBox645(?float $box645): self
    {
        $this->box645 = $box645;

        return $this;
    }

    public function getBox646(): ?float
    {
        return $this->box646;
    }

    public function setBox646(?float $box646): self
    {
        $this->box646 = $box646;

        return $this;
    }

    public function getBox647(): ?float
    {
        return $this->box647;
    }

    public function setBox647(?float $box647): self
    {
        $this->box647 = $box647;

        return $this;
    }

    public function getBox648(): ?float
    {
        return $this->box648;
    }

    public function setBox648(?float $box648): self
    {
        $this->box648 = $box648;

        return $this;
    }

    public function getBox649(): ?float
    {
        return $this->box649;
    }

    public function setBox649(?float $box649): self
    {
        $this->box649 = $box649;

        return $this;
    }

    public function getBox650(): ?float
    {
        return $this->box650;
    }

    public function setBox650(?float $box650): self
    {
        $this->box650 = $box650;

        return $this;
    }

    public function getBox651(): ?float
    {
        return $this->box651;
    }

    public function setBox651(?float $box651): self
    {
        $this->box651 = $box651;

        return $this;
    }

    public function getBox652(): ?float
    {
        return $this->box652;
    }

    public function setBox652(?float $box652): self
    {
        $this->box652 = $box652;

        return $this;
    }

    public function getBox653(): ?float
    {
        return $this->box653;
    }

    public function setBox653(?float $box653): self
    {
        $this->box653 = $box653;

        return $this;
    }

    public function getBox654(): ?float
    {
        return $this->box654;
    }

    public function setBox654(?float $box654): self
    {
        $this->box654 = $box654;

        return $this;
    }

    public function getBox655(): ?float
    {
        return $this->box655;
    }

    public function setBox655(?float $box655): self
    {
        $this->box655 = $box655;

        return $this;
    }

    public function getBox656(): ?float
    {
        return $this->box656;
    }

    public function setBox656(?float $box656): self
    {
        $this->box656 = $box656;

        return $this;
    }

    public function getBox657(): ?float
    {
        return $this->box657;
    }

    public function setBox657(?float $box657): self
    {
        $this->box657 = $box657;

        return $this;
    }

    public function getBox658(): ?float
    {
        return $this->box658;
    }

    public function setBox658(?float $box658): self
    {
        $this->box658 = $box658;

        return $this;
    }

    public function getBox659(): ?float
    {
        return $this->box659;
    }

    public function setBox659(?float $box659): self
    {
        $this->box659 = $box659;

        return $this;
    }

    public function getBox660(): ?float
    {
        return $this->box660;
    }

    public function setBox660(?float $box660): self
    {
        $this->box660 = $box660;

        return $this;
    }

    public function getBox661(): ?float
    {
        return $this->box661;
    }

    public function setBox661(?float $box661): self
    {
        $this->box661 = $box661;

        return $this;
    }

    public function getBox662(): ?float
    {
        return $this->box662;
    }

    public function setBox662(?float $box662): self
    {
        $this->box662 = $box662;

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
