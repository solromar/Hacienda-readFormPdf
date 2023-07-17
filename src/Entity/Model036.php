<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\Model036Repository;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model036Repository::class)
 */
class Model036 extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box65;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box68;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box69;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box70;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box71;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box72;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box73;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box74;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box75;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box76;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box77;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box78;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box79;

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
    private $box110;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box141;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box142;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box143;

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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box300;

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
    private $box303;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box304;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box305;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box306;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box307;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box308;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box309;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box310;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box330;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box331;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box332;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box333;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box334;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box350;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box351;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box352;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box353;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box354;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box355;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box356;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box357;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box358;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box359;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $box360;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box380;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box381;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $box382;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box383;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box384;

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
     * @ORM\Column(type="datetime")
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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box445;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box446;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box447;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box448;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box449;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box450;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box451;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box452;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box453;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box454;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box455;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box456;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box457;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box458;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box459;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box460;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box461;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box462;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box463;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box464;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box465;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box466;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box467;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box468;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box469;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box470;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box471;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box472;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box473;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box474;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box475;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box476;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box477;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $box478;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box479;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box480;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box481;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $box482;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box483;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box484;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box485;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box486;

    /**
     * @ORM\Column(type="float")
     */
    private $box487;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box488;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $box489;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box490;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box491;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box492;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box493;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box494;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box495;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box496;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box497;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box498;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box499;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box500;

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
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box513;

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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box518;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box519;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box520;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box521;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box522;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box523;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box524;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box525;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box526;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box527;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box528;

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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box532;

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
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box541;

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
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box545;

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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box574;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box575;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box576;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box577;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box578;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box579;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box580;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $box581;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box582;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box583;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box584;

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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box600;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box620;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box621;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box622;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box623;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box624;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box625;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box626;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box627;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box630;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box631;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box632;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box633;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box634;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box635;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box636;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box637;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box638;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box640;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box641;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box642;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box643;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box644;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box645;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box64;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box647;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box650;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box651;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box652;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box653;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box654;

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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box703;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box704;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box705;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box706;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box707;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box708;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box709;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box710;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box711;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box712;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $box713;

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
    private $box723;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box724;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box725;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box726;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box727;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box730;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box731;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box732;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box733;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $box736;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $box737;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $bbox738;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $box740;

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
     * @ORM\Column(type="string", length=120)
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
     * @ORM\Column(type="string", length=2, nullable=true)
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
    private $boxA21;

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
     * @ORM\Column(type="string", length=20, nullable=true)
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
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA41;

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
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA71;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA72;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA73;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA74;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxA75;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA76;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA77;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA78;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA79;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxA80;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $bboxA81;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA82;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxA83;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA84;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxA85;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $boxA91;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxA92;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA94;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $bboxA96;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxA98;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxB1;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxB2;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $boxB3;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB4;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB5;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $bboxB6;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB7;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $boxB8;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $bboxB9;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $boxB10;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB11;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB12;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB13;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB14;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB15;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB16;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB17;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB18;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB19;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB20;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB21;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $bboxB22;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxB23;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB24;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB25;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB26;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB27;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB28;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB29;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB30;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $bboxB31;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB32;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $boxB33;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB34;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB35;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB36;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $boxB37;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxB38;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxB39;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxB40;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB41;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB42;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB43;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB44;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB45;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB46;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $bboxB47;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB48;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB49;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB50;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB51;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB52;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxB53;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB54;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB55;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB59;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB60;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB61;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB62;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxB63;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB64;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxb68;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB69;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB71;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxb72;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB73;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $boxB74;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxB75;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB76;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB77;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB78;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB79;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxB80;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB81;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB82;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $boxB83;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB84;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxB85;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB90;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $boxB91;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boxB92;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB93;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB94;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB95;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB96;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxB97;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxB98;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC1;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC2;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC3;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC4;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $boxC5;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC6;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC7;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC8;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC9;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC10;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxC11;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC12;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxC13;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC14;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxC15;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC16;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC17;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC18;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC19;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC20;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC21;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC22;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $boxC23;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC24;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC25;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC26;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC27;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC28;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC29;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC30;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $boxC31;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $boxC40;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxC41;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC42;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxC43;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC44;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $boxC45;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC46;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC47;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC48;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC49;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $boxC50;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC51;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC52;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $boxC53;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC54;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC55;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC59;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC60;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $boxC61;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC62;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $boxC63;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC64;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $boxC68;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $boxC69;

    
    public function getBox65(): ?string
    {
        return $this->box65;
    }

    public function setBox65(?string $box65): self
    {
        $this->box65 = $box65;

        return $this;
    }

    public function getBox68(): ?bool
    {
        return $this->box68;
    }

    public function setBox68(?bool $box68): self
    {
        $this->box68 = $box68;

        return $this;
    }

    public function getBox69(): ?string
    {
        return $this->box69;
    }

    public function setBox69(?string $box69): self
    {
        $this->box69 = $box69;

        return $this;
    }

    public function getBox70(): ?bool
    {
        return $this->box70;
    }

    public function setBox70(?bool $box70): self
    {
        $this->box70 = $box70;

        return $this;
    }

    public function getBox71(): ?string
    {
        return $this->box71;
    }

    public function setBox71(?string $box71): self
    {
        $this->box71 = $box71;

        return $this;
    }

    public function getBox72(): ?bool
    {
        return $this->box72;
    }

    public function setBox72(?bool $box72): self
    {
        $this->box72 = $box72;

        return $this;
    }

    public function getBox73(): ?string
    {
        return $this->box73;
    }

    public function setBox73(?string $box73): self
    {
        $this->box73 = $box73;

        return $this;
    }

    public function getBox74(): ?bool
    {
        return $this->box74;
    }

    public function setBox74(?bool $box74): self
    {
        $this->box74 = $box74;

        return $this;
    }

    public function getBox75(): ?string
    {
        return $this->box75;
    }

    public function setBox75(?string $box75): self
    {
        $this->box75 = $box75;

        return $this;
    }

    public function getBox76(): ?bool
    {
        return $this->box76;
    }

    public function setBox76(?bool $box76): self
    {
        $this->box76 = $box76;

        return $this;
    }

    public function getBox77(): ?string
    {
        return $this->box77;
    }

    public function setBox77(?string $box77): self
    {
        $this->box77 = $box77;

        return $this;
    }

    public function getBox78(): ?bool
    {
        return $this->box78;
    }

    public function setBox78(?bool $box78): self
    {
        $this->box78 = $box78;

        return $this;
    }

    public function getBox79(): ?string
    {
        return $this->box79;
    }

    public function setBox79(?string $box79): self
    {
        $this->box79 = $box79;

        return $this;
    }

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

    public function getBox110(): ?bool
    {
        return $this->box110;
    }

    public function setBox110(?bool $box110): self
    {
        $this->box110 = $box110;

        return $this;
    }

    public function getBox141(): ?\DateTimeInterface
    {
        return $this->box141;
    }

    public function setBox141(?\DateTimeInterface $box141): self
    {
        $this->box141 = $box141;

        return $this;
    }

    public function getBox142(): ?bool
    {
        return $this->box142;
    }

    public function setBox142(?bool $box142): self
    {
        $this->box142 = $box142;

        return $this;
    }

    public function getBox143(): ?bool
    {
        return $this->box143;
    }

    public function setBox143(?bool $box143): self
    {
        $this->box143 = $box143;

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

    public function getBox300(): ?bool
    {
        return $this->box300;
    }

    public function setBox300(?bool $box300): self
    {
        $this->box300 = $box300;

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

    public function getBox303(): ?\DateTimeInterface
    {
        return $this->box303;
    }

    public function setBox303(?\DateTimeInterface $box303): self
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

    public function getBox330(): ?bool
    {
        return $this->box330;
    }

    public function setBox330(?bool $box330): self
    {
        $this->box330 = $box330;

        return $this;
    }

    public function getBox331(): ?string
    {
        return $this->box331;
    }

    public function setBox331(?string $box331): self
    {
        $this->box331 = $box331;

        return $this;
    }

    public function getBox332(): ?bool
    {
        return $this->box332;
    }

    public function setBox332(?bool $box332): self
    {
        $this->box332 = $box332;

        return $this;
    }

    public function getBox333(): ?string
    {
        return $this->box333;
    }

    public function setBox333(?string $box333): self
    {
        $this->box333 = $box333;

        return $this;
    }

    public function getBox334(): ?string
    {
        return $this->box334;
    }

    public function setBox334(?string $box334): self
    {
        $this->box334 = $box334;

        return $this;
    }

    public function getBox350(): ?bool
    {
        return $this->box350;
    }

    public function setBox350(?bool $box350): self
    {
        $this->box350 = $box350;

        return $this;
    }

    public function getBox351(): ?bool
    {
        return $this->box351;
    }

    public function setBox351(?bool $box351): self
    {
        $this->box351 = $box351;

        return $this;
    }

    public function getBox352(): ?bool
    {
        return $this->box352;
    }

    public function setBox352(?bool $box352): self
    {
        $this->box352 = $box352;

        return $this;
    }

    public function getBox353(): ?\DateTimeInterface
    {
        return $this->box353;
    }

    public function setBox353(?\DateTimeInterface $box353): self
    {
        $this->box353 = $box353;

        return $this;
    }

    public function getBox354(): ?string
    {
        return $this->box354;
    }

    public function setBox354(?string $box354): self
    {
        $this->box354 = $box354;

        return $this;
    }

    public function getBox355(): ?string
    {
        return $this->box355;
    }

    public function setBox355(?string $box355): self
    {
        $this->box355 = $box355;

        return $this;
    }

    public function getBox356(): ?string
    {
        return $this->box356;
    }

    public function setBox356(?string $box356): self
    {
        $this->box356 = $box356;

        return $this;
    }

    public function getBox357(): ?string
    {
        return $this->box357;
    }

    public function setBox357(?string $box357): self
    {
        $this->box357 = $box357;

        return $this;
    }

    public function getBox358(): ?string
    {
        return $this->box358;
    }

    public function setBox358(?string $box358): self
    {
        $this->box358 = $box358;

        return $this;
    }

    public function getBox359(): ?string
    {
        return $this->box359;
    }

    public function setBox359(?string $box359): self
    {
        $this->box359 = $box359;

        return $this;
    }

    public function getBox360(): ?string
    {
        return $this->box360;
    }

    public function setBox360(?string $box360): self
    {
        $this->box360 = $box360;

        return $this;
    }

    public function getBox380(): ?bool
    {
        return $this->box380;
    }

    public function setBox380(?bool $box380): self
    {
        $this->box380 = $box380;

        return $this;
    }

    public function getBox381(): ?string
    {
        return $this->box381;
    }

    public function setBox381(?string $box381): self
    {
        $this->box381 = $box381;

        return $this;
    }

    public function getBox382(): ?string
    {
        return $this->box382;
    }

    public function setBox382(?string $box382): self
    {
        $this->box382 = $box382;

        return $this;
    }

    public function getBox383(): ?string
    {
        return $this->box383;
    }

    public function setBox383(?string $box383): self
    {
        $this->box383 = $box383;

        return $this;
    }

    public function getBox384(): ?string
    {
        return $this->box384;
    }

    public function setBox384(?string $box384): self
    {
        $this->box384 = $box384;

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

    public function setBox431(\DateTimeInterface $box431): self
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

    public function getBox445(): ?bool
    {
        return $this->box445;
    }

    public function setBox445(?bool $box445): self
    {
        $this->box445 = $box445;

        return $this;
    }

    public function getBox446(): ?\DateTimeInterface
    {
        return $this->box446;
    }

    public function setBox446(?\DateTimeInterface $box446): self
    {
        $this->box446 = $box446;

        return $this;
    }

    public function getBox447(): ?string
    {
        return $this->box447;
    }

    public function setBox447(?string $box447): self
    {
        $this->box447 = $box447;

        return $this;
    }

    public function getBox448(): ?bool
    {
        return $this->box448;
    }

    public function setBox448(?bool $box448): self
    {
        $this->box448 = $box448;

        return $this;
    }

    public function getBox449(): ?\DateTimeInterface
    {
        return $this->box449;
    }

    public function setBox449(?\DateTimeInterface $box449): self
    {
        $this->box449 = $box449;

        return $this;
    }

    public function getBox450(): ?string
    {
        return $this->box450;
    }

    public function setBox450(?string $box450): self
    {
        $this->box450 = $box450;

        return $this;
    }

    public function getBox451(): ?bool
    {
        return $this->box451;
    }

    public function setBox451(?bool $box451): self
    {
        $this->box451 = $box451;

        return $this;
    }

    public function getBox452(): ?\DateTimeInterface
    {
        return $this->box452;
    }

    public function setBox452(?\DateTimeInterface $box452): self
    {
        $this->box452 = $box452;

        return $this;
    }

    public function getBox453(): ?string
    {
        return $this->box453;
    }

    public function setBox453(?string $box453): self
    {
        $this->box453 = $box453;

        return $this;
    }

    public function getBox454(): ?string
    {
        return $this->box454;
    }

    public function setBox454(?string $box454): self
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

    public function getBox456(): ?string
    {
        return $this->box456;
    }

    public function setBox456(?string $box456): self
    {
        $this->box456 = $box456;

        return $this;
    }

    public function getBox457(): ?string
    {
        return $this->box457;
    }

    public function setBox457(?string $box457): self
    {
        $this->box457 = $box457;

        return $this;
    }

    public function getBox458(): ?string
    {
        return $this->box458;
    }

    public function setBox458(?string $box458): self
    {
        $this->box458 = $box458;

        return $this;
    }

    public function getBox459(): ?string
    {
        return $this->box459;
    }

    public function setBox459(?string $box459): self
    {
        $this->box459 = $box459;

        return $this;
    }

    public function getBox460(): ?int
    {
        return $this->box460;
    }

    public function setBox460(?int $box460): self
    {
        $this->box460 = $box460;

        return $this;
    }

    public function getBox461(): ?string
    {
        return $this->box461;
    }

    public function setBox461(?string $box461): self
    {
        $this->box461 = $box461;

        return $this;
    }

    public function getBox462(): ?string
    {
        return $this->box462;
    }

    public function setBox462(?string $box462): self
    {
        $this->box462 = $box462;

        return $this;
    }

    public function getBox463(): ?string
    {
        return $this->box463;
    }

    public function setBox463(?string $box463): self
    {
        $this->box463 = $box463;

        return $this;
    }

    public function getBox464(): ?float
    {
        return $this->box464;
    }

    public function setBox464(?float $box464): self
    {
        $this->box464 = $box464;

        return $this;
    }

    public function getBox465(): ?float
    {
        return $this->box465;
    }

    public function setBox465(?float $box465): self
    {
        $this->box465 = $box465;

        return $this;
    }

    public function getBox466(): ?string
    {
        return $this->box466;
    }

    public function setBox466(?string $box466): self
    {
        $this->box466 = $box466;

        return $this;
    }

    public function getBox467(): ?string
    {
        return $this->box467;
    }

    public function setBox467(?string $box467): self
    {
        $this->box467 = $box467;

        return $this;
    }

    public function getBox468(): ?bool
    {
        return $this->box468;
    }

    public function setBox468(?bool $box468): self
    {
        $this->box468 = $box468;

        return $this;
    }

    public function getBox469(): ?\DateTimeInterface
    {
        return $this->box469;
    }

    public function setBox469(?\DateTimeInterface $box469): self
    {
        $this->box469 = $box469;

        return $this;
    }

    public function getBox470(): ?string
    {
        return $this->box470;
    }

    public function setBox470(?string $box470): self
    {
        $this->box470 = $box470;

        return $this;
    }

    public function getBox471(): ?bool
    {
        return $this->box471;
    }

    public function setBox471(?bool $box471): self
    {
        $this->box471 = $box471;

        return $this;
    }

    public function getBox472(): ?\DateTimeInterface
    {
        return $this->box472;
    }

    public function setBox472(?\DateTimeInterface $box472): self
    {
        $this->box472 = $box472;

        return $this;
    }

    public function getBox473(): ?string
    {
        return $this->box473;
    }

    public function setBox473(?string $box473): self
    {
        $this->box473 = $box473;

        return $this;
    }

    public function getBox474(): ?bool
    {
        return $this->box474;
    }

    public function setBox474(?bool $box474): self
    {
        $this->box474 = $box474;

        return $this;
    }

    public function getBox475(): ?\DateTimeInterface
    {
        return $this->box475;
    }

    public function setBox475(?\DateTimeInterface $box475): self
    {
        $this->box475 = $box475;

        return $this;
    }

    public function getBox476(): ?string
    {
        return $this->box476;
    }

    public function setBox476(?string $box476): self
    {
        $this->box476 = $box476;

        return $this;
    }

    public function getBox477(): ?string
    {
        return $this->box477;
    }

    public function setBox477(?string $box477): self
    {
        $this->box477 = $box477;

        return $this;
    }

    public function getBox478(): ?string
    {
        return $this->box478;
    }

    public function setBox478(?string $box478): self
    {
        $this->box478 = $box478;

        return $this;
    }

    public function getBox479(): ?string
    {
        return $this->box479;
    }

    public function setBox479(?string $box479): self
    {
        $this->box479 = $box479;

        return $this;
    }

    public function getBox480(): ?string
    {
        return $this->box480;
    }

    public function setBox480(?string $box480): self
    {
        $this->box480 = $box480;

        return $this;
    }

    public function getBox481(): ?string
    {
        return $this->box481;
    }

    public function setBox481(?string $box481): self
    {
        $this->box481 = $box481;

        return $this;
    }

    public function getBox482(): ?string
    {
        return $this->box482;
    }

    public function setBox482(?string $box482): self
    {
        $this->box482 = $box482;

        return $this;
    }

    public function getBox483(): ?int
    {
        return $this->box483;
    }

    public function setBox483(?int $box483): self
    {
        $this->box483 = $box483;

        return $this;
    }

    public function getBox484(): ?string
    {
        return $this->box484;
    }

    public function setBox484(?string $box484): self
    {
        $this->box484 = $box484;

        return $this;
    }

    public function getBox485(): ?string
    {
        return $this->box485;
    }

    public function setBox485(?string $box485): self
    {
        $this->box485 = $box485;

        return $this;
    }

    public function getBox486(): ?string
    {
        return $this->box486;
    }

    public function setBox486(?string $box486): self
    {
        $this->box486 = $box486;

        return $this;
    }

    public function getBox487(): ?float
    {
        return $this->box487;
    }

    public function setBox487(float $box487): self
    {
        $this->box487 = $box487;

        return $this;
    }

    public function getBox488(): ?float
    {
        return $this->box488;
    }

    public function setBox488(?float $box488): self
    {
        $this->box488 = $box488;

        return $this;
    }

    public function getBox489(): ?string
    {
        return $this->box489;
    }

    public function setBox489(?string $box489): self
    {
        $this->box489 = $box489;

        return $this;
    }

    public function getBox490(): ?string
    {
        return $this->box490;
    }

    public function setBox490(?string $box490): self
    {
        $this->box490 = $box490;

        return $this;
    }

    public function getBox491(): ?bool
    {
        return $this->box491;
    }

    public function setBox491(?bool $box491): self
    {
        $this->box491 = $box491;

        return $this;
    }

    public function getBox492(): ?\DateTimeInterface
    {
        return $this->box492;
    }

    public function setBox492(?\DateTimeInterface $box492): self
    {
        $this->box492 = $box492;

        return $this;
    }

    public function getBox493(): ?string
    {
        return $this->box493;
    }

    public function setBox493(?string $box493): self
    {
        $this->box493 = $box493;

        return $this;
    }

    public function getBox494(): ?bool
    {
        return $this->box494;
    }

    public function setBox494(?bool $box494): self
    {
        $this->box494 = $box494;

        return $this;
    }

    public function getBox495(): ?\DateTimeInterface
    {
        return $this->box495;
    }

    public function setBox495(?\DateTimeInterface $box495): self
    {
        $this->box495 = $box495;

        return $this;
    }

    public function getBox496(): ?string
    {
        return $this->box496;
    }

    public function setBox496(?string $box496): self
    {
        $this->box496 = $box496;

        return $this;
    }

    public function getBox497(): ?bool
    {
        return $this->box497;
    }

    public function setBox497(?bool $box497): self
    {
        $this->box497 = $box497;

        return $this;
    }

    public function getBox498(): ?\DateTimeInterface
    {
        return $this->box498;
    }

    public function setBox498(?\DateTimeInterface $box498): self
    {
        $this->box498 = $box498;

        return $this;
    }

    public function getBox499(): ?string
    {
        return $this->box499;
    }

    public function setBox499(?string $box499): self
    {
        $this->box499 = $box499;

        return $this;
    }

    public function getBox500(): ?string
    {
        return $this->box500;
    }

    public function setBox500(?string $box500): self
    {
        $this->box500 = $box500;

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

    public function getBox513(): ?string
    {
        return $this->box513;
    }

    public function setBox513(?string $box513): self
    {
        $this->box513 = $box513;

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

    public function getBox518(): ?string
    {
        return $this->box518;
    }

    public function setBox518(?string $box518): self
    {
        $this->box518 = $box518;

        return $this;
    }

    public function getBox519(): ?string
    {
        return $this->box519;
    }

    public function setBox519(?string $box519): self
    {
        $this->box519 = $box519;

        return $this;
    }

    public function getBox520(): ?\DateTimeInterface
    {
        return $this->box520;
    }

    public function setBox520(?\DateTimeInterface $box520): self
    {
        $this->box520 = $box520;

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

    public function getBox522(): ?string
    {
        return $this->box522;
    }

    public function setBox522(?string $box522): self
    {
        $this->box522 = $box522;

        return $this;
    }

    public function getBox523(): ?string
    {
        return $this->box523;
    }

    public function setBox523(?string $box523): self
    {
        $this->box523 = $box523;

        return $this;
    }

    public function getBox524(): ?\DateTimeInterface
    {
        return $this->box524;
    }

    public function setBox524(?\DateTimeInterface $box524): self
    {
        $this->box524 = $box524;

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

    public function getBox526(): ?string
    {
        return $this->box526;
    }

    public function setBox526(?string $box526): self
    {
        $this->box526 = $box526;

        return $this;
    }

    public function getBox527(): ?string
    {
        return $this->box527;
    }

    public function setBox527(?string $box527): self
    {
        $this->box527 = $box527;

        return $this;
    }

    public function getBox528(): ?\DateTimeInterface
    {
        return $this->box528;
    }

    public function setBox528(?\DateTimeInterface $box528): self
    {
        $this->box528 = $box528;

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

    public function getBox532(): ?bool
    {
        return $this->box532;
    }

    public function setBox532(?bool $box532): self
    {
        $this->box532 = $box532;

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

    public function getBox541(): ?string
    {
        return $this->box541;
    }

    public function setBox541(?string $box541): self
    {
        $this->box541 = $box541;

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

    public function getBox545(): ?\DateTimeInterface
    {
        return $this->box545;
    }

    public function setBox545(?\DateTimeInterface $box545): self
    {
        $this->box545 = $box545;

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

    public function getBox574(): ?string
    {
        return $this->box574;
    }

    public function setBox574(?string $box574): self
    {
        $this->box574 = $box574;

        return $this;
    }

    public function getBox575(): ?string
    {
        return $this->box575;
    }

    public function setBox575(?string $box575): self
    {
        $this->box575 = $box575;

        return $this;
    }

    public function getBox576(): ?\DateTimeInterface
    {
        return $this->box576;
    }

    public function setBox576(?\DateTimeInterface $box576): self
    {
        $this->box576 = $box576;

        return $this;
    }

    public function getBox577(): ?string
    {
        return $this->box577;
    }

    public function setBox577(?string $box577): self
    {
        $this->box577 = $box577;

        return $this;
    }

    public function getBox578(): ?\DateTimeInterface
    {
        return $this->box578;
    }

    public function setBox578(?\DateTimeInterface $box578): self
    {
        $this->box578 = $box578;

        return $this;
    }

    public function getBox579(): ?bool
    {
        return $this->box579;
    }

    public function setBox579(?bool $box579): self
    {
        $this->box579 = $box579;

        return $this;
    }

    public function getBox580(): ?bool
    {
        return $this->box580;
    }

    public function setBox580(?bool $box580): self
    {
        $this->box580 = $box580;

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

    public function getBox582(): ?bool
    {
        return $this->box582;
    }

    public function setBox582(?bool $box582): self
    {
        $this->box582 = $box582;

        return $this;
    }

    public function getBox583(): ?bool
    {
        return $this->box583;
    }

    public function setBox583(?bool $box583): self
    {
        $this->box583 = $box583;

        return $this;
    }

    public function getBox584(): ?\DateTimeInterface
    {
        return $this->box584;
    }

    public function setBox584(?\DateTimeInterface $box584): self
    {
        $this->box584 = $box584;

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

    public function setBox592(?string $box592): self
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

    public function getBox623(): ?bool
    {
        return $this->box623;
    }

    public function setBox623(?bool $box623): self
    {
        $this->box623 = $box623;

        return $this;
    }

    public function getBox624(): ?bool
    {
        return $this->box624;
    }

    public function setBox624(?bool $box624): self
    {
        $this->box624 = $box624;

        return $this;
    }

    public function getBox625(): ?bool
    {
        return $this->box625;
    }

    public function setBox625(?bool $box625): self
    {
        $this->box625 = $box625;

        return $this;
    }

    public function getBox626(): ?bool
    {
        return $this->box626;
    }

    public function setBox626(?bool $box626): self
    {
        $this->box626 = $box626;

        return $this;
    }

    public function getBox627(): ?bool
    {
        return $this->box627;
    }

    public function setBox627(?bool $box627): self
    {
        $this->box627 = $box627;

        return $this;
    }

    public function getBox630(): ?bool
    {
        return $this->box630;
    }

    public function setBox630(?bool $box630): self
    {
        $this->box630 = $box630;

        return $this;
    }

    public function getBox631(): ?bool
    {
        return $this->box631;
    }

    public function setBox631(?bool $box631): self
    {
        $this->box631 = $box631;

        return $this;
    }

    public function getBox632(): ?bool
    {
        return $this->box632;
    }

    public function setBox632(?bool $box632): self
    {
        $this->box632 = $box632;

        return $this;
    }

    public function getBox633(): ?string
    {
        return $this->box633;
    }

    public function setBox633(?string $box633): self
    {
        $this->box633 = $box633;

        return $this;
    }

    public function getBox634(): ?string
    {
        return $this->box634;
    }

    public function setBox634(?string $box634): self
    {
        $this->box634 = $box634;

        return $this;
    }

    public function getBox635(): ?string
    {
        return $this->box635;
    }

    public function setBox635(?string $box635): self
    {
        $this->box635 = $box635;

        return $this;
    }

    public function getBox636(): ?\DateTimeInterface
    {
        return $this->box636;
    }

    public function setBox636(?\DateTimeInterface $box636): self
    {
        $this->box636 = $box636;

        return $this;
    }

    public function getBox637(): ?\DateTimeInterface
    {
        return $this->box637;
    }

    public function setBox637(?\DateTimeInterface $box637): self
    {
        $this->box637 = $box637;

        return $this;
    }

    public function getBox638(): ?\DateTimeInterface
    {
        return $this->box638;
    }

    public function setBox638(?\DateTimeInterface $box638): self
    {
        $this->box638 = $box638;

        return $this;
    }

    public function getBox640(): ?\DateTimeInterface
    {
        return $this->box640;
    }

    public function setBox640(?\DateTimeInterface $box640): self
    {
        $this->box640 = $box640;

        return $this;
    }

    public function getBox641(): ?\DateTimeInterface
    {
        return $this->box641;
    }

    public function setBox641(?\DateTimeInterface $box641): self
    {
        $this->box641 = $box641;

        return $this;
    }

    public function getBox642(): ?\DateTimeInterface
    {
        return $this->box642;
    }

    public function setBox642(?\DateTimeInterface $box642): self
    {
        $this->box642 = $box642;

        return $this;
    }

    public function getBox643(): ?\DateTimeInterface
    {
        return $this->box643;
    }

    public function setBox643(?\DateTimeInterface $box643): self
    {
        $this->box643 = $box643;

        return $this;
    }

    public function getBox644(): ?\DateTimeInterface
    {
        return $this->box644;
    }

    public function setBox644(?\DateTimeInterface $box644): self
    {
        $this->box644 = $box644;

        return $this;
    }

    public function getBox645(): ?\DateTimeInterface
    {
        return $this->box645;
    }

    public function setBox645(?\DateTimeInterface $box645): self
    {
        $this->box645 = $box645;

        return $this;
    }

    public function getBox64(): ?\DateTimeInterface
    {
        return $this->box64;
    }

    public function setBox64(?\DateTimeInterface $box64): self
    {
        $this->box64 = $box64;

        return $this;
    }

    public function getBox647(): ?\DateTimeInterface
    {
        return $this->box647;
    }

    public function setBox647(?\DateTimeInterface $box647): self
    {
        $this->box647 = $box647;

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

    public function getBox651(): ?bool
    {
        return $this->box651;
    }

    public function setBox651(?bool $box651): self
    {
        $this->box651 = $box651;

        return $this;
    }

    public function getBox652(): ?bool
    {
        return $this->box652;
    }

    public function setBox652(?bool $box652): self
    {
        $this->box652 = $box652;

        return $this;
    }

    public function getBox653(): ?\DateTimeInterface
    {
        return $this->box653;
    }

    public function setBox653(?\DateTimeInterface $box653): self
    {
        $this->box653 = $box653;

        return $this;
    }

    public function getBox654(): ?\DateTimeInterface
    {
        return $this->box654;
    }

    public function setBox654(?\DateTimeInterface $box654): self
    {
        $this->box654 = $box654;

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

    public function getBox703(): ?string
    {
        return $this->box703;
    }

    public function setBox703(?string $box703): self
    {
        $this->box703 = $box703;

        return $this;
    }

    public function getBox704(): ?string
    {
        return $this->box704;
    }

    public function setBox704(?string $box704): self
    {
        $this->box704 = $box704;

        return $this;
    }

    public function getBox705(): ?string
    {
        return $this->box705;
    }

    public function setBox705(?string $box705): self
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

    public function getBox709(): ?\DateTimeInterface
    {
        return $this->box709;
    }

    public function setBox709(?\DateTimeInterface $box709): self
    {
        $this->box709 = $box709;

        return $this;
    }

    public function getBox710(): ?string
    {
        return $this->box710;
    }

    public function setBox710(?string $box710): self
    {
        $this->box710 = $box710;

        return $this;
    }

    public function getBox711(): ?string
    {
        return $this->box711;
    }

    public function setBox711(?string $box711): self
    {
        $this->box711 = $box711;

        return $this;
    }

    public function getBox712(): ?string
    {
        return $this->box712;
    }

    public function setBox712(?string $box712): self
    {
        $this->box712 = $box712;

        return $this;
    }

    public function getBox713(): ?string
    {
        return $this->box713;
    }

    public function setBox713(?string $box713): self
    {
        $this->box713 = $box713;

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

    public function getBox723(): ?\DateTimeInterface
    {
        return $this->box723;
    }

    public function setBox723(?\DateTimeInterface $box723): self
    {
        $this->box723 = $box723;

        return $this;
    }

    public function getBox724(): ?\DateTimeInterface
    {
        return $this->box724;
    }

    public function setBox724(?\DateTimeInterface $box724): self
    {
        $this->box724 = $box724;

        return $this;
    }

    public function getBox725(): ?\DateTimeInterface
    {
        return $this->box725;
    }

    public function setBox725(?\DateTimeInterface $box725): self
    {
        $this->box725 = $box725;

        return $this;
    }

    public function getBox726(): ?\DateTimeInterface
    {
        return $this->box726;
    }

    public function setBox726(?\DateTimeInterface $box726): self
    {
        $this->box726 = $box726;

        return $this;
    }

    public function getBox727(): ?\DateTimeInterface
    {
        return $this->box727;
    }

    public function setBox727(?\DateTimeInterface $box727): self
    {
        $this->box727 = $box727;

        return $this;
    }

    public function getBox730(): ?\DateTimeInterface
    {
        return $this->box730;
    }

    public function setBox730(?\DateTimeInterface $box730): self
    {
        $this->box730 = $box730;

        return $this;
    }

    public function getBox731(): ?\DateTimeInterface
    {
        return $this->box731;
    }

    public function setBox731(?\DateTimeInterface $box731): self
    {
        $this->box731 = $box731;

        return $this;
    }

    public function getBox732(): ?\DateTimeInterface
    {
        return $this->box732;
    }

    public function setBox732(?\DateTimeInterface $box732): self
    {
        $this->box732 = $box732;

        return $this;
    }

    public function getBox733(): ?\DateTimeInterface
    {
        return $this->box733;
    }

    public function setBox733(?\DateTimeInterface $box733): self
    {
        $this->box733 = $box733;

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

    public function getBox737(): ?bool
    {
        return $this->box737;
    }

    public function setBox737(?bool $box737): self
    {
        $this->box737 = $box737;

        return $this;
    }

    public function getBbox738(): ?\DateTimeInterface
    {
        return $this->bbox738;
    }

    public function setBbox738(?\DateTimeInterface $bbox738): self
    {
        $this->bbox738 = $bbox738;

        return $this;
    }

    public function getBox740(): ?string
    {
        return $this->box740;
    }

    public function setBox740(?string $box740): self
    {
        $this->box740 = $box740;

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

    public function setBoxA8(string $boxA8): self
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

    public function getBoxA21(): ?string
    {
        return $this->boxA21;
    }

    public function setBoxA21(?string $boxA21): self
    {
        $this->boxA21 = $boxA21;

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

    public function setBoxA26(?string $boxA26): self
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

    public function getBoxA71(): ?string
    {
        return $this->boxA71;
    }

    public function setBoxA71(?string $boxA71): self
    {
        $this->boxA71 = $boxA71;

        return $this;
    }

    public function getBoxA72(): ?string
    {
        return $this->boxA72;
    }

    public function setBoxA72(?string $boxA72): self
    {
        $this->boxA72 = $boxA72;

        return $this;
    }

    public function getBoxA73(): ?string
    {
        return $this->boxA73;
    }

    public function setBoxA73(?string $boxA73): self
    {
        $this->boxA73 = $boxA73;

        return $this;
    }

    public function getBoxA74(): ?string
    {
        return $this->boxA74;
    }

    public function setBoxA74(?string $boxA74): self
    {
        $this->boxA74 = $boxA74;

        return $this;
    }

    public function getBoxA75(): ?string
    {
        return $this->boxA75;
    }

    public function setBoxA75(?string $boxA75): self
    {
        $this->boxA75 = $boxA75;

        return $this;
    }

    public function getBoxA76(): ?string
    {
        return $this->boxA76;
    }

    public function setBoxA76(?string $boxA76): self
    {
        $this->boxA76 = $boxA76;

        return $this;
    }

    public function getBoxA77(): ?string
    {
        return $this->boxA77;
    }

    public function setBoxA77(?string $boxA77): self
    {
        $this->boxA77 = $boxA77;

        return $this;
    }

    public function getBoxA78(): ?string
    {
        return $this->boxA78;
    }

    public function setBoxA78(?string $boxA78): self
    {
        $this->boxA78 = $boxA78;

        return $this;
    }

    public function getBoxA79(): ?string
    {
        return $this->boxA79;
    }

    public function setBoxA79(?string $boxA79): self
    {
        $this->boxA79 = $boxA79;

        return $this;
    }

    public function getBoxA80(): ?string
    {
        return $this->boxA80;
    }

    public function setBoxA80(?string $boxA80): self
    {
        $this->boxA80 = $boxA80;

        return $this;
    }

    public function getBboxA81(): ?string
    {
        return $this->bboxA81;
    }

    public function setBboxA81(?string $bboxA81): self
    {
        $this->bboxA81 = $bboxA81;

        return $this;
    }

    public function getBoxA82(): ?string
    {
        return $this->boxA82;
    }

    public function setBoxA82(?string $boxA82): self
    {
        $this->boxA82 = $boxA82;

        return $this;
    }

    public function getBoxA83(): ?int
    {
        return $this->boxA83;
    }

    public function setBoxA83(?int $boxA83): self
    {
        $this->boxA83 = $boxA83;

        return $this;
    }

    public function getBoxA84(): ?string
    {
        return $this->boxA84;
    }

    public function setBoxA84(?string $boxA84): self
    {
        $this->boxA84 = $boxA84;

        return $this;
    }

    public function getBoxA85(): ?string
    {
        return $this->boxA85;
    }

    public function setBoxA85(?string $boxA85): self
    {
        $this->boxA85 = $boxA85;

        return $this;
    }

    public function getBoxA91(): ?string
    {
        return $this->boxA91;
    }

    public function setBoxA91(?string $boxA91): self
    {
        $this->boxA91 = $boxA91;

        return $this;
    }

    public function getBoxA92(): ?int
    {
        return $this->boxA92;
    }

    public function setBoxA92(?int $boxA92): self
    {
        $this->boxA92 = $boxA92;

        return $this;
    }

    public function getBoxA94(): ?string
    {
        return $this->boxA94;
    }

    public function setBoxA94(?string $boxA94): self
    {
        $this->boxA94 = $boxA94;

        return $this;
    }

    public function getBboxA96(): ?string
    {
        return $this->bboxA96;
    }

    public function setBboxA96(?string $bboxA96): self
    {
        $this->bboxA96 = $bboxA96;

        return $this;
    }

    public function getBoxA98(): ?string
    {
        return $this->boxA98;
    }

    public function setBoxA98(?string $boxA98): self
    {
        $this->boxA98 = $boxA98;

        return $this;
    }

    public function getBoxB1(): ?bool
    {
        return $this->boxB1;
    }

    public function setBoxB1(?bool $boxB1): self
    {
        $this->boxB1 = $boxB1;

        return $this;
    }

    public function getBoxB2(): ?bool
    {
        return $this->boxB2;
    }

    public function setBoxB2(?bool $boxB2): self
    {
        $this->boxB2 = $boxB2;

        return $this;
    }

    public function getBoxB3(): ?string
    {
        return $this->boxB3;
    }

    public function setBoxB3(?string $boxB3): self
    {
        $this->boxB3 = $boxB3;

        return $this;
    }

    public function getBoxB4(): ?string
    {
        return $this->boxB4;
    }

    public function setBoxB4(?string $boxB4): self
    {
        $this->boxB4 = $boxB4;

        return $this;
    }

    public function getBoxB5(): ?string
    {
        return $this->boxB5;
    }

    public function setBoxB5(?string $boxB5): self
    {
        $this->boxB5 = $boxB5;

        return $this;
    }

    public function getBboxB6(): ?string
    {
        return $this->bboxB6;
    }

    public function setBboxB6(?string $bboxB6): self
    {
        $this->bboxB6 = $bboxB6;

        return $this;
    }

    public function getBoxB7(): ?string
    {
        return $this->boxB7;
    }

    public function setBoxB7(?string $boxB7): self
    {
        $this->boxB7 = $boxB7;

        return $this;
    }

    public function getBoxB8(): ?\DateTimeInterface
    {
        return $this->boxB8;
    }

    public function setBoxB8(?\DateTimeInterface $boxB8): self
    {
        $this->boxB8 = $boxB8;

        return $this;
    }

    public function getBboxB9(): ?\DateTimeInterface
    {
        return $this->bboxB9;
    }

    public function setBboxB9(?\DateTimeInterface $bboxB9): self
    {
        $this->bboxB9 = $bboxB9;

        return $this;
    }

    public function getBoxB10(): ?\DateTimeInterface
    {
        return $this->boxB10;
    }

    public function setBoxB10(?\DateTimeInterface $boxB10): self
    {
        $this->boxB10 = $boxB10;

        return $this;
    }

    public function getBoxB11(): ?string
    {
        return $this->boxB11;
    }

    public function setBoxB11(?string $boxB11): self
    {
        $this->boxB11 = $boxB11;

        return $this;
    }

    public function getBoxB12(): ?string
    {
        return $this->boxB12;
    }

    public function setBoxB12(?string $boxB12): self
    {
        $this->boxB12 = $boxB12;

        return $this;
    }

    public function getBoxB13(): ?string
    {
        return $this->boxB13;
    }

    public function setBoxB13(?string $boxB13): self
    {
        $this->boxB13 = $boxB13;

        return $this;
    }

    public function getBoxB14(): ?string
    {
        return $this->boxB14;
    }

    public function setBoxB14(?string $boxB14): self
    {
        $this->boxB14 = $boxB14;

        return $this;
    }

    public function getBoxB15(): ?string
    {
        return $this->boxB15;
    }

    public function setBoxB15(?string $boxB15): self
    {
        $this->boxB15 = $boxB15;

        return $this;
    }

    public function getBoxB16(): ?string
    {
        return $this->boxB16;
    }

    public function setBoxB16(?string $boxB16): self
    {
        $this->boxB16 = $boxB16;

        return $this;
    }

    public function getBoxB17(): ?string
    {
        return $this->boxB17;
    }

    public function setBoxB17(?string $boxB17): self
    {
        $this->boxB17 = $boxB17;

        return $this;
    }

    public function getBoxB18(): ?string
    {
        return $this->boxB18;
    }

    public function setBoxB18(?string $boxB18): self
    {
        $this->boxB18 = $boxB18;

        return $this;
    }

    public function getBoxB19(): ?string
    {
        return $this->boxB19;
    }

    public function setBoxB19(?string $boxB19): self
    {
        $this->boxB19 = $boxB19;

        return $this;
    }

    public function getBoxB20(): ?string
    {
        return $this->boxB20;
    }

    public function setBoxB20(?string $boxB20): self
    {
        $this->boxB20 = $boxB20;

        return $this;
    }

    public function getBoxB21(): ?string
    {
        return $this->boxB21;
    }

    public function setBoxB21(?string $boxB21): self
    {
        $this->boxB21 = $boxB21;

        return $this;
    }

    public function getBboxB22(): ?string
    {
        return $this->bboxB22;
    }

    public function setBboxB22(?string $bboxB22): self
    {
        $this->bboxB22 = $bboxB22;

        return $this;
    }

    public function getBoxB23(): ?int
    {
        return $this->boxB23;
    }

    public function setBoxB23(?int $boxB23): self
    {
        $this->boxB23 = $boxB23;

        return $this;
    }

    public function getBoxB24(): ?string
    {
        return $this->boxB24;
    }

    public function setBoxB24(?string $boxB24): self
    {
        $this->boxB24 = $boxB24;

        return $this;
    }

    public function getBoxB25(): ?string
    {
        return $this->boxB25;
    }

    public function setBoxB25(?string $boxB25): self
    {
        $this->boxB25 = $boxB25;

        return $this;
    }

    public function getBoxB26(): ?string
    {
        return $this->boxB26;
    }

    public function setBoxB26(?string $boxB26): self
    {
        $this->boxB26 = $boxB26;

        return $this;
    }

    public function getBoxB27(): ?string
    {
        return $this->boxB27;
    }

    public function setBoxB27(?string $boxB27): self
    {
        $this->boxB27 = $boxB27;

        return $this;
    }

    public function getBoxB28(): ?string
    {
        return $this->boxB28;
    }

    public function setBoxB28(?string $boxB28): self
    {
        $this->boxB28 = $boxB28;

        return $this;
    }

    public function getBoxB29(): ?string
    {
        return $this->boxB29;
    }

    public function setBoxB29(?string $boxB29): self
    {
        $this->boxB29 = $boxB29;

        return $this;
    }

    public function getBoxB30(): ?string
    {
        return $this->boxB30;
    }

    public function setBoxB30(?string $boxB30): self
    {
        $this->boxB30 = $boxB30;

        return $this;
    }

    public function getBboxB31(): ?string
    {
        return $this->bboxB31;
    }

    public function setBboxB31(?string $bboxB31): self
    {
        $this->bboxB31 = $bboxB31;

        return $this;
    }

    public function getBoxB32(): ?string
    {
        return $this->boxB32;
    }

    public function setBoxB32(?string $boxB32): self
    {
        $this->boxB32 = $boxB32;

        return $this;
    }

    public function getBoxB33(): ?string
    {
        return $this->boxB33;
    }

    public function setBoxB33(?string $boxB33): self
    {
        $this->boxB33 = $boxB33;

        return $this;
    }

    public function getBoxB34(): ?string
    {
        return $this->boxB34;
    }

    public function setBoxB34(?string $boxB34): self
    {
        $this->boxB34 = $boxB34;

        return $this;
    }

    public function getBoxB35(): ?string
    {
        return $this->boxB35;
    }

    public function setBoxB35(?string $boxB35): self
    {
        $this->boxB35 = $boxB35;

        return $this;
    }

    public function getBoxB36(): ?string
    {
        return $this->boxB36;
    }

    public function setBoxB36(?string $boxB36): self
    {
        $this->boxB36 = $boxB36;

        return $this;
    }

    public function getBoxB37(): ?string
    {
        return $this->boxB37;
    }

    public function setBoxB37(?string $boxB37): self
    {
        $this->boxB37 = $boxB37;

        return $this;
    }

    public function getBoxB38(): ?bool
    {
        return $this->boxB38;
    }

    public function setBoxB38(?bool $boxB38): self
    {
        $this->boxB38 = $boxB38;

        return $this;
    }

    public function getBoxB39(): ?bool
    {
        return $this->boxB39;
    }

    public function setBoxB39(?bool $boxB39): self
    {
        $this->boxB39 = $boxB39;

        return $this;
    }

    public function getBoxB40(): ?bool
    {
        return $this->boxB40;
    }

    public function setBoxB40(?bool $boxB40): self
    {
        $this->boxB40 = $boxB40;

        return $this;
    }

    public function getBoxB41(): ?string
    {
        return $this->boxB41;
    }

    public function setBoxB41(?string $boxB41): self
    {
        $this->boxB41 = $boxB41;

        return $this;
    }

    public function getBoxB42(): ?string
    {
        return $this->boxB42;
    }

    public function setBoxB42(?string $boxB42): self
    {
        $this->boxB42 = $boxB42;

        return $this;
    }

    public function getBoxB43(): ?string
    {
        return $this->boxB43;
    }

    public function setBoxB43(?string $boxB43): self
    {
        $this->boxB43 = $boxB43;

        return $this;
    }

    public function getBoxB44(): ?string
    {
        return $this->boxB44;
    }

    public function setBoxB44(?string $boxB44): self
    {
        $this->boxB44 = $boxB44;

        return $this;
    }

    public function getBoxB45(): ?string
    {
        return $this->boxB45;
    }

    public function setBoxB45(?string $boxB45): self
    {
        $this->boxB45 = $boxB45;

        return $this;
    }

    public function getBoxB46(): ?string
    {
        return $this->boxB46;
    }

    public function setBoxB46(?string $boxB46): self
    {
        $this->boxB46 = $boxB46;

        return $this;
    }

    public function getBboxB47(): ?string
    {
        return $this->bboxB47;
    }

    public function setBboxB47(?string $bboxB47): self
    {
        $this->bboxB47 = $bboxB47;

        return $this;
    }

    public function getBoxB48(): ?string
    {
        return $this->boxB48;
    }

    public function setBoxB48(?string $boxB48): self
    {
        $this->boxB48 = $boxB48;

        return $this;
    }

    public function getBoxB49(): ?string
    {
        return $this->boxB49;
    }

    public function setBoxB49(?string $boxB49): self
    {
        $this->boxB49 = $boxB49;

        return $this;
    }

    public function getBoxB50(): ?string
    {
        return $this->boxB50;
    }

    public function setBoxB50(?string $boxB50): self
    {
        $this->boxB50 = $boxB50;

        return $this;
    }

    public function getBoxB51(): ?string
    {
        return $this->boxB51;
    }

    public function setBoxB51(?string $boxB51): self
    {
        $this->boxB51 = $boxB51;

        return $this;
    }

    public function getBoxB52(): ?string
    {
        return $this->boxB52;
    }

    public function setBoxB52(?string $boxB52): self
    {
        $this->boxB52 = $boxB52;

        return $this;
    }

    public function getBoxB53(): ?int
    {
        return $this->boxB53;
    }

    public function setBoxB53(?int $boxB53): self
    {
        $this->boxB53 = $boxB53;

        return $this;
    }

    public function getBoxB54(): ?string
    {
        return $this->boxB54;
    }

    public function setBoxB54(?string $boxB54): self
    {
        $this->boxB54 = $boxB54;

        return $this;
    }

    public function getBoxB55(): ?string
    {
        return $this->boxB55;
    }

    public function setBoxB55(?string $boxB55): self
    {
        $this->boxB55 = $boxB55;

        return $this;
    }

    public function getBoxB59(): ?string
    {
        return $this->boxB59;
    }

    public function setBoxB59(?string $boxB59): self
    {
        $this->boxB59 = $boxB59;

        return $this;
    }

    public function getBoxB60(): ?string
    {
        return $this->boxB60;
    }

    public function setBoxB60(?string $boxB60): self
    {
        $this->boxB60 = $boxB60;

        return $this;
    }

    public function getBoxB61(): ?string
    {
        return $this->boxB61;
    }

    public function setBoxB61(?string $boxB61): self
    {
        $this->boxB61 = $boxB61;

        return $this;
    }

    public function getBoxB62(): ?string
    {
        return $this->boxB62;
    }

    public function setBoxB62(?string $boxB62): self
    {
        $this->boxB62 = $boxB62;

        return $this;
    }

    public function getBoxB63(): ?int
    {
        return $this->boxB63;
    }

    public function setBoxB63(?int $boxB63): self
    {
        $this->boxB63 = $boxB63;

        return $this;
    }

    public function getBoxB64(): ?string
    {
        return $this->boxB64;
    }

    public function setBoxB64(?string $boxB64): self
    {
        $this->boxB64 = $boxB64;

        return $this;
    }

    public function getBoxb68(): ?string
    {
        return $this->boxb68;
    }

    public function setBoxb68(?string $boxb68): self
    {
        $this->boxb68 = $boxb68;

        return $this;
    }

    public function getBoxB69(): ?string
    {
        return $this->boxB69;
    }

    public function setBoxB69(?string $boxB69): self
    {
        $this->boxB69 = $boxB69;

        return $this;
    }

    public function getBoxB71(): ?string
    {
        return $this->boxB71;
    }

    public function setBoxB71(?string $boxB71): self
    {
        $this->boxB71 = $boxB71;

        return $this;
    }

    public function getBoxb72(): ?string
    {
        return $this->boxb72;
    }

    public function setBoxb72(?string $boxb72): self
    {
        $this->boxb72 = $boxb72;

        return $this;
    }

    public function getBoxB73(): ?string
    {
        return $this->boxB73;
    }

    public function setBoxB73(?string $boxB73): self
    {
        $this->boxB73 = $boxB73;

        return $this;
    }

    public function getBoxB74(): ?string
    {
        return $this->boxB74;
    }

    public function setBoxB74(string $boxB74): self
    {
        $this->boxB74 = $boxB74;

        return $this;
    }

    public function getBoxB75(): ?string
    {
        return $this->boxB75;
    }

    public function setBoxB75(?string $boxB75): self
    {
        $this->boxB75 = $boxB75;

        return $this;
    }

    public function getBoxB76(): ?string
    {
        return $this->boxB76;
    }

    public function setBoxB76(?string $boxB76): self
    {
        $this->boxB76 = $boxB76;

        return $this;
    }

    public function getBoxB77(): ?string
    {
        return $this->boxB77;
    }

    public function setBoxB77(?string $boxB77): self
    {
        $this->boxB77 = $boxB77;

        return $this;
    }

    public function getBoxB78(): ?string
    {
        return $this->boxB78;
    }

    public function setBoxB78(?string $boxB78): self
    {
        $this->boxB78 = $boxB78;

        return $this;
    }

    public function getBoxB79(): ?string
    {
        return $this->boxB79;
    }

    public function setBoxB79(?string $boxB79): self
    {
        $this->boxB79 = $boxB79;

        return $this;
    }

    public function getBoxB80(): ?string
    {
        return $this->boxB80;
    }

    public function setBoxB80(?string $boxB80): self
    {
        $this->boxB80 = $boxB80;

        return $this;
    }

    public function getBoxB81(): ?string
    {
        return $this->boxB81;
    }

    public function setBoxB81(?string $boxB81): self
    {
        $this->boxB81 = $boxB81;

        return $this;
    }

    public function getBoxB82(): ?string
    {
        return $this->boxB82;
    }

    public function setBoxB82(?string $boxB82): self
    {
        $this->boxB82 = $boxB82;

        return $this;
    }

    public function getBoxB83(): ?string
    {
        return $this->boxB83;
    }

    public function setBoxB83(?string $boxB83): self
    {
        $this->boxB83 = $boxB83;

        return $this;
    }

    public function getBoxB84(): ?string
    {
        return $this->boxB84;
    }

    public function setBoxB84(?string $boxB84): self
    {
        $this->boxB84 = $boxB84;

        return $this;
    }

    public function getBoxB85(): ?string
    {
        return $this->boxB85;
    }

    public function setBoxB85(?string $boxB85): self
    {
        $this->boxB85 = $boxB85;

        return $this;
    }

    public function getBoxB90(): ?string
    {
        return $this->boxB90;
    }

    public function setBoxB90(?string $boxB90): self
    {
        $this->boxB90 = $boxB90;

        return $this;
    }

    public function getBoxB91(): ?string
    {
        return $this->boxB91;
    }

    public function setBoxB91(?string $boxB91): self
    {
        $this->boxB91 = $boxB91;

        return $this;
    }

    public function getBoxB92(): ?int
    {
        return $this->boxB92;
    }

    public function setBoxB92(?int $boxB92): self
    {
        $this->boxB92 = $boxB92;

        return $this;
    }

    public function getBoxB93(): ?string
    {
        return $this->boxB93;
    }

    public function setBoxB93(?string $boxB93): self
    {
        $this->boxB93 = $boxB93;

        return $this;
    }

    public function getBoxB94(): ?string
    {
        return $this->boxB94;
    }

    public function setBoxB94(?string $boxB94): self
    {
        $this->boxB94 = $boxB94;

        return $this;
    }

    public function getBoxB95(): ?string
    {
        return $this->boxB95;
    }

    public function setBoxB95(?string $boxB95): self
    {
        $this->boxB95 = $boxB95;

        return $this;
    }

    public function getBoxB96(): ?string
    {
        return $this->boxB96;
    }

    public function setBoxB96(?string $boxB96): self
    {
        $this->boxB96 = $boxB96;

        return $this;
    }

    public function getBoxB97(): ?string
    {
        return $this->boxB97;
    }

    public function setBoxB97(?string $boxB97): self
    {
        $this->boxB97 = $boxB97;

        return $this;
    }

    public function getBoxB98(): ?string
    {
        return $this->boxB98;
    }

    public function setBoxB98(?string $boxB98): self
    {
        $this->boxB98 = $boxB98;

        return $this;
    }

    public function getBoxC1(): ?string
    {
        return $this->boxC1;
    }

    public function setBoxC1(?string $boxC1): self
    {
        $this->boxC1 = $boxC1;

        return $this;
    }

    public function getBoxC2(): ?string
    {
        return $this->boxC2;
    }

    public function setBoxC2(?string $boxC2): self
    {
        $this->boxC2 = $boxC2;

        return $this;
    }

    public function getBoxC3(): ?string
    {
        return $this->boxC3;
    }

    public function setBoxC3(?string $boxC3): self
    {
        $this->boxC3 = $boxC3;

        return $this;
    }

    public function getBoxC4(): ?string
    {
        return $this->boxC4;
    }

    public function setBoxC4(?string $boxC4): self
    {
        $this->boxC4 = $boxC4;

        return $this;
    }

    public function getBoxC5(): ?string
    {
        return $this->boxC5;
    }

    public function setBoxC5(?string $boxC5): self
    {
        $this->boxC5 = $boxC5;

        return $this;
    }

    public function getBoxC6(): ?string
    {
        return $this->boxC6;
    }

    public function setBoxC6(?string $boxC6): self
    {
        $this->boxC6 = $boxC6;

        return $this;
    }

    public function getBoxC7(): ?string
    {
        return $this->boxC7;
    }

    public function setBoxC7(?string $boxC7): self
    {
        $this->boxC7 = $boxC7;

        return $this;
    }

    public function getBoxC8(): ?string
    {
        return $this->boxC8;
    }

    public function setBoxC8(?string $boxC8): self
    {
        $this->boxC8 = $boxC8;

        return $this;
    }

    public function getBoxC9(): ?string
    {
        return $this->boxC9;
    }

    public function setBoxC9(?string $boxC9): self
    {
        $this->boxC9 = $boxC9;

        return $this;
    }

    public function getBoxC10(): ?string
    {
        return $this->boxC10;
    }

    public function setBoxC10(?string $boxC10): self
    {
        $this->boxC10 = $boxC10;

        return $this;
    }

    public function getBoxC11(): ?string
    {
        return $this->boxC11;
    }

    public function setBoxC11(?string $boxC11): self
    {
        $this->boxC11 = $boxC11;

        return $this;
    }

    public function getBoxC12(): ?string
    {
        return $this->boxC12;
    }

    public function setBoxC12(?string $boxC12): self
    {
        $this->boxC12 = $boxC12;

        return $this;
    }

    public function getBoxC13(): ?string
    {
        return $this->boxC13;
    }

    public function setBoxC13(?string $boxC13): self
    {
        $this->boxC13 = $boxC13;

        return $this;
    }

    public function getBoxC14(): ?string
    {
        return $this->boxC14;
    }

    public function setBoxC14(?string $boxC14): self
    {
        $this->boxC14 = $boxC14;

        return $this;
    }

    public function getBoxC15(): ?string
    {
        return $this->boxC15;
    }

    public function setBoxC15(?string $boxC15): self
    {
        $this->boxC15 = $boxC15;

        return $this;
    }

    public function getBoxC16(): ?string
    {
        return $this->boxC16;
    }

    public function setBoxC16(?string $boxC16): self
    {
        $this->boxC16 = $boxC16;

        return $this;
    }

    public function getBoxC17(): ?string
    {
        return $this->boxC17;
    }

    public function setBoxC17(?string $boxC17): self
    {
        $this->boxC17 = $boxC17;

        return $this;
    }

    public function getBoxC18(): ?string
    {
        return $this->boxC18;
    }

    public function setBoxC18(?string $boxC18): self
    {
        $this->boxC18 = $boxC18;

        return $this;
    }

    public function getBoxC19(): ?string
    {
        return $this->boxC19;
    }

    public function setBoxC19(?string $boxC19): self
    {
        $this->boxC19 = $boxC19;

        return $this;
    }

    public function getBoxC20(): ?string
    {
        return $this->boxC20;
    }

    public function setBoxC20(?string $boxC20): self
    {
        $this->boxC20 = $boxC20;

        return $this;
    }

    public function getBoxC21(): ?string
    {
        return $this->boxC21;
    }

    public function setBoxC21(?string $boxC21): self
    {
        $this->boxC21 = $boxC21;

        return $this;
    }

    public function getBoxC22(): ?string
    {
        return $this->boxC22;
    }

    public function setBoxC22(?string $boxC22): self
    {
        $this->boxC22 = $boxC22;

        return $this;
    }

    public function getBoxC23(): ?string
    {
        return $this->boxC23;
    }

    public function setBoxC23(?string $boxC23): self
    {
        $this->boxC23 = $boxC23;

        return $this;
    }

    public function getBoxC24(): ?string
    {
        return $this->boxC24;
    }

    public function setBoxC24(?string $boxC24): self
    {
        $this->boxC24 = $boxC24;

        return $this;
    }

    public function getBoxC25(): ?string
    {
        return $this->boxC25;
    }

    public function setBoxC25(?string $boxC25): self
    {
        $this->boxC25 = $boxC25;

        return $this;
    }

    public function getBoxC26(): ?string
    {
        return $this->boxC26;
    }

    public function setBoxC26(?string $boxC26): self
    {
        $this->boxC26 = $boxC26;

        return $this;
    }

    public function getBoxC27(): ?string
    {
        return $this->boxC27;
    }

    public function setBoxC27(?string $boxC27): self
    {
        $this->boxC27 = $boxC27;

        return $this;
    }

    public function getBoxC28(): ?string
    {
        return $this->boxC28;
    }

    public function setBoxC28(?string $boxC28): self
    {
        $this->boxC28 = $boxC28;

        return $this;
    }

    public function getBoxC29(): ?string
    {
        return $this->boxC29;
    }

    public function setBoxC29(?string $boxC29): self
    {
        $this->boxC29 = $boxC29;

        return $this;
    }

    public function getBoxC30(): ?string
    {
        return $this->boxC30;
    }

    public function setBoxC30(?string $boxC30): self
    {
        $this->boxC30 = $boxC30;

        return $this;
    }

    public function getBoxC31(): ?string
    {
        return $this->boxC31;
    }

    public function setBoxC31(?string $boxC31): self
    {
        $this->boxC31 = $boxC31;

        return $this;
    }

    public function getBoxC40(): ?bool
    {
        return $this->boxC40;
    }

    public function setBoxC40(?bool $boxC40): self
    {
        $this->boxC40 = $boxC40;

        return $this;
    }

    public function getBoxC41(): ?string
    {
        return $this->boxC41;
    }

    public function setBoxC41(?string $boxC41): self
    {
        $this->boxC41 = $boxC41;

        return $this;
    }

    public function getBoxC42(): ?string
    {
        return $this->boxC42;
    }

    public function setBoxC42(?string $boxC42): self
    {
        $this->boxC42 = $boxC42;

        return $this;
    }

    public function getBoxC43(): ?string
    {
        return $this->boxC43;
    }

    public function setBoxC43(?string $boxC43): self
    {
        $this->boxC43 = $boxC43;

        return $this;
    }

    public function getBoxC44(): ?string
    {
        return $this->boxC44;
    }

    public function setBoxC44(?string $boxC44): self
    {
        $this->boxC44 = $boxC44;

        return $this;
    }

    public function getBoxC45(): ?string
    {
        return $this->boxC45;
    }

    public function setBoxC45(?string $boxC45): self
    {
        $this->boxC45 = $boxC45;

        return $this;
    }

    public function getBoxC46(): ?string
    {
        return $this->boxC46;
    }

    public function setBoxC46(?string $boxC46): self
    {
        $this->boxC46 = $boxC46;

        return $this;
    }

    public function getBoxC47(): ?string
    {
        return $this->boxC47;
    }

    public function setBoxC47(?string $boxC47): self
    {
        $this->boxC47 = $boxC47;

        return $this;
    }

    public function getBoxC48(): ?string
    {
        return $this->boxC48;
    }

    public function setBoxC48(?string $boxC48): self
    {
        $this->boxC48 = $boxC48;

        return $this;
    }

    public function getBoxC49(): ?string
    {
        return $this->boxC49;
    }

    public function setBoxC49(?string $boxC49): self
    {
        $this->boxC49 = $boxC49;

        return $this;
    }

    public function getBoxC50(): ?string
    {
        return $this->boxC50;
    }

    public function setBoxC50(?string $boxC50): self
    {
        $this->boxC50 = $boxC50;

        return $this;
    }

    public function getBoxC51(): ?string
    {
        return $this->boxC51;
    }

    public function setBoxC51(?string $boxC51): self
    {
        $this->boxC51 = $boxC51;

        return $this;
    }

    public function getBoxC52(): ?string
    {
        return $this->boxC52;
    }

    public function setBoxC52(?string $boxC52): self
    {
        $this->boxC52 = $boxC52;

        return $this;
    }

    public function getBoxC53(): ?string
    {
        return $this->boxC53;
    }

    public function setBoxC53(?string $boxC53): self
    {
        $this->boxC53 = $boxC53;

        return $this;
    }

    public function getBoxC54(): ?string
    {
        return $this->boxC54;
    }

    public function setBoxC54(?string $boxC54): self
    {
        $this->boxC54 = $boxC54;

        return $this;
    }

    public function getBoxC55(): ?string
    {
        return $this->boxC55;
    }

    public function setBoxC55(?string $boxC55): self
    {
        $this->boxC55 = $boxC55;

        return $this;
    }

    public function getBoxC59(): ?string
    {
        return $this->boxC59;
    }

    public function setBoxC59(?string $boxC59): self
    {
        $this->boxC59 = $boxC59;

        return $this;
    }

    public function getBoxC60(): ?string
    {
        return $this->boxC60;
    }

    public function setBoxC60(?string $boxC60): self
    {
        $this->boxC60 = $boxC60;

        return $this;
    }

    public function getBoxC61(): ?string
    {
        return $this->boxC61;
    }

    public function setBoxC61(?string $boxC61): self
    {
        $this->boxC61 = $boxC61;

        return $this;
    }

    public function getBoxC62(): ?string
    {
        return $this->boxC62;
    }

    public function setBoxC62(?string $boxC62): self
    {
        $this->boxC62 = $boxC62;

        return $this;
    }

    public function getBoxC63(): ?string
    {
        return $this->boxC63;
    }

    public function setBoxC63(?string $boxC63): self
    {
        $this->boxC63 = $boxC63;

        return $this;
    }

    public function getBoxC64(): ?string
    {
        return $this->boxC64;
    }

    public function setBoxC64(?string $boxC64): self
    {
        $this->boxC64 = $boxC64;

        return $this;
    }

    public function getBoxC68(): ?string
    {
        return $this->boxC68;
    }

    public function setBoxC68(?string $boxC68): self
    {
        $this->boxC68 = $boxC68;

        return $this;
    }

    public function getBoxC69(): ?string
    {
        return $this->boxC69;
    }

    public function setBoxC69(?string $boxC69): self
    {
        $this->boxC69 = $boxC69;

        return $this;
    }
}
