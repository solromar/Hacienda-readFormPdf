<?php

namespace App\Entity;

use App\Repository\Model037Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model037Repository::class)
 */
class Model037 extends AbstractTimetrackeableEntity
{    
    
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box101;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $box102;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box103;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box111;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box122;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box123;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box124;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box125;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box127;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box131;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box132;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box136;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box150;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box151;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box152;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box400;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box402;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box403;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box404;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box405;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box406;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box407;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box408;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box409;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box410;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box411;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box412;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box413;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box414;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box415;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box416;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box417;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box418;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box419;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box420;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box421;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box422;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box423;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box424;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box425;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box426;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box427;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box428;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box429;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box430;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box431;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box432;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box433;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box434;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box435;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box436;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box437;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box438;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box439;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box440;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box441;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box442;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box443;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box444;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box445;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box446;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box447;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box448;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box449;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box450;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box451;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box452;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box453;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box454;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box455;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box501;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box502;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box503;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box504;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box505;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box506;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box507;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box508;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box509;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box510;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box511;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box512;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box514;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box515;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box516;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box517;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box521;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box525;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box529;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box530;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box531;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box533;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box534;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box535;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box536;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box537;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box538;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box539;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box540;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box542;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box543;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box544;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box546;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box547;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box548;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box549;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box550;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box551;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box552;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box553;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box554;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box555;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box556;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box557;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box558;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box559;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box560;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box561;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box562;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box563;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box564;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box565;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box566;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box567;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box568;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box569;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box570;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box571;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box572;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box573;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box581;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box585;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box586;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box587;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box588;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box589;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box590;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box591;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box592;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box593;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box594;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box595;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box596;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box597;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box598;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box599;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box600;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box601;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box602;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box603;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box604;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box605;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box606;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box607;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box608;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box609;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box610;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box611;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box612;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box613;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box614;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box615;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box616;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box617;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box618;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box619;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box650;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box700;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box701;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box702;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box720;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box721;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box722;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box736;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxA4;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $boxA5;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $boxA6;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $boxA7;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA8;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $boxA9;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $boxA10;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA11;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA12;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA13;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA14;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA15;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA16;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA17;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA18;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA19;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA20;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA21120;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA22;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxA23;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA24;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA25;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $boxA26;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxA27;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxA28;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxA29;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA30;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA31;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $boxA32;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxA40;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA41;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA42;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA43;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA44;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA46;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA45;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA47;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA48;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA49;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA50;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA51;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA52;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxA53;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA54;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA55;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA59;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA60;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxA61;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA62;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxA63;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA64;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA68;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA69;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models037s")
     */
    private $taxModels;

    
    public function getBox101(): ?string
    {
        return $this->box101;
    }

    public function setBox101(?string $box101): self
    {
        $this->box101 = $box101;

        return $this;
    }

    public function getBox102(): ?string
    {
        return $this->box102;
    }

    public function setBox102(?string $box102): self
    {
        $this->box102 = $box102;

        return $this;
    }

    public function getBox103(): ?string
    {
        return $this->box103;
    }

    public function setBox103(?string $box103): self
    {
        $this->box103 = $box103;

        return $this;
    }

    public function getBox111(): ?bool
    {
        return $this->box111;
    }

    public function setBox111(?bool $box111): self
    {
        $this->box111 = $box111;

        return $this;
    }

    public function getBox122(): ?bool
    {
        return $this->box122;
    }

    public function setBox122(?bool $box122): self
    {
        $this->box122 = $box122;

        return $this;
    }

    public function getBox123(): ?bool
    {
        return $this->box123;
    }

    public function setBox123(?bool $box123): self
    {
        $this->box123 = $box123;

        return $this;
    }

    public function getBox124(): ?bool
    {
        return $this->box124;
    }

    public function setBox124(?bool $box124): self
    {
        $this->box124 = $box124;

        return $this;
    }

    public function getBox125(): ?bool
    {
        return $this->box125;
    }

    public function setBox125(?bool $box125): self
    {
        $this->box125 = $box125;

        return $this;
    }

    public function getBox127(): ?bool
    {
        return $this->box127;
    }

    public function setBox127(?bool $box127): self
    {
        $this->box127 = $box127;

        return $this;
    }

    public function getBox131(): ?bool
    {
        return $this->box131;
    }

    public function setBox131(?bool $box131): self
    {
        $this->box131 = $box131;

        return $this;
    }

    public function getBox132(): ?bool
    {
        return $this->box132;
    }

    public function setBox132(?bool $box132): self
    {
        $this->box132 = $box132;

        return $this;
    }

    public function getBox136(): ?bool
    {
        return $this->box136;
    }

    public function setBox136(?bool $box136): self
    {
        $this->box136 = $box136;

        return $this;
    }

    public function getBox150(): ?bool
    {
        return $this->box150;
    }

    public function setBox150(?bool $box150): self
    {
        $this->box150 = $box150;

        return $this;
    }

    public function getBox151(): ?string
    {
        return $this->box151;
    }

    public function setBox151(?string $box151): self
    {
        $this->box151 = $box151;

        return $this;
    }

    public function getBox152(): ?\DateTimeInterface
    {
        return $this->box152;
    }

    public function setBox152(?\DateTimeInterface $box152): self
    {
        $this->box152 = $box152;

        return $this;
    }

    public function getBox400(): ?string
    {
        return $this->box400;
    }

    public function setBox400(?string $box400): self
    {
        $this->box400 = $box400;

        return $this;
    }

    public function getBox402(): ?string
    {
        return $this->box402;
    }

    public function setBox402(?string $box402): self
    {
        $this->box402 = $box402;

        return $this;
    }

