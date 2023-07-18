<?php

namespace App\Entity;

use App\Repository\Model100Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model100Repository::class)
 */
class Model100 extends AbstractTimetrackeableEntity
{
    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box001;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0003;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0004;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0005;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0006;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0007;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0008;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0012;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0013;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0017;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0018;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0019;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0022;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0025;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box0026;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0027;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0029;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0036;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0038;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0040;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0041;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box0062;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0063;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $box0065;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box0066;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box0067;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $box0069;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box0073;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box0075;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0083;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box0084;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box0085;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0089;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box0091;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box0093;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box0101;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box0100;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0102;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0105;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0106;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0107;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0109;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0114;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0115;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box0118;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box0120;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box0122;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0123;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0124;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0125;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0126;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0127;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0130;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0131;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0149;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0150;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0154;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0155;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0156;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0429;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0432;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0435;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0460;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0461;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box0462;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0465;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0467;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0468;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0491;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0492;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box500;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box505;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box510;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box051;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0512;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0513;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0514;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0519;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0520;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0521;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0522;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0523;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0524;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0528;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0529;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0530;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0531;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0532;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0533;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0534;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0535;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0536;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0537;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0538;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0539;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0540;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0541;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0542;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0543;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0545;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0546;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0552;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0553;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0564;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0570;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0571;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0585;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0586;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0587;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0595;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0596;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0597;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0609;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0610;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0670;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0671;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0675;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0695;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box0723;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box1392;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box1393;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box1394;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box1395;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box1396;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models100s")
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

    public function getBox001(): ?string
    {
        return $this->box001;
    }

    public function setBox001(?string $box001): self
    {
        $this->box001 = $box001;

        return $this;
    }

    public function getBox0003(): ?float
    {
        return $this->box0003;
    }

    public function setBox0003(?float $box0003): self
    {
        $this->box0003 = $box0003;

        return $this;
    }

    public function getBox0004(): ?float
    {
        return $this->box0004;
    }

    public function setBox0004(?float $box0004): self
    {
        $this->box0004 = $box0004;

        return $this;
    }

    public function getBox0005(): ?float
    {
        return $this->box0005;
    }

    public function setBox0005(?float $box0005): self
    {
        $this->box0005 = $box0005;

        return $this;
    }

    public function getBox0006(): ?float
    {
        return $this->box0006;
    }

    public function setBox0006(?float $box0006): self
    {
        $this->box0006 = $box0006;

        return $this;
    }

    public function getBox0007(): ?float
    {
        return $this->box0007;
    }

    public function setBox0007(?float $box0007): self
    {
        $this->box0007 = $box0007;

        return $this;
    }

    public function getBox0008(): ?float
    {
        return $this->box0008;
    }

    public function setBox0008(?float $box0008): self
    {
        $this->box0008 = $box0008;

        return $this;
    }

    public function getBox0012(): ?float
    {
        return $this->box0012;
    }

    public function setBox0012(?float $box0012): self
    {
        $this->box0012 = $box0012;

        return $this;
    }

    public function getBox0013(): ?float
    {
        return $this->box0013;
    }

    public function setBox0013(?float $box0013): self
    {
        $this->box0013 = $box0013;

        return $this;
    }

    public function getBox0017(): ?float
    {
        return $this->box0017;
    }

    public function setBox0017(?float $box0017): self
    {
        $this->box0017 = $box0017;

        return $this;
    }

    public function getBox0018(): ?float
    {
        return $this->box0018;
    }

    public function setBox0018(?float $box0018): self
    {
        $this->box0018 = $box0018;

        return $this;
    }

    public function getBox0019(): ?float
    {
        return $this->box0019;
    }

    public function setBox0019(?float $box0019): self
    {
        $this->box0019 = $box0019;

        return $this;
    }

    public function getBox0022(): ?float
    {
        return $this->box0022;
    }

    public function setBox0022(?float $box0022): self
    {
        $this->box0022 = $box0022;

        return $this;
    }

    public function getBox0025(): ?float
    {
        return $this->box0025;
    }

    public function setBox0025(?float $box0025): self
    {
        $this->box0025 = $box0025;

        return $this;
    }

