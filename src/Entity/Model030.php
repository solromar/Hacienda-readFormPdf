<?php

namespace App\Entity;

use App\Repository\Model030Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model030Repository::class)
 */
class Model030 extends AbstractTimetrackeableEntity
{
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $box1;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $box2;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $box3;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box101;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box102;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box103;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box104;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box105;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box106;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box107;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box108;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box109;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box110;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box111;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box112;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box115;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box116;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box117;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box201;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box202;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $box217;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box203;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box204;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box205;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $box206;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box207;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box208;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box209;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box210;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box211;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box212;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box213;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box214;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box215;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box216;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box301;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box302;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box317;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box303;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box304;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box305;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $box306;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box307;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box308;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box309;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box310;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box311;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box312;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box313;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box314;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box315;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box316;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box426;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box427;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box431;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box429;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box432;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $box411;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box423;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box424;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box425;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box428;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box430;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box501;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box502;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box503;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box504;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box505;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $box507;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box508;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box509;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box510;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box600;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $box601;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box614;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box615;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box616;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box620;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box621;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box622;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box623;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box624;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box625;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box629;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box630;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box701;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box702;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box703;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box704;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box705;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box706;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box707;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box708;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box801;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box802;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box803;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box804;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box805;


    
    public function getBox1(): ?string
    {
        return $this->box1;
    }

    public function setBox1(string $box1): self
    {
        $this->box1 = $box1;

        return $this;
    }

    public function getBox2(): ?string
    {
        return $this->box2;
    }

    public function setBox2(string $box2): self
    {
        $this->box2 = $box2;

        return $this;
    }

    public function getBox3(): ?string
    {
        return $this->box3;
    }

    public function setBox3(string $box3): self
    {
        $this->box3 = $box3;

        return $this;
    }

    public function getBox101(): ?bool
    {
        return $this->box101;
    }

    public function setBox101(bool $box101): self
    {
        $this->box101 = $box101;

        return $this;
    }


    public function getBox102()
    {
        return $this->box102;
    }


    public function setBox102($box102): self
    {
        $this->box102 = $box102;

        return $this;
    }


    public function getBox103()
    {
        return $this->box103;
    }


    public function setBox103($box103): self
    {
        $this->box103 = $box103;

        return $this;
    }


    public function getBox104()
    {
        return $this->box104;
    }


    public function setBox104($box104): self
    {
        $this->box104 = $box104;

        return $this;
    }


    public function getBox105()
    {
        return $this->box105;
    }


    public function setBox105($box105): self
    {
        $this->box105 = $box105;

        return $this;
    }


    public function getBox106()
    {
        return $this->box106;
    }


    public function setBox106($box106): self
    {
        $this->box106 = $box106;

        return $this;
    }


    public function getBox107()
    {
        return $this->box107;
    }


    public function setBox107($box107): self
    {
        $this->box107 = $box107;

        return $this;
    }


    public function getBox108()
    {
        return $this->box108;
    }


    public function setBox108($box108): self
    {
        $this->box108 = $box108;

        return $this;
    }


    public function getBox109()
    {
        return $this->box109;
    }


    public function setBox109($box109): self
    {
        $this->box109 = $box109;

        return $this;
    }


    public function getBox110()
    {
        return $this->box110;
    }


    public function setBox110($box110): self
    {
        $this->box110 = $box110;

        return $this;
    }


    public function getBox111()
    {
        return $this->box111;
    }


    public function setBox111($box111): self
    {
        $this->box111 = $box111;

        return $this;
    }


    public function getBox112()
    {
        return $this->box112;
    }


    public function setBox112($box112): self
    {
        $this->box112 = $box112;

        return $this;
    }


    public function getBox115()
    {
        return $this->box115;
    }


    public function setBox115($box115): self
    {
        $this->box115 = $box115;

        return $this;
    }


    public function getBox116()
    {
        return $this->box116;
    }


    public function setBox116($box116): self
    {
        $this->box116 = $box116;

        return $this;
    }


    public function getBox117()
    {
        return $this->box117;
    }


    public function setBox117($box117): self
    {
        $this->box117 = $box117;

        return $this;
    }