    public function getBox403(): ?string
    {
        return $this->box403;
    }

    public function setBox403(?string $box403): self
    {
        $this->box403 = $box403;

        return $this;
    }

    public function getBox404(): ?string
    {
        return $this->box404;
    }

    public function setBox404(?string $box404): self
    {
        $this->box404 = $box404;

        return $this;
    }

    public function getBox405(): ?bool
    {
        return $this->box405;
    }

    public function setBox405(?bool $box405): self
    {
        $this->box405 = $box405;

        return $this;
    }

    public function getBox406(): ?\DateTimeInterface
    {
        return $this->box406;
    }

    public function setBox406(?\DateTimeInterface $box406): self
    {
        $this->box406 = $box406;

        return $this;
    }

    public function getBox407(): ?string
    {
        return $this->box407;
    }

    public function setBox407(?string $box407): self
    {
        $this->box407 = $box407;

        return $this;
    }

    public function getBox408(): ?bool
    {
        return $this->box408;
    }

    public function setBox408(?bool $box408): self
    {
        $this->box408 = $box408;

        return $this;
    }

    public function getBox409(): ?\DateTimeInterface
    {
        return $this->box409;
    }

    public function setBox409(?\DateTimeInterface $box409): self
    {
        $this->box409 = $box409;

        return $this;
    }

    public function getBox410(): ?string
    {
        return $this->box410;
    }

    public function setBox410(?string $box410): self
    {
        $this->box410 = $box410;

        return $this;
    }

    public function getBox411(): ?string
    {
        return $this->box411;
    }

    public function setBox411(?string $box411): self
    {
        $this->box411 = $box411;

        return $this;
    }

    public function getBox412(): ?string
    {
        return $this->box412;
    }

    public function setBox412(?string $box412): self
    {
        $this->box412 = $box412;

        return $this;
    }

    public function getBox413(): ?string
    {
        return $this->box413;
    }

    public function setBox413(?string $box413): self
    {
        $this->box413 = $box413;

        return $this;
    }

    public function getBox414(): ?string
    {
        return $this->box414;
    }

    public function setBox414(?string $box414): self
    {
        $this->box414 = $box414;

        return $this;
    }

    public function getBox415(): ?string
    {
        return $this->box415;
    }

    public function setBox415(?string $box415): self
    {
        $this->box415 = $box415;

        return $this;
    }

    public function getBox416(): ?string
    {
        return $this->box416;
    }

    public function setBox416(?string $box416): self
    {
        $this->box416 = $box416;

        return $this;
    }

    public function getBox417(): ?string
    {
        return $this->box417;
    }

    public function setBox417(?string $box417): self
    {
        $this->box417 = $box417;

        return $this;
    }

    public function getBox418(): ?int
    {
        return $this->box418;
    }

    public function setBox418(?int $box418): self
    {
        $this->box418 = $box418;

        return $this;
    }

    public function getBox419(): ?string
    {
        return $this->box419;
    }

    public function setBox419(?string $box419): self
    {
        $this->box419 = $box419;

        return $this;
    }

    public function getBox420(): ?string
    {
        return $this->box420;
    }

    public function setBox420(?string $box420): self
    {
        $this->box420 = $box420;

        return $this;
    }

    public function getBox421(): ?string
    {
        return $this->box421;
    }

    public function setBox421(?string $box421): self
    {
        $this->box421 = $box421;

        return $this;
    }

    public function getBox422(): ?float
    {
        return $this->box422;
    }

    public function setBox422(?float $box422): self
    {
        $this->box422 = $box422;

        return $this;
    }

    public function getBox423(): ?float
    {
        return $this->box423;
    }

    public function setBox423(?float $box423): self
    {
        $this->box423 = $box423;

        return $this;
    }

    public function getBox424(): ?bool
    {
        return $this->box424;
    }

    public function setBox424(?bool $box424): self
    {
        $this->box424 = $box424;

        return $this;
    }

    public function getBox425(): ?\DateTimeInterface
    {
        return $this->box425;
    }

    public function setBox425(?\DateTimeInterface $box425): self
    {
        $this->box425 = $box425;

        return $this;
    }

    public function getBox426(): ?string
    {
        return $this->box426;
    }

    public function setBox426(?string $box426): self
    {
        $this->box426 = $box426;

        return $this;
    }

    public function getBox427(): ?bool
    {
        return $this->box427;
    }

    public function setBox427(?bool $box427): self
    {
        $this->box427 = $box427;

        return $this;
    }

    public function getBox428(): ?\DateTimeInterface
    {
        return $this->box428;
    }

    public function setBox428(?\DateTimeInterface $box428): self
    {
        $this->box428 = $box428;

        return $this;
    }

    public function getBox429(): ?string
    {
        return $this->box429;
    }

    public function setBox429(?string $box429): self
    {
        $this->box429 = $box429;

        return $this;
    }

    public function getBox430(): ?bool
    {
        return $this->box430;
    }

    public function setBox430(?bool $box430): self
    {
        $this->box430 = $box430;

        return $this;
    }

    public function getBox431(): ?\DateTimeInterface
    {
        return $this->box431;
    }

    public function setBox431(?\DateTimeInterface $box431): self
    {
        $this->box431 = $box431;

        return $this;
    }

    public function getBox432(): ?string
    {
        return $this->box432;
    }

    public function setBox432(?string $box432): self
    {
        $this->box432 = $box432;

        return $this;
    }

    public function getBox433(): ?string
    {
        return $this->box433;
    }

    public function setBox433(?string $box433): self
    {
        $this->box433 = $box433;

        return $this;
    }

    public function getBox434(): ?string
    {
        return $this->box434;
    }