    public function getBox0026(): ?string
    {
        return $this->box0026;
    }

    public function setBox0026(?string $box0026): self
    {
        $this->box0026 = $box0026;

        return $this;
    }

    public function getBox0027(): ?float
    {
        return $this->box0027;
    }

    public function setBox0027(?float $box0027): self
    {
        $this->box0027 = $box0027;

        return $this;
    }

    public function getBox0029(): ?float
    {
        return $this->box0029;
    }

    public function setBox0029(?float $box0029): self
    {
        $this->box0029 = $box0029;

        return $this;
    }

    public function getBox0036(): ?float
    {
        return $this->box0036;
    }

    public function setBox0036(?float $box0036): self
    {
        $this->box0036 = $box0036;

        return $this;
    }

    public function getBox0038(): ?float
    {
        return $this->box0038;
    }

    public function setBox0038(?float $box0038): self
    {
        $this->box0038 = $box0038;

        return $this;
    }

    public function getBox0040(): ?float
    {
        return $this->box0040;
    }

    public function setBox0040(?float $box0040): self
    {
        $this->box0040 = $box0040;

        return $this;
    }

    public function getBox0041(): ?float
    {
        return $this->box0041;
    }

    public function setBox0041(?float $box0041): self
    {
        $this->box0041 = $box0041;

        return $this;
    }

    public function getBox0062(): ?string
    {
        return $this->box0062;
    }

    public function setBox0062(?string $box0062): self
    {
        $this->box0062 = $box0062;

        return $this;
    }

    public function getBox0063(): ?float
    {
        return $this->box0063;
    }

    public function setBox0063(?float $box0063): self
    {
        $this->box0063 = $box0063;

        return $this;
    }

    public function getBox0065(): ?string
    {
        return $this->box0065;
    }

    public function setBox0065(?string $box0065): self
    {
        $this->box0065 = $box0065;

        return $this;
    }

    public function getBox0066(): ?string
    {
        return $this->box0066;
    }

    public function setBox0066(?string $box0066): self
    {
        $this->box0066 = $box0066;

        return $this;
    }

    public function getBox0067(): ?bool
    {
        return $this->box0067;
    }

    public function setBox0067(?bool $box0067): self
    {
        $this->box0067 = $box0067;

        return $this;
    }

    public function getBox0069(): ?string
    {
        return $this->box0069;
    }

    public function setBox0069(?string $box0069): self
    {
        $this->box0069 = $box0069;

        return $this;
    }

    public function getBox0073(): ?bool
    {
        return $this->box0073;
    }

    public function setBox0073(?bool $box0073): self
    {
        $this->box0073 = $box0073;

        return $this;
    }

    public function getBox0075(): ?bool
    {
        return $this->box0075;
    }

    public function setBox0075(?bool $box0075): self
    {
        $this->box0075 = $box0075;

        return $this;
    }

    public function getBox0083(): ?float
    {
        return $this->box0083;
    }

    public function setBox0083(?float $box0083): self
    {
        $this->box0083 = $box0083;

        return $this;
    }

    public function getBox0084(): ?string
    {
        return $this->box0084;
    }

    public function setBox0084(?string $box0084): self
    {
        $this->box0084 = $box0084;

        return $this;
    }

    public function getBox0085(): ?int
    {
        return $this->box0085;
    }

    public function setBox0085(?int $box0085): self
    {
        $this->box0085 = $box0085;

        return $this;
    }

    public function getBox0089(): ?float
    {
        return $this->box0089;
    }

    public function setBox0089(?float $box0089): self
    {
        $this->box0089 = $box0089;

        return $this;
    }

    public function getBox0091(): ?string
    {
        return $this->box0091;
    }

    public function setBox0091(?string $box0091): self
    {
        $this->box0091 = $box0091;

        return $this;
    }

    public function getBox0093(): ?\DateTimeInterface
    {
        return $this->box0093;
    }

    public function setBox0093(?\DateTimeInterface $box0093): self
    {
        $this->box0093 = $box0093;

        return $this;
    }

    public function getBox0101(): ?int
    {
        return $this->box0101;
    }