    public function getBox201()
    {
        return $this->box201;
    }


    public function setBox201($box201): self
    {
        $this->box201 = $box201;

        return $this;
    }


    public function getBox202()
    {
        return $this->box202;
    }


    public function setBox202($box202): self
    {
        $this->box202 = $box202;

        return $this;
    }

    public function getBox217(): ?\DateTimeInterface
    {
        return $this->box217;
    }

    public function setBox217(?\DateTimeInterface $box217): self
    {
        $this->box217 = $box217;

        return $this;
    }

    public function getBox203(): ?string
    {
        return $this->box203;
    }

    public function setBox203(?string $box203): self
    {
        $this->box203 = $box203;

        return $this;
    }

    public function getBox204(): ?string
    {
        return $this->box204;
    }

    public function setBox204(?string $box204): self
    {
        $this->box204 = $box204;

        return $this;
    }

    public function getBox205(): ?string
    {
        return $this->box205;
    }

    public function setBox205(?string $box205): self
    {
        $this->box205 = $box205;

        return $this;
    }

    public function getBox206(): ?string
    {
        return $this->box206;
    }

    public function setBox206(?string $box206): self
    {
        $this->box206 = $box206;

        return $this;
    }

    public function getBox207(): ?string
    {
        return $this->box207;
    }

    public function setBox207(?string $box207): self
    {
        $this->box207 = $box207;

        return $this;
    }

    public function getBox208(): ?string
    {
        return $this->box208;
    }

    public function setBox208(?string $box208): self
    {
        $this->box208 = $box208;

        return $this;
    }

    public function getBox209(): ?string
    {
        return $this->box209;
    }

    public function setBox209(?string $box209): self
    {
        $this->box209 = $box209;

        return $this;
    }

    public function getBox210(): ?string
    {
        return $this->box210;
    }

    public function setBox210(?string $box210): self
    {
        $this->box210 = $box210;

        return $this;
    }

    public function getBox211(): ?int
    {
        return $this->box211;
    }

    public function setBox211(?int $box211): self
    {
        $this->box211 = $box211;

        return $this;
    }

    public function getBox212(): ?int
    {
        return $this->box212;
    }

    public function setBox212(?int $box212): self
    {
        $this->box212 = $box212;

        return $this;
    }

    public function getBox213(): ?int
    {
        return $this->box213;
    }

    public function setBox213(?int $box213): self
    {
        $this->box213 = $box213;

        return $this;
    }

    public function getBox214(): ?string
    {
        return $this->box214;
    }

    public function setBox214(?string $box214): self
    {
        $this->box214 = $box214;

        return $this;
    }

    public function getBox215(): ?string
    {
        return $this->box215;
    }

    public function setBox215(?string $box215): self
    {
        $this->box215 = $box215;

        return $this;
    }

    public function getBox216(): ?string
    {
        return $this->box216;
    }

    public function setBox216(?string $box216): self
    {
        $this->box216 = $box216;

        return $this;
    }

    public function getBox301(): ?bool
    {
        return $this->box301;
    }

    public function setBox301(?bool $box301): self
    {
        $this->box301 = $box301;

        return $this;
    }

    public function getBox302(): ?bool
    {
        return $this->box302;
    }

    public function setBox302(?bool $box302): self
    {
        $this->box302 = $box302;

        return $this;
    }

    public function getBox317(): ?\DateTimeInterface
    {
        return $this->box317;
    }

    public function setBox317(?\DateTimeInterface $box317): self
    {
        $this->box317 = $box317;

        return $this;
    }

    public function getBox303(): ?string
    {
        return $this->box303;
    }

    public function setBox303(?string $box303): self
    {
        $this->box303 = $box303;

        return $this;
    }

    public function getBox304(): ?string
    {
        return $this->box304;
    }

    public function setBox304(?string $box304): self
    {
        $this->box304 = $box304;

        return $this;
    }

    public function getBox305(): ?string
    {
        return $this->box305;
    }

    public function setBox305(?string $box305): self
    {
        $this->box305 = $box305;

        return $this;
    }

    public function getBox306(): ?string
    {
        return $this->box306;
    }