    public function setBox434(?string $box434): self
    {
        $this->box434 = $box434;

        return $this;
    }

    public function getBox435(): ?string
    {
        return $this->box435;
    }

    public function setBox435(?string $box435): self
    {
        $this->box435 = $box435;

        return $this;
    }

    public function getBox436(): ?string
    {
        return $this->box436;
    }

    public function setBox436(?string $box436): self
    {
        $this->box436 = $box436;

        return $this;
    }

    public function getBox437(): ?string
    {
        return $this->box437;
    }

    public function setBox437(?string $box437): self
    {
        $this->box437 = $box437;

        return $this;
    }

    public function getBox438(): ?string
    {
        return $this->box438;
    }

    public function setBox438(?string $box438): self
    {
        $this->box438 = $box438;

        return $this;
    }

    public function getBox439(): ?int
    {
        return $this->box439;
    }

    public function setBox439(?int $box439): self
    {
        $this->box439 = $box439;

        return $this;
    }

    public function getBox440(): ?string
    {
        return $this->box440;
    }

    public function setBox440(?string $box440): self
    {
        $this->box440 = $box440;

        return $this;
    }

    public function getBox441(): ?string
    {
        return $this->box441;
    }

    public function setBox441(?string $box441): self
    {
        $this->box441 = $box441;

        return $this;
    }

    public function getBox442(): ?string
    {
        return $this->box442;
    }

    public function setBox442(?string $box442): self
    {
        $this->box442 = $box442;

        return $this;
    }

    public function getBox443(): ?float
    {
        return $this->box443;
    }

    public function setBox443(?float $box443): self
    {
        $this->box443 = $box443;

        return $this;
    }

    public function getBox444(): ?float
    {
        return $this->box444;
    }

    public function setBox444(?float $box444): self
    {
        $this->box444 = $box444;

        return $this;
    }

    public function getBox445(): ?string
    {
        return $this->box445;
    }

    public function setBox445(?string $box445): self
    {
        $this->box445 = $box445;

        return $this;
    }

    public function getBox446(): ?string
    {
        return $this->box446;
    }

    public function setBox446(?string $box446): self
    {
        $this->box446 = $box446;

        return $this;
    }

    public function getBox447(): ?bool
    {
        return $this->box447;
    }

    public function setBox447(?bool $box447): self
    {
        $this->box447 = $box447;

        return $this;
    }

    public function getBox448(): ?\DateTimeInterface
    {
        return $this->box448;
    }

    public function setBox448(?\DateTimeInterface $box448): self
    {
        $this->box448 = $box448;

        return $this;
    }

    public function getBox449(): ?string
    {
        return $this->box449;
    }

    public function setBox449(?string $box449): self
    {
        $this->box449 = $box449;

        return $this;
    }

    public function getBox450(): ?bool
    {
        return $this->box450;
    }

    public function setBox450(?bool $box450): self
    {
        $this->box450 = $box450;

        return $this;
    }

    public function getBox451(): ?\DateTimeInterface
    {
        return $this->box451;
    }

    public function setBox451(?\DateTimeInterface $box451): self
    {
        $this->box451 = $box451;

        return $this;
    }

    public function getBox452(): ?string
    {
        return $this->box452;
    }

    public function setBox452(?string $box452): self
    {
        $this->box452 = $box452;

        return $this;
    }

    public function getBox453(): ?bool
    {
        return $this->box453;
    }

    public function setBox453(?bool $box453): self
    {
        $this->box453 = $box453;

        return $this;
    }

    public function getBox454(): ?\DateTimeInterface
    {
        return $this->box454;
    }

    public function setBox454(?\DateTimeInterface $box454): self
    {
        $this->box454 = $box454;

        return $this;
    }

    public function getBox455(): ?string
    {
        return $this->box455;
    }

    public function setBox455(?string $box455): self
    {
        $this->box455 = $box455;

        return $this;
    }

    public function getBox501(): ?string
    {
        return $this->box501;
    }

    public function setBox501(?string $box501): self
    {
        $this->box501 = $box501;

        return $this;
    }

    public function getBox502(): ?bool
    {
        return $this->box502;
    }

    public function setBox502(?bool $box502): self
    {
        $this->box502 = $box502;

        return $this;
    }

    public function getBox503(): ?\DateTimeInterface
    {
        return $this->box503;
    }

    public function setBox503(?\DateTimeInterface $box503): self
    {
        $this->box503 = $box503;

        return $this;
    }

    public function getBox504(): ?bool
    {
        return $this->box504;
    }

    public function setBox504(?bool $box504): self
    {
        $this->box504 = $box504;

        return $this;
    }

    public function getBox505(): ?\DateTimeInterface
    {
        return $this->box505;
    }

    public function setBox505(?\DateTimeInterface $box505): self
    {
        $this->box505 = $box505;

        return $this;
    }

    public function getBox506(): ?bool
    {
        return $this->box506;
    }

    public function setBox506(?bool $box506): self
    {
        $this->box506 = $box506;

        return $this;
    }

    public function getBox507(): ?\DateTimeInterface
    {
        return $this->box507;
    }

    public function setBox507(?\DateTimeInterface $box507): self
    {
        $this->box507 = $box507;

        return $this;
    }

    public function getBox508(): ?bool
    {
        return $this->box508;
    }

    public function setBox508(?bool $box508): self
    {
        $this->box508 = $box508;

        return $this;
    }

    public function getBox509(): ?\DateTimeInterface
    {
        return $this->box509;
    }

    public function setBox509(?\DateTimeInterface $box509): self
    {
        $this->box509 = $box509;

        return $this;
    }

    public function getBox510(): ?string
    {
        return $this->box510;
    }