    public function setBox0101(?int $box0101): self
    {
        $this->box0101 = $box0101;

        return $this;
    }

    public function getBox0100(): ?bool
    {
        return $this->box0100;
    }

    public function setBox0100(?bool $box0100): self
    {
        $this->box0100 = $box0100;

        return $this;
    }

    public function getBox0102(): ?float
    {
        return $this->box0102;
    }

    public function setBox0102(?float $box0102): self
    {
        $this->box0102 = $box0102;

        return $this;
    }

    public function getBox0105(): ?float
    {
        return $this->box0105;
    }

    public function setBox0105(?float $box0105): self
    {
        $this->box0105 = $box0105;

        return $this;
    }

    public function getBox0106(): ?float
    {
        return $this->box0106;
    }

    public function setBox0106(?float $box0106): self
    {
        $this->box0106 = $box0106;

        return $this;
    }

    public function getBox0107(): ?float
    {
        return $this->box0107;
    }

    public function setBox0107(?float $box0107): self
    {
        $this->box0107 = $box0107;

        return $this;
    }

    public function getBox0109(): ?float
    {
        return $this->box0109;
    }

    public function setBox0109(?float $box0109): self
    {
        $this->box0109 = $box0109;

        return $this;
    }

    public function getBox0114(): ?float
    {
        return $this->box0114;
    }

    public function setBox0114(?float $box0114): self
    {
        $this->box0114 = $box0114;

        return $this;
    }

    public function getBox0115(): ?float
    {
        return $this->box0115;
    }

    public function setBox0115(?float $box0115): self
    {
        $this->box0115 = $box0115;

        return $this;
    }

    public function getBox0118(): ?bool
    {
        return $this->box0118;
    }

    public function setBox0118(?bool $box0118): self
    {
        $this->box0118 = $box0118;

        return $this;
    }

    public function getBox0120(): ?\DateTimeInterface
    {
        return $this->box0120;
    }

    public function setBox0120(?\DateTimeInterface $box0120): self
    {
        $this->box0120 = $box0120;

        return $this;
    }

    public function getBox0122(): ?int
    {
        return $this->box0122;
    }

    public function setBox0122(?int $box0122): self
    {
        $this->box0122 = $box0122;

        return $this;
    }

    public function getBox0123(): ?float
    {
        return $this->box0123;
    }

    public function setBox0123(?float $box0123): self
    {
        $this->box0123 = $box0123;

        return $this;
    }

    public function getBox0124(): ?float
    {
        return $this->box0124;
    }

    public function setBox0124(?float $box0124): self
    {
        $this->box0124 = $box0124;

        return $this;
    }

    public function getBox0125(): ?float
    {
        return $this->box0125;
    }

    public function setBox0125(?float $box0125): self
    {
        $this->box0125 = $box0125;

        return $this;
    }

    public function getBox0126(): ?float
    {
        return $this->box0126;
    }

    public function setBox0126(?float $box0126): self
    {
        $this->box0126 = $box0126;

        return $this;
    }

    public function getBox0127(): ?float
    {
        return $this->box0127;
    }

    public function setBox0127(?float $box0127): self
    {
        $this->box0127 = $box0127;

        return $this;
    }

    public function getBox0130(): ?float
    {
        return $this->box0130;
    }

    public function setBox0130(?float $box0130): self
    {
        $this->box0130 = $box0130;

        return $this;
    }

    public function getBox0131(): ?float
    {
        return $this->box0131;
    }

    public function setBox0131(?float $box0131): self
    {
        $this->box0131 = $box0131;

        return $this;
    }

    public function getBox0149(): ?float
    {
        return $this->box0149;
    }

    public function setBox0149(?float $box0149): self
    {
        $this->box0149 = $box0149;

        return $this;
    }

    public function getBox0150(): ?float
    {
        return $this->box0150;
    }

    public function setBox0150(?float $box0150): self
    {
        $this->box0150 = $box0150;

        return $this;
    }

    public function getBox0154(): ?float
    {
        return $this->box0154;
    }

    public function setBox0154(?float $box0154): self
    {
        $this->box0154 = $box0154;

        return $this;
    }