    public function setBox306(?string $box306): self
    {
        $this->box306 = $box306;

        return $this;
    }

    public function getBox307(): ?string
    {
        return $this->box307;
    }

    public function setBox307(?string $box307): self
    {
        $this->box307 = $box307;

        return $this;
    }

    public function getBox308(): ?string
    {
        return $this->box308;
    }

    public function setBox308(?string $box308): self
    {
        $this->box308 = $box308;

        return $this;
    }

    public function getBox309(): ?string
    {
        return $this->box309;
    }

    public function setBox309(?string $box309): self
    {
        $this->box309 = $box309;

        return $this;
    }

    public function getBox310(): ?string
    {
        return $this->box310;
    }

    public function setBox310(?string $box310): self
    {
        $this->box310 = $box310;

        return $this;
    }

    public function getBox311(): ?int
    {
        return $this->box311;
    }

    public function setBox311(?int $box311): self
    {
        $this->box311 = $box311;

        return $this;
    }

    public function getBox312(): ?int
    {
        return $this->box312;
    }

    public function setBox312(?int $box312): self
    {
        $this->box312 = $box312;

        return $this;
    }

    public function getBox313(): ?int
    {
        return $this->box313;
    }

    public function setBox313(?int $box313): self
    {
        $this->box313 = $box313;

        return $this;
    }

    public function getBox314(): ?string
    {
        return $this->box314;
    }

    public function setBox314(?string $box314): self
    {
        $this->box314 = $box314;

        return $this;
    }

    public function getBox315(): ?string
    {
        return $this->box315;
    }

    public function setBox315(?string $box315): self
    {
        $this->box315 = $box315;

        return $this;
    }

    public function getBox316(): ?string
    {
        return $this->box316;
    }