    public function setBox510(?string $box510): self
    {
        $this->box510 = $box510;

        return $this;
    }

    public function getBox511(): ?string
    {
        return $this->box511;
    }

    public function setBox511(?string $box511): self
    {
        $this->box511 = $box511;

        return $this;
    }

    public function getBox512(): ?\DateTimeInterface
    {
        return $this->box512;
    }

    public function setBox512(?\DateTimeInterface $box512): self
    {
        $this->box512 = $box512;

        return $this;
    }

    public function getBox514(): ?string
    {
        return $this->box514;
    }

    public function setBox514(?string $box514): self
    {
        $this->box514 = $box514;

        return $this;
    }

    public function getBox515(): ?string
    {
        return $this->box515;
    }

    public function setBox515(?string $box515): self
    {
        $this->box515 = $box515;

        return $this;
    }

    public function getBox516(): ?\DateTimeInterface
    {
        return $this->box516;
    }

    public function setBox516(?\DateTimeInterface $box516): self
    {
        $this->box516 = $box516;

        return $this;
    }

    public function getBox517(): ?bool
    {
        return $this->box517;
    }

    public function setBox517(?bool $box517): self
    {
        $this->box517 = $box517;

        return $this;
    }

    public function getBox521(): ?string
    {
        return $this->box521;
    }

    public function setBox521(?string $box521): self
    {
        $this->box521 = $box521;

        return $this;
    }

    public function getBox525(): ?\DateTimeInterface
    {
        return $this->box525;
    }

    public function setBox525(?\DateTimeInterface $box525): self
    {
        $this->box525 = $box525;

        return $this;
    }

    public function getBox529(): ?bool
    {
        return $this->box529;
    }

    public function setBox529(?bool $box529): self
    {
        $this->box529 = $box529;

        return $this;
    }

    public function getBox530(): ?bool
    {
        return $this->box530;
    }

    public function setBox530(?bool $box530): self
    {
        $this->box530 = $box530;

        return $this;
    }

    public function getBox531(): ?bool
    {
        return $this->box531;
    }

    public function setBox531(?bool $box531): self
    {
        $this->box531 = $box531;

        return $this;
    }

    public function getBox533(): ?string
    {
        return $this->box533;
    }

    public function setBox533(?string $box533): self
    {
        $this->box533 = $box533;

        return $this;
    }

    public function getBox534(): ?bool
    {
        return $this->box534;
    }

    public function setBox534(?bool $box534): self
    {
        $this->box534 = $box534;

        return $this;
    }

    public function getBox535(): ?string
    {
        return $this->box535;
    }

    public function setBox535(?string $box535): self
    {
        $this->box535 = $box535;

        return $this;
    }

    public function getBox536(): ?\DateTimeInterface
    {
        return $this->box536;
    }

    public function setBox536(?\DateTimeInterface $box536): self
    {
        $this->box536 = $box536;

        return $this;
    }

    public function getBox537(): ?\DateTimeInterface
    {
        return $this->box537;
    }

    public function setBox537(?\DateTimeInterface $box537): self
    {
        $this->box537 = $box537;

        return $this;
    }

    public function getBox538(): ?bool
    {
        return $this->box538;
    }

    public function setBox538(?bool $box538): self
    {
        $this->box538 = $box538;

        return $this;
    }

    public function getBox539(): ?string
    {
        return $this->box539;
    }

    public function setBox539(?string $box539): self
    {
        $this->box539 = $box539;

        return $this;
    }

    public function getBox540(): ?\DateTimeInterface
    {
        return $this->box540;
    }

    public function setBox540(?\DateTimeInterface $box540): self
    {
        $this->box540 = $box540;

        return $this;
    }

    public function getBox542(): ?bool
    {
        return $this->box542;
    }

    public function setBox542(?bool $box542): self
    {
        $this->box542 = $box542;

        return $this;
    }

    public function getBox543(): ?string
    {
        return $this->box543;
    }

    public function setBox543(?string $box543): self
    {
        $this->box543 = $box543;

        return $this;
    }

    public function getBox544(): ?\DateTimeInterface
    {
        return $this->box544;
    }

    public function setBox544(?\DateTimeInterface $box544): self
    {
        $this->box544 = $box544;

        return $this;
    }

    public function getBox546(): ?bool
    {
        return $this->box546;
    }

    public function setBox546(?bool $box546): self
    {
        $this->box546 = $box546;

        return $this;
    }

    public function getBox547(): ?string
    {
        return $this->box547;
    }

    public function setBox547(?string $box547): self
    {
        $this->box547 = $box547;

        return $this;
    }

    public function getBox548(): ?\DateTimeInterface
    {
        return $this->box548;
    }

    public function setBox548(?\DateTimeInterface $box548): self
    {
        $this->box548 = $box548;

        return $this;
    }

    public function getBox549(): ?bool
    {
        return $this->box549;
    }

    public function setBox549(?bool $box549): self
    {
        $this->box549 = $box549;

        return $this;
    }

    public function getBox550(): ?bool
    {
        return $this->box550;
    }

    public function setBox550(?bool $box550): self
    {
        $this->box550 = $box550;

        return $this;
    }

    public function getBox551(): ?string
    {
        return $this->box551;
    }

    public function setBox551(?string $box551): self
    {
        $this->box551 = $box551;

        return $this;
    }

    public function getBox552(): ?\DateTimeInterface
    {
        return $this->box552;
    }

    public function setBox552(?\DateTimeInterface $box552): self
    {
        $this->box552 = $box552;

        return $this;
    }

    public function getBox553(): ?string
    {
        return $this->box553;
    }

    public function setBox553(?string $box553): self
    {
        $this->box553 = $box553;

        return $this;
    }