    public function getBox0155(): ?float
    {
        return $this->box0155;
    }

    public function setBox0155(?float $box0155): self
    {
        $this->box0155 = $box0155;

        return $this;
    }

    public function getBox0156(): ?float
    {
        return $this->box0156;
    }

    public function setBox0156(?float $box0156): self
    {
        $this->box0156 = $box0156;

        return $this;
    }

    public function getBox0429(): ?float
    {
        return $this->box0429;
    }

    public function setBox0429(?float $box0429): self
    {
        $this->box0429 = $box0429;

        return $this;
    }

    public function getBox0432(): ?float
    {
        return $this->box0432;
    }

    public function setBox0432(?float $box0432): self
    {
        $this->box0432 = $box0432;

        return $this;
    }

    public function getBox0435(): ?float
    {
        return $this->box0435;
    }

    public function setBox0435(?float $box0435): self
    {
        $this->box0435 = $box0435;

        return $this;
    }

    public function getBox0460(): ?float
    {
        return $this->box0460;
    }

    public function setBox0460(?float $box0460): self
    {
        $this->box0460 = $box0460;

        return $this;
    }

    public function getBox0461(): ?float
    {
        return $this->box0461;
    }

    public function setBox0461(?float $box0461): self
    {
        $this->box0461 = $box0461;

        return $this;
    }

    public function getBox0462(): ?string
    {
        return $this->box0462;
    }

    public function setBox0462(?string $box0462): self
    {
        $this->box0462 = $box0462;

        return $this;
    }

    public function getBox0465(): ?float
    {
        return $this->box0465;
    }

    public function setBox0465(?float $box0465): self
    {
        $this->box0465 = $box0465;

        return $this;
    }

    public function getBox0467(): ?float
    {
        return $this->box0467;
    }

    public function setBox0467(?float $box0467): self
    {
        $this->box0467 = $box0467;

        return $this;
    }

    public function getBox0468(): ?float
    {
        return $this->box0468;
    }

    public function setBox0468(?float $box0468): self
    {
        $this->box0468 = $box0468;

        return $this;
    }

    public function getBox0491(): ?float
    {
        return $this->box0491;
    }

    public function setBox0491(?float $box0491): self
    {
        $this->box0491 = $box0491;

        return $this;
    }

    public function getBox0492(): ?float
    {
        return $this->box0492;
    }