    public function setBox316(?string $box316): self
    {
        $this->box316 = $box316;

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

    public function getBox427(): ?string
    {
        return $this->box427;
    }

    public function setBox427(?string $box427): self
    {
        $this->box427 = $box427;

        return $this;
    }

    public function getBox431(): ?bool
    {
        return $this->box431;
    }

    public function setBox431(?bool $box431): self
    {
        $this->box431 = $box431;

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

    public function getBox432(): ?bool
    {
        return $this->box432;
    }

    public function setBox432(?bool $box432): self
    {
        $this->box432 = $box432;

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

    public function getBox423(): ?int
    {
        return $this->box423;
    }

    public function setBox423(?int $box423): self
    {
        $this->box423 = $box423;

        return $this;
    }

    public function getBox424(): ?string
    {
        return $this->box424;
    }

    public function setBox424(?string $box424): self
    {
        $this->box424 = $box424;

        return $this;
    }

    public function getBox425(): ?string
    {
        return $this->box425;
    }

    public function setBox425(?string $box425): self
    {
        $this->box425 = $box425;

        return $this;
    }

    public function getBox428(): ?string
    {
        return $this->box428;
    }

    public function setBox428(?string $box428): self
    {
        $this->box428 = $box428;

        return $this;
    }

    public function getBox430(): ?string
    {
        return $this->box430;
    }

    public function setBox430(?string $box430): self
    {
        $this->box430 = $box430;

        return $this;
    }

    public function getBox501(): ?bool
    {
        return $this->box501;
    }

    public function setBox501(?bool $box501): self
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

    public function getBox503(): ?string
    {
        return $this->box503;
    }

    public function setBox503(?string $box503): self
    {
        $this->box503 = $box503;

        return $this;
    }

    public function getBox504(): ?string
    {
        return $this->box504;
    }

    public function setBox504(?string $box504): self
    {
        $this->box504 = $box504;

        return $this;
    }

    public function getBox505(): ?string
    {
        return $this->box505;
    }

    public function setBox505(?string $box505): self
    {
        $this->box505 = $box505;

        return $this;
    }

    public function getBox507(): ?string
    {
        return $this->box507;
    }

    public function setBox507(?string $box507): self
    {
        $this->box507 = $box507;

        return $this;
    }

    public function getBox508(): ?string
    {
        return $this->box508;
    }

    public function setBox508(?string $box508): self
    {
        $this->box508 = $box508;

        return $this;
    }

    public function getBox509(): ?string
    {
        return $this->box509;
    }

    public function setBox509(?string $box509): self
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

    public function getBox600(): ?bool
    {
        return $this->box600;
    }

    public function setBox600(?bool $box600): self
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

    public function getBox614(): ?int
    {
        return $this->box614;
    }

    public function setBox614(?int $box614): self
    {
        $this->box614 = $box614;

        return $this;
    }

    public function getBox615(): ?string
    {
        return $this->box615;
    }

    public function setBox615(?string $box615): self
    {
        $this->box615 = $box615;

        return $this;
    }

    public function getBox616(): ?string
    {
        return $this->box616;
    }

    public function setBox616(?string $box616): self
    {
        $this->box616 = $box616;

        return $this;
    }

    public function getBox620(): ?string
    {
        return $this->box620;
    }

    public function setBox620(?string $box620): self
    {
        $this->box620 = $box620;

        return $this;
    }

    public function getBox621(): ?string
    {
        return $this->box621;
    }

    public function setBox621(?string $box621): self
    {
        $this->box621 = $box621;

        return $this;
    }

    public function getBox622(): ?string
    {
        return $this->box622;
    }

    public function setBox622(?string $box622): self
    {
        $this->box622 = $box622;

        return $this;
    }

    public function getBox623(): ?string
    {
        return $this->box623;
    }

    public function setBox623(?string $box623): self
    {
        $this->box623 = $box623;

        return $this;
    }

    public function getBox624(): ?int
    {
        return $this->box624;
    }

    public function setBox624(?int $box624): self
    {
        $this->box624 = $box624;

        return $this;
    }

    public function getBox625(): ?string
    {
        return $this->box625;
    }

    public function setBox625(?string $box625): self
    {
        $this->box625 = $box625;

        return $this;
    }

    public function getBox629(): ?string
    {
        return $this->box629;
    }

    public function setBox629(?string $box629): self
    {
        $this->box629 = $box629;

        return $this;
    }

    public function getBox630(): ?string
    {
        return $this->box630;
    }

    public function setBox630(?string $box630): self
    {
        $this->box630 = $box630;

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

    public function getBox703(): ?string
    {
        return $this->box703;
    }

    public function setBox703(?string $box703): self
    {
        $this->box703 = $box703;

        return $this;
    }

    public function getBox704(): ?bool
    {
        return $this->box704;
    }

    public function setBox704(?bool $box704): self
    {
        $this->box704 = $box704;

        return $this;
    }

    public function getBox705(): ?bool
    {
        return $this->box705;
    }

    public function setBox705(?bool $box705): self
    {
        $this->box705 = $box705;

        return $this;
    }

    public function getBox706(): ?string
    {
        return $this->box706;
    }

    public function setBox706(?string $box706): self
    {
        $this->box706 = $box706;

        return $this;
    }

    public function getBox707(): ?string
    {
        return $this->box707;
    }

    public function setBox707(?string $box707): self
    {
        $this->box707 = $box707;

        return $this;
    }

    public function getBox708(): ?string
    {
        return $this->box708;
    }

    public function setBox708(?string $box708): self
    {
        $this->box708 = $box708;

        return $this;
    }

    public function getBox801(): ?bool
    {
        return $this->box801;
    }

    public function setBox801(?bool $box801): self
    {
        $this->box801 = $box801;

        return $this;
    }

    public function getBox802(): ?bool
    {
        return $this->box802;
    }

    public function setBox802(?bool $box802): self
    {
        $this->box802 = $box802;

        return $this;
    }

    public function getBox803(): ?bool
    {
        return $this->box803;
    }

    public function setBox803(?bool $box803): self
    {
        $this->box803 = $box803;

        return $this;
    }

    public function getBox804(): ?bool
    {
        return $this->box804;
    }

    public function setBox804(?bool $box804): self
    {
        $this->box804 = $box804;

        return $this;
    }

    public function getBox805(): ?\DateTimeInterface
    {
        return $this->box805;
    }

    public function setBox805(?\DateTimeInterface $box805): self
    {
        $this->box805 = $box805;

        return $this;
    }
}