    public function getBox554(): ?bool
    {
        return $this->box554;
    }

    public function setBox554(?bool $box554): self
    {
        $this->box554 = $box554;

        return $this;
    }

    public function getBox555(): ?string
    {
        return $this->box555;
    }

    public function setBox555(?string $box555): self
    {
        $this->box555 = $box555;

        return $this;
    }

    public function getBox556(): ?\DateTimeInterface
    {
        return $this->box556;
    }

    public function setBox556(?\DateTimeInterface $box556): self
    {
        $this->box556 = $box556;

        return $this;
    }

    public function getBox557(): ?\DateTimeInterface
    {
        return $this->box557;
    }

    public function setBox557(?\DateTimeInterface $box557): self
    {
        $this->box557 = $box557;

        return $this;
    }

    public function getBox558(): ?bool
    {
        return $this->box558;
    }

    public function setBox558(?bool $box558): self
    {
        $this->box558 = $box558;

        return $this;
    }

    public function getBox559(): ?string
    {
        return $this->box559;
    }

    public function setBox559(?string $box559): self
    {
        $this->box559 = $box559;

        return $this;
    }

    public function getBox560(): ?\DateTimeInterface
    {
        return $this->box560;
    }

    public function setBox560(?\DateTimeInterface $box560): self
    {
        $this->box560 = $box560;

        return $this;
    }

    public function getBox561(): ?bool
    {
        return $this->box561;
    }

    public function setBox561(?bool $box561): self
    {
        $this->box561 = $box561;

        return $this;
    }

    public function getBox562(): ?bool
    {
        return $this->box562;
    }

    public function setBox562(?bool $box562): self
    {
        $this->box562 = $box562;

        return $this;
    }

    public function getBox563(): ?string
    {
        return $this->box563;
    }

    public function setBox563(?string $box563): self
    {
        $this->box563 = $box563;

        return $this;
    }

    public function getBox564(): ?\DateTimeInterface
    {
        return $this->box564;
    }

    public function setBox564(?\DateTimeInterface $box564): self
    {
        $this->box564 = $box564;

        return $this;
    }

    public function getBox565(): ?string
    {
        return $this->box565;
    }

    public function setBox565(?string $box565): self
    {
        $this->box565 = $box565;

        return $this;
    }

    public function getBox566(): ?bool
    {
        return $this->box566;
    }

    public function setBox566(?bool $box566): self
    {
        $this->box566 = $box566;

        return $this;
    }

    public function getBox567(): ?string
    {
        return $this->box567;
    }

    public function setBox567(?string $box567): self
    {
        $this->box567 = $box567;

        return $this;
    }

    public function getBox568(): ?\DateTimeInterface
    {
        return $this->box568;
    }

    public function setBox568(?\DateTimeInterface $box568): self
    {
        $this->box568 = $box568;

        return $this;
    }

    public function getBox569(): ?\DateTimeInterface
    {
        return $this->box569;
    }

    public function setBox569(?\DateTimeInterface $box569): self
    {
        $this->box569 = $box569;

        return $this;
    }

    public function getBox570(): ?bool
    {
        return $this->box570;
    }

    public function setBox570(?bool $box570): self
    {
        $this->box570 = $box570;

        return $this;
    }

    public function getBox571(): ?string
    {
        return $this->box571;
    }

    public function setBox571(?string $box571): self
    {
        $this->box571 = $box571;

        return $this;
    }

    public function getBox572(): ?\DateTimeInterface
    {
        return $this->box572;
    }

    public function setBox572(?\DateTimeInterface $box572): self
    {
        $this->box572 = $box572;

        return $this;
    }

    public function getBox573(): ?bool
    {
        return $this->box573;
    }

    public function setBox573(?bool $box573): self
    {
        $this->box573 = $box573;

        return $this;
    }

    public function getBox581(): ?string
    {
        return $this->box581;
    }

    public function setBox581(?string $box581): self
    {
        $this->box581 = $box581;

        return $this;
    }

    public function getBox585(): ?\DateTimeInterface
    {
        return $this->box585;
    }

    public function setBox585(?\DateTimeInterface $box585): self
    {
        $this->box585 = $box585;

        return $this;
    }

    public function getBox586(): ?float
    {
        return $this->box586;
    }

    public function setBox586(?float $box586): self
    {
        $this->box586 = $box586;

        return $this;
    }

    public function getBox587(): ?string
    {
        return $this->box587;
    }

    public function setBox587(?string $box587): self
    {
        $this->box587 = $box587;

        return $this;
    }

    public function getBox588(): ?string
    {
        return $this->box588;
    }

    public function setBox588(?string $box588): self
    {
        $this->box588 = $box588;

        return $this;
    }

    public function getBox589(): ?string
    {
        return $this->box589;
    }

    public function setBox589(?string $box589): self
    {
        $this->box589 = $box589;

        return $this;
    }

    public function getBox590(): ?string
    {
        return $this->box590;
    }

    public function setBox590(?string $box590): self
    {
        $this->box590 = $box590;

        return $this;
    }

    public function getBox591(): ?string
    {
        return $this->box591;
    }

    public function setBox591(?string $box591): self
    {
        $this->box591 = $box591;

        return $this;
    }

    public function getBox592(): ?string
    {
        return $this->box592;
    }

    public function setBox592(string $box592): self
    {
        $this->box592 = $box592;

        return $this;
    }

    public function getBox593(): ?string
    {
        return $this->box593;
    }

    public function setBox593(?string $box593): self
    {
        $this->box593 = $box593;

        return $this;
    }

    public function getBox594(): ?string
    {
        return $this->box594;
    }