    public function setBox0492(?float $box0492): self
    {
        $this->box0492 = $box0492;

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

    public function getBox505(): ?float
    {
        return $this->box505;
    }

    public function setBox505(?float $box505): self
    {
        $this->box505 = $box505;

        return $this;
    }

    public function getBox510(): ?float
    {
        return $this->box510;
    }

    public function setBox510(?float $box510): self
    {
        $this->box510 = $box510;

        return $this;
    }

    public function getBox051(): ?float
    {
        return $this->box051;
    }

    public function setBox051(?float $box051): self
    {
        $this->box051 = $box051;

        return $this;
    }

    public function getBox0512(): ?float
    {
        return $this->box0512;
    }

    public function setBox0512(?float $box0512): self
    {
        $this->box0512 = $box0512;

        return $this;
    }

    public function getBox0513(): ?float
    {
        return $this->box0513;
    }

    public function setBox0513(?float $box0513): self
    {
        $this->box0513 = $box0513;

        return $this;
    }

    public function getBox0514(): ?float
    {
        return $this->box0514;
    }

    public function setBox0514(?float $box0514): self
    {
        $this->box0514 = $box0514;

        return $this;
    }

    public function getBox0519(): ?float
    {
        return $this->box0519;
    }

    public function setBox0519(?float $box0519): self
    {
        $this->box0519 = $box0519;

        return $this;
    }

    public function getBox0520(): ?float
    {
        return $this->box0520;
    }

    public function setBox0520(?float $box0520): self
    {
        $this->box0520 = $box0520;

        return $this;
    }

    public function getBox0521(): ?float
    {
        return $this->box0521;
    }

    public function setBox0521(?float $box0521): self
    {
        $this->box0521 = $box0521;

        return $this;
    }

    public function getBox0522(): ?float
    {
        return $this->box0522;
    }

    public function setBox0522(?float $box0522): self
    {
        $this->box0522 = $box0522;

        return $this;
    }

    public function getBox0523(): ?float
    {
        return $this->box0523;
    }

    public function setBox0523(?float $box0523): self
    {
        $this->box0523 = $box0523;

        return $this;
    }

    public function getBox0524(): ?float
    {
        return $this->box0524;
    }

    public function setBox0524(?float $box0524): self
    {
        $this->box0524 = $box0524;

        return $this;
    }

    public function getBox0528(): ?float
    {
        return $this->box0528;
    }

    public function setBox0528(?float $box0528): self
    {
        $this->box0528 = $box0528;

        return $this;
    }

    public function getBox0529(): ?float
    {
        return $this->box0529;
    }

    public function setBox0529(?float $box0529): self
    {
        $this->box0529 = $box0529;

        return $this;
    }

    public function getBox0530(): ?float
    {
        return $this->box0530;
    }

    public function setBox0530(?float $box0530): self
    {
        $this->box0530 = $box0530;

        return $this;
    }

    public function getBox0531(): ?float
    {
        return $this->box0531;
    }

    public function setBox0531(?float $box0531): self
    {
        $this->box0531 = $box0531;

        return $this;
    }

    public function getBox0532(): ?float
    {
        return $this->box0532;
    }

    public function setBox0532(?float $box0532): self
    {
        $this->box0532 = $box0532;

        return $this;
    }

    public function getBox0533(): ?float
    {
        return $this->box0533;
    }

    public function setBox0533(?float $box0533): self
    {
        $this->box0533 = $box0533;

        return $this;
    }

    public function getBox0534(): ?float
    {
        return $this->box0534;
    }

    public function setBox0534(?float $box0534): self
    {
        $this->box0534 = $box0534;

        return $this;
    }

    public function getBox0535(): ?float
    {
        return $this->box0535;
    }

    public function setBox0535(?float $box0535): self
    {
        $this->box0535 = $box0535;

        return $this;
    }

    public function getBox0536(): ?float
    {
        return $this->box0536;
    }

    public function setBox0536(?float $box0536): self
    {
        $this->box0536 = $box0536;

        return $this;
    }

    public function getBox0537(): ?float
    {
        return $this->box0537;
    }

    public function setBox0537(?float $box0537): self
    {
        $this->box0537 = $box0537;

        return $this;
    }

    public function getBox0538(): ?float
    {
        return $this->box0538;
    }

    public function setBox0538(?float $box0538): self
    {
        $this->box0538 = $box0538;

        return $this;
    }

    public function getBox0539(): ?float
    {
        return $this->box0539;
    }

    public function setBox0539(?float $box0539): self
    {
        $this->box0539 = $box0539;

        return $this;
    }

    public function getBox0540(): ?float
    {
        return $this->box0540;
    }

    public function setBox0540(?float $box0540): self
    {
        $this->box0540 = $box0540;

        return $this;
    }

    public function getBox0541(): ?float
    {
        return $this->box0541;
    }

    public function setBox0541(?float $box0541): self
    {
        $this->box0541 = $box0541;

        return $this;
    }

    public function getBox0542(): ?float
    {
        return $this->box0542;
    }

    public function setBox0542(?float $box0542): self
    {
        $this->box0542 = $box0542;

        return $this;
    }

    public function getBox0543(): ?float
    {
        return $this->box0543;
    }

    public function setBox0543(?float $box0543): self
    {
        $this->box0543 = $box0543;

        return $this;
    }

    public function getBox0545(): ?float
    {
        return $this->box0545;
    }

    public function setBox0545(?float $box0545): self
    {
        $this->box0545 = $box0545;

        return $this;
    }

    public function getBox0546(): ?float
    {
        return $this->box0546;
    }

    public function setBox0546(?float $box0546): self
    {
        $this->box0546 = $box0546;

        return $this;
    }

    public function getBox0552(): ?float
    {
        return $this->box0552;
    }

    public function setBox0552(?float $box0552): self
    {
        $this->box0552 = $box0552;

        return $this;
    }

    public function getBox0553(): ?float
    {
        return $this->box0553;
    }

    public function setBox0553(?float $box0553): self
    {
        $this->box0553 = $box0553;

        return $this;
    }

    public function getBox0564(): ?float
    {
        return $this->box0564;
    }

    public function setBox0564(?float $box0564): self
    {
        $this->box0564 = $box0564;

        return $this;
    }

    public function getBox0570(): ?float
    {
        return $this->box0570;
    }

    public function setBox0570(?float $box0570): self
    {
        $this->box0570 = $box0570;

        return $this;
    }

    public function getBox0571(): ?float
    {
        return $this->box0571;
    }

    public function setBox0571(?float $box0571): self
    {
        $this->box0571 = $box0571;

        return $this;
    }

    public function getBox0585(): ?float
    {
        return $this->box0585;
    }

    public function setBox0585(?float $box0585): self
    {
        $this->box0585 = $box0585;

        return $this;
    }

    public function getBox0586(): ?float
    {
        return $this->box0586;
    }

    public function setBox0586(?float $box0586): self
    {
        $this->box0586 = $box0586;

        return $this;
    }

    public function getBox0587(): ?float
    {
        return $this->box0587;
    }

    public function setBox0587(?float $box0587): self
    {
        $this->box0587 = $box0587;

        return $this;
    }

    public function getBox0595(): ?float
    {
        return $this->box0595;
    }

    public function setBox0595(?float $box0595): self
    {
        $this->box0595 = $box0595;

        return $this;
    }

    public function getBox0596(): ?float
    {
        return $this->box0596;
    }

    public function setBox0596(?float $box0596): self
    {
        $this->box0596 = $box0596;

        return $this;
    }

    public function getBox0597(): ?float
    {
        return $this->box0597;
    }

    public function setBox0597(?float $box0597): self
    {
        $this->box0597 = $box0597;

        return $this;
    }

    public function getBox0609(): ?float
    {
        return $this->box0609;
    }

    public function setBox0609(?float $box0609): self
    {
        $this->box0609 = $box0609;

        return $this;
    }

    public function getBox0610(): ?float
    {
        return $this->box0610;
    }

    public function setBox0610(?float $box0610): self
    {
        $this->box0610 = $box0610;

        return $this;
    }

    public function getBox0670(): ?float
    {
        return $this->box0670;
    }

    public function setBox0670(?float $box0670): self
    {
        $this->box0670 = $box0670;

        return $this;
    }

    public function getBox0671(): ?float
    {
        return $this->box0671;
    }

    public function setBox0671(?float $box0671): self
    {
        $this->box0671 = $box0671;

        return $this;
    }

    public function getBox0675(): ?float
    {
        return $this->box0675;
    }

    public function setBox0675(?float $box0675): self
    {
        $this->box0675 = $box0675;

        return $this;
    }

    public function getBox0695(): ?float
    {
        return $this->box0695;
    }

    public function setBox0695(?float $box0695): self
    {
        $this->box0695 = $box0695;

        return $this;
    }

    public function getBox0723(): ?float
    {
        return $this->box0723;
    }

    public function setBox0723(?float $box0723): self
    {
        $this->box0723 = $box0723;

        return $this;
    }

    public function getBox1392(): ?int
    {
        return $this->box1392;
    }

    public function setBox1392(?int $box1392): self
    {
        $this->box1392 = $box1392;

        return $this;
    }

    public function getBox1393(): ?string
    {
        return $this->box1393;
    }

    public function setBox1393(?string $box1393): self
    {
        $this->box1393 = $box1393;

        return $this;
    }

    public function getBox1394(): ?string
    {
        return $this->box1394;
    }

    public function setBox1394(?string $box1394): self
    {
        $this->box1394 = $box1394;

        return $this;
    }

    public function getBox1395(): ?string
    {
        return $this->box1395;
    }

    public function setBox1395(?string $box1395): self
    {
        $this->box1395 = $box1395;

        return $this;
    }

    public function getBox1396(): ?float
    {
        return $this->box1396;
    }

    public function setBox1396(float $box1396): self
    {
        $this->box1396 = $box1396;

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