    public function setBox594(?string $box594): self
    {
        $this->box594 = $box594;

        return $this;
    }

    public function getBox595(): ?string
    {
        return $this->box595;
    }

    public function setBox595(?string $box595): self
    {
        $this->box595 = $box595;

        return $this;
    }

    public function getBox596(): ?string
    {
        return $this->box596;
    }

    public function setBox596(?string $box596): self
    {
        $this->box596 = $box596;

        return $this;
    }

    public function getBox597(): ?string
    {
        return $this->box597;
    }

    public function setBox597(?string $box597): self
    {
        $this->box597 = $box597;

        return $this;
    }

    public function getBox598(): ?string
    {
        return $this->box598;
    }

    public function setBox598(?string $box598): self
    {
        $this->box598 = $box598;

        return $this;
    }

    public function getBox599(): ?string
    {
        return $this->box599;
    }

    public function setBox599(?string $box599): self
    {
        $this->box599 = $box599;

        return $this;
    }

    public function getBox600(): ?string
    {
        return $this->box600;
    }

    public function setBox600(?string $box600): self
    {
        $this->box600 = $box600;

        return $this;
    }

    public function getBox601(): ?string
    {
        return $this->box601;
    }

    public function setBox601(?string $box601): self
    {
        $this->box601 = $box601;

        return $this;
    }

    public function getBox602(): ?\DateTimeInterface
    {
        return $this->box602;
    }

    public function setBox602(?\DateTimeInterface $box602): self
    {
        $this->box602 = $box602;

        return $this;
    }

    public function getBox603(): ?\DateTimeInterface
    {
        return $this->box603;
    }

    public function setBox603(?\DateTimeInterface $box603): self
    {
        $this->box603 = $box603;

        return $this;
    }

    public function getBox604(): ?bool
    {
        return $this->box604;
    }

    public function setBox604(?bool $box604): self
    {
        $this->box604 = $box604;

        return $this;
    }

    public function getBox605(): ?bool
    {
        return $this->box605;
    }

    public function setBox605(?bool $box605): self
    {
        $this->box605 = $box605;

        return $this;
    }

    public function getBox606(): ?bool
    {
        return $this->box606;
    }

    public function setBox606(?bool $box606): self
    {
        $this->box606 = $box606;

        return $this;
    }

    public function getBox607(): ?bool
    {
        return $this->box607;
    }

    public function setBox607(?bool $box607): self
    {
        $this->box607 = $box607;

        return $this;
    }

    public function getBox608(): ?bool
    {
        return $this->box608;
    }

    public function setBox608(?bool $box608): self
    {
        $this->box608 = $box608;

        return $this;
    }

    public function getBox609(): ?bool
    {
        return $this->box609;
    }

    public function setBox609(?bool $box609): self
    {
        $this->box609 = $box609;

        return $this;
    }

    public function getBox610(): ?bool
    {
        return $this->box610;
    }

    public function setBox610(?bool $box610): self
    {
        $this->box610 = $box610;

        return $this;
    }

    public function getBox611(): ?bool
    {
        return $this->box611;
    }

    public function setBox611(?bool $box611): self
    {
        $this->box611 = $box611;

        return $this;
    }

    public function getBox612(): ?bool
    {
        return $this->box612;
    }

    public function setBox612(?bool $box612): self
    {
        $this->box612 = $box612;

        return $this;
    }

    public function getBox613(): ?string
    {
        return $this->box613;
    }

    public function setBox613(?string $box613): self
    {
        $this->box613 = $box613;

        return $this;
    }

    public function getBox614(): ?string
    {
        return $this->box614;
    }

    public function setBox614(?string $box614): self
    {
        $this->box614 = $box614;

        return $this;
    }

    public function getBox615(): ?bool
    {
        return $this->box615;
    }

    public function setBox615(?bool $box615): self
    {
        $this->box615 = $box615;

        return $this;
    }

    public function getBox616(): ?\DateTimeInterface
    {
        return $this->box616;
    }

    public function setBox616(?\DateTimeInterface $box616): self
    {
        $this->box616 = $box616;

        return $this;
    }

    public function getBox617(): ?bool
    {
        return $this->box617;
    }

    public function setBox617(?bool $box617): self
    {
        $this->box617 = $box617;

        return $this;
    }

    public function getBox618(): ?\DateTimeInterface
    {
        return $this->box618;
    }

    public function setBox618(?\DateTimeInterface $box618): self
    {
        $this->box618 = $box618;

        return $this;
    }

    public function getBox619(): ?bool
    {
        return $this->box619;
    }

    public function setBox619(?bool $box619): self
    {
        $this->box619 = $box619;

        return $this;
    }

    public function getBox650(): ?\DateTimeInterface
    {
        return $this->box650;
    }

    public function setBox650(?\DateTimeInterface $box650): self
    {
        $this->box650 = $box650;

        return $this;
    }

    public function getBox700(): ?string
    {
        return $this->box700;
    }

    public function setBox700(?string $box700): self
    {
        $this->box700 = $box700;

        return $this;
    }

    public function getBox701(): ?string
    {
        return $this->box701;
    }

    public function setBox701(?string $box701): self
    {
        $this->box701 = $box701;

        return $this;
    }

    public function getBox702(): ?string
    {
        return $this->box702;
    }

    public function setBox702(?string $box702): self
    {
        $this->box702 = $box702;

        return $this;
    }

    public function getBox720(): ?\DateTimeInterface
    {
        return $this->box720;
    }

    public function setBox720(?\DateTimeInterface $box720): self
    {
        $this->box720 = $box720;

        return $this;
    }

    public function getBox721(): ?\DateTimeInterface
    {
        return $this->box721;
    }

    public function setBox721(?\DateTimeInterface $box721): self
    {
        $this->box721 = $box721;

        return $this;
    }

    public function getBox722(): ?\DateTimeInterface
    {
        return $this->box722;
    }

    public function setBox722(?\DateTimeInterface $box722): self
    {
        $this->box722 = $box722;

        return $this;
    }

    public function getBox736(): ?\DateTimeInterface
    {
        return $this->box736;
    }

    public function setBox736(?\DateTimeInterface $box736): self
    {
        $this->box736 = $box736;

        return $this;
    }

    public function getBoxA4(): ?string
    {
        return $this->boxA4;
    }

    public function setBoxA4(?string $boxA4): self
    {
        $this->boxA4 = $boxA4;

        return $this;
    }

    public function getBoxA5(): ?string
    {
        return $this->boxA5;
    }

    public function setBoxA5(?string $boxA5): self
    {
        $this->boxA5 = $boxA5;

        return $this;
    }

    public function getBoxA6(): ?string
    {
        return $this->boxA6;
    }

    public function setBoxA6(?string $boxA6): self
    {
        $this->boxA6 = $boxA6;

        return $this;
    }

    public function getBoxA7(): ?string
    {
        return $this->boxA7;
    }

    public function setBoxA7(?string $boxA7): self
    {
        $this->boxA7 = $boxA7;

        return $this;
    }

    public function getBoxA8(): ?string
    {
        return $this->boxA8;
    }

    public function setBoxA8(?string $boxA8): self
    {
        $this->boxA8 = $boxA8;

        return $this;
    }

    public function getBoxA9(): ?string
    {
        return $this->boxA9;
    }

    public function setBoxA9(?string $boxA9): self
    {
        $this->boxA9 = $boxA9;

        return $this;
    }

    public function getBoxA10(): ?\DateTimeInterface
    {
        return $this->boxA10;
    }

    public function setBoxA10(?\DateTimeInterface $boxA10): self
    {
        $this->boxA10 = $boxA10;

        return $this;
    }

    public function getBoxA11(): ?string
    {
        return $this->boxA11;
    }

    public function setBoxA11(?string $boxA11): self
    {
        $this->boxA11 = $boxA11;

        return $this;
    }

    public function getBoxA12(): ?string
    {
        return $this->boxA12;
    }

    public function setBoxA12(?string $boxA12): self
    {
        $this->boxA12 = $boxA12;

        return $this;
    }

    public function getBoxA13(): ?string
    {
        return $this->boxA13;
    }

    public function setBoxA13(?string $boxA13): self
    {
        $this->boxA13 = $boxA13;

        return $this;
    }

    public function getBoxA14(): ?string
    {
        return $this->boxA14;
    }

    public function setBoxA14(?string $boxA14): self
    {
        $this->boxA14 = $boxA14;

        return $this;
    }

    public function getBoxA15(): ?string
    {
        return $this->boxA15;
    }

    public function setBoxA15(?string $boxA15): self
    {
        $this->boxA15 = $boxA15;

        return $this;
    }

    public function getBoxA16(): ?string
    {
        return $this->boxA16;
    }

    public function setBoxA16(?string $boxA16): self
    {
        $this->boxA16 = $boxA16;

        return $this;
    }

    public function getBoxA17(): ?string
    {
        return $this->boxA17;
    }

    public function setBoxA17(?string $boxA17): self
    {
        $this->boxA17 = $boxA17;

        return $this;
    }

    public function getBoxA18(): ?string
    {
        return $this->boxA18;
    }

    public function setBoxA18(?string $boxA18): self
    {
        $this->boxA18 = $boxA18;

        return $this;
    }

    public function getBoxA19(): ?string
    {
        return $this->boxA19;
    }

    public function setBoxA19(?string $boxA19): self
    {
        $this->boxA19 = $boxA19;

        return $this;
    }

    public function getBoxA20(): ?string
    {
        return $this->boxA20;
    }

    public function setBoxA20(?string $boxA20): self
    {
        $this->boxA20 = $boxA20;

        return $this;
    }

    public function getBoxA21120(): ?string
    {
        return $this->boxA21120;
    }

    public function setBoxA21120(?string $boxA21120): self
    {
        $this->boxA21120 = $boxA21120;

        return $this;
    }

    public function getBoxA22(): ?string
    {
        return $this->boxA22;
    }

    public function setBoxA22(?string $boxA22): self
    {
        $this->boxA22 = $boxA22;

        return $this;
    }

    public function getBoxA23(): ?int
    {
        return $this->boxA23;
    }

    public function setBoxA23(?int $boxA23): self
    {
        $this->boxA23 = $boxA23;

        return $this;
    }

    public function getBoxA24(): ?string
    {
        return $this->boxA24;
    }

    public function setBoxA24(?string $boxA24): self
    {
        $this->boxA24 = $boxA24;

        return $this;
    }

    public function getBoxA25(): ?string
    {
        return $this->boxA25;
    }

    public function setBoxA25(?string $boxA25): self
    {
        $this->boxA25 = $boxA25;

        return $this;
    }

    public function getBoxA26(): ?string
    {
        return $this->boxA26;
    }

    public function setBoxA26(string $boxA26): self
    {
        $this->boxA26 = $boxA26;

        return $this;
    }

    public function getBoxA27(): ?string
    {
        return $this->boxA27;
    }

    public function setBoxA27(?string $boxA27): self
    {
        $this->boxA27 = $boxA27;

        return $this;
    }

    public function getBoxA28(): ?string
    {
        return $this->boxA28;
    }

    public function setBoxA28(?string $boxA28): self
    {
        $this->boxA28 = $boxA28;

        return $this;
    }

    public function getBoxA29(): ?string
    {
        return $this->boxA29;
    }

    public function setBoxA29(?string $boxA29): self
    {
        $this->boxA29 = $boxA29;

        return $this;
    }

    public function getBoxA30(): ?string
    {
        return $this->boxA30;
    }

    public function setBoxA30(?string $boxA30): self
    {
        $this->boxA30 = $boxA30;

        return $this;
    }

    public function getBoxA31(): ?string
    {
        return $this->boxA31;
    }

    public function setBoxA31(?string $boxA31): self
    {
        $this->boxA31 = $boxA31;

        return $this;
    }

    public function getBoxA32(): ?string
    {
        return $this->boxA32;
    }

    public function setBoxA32(?string $boxA32): self
    {
        $this->boxA32 = $boxA32;

        return $this;
    }

    public function getBoxA40(): ?bool
    {
        return $this->boxA40;
    }

    public function setBoxA40(?bool $boxA40): self
    {
        $this->boxA40 = $boxA40;

        return $this;
    }

    public function getBoxA41(): ?string
    {
        return $this->boxA41;
    }

    public function setBoxA41(?string $boxA41): self
    {
        $this->boxA41 = $boxA41;

        return $this;
    }

    public function getBoxA42(): ?string
    {
        return $this->boxA42;
    }

    public function setBoxA42(?string $boxA42): self
    {
        $this->boxA42 = $boxA42;

        return $this;
    }

    public function getBoxA43(): ?string
    {
        return $this->boxA43;
    }

    public function setBoxA43(?string $boxA43): self
    {
        $this->boxA43 = $boxA43;

        return $this;
    }

    public function getBoxA44(): ?string
    {
        return $this->boxA44;
    }

    public function setBoxA44(?string $boxA44): self
    {
        $this->boxA44 = $boxA44;

        return $this;
    }

    public function getBoxA46(): ?string
    {
        return $this->boxA46;
    }

    public function setBoxA46(?string $boxA46): self
    {
        $this->boxA46 = $boxA46;

        return $this;
    }

    public function getBoxA45(): ?string
    {
        return $this->boxA45;
    }

    public function setBoxA45(?string $boxA45): self
    {
        $this->boxA45 = $boxA45;

        return $this;
    }

    public function getBoxA47(): ?string
    {
        return $this->boxA47;
    }

    public function setBoxA47(?string $boxA47): self
    {
        $this->boxA47 = $boxA47;

        return $this;
    }

    public function getBoxA48(): ?string
    {
        return $this->boxA48;
    }

    public function setBoxA48(?string $boxA48): self
    {
        $this->boxA48 = $boxA48;

        return $this;
    }

    public function getBoxA49(): ?string
    {
        return $this->boxA49;
    }

    public function setBoxA49(?string $boxA49): self
    {
        $this->boxA49 = $boxA49;

        return $this;
    }

    public function getBoxA50(): ?string
    {
        return $this->boxA50;
    }

    public function setBoxA50(?string $boxA50): self
    {
        $this->boxA50 = $boxA50;

        return $this;
    }

    public function getBoxA51(): ?string
    {
        return $this->boxA51;
    }

    public function setBoxA51(?string $boxA51): self
    {
        $this->boxA51 = $boxA51;

        return $this;
    }

    public function getBoxA52(): ?string
    {
        return $this->boxA52;
    }

    public function setBoxA52(?string $boxA52): self
    {
        $this->boxA52 = $boxA52;

        return $this;
    }

    public function getBoxA53(): ?int
    {
        return $this->boxA53;
    }

    public function setBoxA53(?int $boxA53): self
    {
        $this->boxA53 = $boxA53;

        return $this;
    }

    public function getBoxA54(): ?string
    {
        return $this->boxA54;
    }

    public function setBoxA54(?string $boxA54): self
    {
        $this->boxA54 = $boxA54;

        return $this;
    }

    public function getBoxA55(): ?string
    {
        return $this->boxA55;
    }

    public function setBoxA55(?string $boxA55): self
    {
        $this->boxA55 = $boxA55;

        return $this;
    }

    public function getBoxA59(): ?string
    {
        return $this->boxA59;
    }

    public function setBoxA59(?string $boxA59): self
    {
        $this->boxA59 = $boxA59;

        return $this;
    }

    public function getBoxA60(): ?string
    {
        return $this->boxA60;
    }

    public function setBoxA60(?string $boxA60): self
    {
        $this->boxA60 = $boxA60;

        return $this;
    }

    public function getBoxA61(): ?string
    {
        return $this->boxA61;
    }

    public function setBoxA61(?string $boxA61): self
    {
        $this->boxA61 = $boxA61;

        return $this;
    }

    public function getBoxA62(): ?string
    {
        return $this->boxA62;
    }

    public function setBoxA62(?string $boxA62): self
    {
        $this->boxA62 = $boxA62;

        return $this;
    }

    public function getBoxA63(): ?int
    {
        return $this->boxA63;
    }

    public function setBoxA63(?int $boxA63): self
    {
        $this->boxA63 = $boxA63;

        return $this;
    }

    public function getBoxA64(): ?string
    {
        return $this->boxA64;
    }

    public function setBoxA64(?string $boxA64): self
    {
        $this->boxA64 = $boxA64;

        return $this;
    }

    public function getBoxA68(): ?string
    {
        return $this->boxA68;
    }

    public function setBoxA68(?string $boxA68): self
    {
        $this->boxA68 = $boxA68;

        return $this;
    }

    public function getBoxA69(): ?string
    {
        return $this->boxA69;
    }

    public function setBoxA69(?string $boxA69): self
    {
        $this->boxA69 = $boxA69;

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
