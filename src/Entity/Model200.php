<?php

namespace App\Entity;

use App\Repository\Model200Repository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model200Repository::class)
 */
class Model200 extends AbstractTimetrackeableEntity
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
    private $economicActivitiesNationalClassification;

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
    private $box00101;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00102;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00103;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00104;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00105;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00106;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00107;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00108;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00109;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00110;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00111;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00112;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00113;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00114;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00115;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00116;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00117;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00118;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00119;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00120;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00121;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00122;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00123;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00124;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00125;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00126;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00127;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00128;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00129;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00130;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00131;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00132;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00133;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00134;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00135;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00136;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00137;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00138;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00139;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00140;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00141;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00142;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00143;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00144;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00145;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00146;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00147;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00148;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00149;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00150;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00151;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00152;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00153;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00154;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00155;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00156;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00157;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00158;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00159;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00160;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00161;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00162;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00163;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00164;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00165;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00166;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00167;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00168;

    /**
     * @ORM\Column(type="float")
     */
    private $box00169;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00170;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00171;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00172;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00173;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00174;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00175;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00176;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00177;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00178;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00179;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00180;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00181;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00182;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00183;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00184;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00185;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00186;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00187;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00188;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00189;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00190;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00191;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00192;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00193;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00194;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00195;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00196;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00197;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00198;

    /**
     * @ORM\Column(type="float")
     */
    private $box00199;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00200;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00201;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00202;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00203;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00204;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00205;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00206;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00207;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00208;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00209;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00210;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00211;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00212;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00213;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00214;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00215;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00216;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00217;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00218;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00219;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00220;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00221;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00222;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00223;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00224;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00225;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00226;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00227;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00228;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00229;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00230;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00231;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00232;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00233;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00234;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00235;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00236;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00237;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00238;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00239;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00240;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00241;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00242;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00243;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00244;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00245;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00246;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00247;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00248;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00249;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00250;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00251;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00252;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00253;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $box00254;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00255;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00256;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00257;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00258;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00259;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00260;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00261;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00262;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00263;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00264;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00265;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00266;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00267;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00268;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00269;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00270;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00271;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00272;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00273;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00274;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00275;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00276;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00277;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00278;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00279;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00280;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00281;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00282;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00283;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00284;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00285;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00286;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00287;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00288;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00289;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00290;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00291;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00292;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00293;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00294;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00295;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00296;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00297;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00298;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00299;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00300;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00301;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00302;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00303;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00304;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00305;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00306;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00307;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00308;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00309;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00310;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00311;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00312;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00313;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00314;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00315;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00316;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00317;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00318;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00319;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00320;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00321;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00322;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00323;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00324;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00325;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00326;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00327;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00328;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00329;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00330;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00331;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00332;

    /**
     * @ORM\Column(type="float")
     */
    private $box00336;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00337;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00338;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00339;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00340;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00341;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00342;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00343;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00344;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00345;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00346;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00347;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00348;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00349;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00350;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00351;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00352;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00353;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00354;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $box00355;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00500;

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
    private $box00700;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00701;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00702;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00703;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00704;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00705;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00706;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00707;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00708;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00709;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00710;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00711;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00712;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00760;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00761;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box00762;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box01001;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box01002;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models200s")
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

    public function getEconomicActivitiesNationalClassification(): ?string
    {
        return $this->economicActivitiesNationalClassification;
    }

    public function setEconomicActivitiesNationalClassification(?string $economicActivitiesNationalClassification): self
    {
        $this->economicActivitiesNationalClassification = $economicActivitiesNationalClassification;

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

    public function getBox00101(): ?float
    {
        return $this->box00101;
    }

    public function setBox00101(?float $box00101): self
    {
        $this->box00101 = $box00101;

        return $this;
    }

    public function getBox00102(): ?float
    {
        return $this->box00102;
    }

    public function setBox00102(?float $box00102): self
    {
        $this->box00102 = $box00102;

        return $this;
    }

    public function getBox00103(): ?float
    {
        return $this->box00103;
    }

    public function setBox00103(?float $box00103): self
    {
        $this->box00103 = $box00103;

        return $this;
    }

    public function getBox00104(): ?float
    {
        return $this->box00104;
    }

    public function setBox00104(?float $box00104): self
    {
        $this->box00104 = $box00104;

        return $this;
    }

    public function getBox00105(): ?float
    {
        return $this->box00105;
    }

    public function setBox00105(?float $box00105): self
    {
        $this->box00105 = $box00105;

        return $this;
    }

    public function getBox00106(): ?float
    {
        return $this->box00106;
    }

    public function setBox00106(?float $box00106): self
    {
        $this->box00106 = $box00106;

        return $this;
    }

    public function getBox00107(): ?float
    {
        return $this->box00107;
    }

    public function setBox00107(?float $box00107): self
    {
        $this->box00107 = $box00107;

        return $this;
    }

    public function getBox00108(): ?float
    {
        return $this->box00108;
    }

    public function setBox00108(?float $box00108): self
    {
        $this->box00108 = $box00108;

        return $this;
    }

    public function getBox00109(): ?float
    {
        return $this->box00109;
    }

    public function setBox00109(?float $box00109): self
    {
        $this->box00109 = $box00109;

        return $this;
    }

    public function getBox00110(): ?float
    {
        return $this->box00110;
    }

    public function setBox00110(?float $box00110): self
    {
        $this->box00110 = $box00110;

        return $this;
    }

    public function getBox00111(): ?float
    {
        return $this->box00111;
    }

    public function setBox00111(?float $box00111): self
    {
        $this->box00111 = $box00111;

        return $this;
    }

    public function getBox00112(): ?float
    {
        return $this->box00112;
    }

    public function setBox00112(?float $box00112): self
    {
        $this->box00112 = $box00112;

        return $this;
    }

    public function getBox00113(): ?float
    {
        return $this->box00113;
    }

    public function setBox00113(?float $box00113): self
    {
        $this->box00113 = $box00113;

        return $this;
    }

    public function getBox00114(): ?float
    {
        return $this->box00114;
    }

    public function setBox00114(?float $box00114): self
    {
        $this->box00114 = $box00114;

        return $this;
    }

    public function getBox00115(): ?float
    {
        return $this->box00115;
    }

    public function setBox00115(?float $box00115): self
    {
        $this->box00115 = $box00115;

        return $this;
    }

    public function getBox00116(): ?float
    {
        return $this->box00116;
    }

    public function setBox00116(?float $box00116): self
    {
        $this->box00116 = $box00116;

        return $this;
    }

    public function getBox00117(): ?float
    {
        return $this->box00117;
    }

    public function setBox00117(?float $box00117): self
    {
        $this->box00117 = $box00117;

        return $this;
    }

    public function getBox00118(): ?float
    {
        return $this->box00118;
    }

    public function setBox00118(?float $box00118): self
    {
        $this->box00118 = $box00118;

        return $this;
    }

    public function getBox00119(): ?float
    {
        return $this->box00119;
    }

    public function setBox00119(?float $box00119): self
    {
        $this->box00119 = $box00119;

        return $this;
    }

    public function getBox00120(): ?float
    {
        return $this->box00120;
    }

    public function setBox00120(?float $box00120): self
    {
        $this->box00120 = $box00120;

        return $this;
    }

    public function getBox00121(): ?float
    {
        return $this->box00121;
    }

    public function setBox00121(?float $box00121): self
    {
        $this->box00121 = $box00121;

        return $this;
    }

    public function getBox00122(): ?float
    {
        return $this->box00122;
    }

    public function setBox00122(?float $box00122): self
    {
        $this->box00122 = $box00122;

        return $this;
    }

    public function getBox00123(): ?float
    {
        return $this->box00123;
    }

    public function setBox00123(?float $box00123): self
    {
        $this->box00123 = $box00123;

        return $this;
    }

    public function getBox00124(): ?float
    {
        return $this->box00124;
    }

    public function setBox00124(?float $box00124): self
    {
        $this->box00124 = $box00124;

        return $this;
    }

    public function getBox00125(): ?float
    {
        return $this->box00125;
    }

    public function setBox00125(?float $box00125): self
    {
        $this->box00125 = $box00125;

        return $this;
    }

    public function getBox00126(): ?float
    {
        return $this->box00126;
    }

    public function setBox00126(?float $box00126): self
    {
        $this->box00126 = $box00126;

        return $this;
    }

    public function getBox00127(): ?float
    {
        return $this->box00127;
    }

    public function setBox00127(?float $box00127): self
    {
        $this->box00127 = $box00127;

        return $this;
    }

    public function getBox00128(): ?float
    {
        return $this->box00128;
    }

    public function setBox00128(?float $box00128): self
    {
        $this->box00128 = $box00128;

        return $this;
    }

    public function getBox00129(): ?float
    {
        return $this->box00129;
    }

    public function setBox00129(?float $box00129): self
    {
        $this->box00129 = $box00129;

        return $this;
    }

    public function getBox00130(): ?float
    {
        return $this->box00130;
    }

    public function setBox00130(?float $box00130): self
    {
        $this->box00130 = $box00130;

        return $this;
    }

    public function getBox00131(): ?float
    {
        return $this->box00131;
    }

    public function setBox00131(?float $box00131): self
    {
        $this->box00131 = $box00131;

        return $this;
    }

    public function getBox00132(): ?float
    {
        return $this->box00132;
    }

    public function setBox00132(?float $box00132): self
    {
        $this->box00132 = $box00132;

        return $this;
    }

    public function getBox00133(): ?float
    {
        return $this->box00133;
    }

    public function setBox00133(?float $box00133): self
    {
        $this->box00133 = $box00133;

        return $this;
    }

    public function getBox00134(): ?float
    {
        return $this->box00134;
    }

    public function setBox00134(?float $box00134): self
    {
        $this->box00134 = $box00134;

        return $this;
    }

    public function getBox00135(): ?float
    {
        return $this->box00135;
    }

    public function setBox00135(?float $box00135): self
    {
        $this->box00135 = $box00135;

        return $this;
    }

    public function getBox00136(): ?float
    {
        return $this->box00136;
    }

    public function setBox00136(?float $box00136): self
    {
        $this->box00136 = $box00136;

        return $this;
    }

    public function getBox00137(): ?float
    {
        return $this->box00137;
    }

    public function setBox00137(?float $box00137): self
    {
        $this->box00137 = $box00137;

        return $this;
    }

    public function getBox00138(): ?float
    {
        return $this->box00138;
    }

    public function setBox00138(?float $box00138): self
    {
        $this->box00138 = $box00138;

        return $this;
    }

    public function getBox00139(): ?float
    {
        return $this->box00139;
    }

    public function setBox00139(?float $box00139): self
    {
        $this->box00139 = $box00139;

        return $this;
    }

    public function getBox00140(): ?float
    {
        return $this->box00140;
    }

    public function setBox00140(?float $box00140): self
    {
        $this->box00140 = $box00140;

        return $this;
    }

    public function getBox00141(): ?float
    {
        return $this->box00141;
    }

    public function setBox00141(?float $box00141): self
    {
        $this->box00141 = $box00141;

        return $this;
    }

    public function getBox00142(): ?float
    {
        return $this->box00142;
    }

    public function setBox00142(?float $box00142): self
    {
        $this->box00142 = $box00142;

        return $this;
    }

    public function getBox00143(): ?float
    {
        return $this->box00143;
    }

    public function setBox00143(?float $box00143): self
    {
        $this->box00143 = $box00143;

        return $this;
    }

    public function getBox00144(): ?float
    {
        return $this->box00144;
    }

    public function setBox00144(?float $box00144): self
    {
        $this->box00144 = $box00144;

        return $this;
    }

    public function getBox00145(): ?float
    {
        return $this->box00145;
    }

    public function setBox00145(?float $box00145): self
    {
        $this->box00145 = $box00145;

        return $this;
    }

    public function getBox00146(): ?float
    {
        return $this->box00146;
    }

    public function setBox00146(?float $box00146): self
    {
        $this->box00146 = $box00146;

        return $this;
    }

    public function getBox00147(): ?float
    {
        return $this->box00147;
    }

    public function setBox00147(?float $box00147): self
    {
        $this->box00147 = $box00147;

        return $this;
    }

    public function getBox00148(): ?float
    {
        return $this->box00148;
    }

    public function setBox00148(?float $box00148): self
    {
        $this->box00148 = $box00148;

        return $this;
    }

    public function getBox00149(): ?float
    {
        return $this->box00149;
    }

    public function setBox00149(?float $box00149): self
    {
        $this->box00149 = $box00149;

        return $this;
    }

    public function getBox00150(): ?float
    {
        return $this->box00150;
    }

    public function setBox00150(?float $box00150): self
    {
        $this->box00150 = $box00150;

        return $this;
    }

    public function getBox00151(): ?float
    {
        return $this->box00151;
    }

    public function setBox00151(?float $box00151): self
    {
        $this->box00151 = $box00151;

        return $this;
    }

    public function getBox00152(): ?float
    {
        return $this->box00152;
    }

    public function setBox00152(?float $box00152): self
    {
        $this->box00152 = $box00152;

        return $this;
    }

    public function getBox00153(): ?float
    {
        return $this->box00153;
    }

    public function setBox00153(?float $box00153): self
    {
        $this->box00153 = $box00153;

        return $this;
    }

    public function getBox00154(): ?float
    {
        return $this->box00154;
    }

    public function setBox00154(?float $box00154): self
    {
        $this->box00154 = $box00154;

        return $this;
    }

    public function getBox00155(): ?float
    {
        return $this->box00155;
    }

    public function setBox00155(?float $box00155): self
    {
        $this->box00155 = $box00155;

        return $this;
    }

    public function getBox00156(): ?float
    {
        return $this->box00156;
    }

    public function setBox00156(?float $box00156): self
    {
        $this->box00156 = $box00156;

        return $this;
    }

    public function getBox00157(): ?float
    {
        return $this->box00157;
    }

    public function setBox00157(?float $box00157): self
    {
        $this->box00157 = $box00157;

        return $this;
    }

    public function getBox00158(): ?float
    {
        return $this->box00158;
    }

    public function setBox00158(?float $box00158): self
    {
        $this->box00158 = $box00158;

        return $this;
    }

    public function getBox00159(): ?float
    {
        return $this->box00159;
    }

    public function setBox00159(?float $box00159): self
    {
        $this->box00159 = $box00159;

        return $this;
    }

    public function getBox00160(): ?float
    {
        return $this->box00160;
    }

    public function setBox00160(?float $box00160): self
    {
        $this->box00160 = $box00160;

        return $this;
    }

    public function getBox00161(): ?float
    {
        return $this->box00161;
    }

    public function setBox00161(?float $box00161): self
    {
        $this->box00161 = $box00161;

        return $this;
    }

    public function getBox00162(): ?float
    {
        return $this->box00162;
    }

    public function setBox00162(?float $box00162): self
    {
        $this->box00162 = $box00162;

        return $this;
    }

    public function getBox00163(): ?float
    {
        return $this->box00163;
    }

    public function setBox00163(?float $box00163): self
    {
        $this->box00163 = $box00163;

        return $this;
    }

    public function getBox00164(): ?float
    {
        return $this->box00164;
    }

    public function setBox00164(?float $box00164): self
    {
        $this->box00164 = $box00164;

        return $this;
    }

    public function getBox00165(): ?float
    {
        return $this->box00165;
    }

    public function setBox00165(?float $box00165): self
    {
        $this->box00165 = $box00165;

        return $this;
    }

    public function getBox00166(): ?float
    {
        return $this->box00166;
    }

    public function setBox00166(?float $box00166): self
    {
        $this->box00166 = $box00166;

        return $this;
    }

    public function getBox00167(): ?float
    {
        return $this->box00167;
    }

    public function setBox00167(?float $box00167): self
    {
        $this->box00167 = $box00167;

        return $this;
    }

    public function getBox00168(): ?float
    {
        return $this->box00168;
    }

    public function setBox00168(?float $box00168): self
    {
        $this->box00168 = $box00168;

        return $this;
    }

    public function getBox00169(): ?float
    {
        return $this->box00169;
    }

    public function setBox00169(float $box00169): self
    {
        $this->box00169 = $box00169;

        return $this;
    }

    public function getBox00170(): ?float
    {
        return $this->box00170;
    }

    public function setBox00170(?float $box00170): self
    {
        $this->box00170 = $box00170;

        return $this;
    }

    public function getBox00171(): ?float
    {
        return $this->box00171;
    }

    public function setBox00171(?float $box00171): self
    {
        $this->box00171 = $box00171;

        return $this;
    }

    public function getBox00172(): ?float
    {
        return $this->box00172;
    }

    public function setBox00172(?float $box00172): self
    {
        $this->box00172 = $box00172;

        return $this;
    }

    public function getBox00173(): ?float
    {
        return $this->box00173;
    }

    public function setBox00173(?float $box00173): self
    {
        $this->box00173 = $box00173;

        return $this;
    }

    public function getBox00174(): ?float
    {
        return $this->box00174;
    }

    public function setBox00174(?float $box00174): self
    {
        $this->box00174 = $box00174;

        return $this;
    }

    public function getBox00175(): ?float
    {
        return $this->box00175;
    }

    public function setBox00175(?float $box00175): self
    {
        $this->box00175 = $box00175;

        return $this;
    }

    public function getBox00176(): ?float
    {
        return $this->box00176;
    }

    public function setBox00176(?float $box00176): self
    {
        $this->box00176 = $box00176;

        return $this;
    }

    public function getBox00177(): ?float
    {
        return $this->box00177;
    }

    public function setBox00177(?float $box00177): self
    {
        $this->box00177 = $box00177;

        return $this;
    }

    public function getBox00178(): ?float
    {
        return $this->box00178;
    }

    public function setBox00178(?float $box00178): self
    {
        $this->box00178 = $box00178;

        return $this;
    }

    public function getBox00179(): ?float
    {
        return $this->box00179;
    }

    public function setBox00179(?float $box00179): self
    {
        $this->box00179 = $box00179;

        return $this;
    }

    public function getBox00180(): ?float
    {
        return $this->box00180;
    }

    public function setBox00180(?float $box00180): self
    {
        $this->box00180 = $box00180;

        return $this;
    }

    public function getBox00181(): ?float
    {
        return $this->box00181;
    }

    public function setBox00181(?float $box00181): self
    {
        $this->box00181 = $box00181;

        return $this;
    }

    public function getBox00182(): ?float
    {
        return $this->box00182;
    }

    public function setBox00182(?float $box00182): self
    {
        $this->box00182 = $box00182;

        return $this;
    }

    public function getBox00183(): ?float
    {
        return $this->box00183;
    }

    public function setBox00183(?float $box00183): self
    {
        $this->box00183 = $box00183;

        return $this;
    }

    public function getBox00184(): ?float
    {
        return $this->box00184;
    }

    public function setBox00184(?float $box00184): self
    {
        $this->box00184 = $box00184;

        return $this;
    }

    public function getBox00185(): ?float
    {
        return $this->box00185;
    }

    public function setBox00185(?float $box00185): self
    {
        $this->box00185 = $box00185;

        return $this;
    }

    public function getBox00186(): ?float
    {
        return $this->box00186;
    }

    public function setBox00186(?float $box00186): self
    {
        $this->box00186 = $box00186;

        return $this;
    }

    public function getBox00187(): ?float
    {
        return $this->box00187;
    }

    public function setBox00187(?float $box00187): self
    {
        $this->box00187 = $box00187;

        return $this;
    }

    public function getBox00188(): ?float
    {
        return $this->box00188;
    }

    public function setBox00188(?float $box00188): self
    {
        $this->box00188 = $box00188;

        return $this;
    }

    public function getBox00189(): ?float
    {
        return $this->box00189;
    }

    public function setBox00189(?float $box00189): self
    {
        $this->box00189 = $box00189;

        return $this;
    }

    public function getBox00190(): ?float
    {
        return $this->box00190;
    }

    public function setBox00190(?float $box00190): self
    {
        $this->box00190 = $box00190;

        return $this;
    }

    public function getBox00191(): ?float
    {
        return $this->box00191;
    }

    public function setBox00191(?float $box00191): self
    {
        $this->box00191 = $box00191;

        return $this;
    }

    public function getBox00192(): ?float
    {
        return $this->box00192;
    }

    public function setBox00192(?float $box00192): self
    {
        $this->box00192 = $box00192;

        return $this;
    }

    public function getBox00193(): ?float
    {
        return $this->box00193;
    }

    public function setBox00193(?float $box00193): self
    {
        $this->box00193 = $box00193;

        return $this;
    }

    public function getBox00194(): ?float
    {
        return $this->box00194;
    }

    public function setBox00194(?float $box00194): self
    {
        $this->box00194 = $box00194;

        return $this;
    }

    public function getBox00195(): ?float
    {
        return $this->box00195;
    }

    public function setBox00195(?float $box00195): self
    {
        $this->box00195 = $box00195;

        return $this;
    }

    public function getBox00196(): ?float
    {
        return $this->box00196;
    }

    public function setBox00196(?float $box00196): self
    {
        $this->box00196 = $box00196;

        return $this;
    }

    public function getBox00197(): ?float
    {
        return $this->box00197;
    }

    public function setBox00197(?float $box00197): self
    {
        $this->box00197 = $box00197;

        return $this;
    }

    public function getBox00198(): ?float
    {
        return $this->box00198;
    }

    public function setBox00198(?float $box00198): self
    {
        $this->box00198 = $box00198;

        return $this;
    }

    public function getBox00199(): ?float
    {
        return $this->box00199;
    }

    public function setBox00199(float $box00199): self
    {
        $this->box00199 = $box00199;

        return $this;
    }

    public function getBox00200(): ?float
    {
        return $this->box00200;
    }

    public function setBox00200(?float $box00200): self
    {
        $this->box00200 = $box00200;

        return $this;
    }

    public function getBox00201(): ?float
    {
        return $this->box00201;
    }

    public function setBox00201(?float $box00201): self
    {
        $this->box00201 = $box00201;

        return $this;
    }

    public function getBox00202(): ?float
    {
        return $this->box00202;
    }

    public function setBox00202(?float $box00202): self
    {
        $this->box00202 = $box00202;

        return $this;
    }

    public function getBox00203(): ?float
    {
        return $this->box00203;
    }

    public function setBox00203(?float $box00203): self
    {
        $this->box00203 = $box00203;

        return $this;
    }

    public function getBox00204(): ?float
    {
        return $this->box00204;
    }

    public function setBox00204(?float $box00204): self
    {
        $this->box00204 = $box00204;

        return $this;
    }

    public function getBox00205(): ?float
    {
        return $this->box00205;
    }

    public function setBox00205(?float $box00205): self
    {
        $this->box00205 = $box00205;

        return $this;
    }

    public function getBox00206(): ?float
    {
        return $this->box00206;
    }

    public function setBox00206(?float $box00206): self
    {
        $this->box00206 = $box00206;

        return $this;
    }

    public function getBox00207(): ?float
    {
        return $this->box00207;
    }

    public function setBox00207(?float $box00207): self
    {
        $this->box00207 = $box00207;

        return $this;
    }

    public function getBox00208(): ?float
    {
        return $this->box00208;
    }

    public function setBox00208(?float $box00208): self
    {
        $this->box00208 = $box00208;

        return $this;
    }

    public function getBox00209(): ?float
    {
        return $this->box00209;
    }

    public function setBox00209(?float $box00209): self
    {
        $this->box00209 = $box00209;

        return $this;
    }

    public function getBox00210(): ?float
    {
        return $this->box00210;
    }

    public function setBox00210(?float $box00210): self
    {
        $this->box00210 = $box00210;

        return $this;
    }

    public function getBox00211(): ?float
    {
        return $this->box00211;
    }

    public function setBox00211(?float $box00211): self
    {
        $this->box00211 = $box00211;

        return $this;
    }

    public function getBox00212(): ?float
    {
        return $this->box00212;
    }

    public function setBox00212(?float $box00212): self
    {
        $this->box00212 = $box00212;

        return $this;
    }

    public function getBox00213(): ?float
    {
        return $this->box00213;
    }

    public function setBox00213(?float $box00213): self
    {
        $this->box00213 = $box00213;

        return $this;
    }

    public function getBox00214(): ?float
    {
        return $this->box00214;
    }

    public function setBox00214(?float $box00214): self
    {
        $this->box00214 = $box00214;

        return $this;
    }

    public function getBox00215(): ?float
    {
        return $this->box00215;
    }

    public function setBox00215(?float $box00215): self
    {
        $this->box00215 = $box00215;

        return $this;
    }

    public function getBox00216(): ?float
    {
        return $this->box00216;
    }

    public function setBox00216(?float $box00216): self
    {
        $this->box00216 = $box00216;

        return $this;
    }

    public function getBox00217(): ?float
    {
        return $this->box00217;
    }

    public function setBox00217(?float $box00217): self
    {
        $this->box00217 = $box00217;

        return $this;
    }

    public function getBox00218(): ?float
    {
        return $this->box00218;
    }

    public function setBox00218(?float $box00218): self
    {
        $this->box00218 = $box00218;

        return $this;
    }

    public function getBox00219(): ?float
    {
        return $this->box00219;
    }

    public function setBox00219(?float $box00219): self
    {
        $this->box00219 = $box00219;

        return $this;
    }

    public function getBox00220(): ?float
    {
        return $this->box00220;
    }

    public function setBox00220(?float $box00220): self
    {
        $this->box00220 = $box00220;

        return $this;
    }

    public function getBox00221(): ?float
    {
        return $this->box00221;
    }

    public function setBox00221(?float $box00221): self
    {
        $this->box00221 = $box00221;

        return $this;
    }

    public function getBox00222(): ?float
    {
        return $this->box00222;
    }

    public function setBox00222(?float $box00222): self
    {
        $this->box00222 = $box00222;

        return $this;
    }

    public function getBox00223(): ?float
    {
        return $this->box00223;
    }

    public function setBox00223(?float $box00223): self
    {
        $this->box00223 = $box00223;

        return $this;
    }

    public function getBox00224(): ?float
    {
        return $this->box00224;
    }

    public function setBox00224(?float $box00224): self
    {
        $this->box00224 = $box00224;

        return $this;
    }

    public function getBox00225(): ?float
    {
        return $this->box00225;
    }

    public function setBox00225(?float $box00225): self
    {
        $this->box00225 = $box00225;

        return $this;
    }

    public function getBox00226(): ?float
    {
        return $this->box00226;
    }

    public function setBox00226(?float $box00226): self
    {
        $this->box00226 = $box00226;

        return $this;
    }

    public function getBox00227(): ?float
    {
        return $this->box00227;
    }

    public function setBox00227(?float $box00227): self
    {
        $this->box00227 = $box00227;

        return $this;
    }

    public function getBox00228(): ?float
    {
        return $this->box00228;
    }

    public function setBox00228(?float $box00228): self
    {
        $this->box00228 = $box00228;

        return $this;
    }

    public function getBox00229(): ?float
    {
        return $this->box00229;
    }

    public function setBox00229(?float $box00229): self
    {
        $this->box00229 = $box00229;

        return $this;
    }

    public function getBox00230(): ?float
    {
        return $this->box00230;
    }

    public function setBox00230(?float $box00230): self
    {
        $this->box00230 = $box00230;

        return $this;
    }

    public function getBox00231(): ?float
    {
        return $this->box00231;
    }

    public function setBox00231(?float $box00231): self
    {
        $this->box00231 = $box00231;

        return $this;
    }

    public function getBox00232(): ?float
    {
        return $this->box00232;
    }

    public function setBox00232(?float $box00232): self
    {
        $this->box00232 = $box00232;

        return $this;
    }

    public function getBox00233(): ?float
    {
        return $this->box00233;
    }

    public function setBox00233(?float $box00233): self
    {
        $this->box00233 = $box00233;

        return $this;
    }

    public function getBox00234(): ?float
    {
        return $this->box00234;
    }

    public function setBox00234(?float $box00234): self
    {
        $this->box00234 = $box00234;

        return $this;
    }

    public function getBox00235(): ?float
    {
        return $this->box00235;
    }

    public function setBox00235(?float $box00235): self
    {
        $this->box00235 = $box00235;

        return $this;
    }

    public function getBox00236(): ?float
    {
        return $this->box00236;
    }

    public function setBox00236(?float $box00236): self
    {
        $this->box00236 = $box00236;

        return $this;
    }

    public function getBox00237(): ?float
    {
        return $this->box00237;
    }

    public function setBox00237(?float $box00237): self
    {
        $this->box00237 = $box00237;

        return $this;
    }

    public function getBox00238(): ?float
    {
        return $this->box00238;
    }

    public function setBox00238(?float $box00238): self
    {
        $this->box00238 = $box00238;

        return $this;
    }

    public function getBox00239(): ?float
    {
        return $this->box00239;
    }

    public function setBox00239(?float $box00239): self
    {
        $this->box00239 = $box00239;

        return $this;
    }

    public function getBox00240(): ?float
    {
        return $this->box00240;
    }

    public function setBox00240(?float $box00240): self
    {
        $this->box00240 = $box00240;

        return $this;
    }

    public function getBox00241(): ?float
    {
        return $this->box00241;
    }

    public function setBox00241(?float $box00241): self
    {
        $this->box00241 = $box00241;

        return $this;
    }

    public function getBox00242(): ?float
    {
        return $this->box00242;
    }

    public function setBox00242(?float $box00242): self
    {
        $this->box00242 = $box00242;

        return $this;
    }

    public function getBox00243(): ?float
    {
        return $this->box00243;
    }

    public function setBox00243(?float $box00243): self
    {
        $this->box00243 = $box00243;

        return $this;
    }

    public function getBox00244(): ?float
    {
        return $this->box00244;
    }

    public function setBox00244(?float $box00244): self
    {
        $this->box00244 = $box00244;

        return $this;
    }

    public function getBox00245(): ?float
    {
        return $this->box00245;
    }

    public function setBox00245(?float $box00245): self
    {
        $this->box00245 = $box00245;

        return $this;
    }

    public function getBox00246(): ?float
    {
        return $this->box00246;
    }

    public function setBox00246(?float $box00246): self
    {
        $this->box00246 = $box00246;

        return $this;
    }

    public function getBox00247(): ?float
    {
        return $this->box00247;
    }

    public function setBox00247(?float $box00247): self
    {
        $this->box00247 = $box00247;

        return $this;
    }

    public function getBox00248(): ?float
    {
        return $this->box00248;
    }

    public function setBox00248(?float $box00248): self
    {
        $this->box00248 = $box00248;

        return $this;
    }

    public function getBox00249(): ?float
    {
        return $this->box00249;
    }

    public function setBox00249(?float $box00249): self
    {
        $this->box00249 = $box00249;

        return $this;
    }

    public function getBox00250(): ?float
    {
        return $this->box00250;
    }

    public function setBox00250(?float $box00250): self
    {
        $this->box00250 = $box00250;

        return $this;
    }

    public function getBox00251(): ?float
    {
        return $this->box00251;
    }

    public function setBox00251(?float $box00251): self
    {
        $this->box00251 = $box00251;

        return $this;
    }

    public function getBox00252(): ?float
    {
        return $this->box00252;
    }

    public function setBox00252(?float $box00252): self
    {
        $this->box00252 = $box00252;

        return $this;
    }

    public function getBox00253(): ?float
    {
        return $this->box00253;
    }

    public function setBox00253(?float $box00253): self
    {
        $this->box00253 = $box00253;

        return $this;
    }

    public function getBox00254(): ?string
    {
        return $this->box00254;
    }

    public function setBox00254(?string $box00254): self
    {
        $this->box00254 = $box00254;

        return $this;
    }

    public function getBox00255(): ?float
    {
        return $this->box00255;
    }

    public function setBox00255(?float $box00255): self
    {
        $this->box00255 = $box00255;

        return $this;
    }

    public function getBox00256(): ?float
    {
        return $this->box00256;
    }

    public function setBox00256(?float $box00256): self
    {
        $this->box00256 = $box00256;

        return $this;
    }

    public function getBox00257(): ?float
    {
        return $this->box00257;
    }

    public function setBox00257(?float $box00257): self
    {
        $this->box00257 = $box00257;

        return $this;
    }

    public function getBox00258(): ?float
    {
        return $this->box00258;
    }

    public function setBox00258(?float $box00258): self
    {
        $this->box00258 = $box00258;

        return $this;
    }

    public function getBox00259(): ?float
    {
        return $this->box00259;
    }

    public function setBox00259(?float $box00259): self
    {
        $this->box00259 = $box00259;

        return $this;
    }

    public function getBox00260(): ?float
    {
        return $this->box00260;
    }

    public function setBox00260(?float $box00260): self
    {
        $this->box00260 = $box00260;

        return $this;
    }

    public function getBox00261(): ?float
    {
        return $this->box00261;
    }

    public function setBox00261(?float $box00261): self
    {
        $this->box00261 = $box00261;

        return $this;
    }

    public function getBox00262(): ?float
    {
        return $this->box00262;
    }

    public function setBox00262(?float $box00262): self
    {
        $this->box00262 = $box00262;

        return $this;
    }

    public function getBox00263(): ?float
    {
        return $this->box00263;
    }

    public function setBox00263(?float $box00263): self
    {
        $this->box00263 = $box00263;

        return $this;
    }

    public function getBox00264(): ?float
    {
        return $this->box00264;
    }

    public function setBox00264(?float $box00264): self
    {
        $this->box00264 = $box00264;

        return $this;
    }

    public function getBox00265(): ?float
    {
        return $this->box00265;
    }

    public function setBox00265(?float $box00265): self
    {
        $this->box00265 = $box00265;

        return $this;
    }

    public function getBox00266(): ?float
    {
        return $this->box00266;
    }

    public function setBox00266(?float $box00266): self
    {
        $this->box00266 = $box00266;

        return $this;
    }

    public function getBox00267(): ?float
    {
        return $this->box00267;
    }

    public function setBox00267(?float $box00267): self
    {
        $this->box00267 = $box00267;

        return $this;
    }

    public function getBox00268(): ?float
    {
        return $this->box00268;
    }

    public function setBox00268(?float $box00268): self
    {
        $this->box00268 = $box00268;

        return $this;
    }

    public function getBox00269(): ?float
    {
        return $this->box00269;
    }

    public function setBox00269(?float $box00269): self
    {
        $this->box00269 = $box00269;

        return $this;
    }

    public function getBox00270(): ?float
    {
        return $this->box00270;
    }

    public function setBox00270(?float $box00270): self
    {
        $this->box00270 = $box00270;

        return $this;
    }

    public function getBox00271(): ?float
    {
        return $this->box00271;
    }

    public function setBox00271(?float $box00271): self
    {
        $this->box00271 = $box00271;

        return $this;
    }

    public function getBox00272(): ?float
    {
        return $this->box00272;
    }

    public function setBox00272(?float $box00272): self
    {
        $this->box00272 = $box00272;

        return $this;
    }

    public function getBox00273(): ?float
    {
        return $this->box00273;
    }

    public function setBox00273(?float $box00273): self
    {
        $this->box00273 = $box00273;

        return $this;
    }

    public function getBox00274(): ?float
    {
        return $this->box00274;
    }

    public function setBox00274(?float $box00274): self
    {
        $this->box00274 = $box00274;

        return $this;
    }

    public function getBox00275(): ?float
    {
        return $this->box00275;
    }

    public function setBox00275(?float $box00275): self
    {
        $this->box00275 = $box00275;

        return $this;
    }

    public function getBox00276(): ?float
    {
        return $this->box00276;
    }

    public function setBox00276(?float $box00276): self
    {
        $this->box00276 = $box00276;

        return $this;
    }

    public function getBox00277(): ?float
    {
        return $this->box00277;
    }

    public function setBox00277(?float $box00277): self
    {
        $this->box00277 = $box00277;

        return $this;
    }

    public function getBox00278(): ?float
    {
        return $this->box00278;
    }

    public function setBox00278(?float $box00278): self
    {
        $this->box00278 = $box00278;

        return $this;
    }

    public function getBox00279(): ?float
    {
        return $this->box00279;
    }

    public function setBox00279(?float $box00279): self
    {
        $this->box00279 = $box00279;

        return $this;
    }

    public function getBox00280(): ?float
    {
        return $this->box00280;
    }

    public function setBox00280(?float $box00280): self
    {
        $this->box00280 = $box00280;

        return $this;
    }

    public function getBox00281(): ?float
    {
        return $this->box00281;
    }

    public function setBox00281(?float $box00281): self
    {
        $this->box00281 = $box00281;

        return $this;
    }

    public function getBox00282(): ?float
    {
        return $this->box00282;
    }

    public function setBox00282(?float $box00282): self
    {
        $this->box00282 = $box00282;

        return $this;
    }

    public function getBox00283(): ?float
    {
        return $this->box00283;
    }

    public function setBox00283(?float $box00283): self
    {
        $this->box00283 = $box00283;

        return $this;
    }

    public function getBox00284(): ?float
    {
        return $this->box00284;
    }

    public function setBox00284(?float $box00284): self
    {
        $this->box00284 = $box00284;

        return $this;
    }

    public function getBox00285(): ?float
    {
        return $this->box00285;
    }

    public function setBox00285(?float $box00285): self
    {
        $this->box00285 = $box00285;

        return $this;
    }

    public function getBox00286(): ?float
    {
        return $this->box00286;
    }

    public function setBox00286(?float $box00286): self
    {
        $this->box00286 = $box00286;

        return $this;
    }

    public function getBox00287(): ?float
    {
        return $this->box00287;
    }

    public function setBox00287(?float $box00287): self
    {
        $this->box00287 = $box00287;

        return $this;
    }

    public function getBox00288(): ?float
    {
        return $this->box00288;
    }

    public function setBox00288(?float $box00288): self
    {
        $this->box00288 = $box00288;

        return $this;
    }

    public function getBox00289(): ?float
    {
        return $this->box00289;
    }

    public function setBox00289(?float $box00289): self
    {
        $this->box00289 = $box00289;

        return $this;
    }

    public function getBox00290(): ?float
    {
        return $this->box00290;
    }

    public function setBox00290(?float $box00290): self
    {
        $this->box00290 = $box00290;

        return $this;
    }

    public function getBox00291(): ?float
    {
        return $this->box00291;
    }

    public function setBox00291(?float $box00291): self
    {
        $this->box00291 = $box00291;

        return $this;
    }

    public function getBox00292(): ?float
    {
        return $this->box00292;
    }

    public function setBox00292(?float $box00292): self
    {
        $this->box00292 = $box00292;

        return $this;
    }

    public function getBox00293(): ?float
    {
        return $this->box00293;
    }

    public function setBox00293(?float $box00293): self
    {
        $this->box00293 = $box00293;

        return $this;
    }

    public function getBox00294(): ?float
    {
        return $this->box00294;
    }

    public function setBox00294(?float $box00294): self
    {
        $this->box00294 = $box00294;

        return $this;
    }

    public function getBox00295(): ?float
    {
        return $this->box00295;
    }

    public function setBox00295(?float $box00295): self
    {
        $this->box00295 = $box00295;

        return $this;
    }

    public function getBox00296(): ?float
    {
        return $this->box00296;
    }

    public function setBox00296(?float $box00296): self
    {
        $this->box00296 = $box00296;

        return $this;
    }

    public function getBox00297(): ?float
    {
        return $this->box00297;
    }

    public function setBox00297(?float $box00297): self
    {
        $this->box00297 = $box00297;

        return $this;
    }

    public function getBox00298(): ?float
    {
        return $this->box00298;
    }

    public function setBox00298(?float $box00298): self
    {
        $this->box00298 = $box00298;

        return $this;
    }

    public function getBox00299(): ?float
    {
        return $this->box00299;
    }

    public function setBox00299(?float $box00299): self
    {
        $this->box00299 = $box00299;

        return $this;
    }

    public function getBox00300(): ?float
    {
        return $this->box00300;
    }

    public function setBox00300(?float $box00300): self
    {
        $this->box00300 = $box00300;

        return $this;
    }

    public function getBox00301(): ?float
    {
        return $this->box00301;
    }

    public function setBox00301(?float $box00301): self
    {
        $this->box00301 = $box00301;

        return $this;
    }

    public function getBox00302(): ?float
    {
        return $this->box00302;
    }

    public function setBox00302(?float $box00302): self
    {
        $this->box00302 = $box00302;

        return $this;
    }

    public function getBox00303(): ?float
    {
        return $this->box00303;
    }

    public function setBox00303(?float $box00303): self
    {
        $this->box00303 = $box00303;

        return $this;
    }

    public function getBox00304(): ?float
    {
        return $this->box00304;
    }

    public function setBox00304(?float $box00304): self
    {
        $this->box00304 = $box00304;

        return $this;
    }

    public function getBox00305(): ?float
    {
        return $this->box00305;
    }

    public function setBox00305(?float $box00305): self
    {
        $this->box00305 = $box00305;

        return $this;
    }

    public function getBox00306(): ?float
    {
        return $this->box00306;
    }

    public function setBox00306(?float $box00306): self
    {
        $this->box00306 = $box00306;

        return $this;
    }

    public function getBox00307(): ?float
    {
        return $this->box00307;
    }

    public function setBox00307(?float $box00307): self
    {
        $this->box00307 = $box00307;

        return $this;
    }

    public function getBox00308(): ?float
    {
        return $this->box00308;
    }

    public function setBox00308(?float $box00308): self
    {
        $this->box00308 = $box00308;

        return $this;
    }

    public function getBox00309(): ?float
    {
        return $this->box00309;
    }

    public function setBox00309(?float $box00309): self
    {
        $this->box00309 = $box00309;

        return $this;
    }

    public function getBox00310(): ?float
    {
        return $this->box00310;
    }

    public function setBox00310(?float $box00310): self
    {
        $this->box00310 = $box00310;

        return $this;
    }

    public function getBox00311(): ?float
    {
        return $this->box00311;
    }

    public function setBox00311(?float $box00311): self
    {
        $this->box00311 = $box00311;

        return $this;
    }

    public function getBox00312(): ?float
    {
        return $this->box00312;
    }

    public function setBox00312(?float $box00312): self
    {
        $this->box00312 = $box00312;

        return $this;
    }

    public function getBox00313(): ?float
    {
        return $this->box00313;
    }

    public function setBox00313(?float $box00313): self
    {
        $this->box00313 = $box00313;

        return $this;
    }

    public function getBox00314(): ?float
    {
        return $this->box00314;
    }

    public function setBox00314(?float $box00314): self
    {
        $this->box00314 = $box00314;

        return $this;
    }

    public function getBox00315(): ?float
    {
        return $this->box00315;
    }

    public function setBox00315(?float $box00315): self
    {
        $this->box00315 = $box00315;

        return $this;
    }

    public function getBox00316(): ?float
    {
        return $this->box00316;
    }

    public function setBox00316(?float $box00316): self
    {
        $this->box00316 = $box00316;

        return $this;
    }

    public function getBox00317(): ?float
    {
        return $this->box00317;
    }

    public function setBox00317(?float $box00317): self
    {
        $this->box00317 = $box00317;

        return $this;
    }

    public function getBox00318(): ?float
    {
        return $this->box00318;
    }

    public function setBox00318(?float $box00318): self
    {
        $this->box00318 = $box00318;

        return $this;
    }

    public function getBox00319(): ?float
    {
        return $this->box00319;
    }

    public function setBox00319(?float $box00319): self
    {
        $this->box00319 = $box00319;

        return $this;
    }

    public function getBox00320(): ?float
    {
        return $this->box00320;
    }

    public function setBox00320(?float $box00320): self
    {
        $this->box00320 = $box00320;

        return $this;
    }

    public function getBox00321(): ?float
    {
        return $this->box00321;
    }

    public function setBox00321(?float $box00321): self
    {
        $this->box00321 = $box00321;

        return $this;
    }

    public function getBox00322(): ?float
    {
        return $this->box00322;
    }

    public function setBox00322(?float $box00322): self
    {
        $this->box00322 = $box00322;

        return $this;
    }

    public function getBox00323(): ?float
    {
        return $this->box00323;
    }

    public function setBox00323(?float $box00323): self
    {
        $this->box00323 = $box00323;

        return $this;
    }

    public function getBox00324(): ?float
    {
        return $this->box00324;
    }

    public function setBox00324(?float $box00324): self
    {
        $this->box00324 = $box00324;

        return $this;
    }

    public function getBox00325(): ?float
    {
        return $this->box00325;
    }

    public function setBox00325(?float $box00325): self
    {
        $this->box00325 = $box00325;

        return $this;
    }

    public function getBox00326(): ?float
    {
        return $this->box00326;
    }

    public function setBox00326(?float $box00326): self
    {
        $this->box00326 = $box00326;

        return $this;
    }

    public function getBox00327(): ?float
    {
        return $this->box00327;
    }

    public function setBox00327(?float $box00327): self
    {
        $this->box00327 = $box00327;

        return $this;
    }

    public function getBox00328(): ?float
    {
        return $this->box00328;
    }

    public function setBox00328(?float $box00328): self
    {
        $this->box00328 = $box00328;

        return $this;
    }

    public function getBox00329(): ?float
    {
        return $this->box00329;
    }

    public function setBox00329(?float $box00329): self
    {
        $this->box00329 = $box00329;

        return $this;
    }

    public function getBox00330(): ?float
    {
        return $this->box00330;
    }

    public function setBox00330(?float $box00330): self
    {
        $this->box00330 = $box00330;

        return $this;
    }

    public function getBox00331(): ?float
    {
        return $this->box00331;
    }

    public function setBox00331(?float $box00331): self
    {
        $this->box00331 = $box00331;

        return $this;
    }

    public function getBox00332(): ?float
    {
        return $this->box00332;
    }

    public function setBox00332(?float $box00332): self
    {
        $this->box00332 = $box00332;

        return $this;
    }

    public function getBox00336(): ?float
    {
        return $this->box00336;
    }

    public function setBox00336(float $box00336): self
    {
        $this->box00336 = $box00336;

        return $this;
    }

    public function getBox00337(): ?float
    {
        return $this->box00337;
    }

    public function setBox00337(?float $box00337): self
    {
        $this->box00337 = $box00337;

        return $this;
    }

    public function getBox00338(): ?float
    {
        return $this->box00338;
    }

    public function setBox00338(?float $box00338): self
    {
        $this->box00338 = $box00338;

        return $this;
    }

    public function getBox00339(): ?float
    {
        return $this->box00339;
    }

    public function setBox00339(?float $box00339): self
    {
        $this->box00339 = $box00339;

        return $this;
    }

    public function getBox00340(): ?float
    {
        return $this->box00340;
    }

    public function setBox00340(?float $box00340): self
    {
        $this->box00340 = $box00340;

        return $this;
    }

    public function getBox00341(): ?float
    {
        return $this->box00341;
    }

    public function setBox00341(?float $box00341): self
    {
        $this->box00341 = $box00341;

        return $this;
    }

    public function getBox00342(): ?float
    {
        return $this->box00342;
    }

    public function setBox00342(?float $box00342): self
    {
        $this->box00342 = $box00342;

        return $this;
    }

    public function getBox00343(): ?float
    {
        return $this->box00343;
    }

    public function setBox00343(?float $box00343): self
    {
        $this->box00343 = $box00343;

        return $this;
    }

    public function getBox00344(): ?float
    {
        return $this->box00344;
    }

    public function setBox00344(?float $box00344): self
    {
        $this->box00344 = $box00344;

        return $this;
    }

    public function getBox00345(): ?float
    {
        return $this->box00345;
    }

    public function setBox00345(?float $box00345): self
    {
        $this->box00345 = $box00345;

        return $this;
    }

    public function getBox00346(): ?float
    {
        return $this->box00346;
    }

    public function setBox00346(?float $box00346): self
    {
        $this->box00346 = $box00346;

        return $this;
    }

    public function getBox00347(): ?float
    {
        return $this->box00347;
    }

    public function setBox00347(?float $box00347): self
    {
        $this->box00347 = $box00347;

        return $this;
    }

    public function getBox00348(): ?float
    {
        return $this->box00348;
    }

    public function setBox00348(?float $box00348): self
    {
        $this->box00348 = $box00348;

        return $this;
    }

    public function getBox00349(): ?float
    {
        return $this->box00349;
    }

    public function setBox00349(?float $box00349): self
    {
        $this->box00349 = $box00349;

        return $this;
    }

    public function getBox00350(): ?float
    {
        return $this->box00350;
    }

    public function setBox00350(?float $box00350): self
    {
        $this->box00350 = $box00350;

        return $this;
    }

    public function getBox00351(): ?float
    {
        return $this->box00351;
    }

    public function setBox00351(?float $box00351): self
    {
        $this->box00351 = $box00351;

        return $this;
    }

    public function getBox00352(): ?float
    {
        return $this->box00352;
    }

    public function setBox00352(?float $box00352): self
    {
        $this->box00352 = $box00352;

        return $this;
    }

    public function getBox00353(): ?float
    {
        return $this->box00353;
    }

    public function setBox00353(?float $box00353): self
    {
        $this->box00353 = $box00353;

        return $this;
    }

    public function getBox00354(): ?float
    {
        return $this->box00354;
    }

    public function setBox00354(?float $box00354): self
    {
        $this->box00354 = $box00354;

        return $this;
    }

    public function getBox00355(): ?string
    {
        return $this->box00355;
    }

    public function setBox00355(?string $box00355): self
    {
        $this->box00355 = $box00355;

        return $this;
    }

    public function getBox00500(): ?float
    {
        return $this->box00500;
    }

    public function setBox00500(?float $box00500): self
    {
        $this->box00500 = $box00500;

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

    public function getBox00700(): ?float
    {
        return $this->box00700;
    }

    public function setBox00700(?float $box00700): self
    {
        $this->box00700 = $box00700;

        return $this;
    }

    public function getBox00701(): ?float
    {
        return $this->box00701;
    }

    public function setBox00701(?float $box00701): self
    {
        $this->box00701 = $box00701;

        return $this;
    }

    public function getBox00702(): ?float
    {
        return $this->box00702;
    }

    public function setBox00702(?float $box00702): self
    {
        $this->box00702 = $box00702;

        return $this;
    }

    public function getBox00703(): ?float
    {
        return $this->box00703;
    }

    public function setBox00703(?float $box00703): self
    {
        $this->box00703 = $box00703;

        return $this;
    }

    public function getBox00704(): ?float
    {
        return $this->box00704;
    }

    public function setBox00704(?float $box00704): self
    {
        $this->box00704 = $box00704;

        return $this;
    }

    public function getBox00705(): ?float
    {
        return $this->box00705;
    }

    public function setBox00705(?float $box00705): self
    {
        $this->box00705 = $box00705;

        return $this;
    }

    public function getBox00706(): ?float
    {
        return $this->box00706;
    }

    public function setBox00706(?float $box00706): self
    {
        $this->box00706 = $box00706;

        return $this;
    }

    public function getBox00707(): ?float
    {
        return $this->box00707;
    }

    public function setBox00707(?float $box00707): self
    {
        $this->box00707 = $box00707;

        return $this;
    }

    public function getBox00708(): ?float
    {
        return $this->box00708;
    }

    public function setBox00708(?float $box00708): self
    {
        $this->box00708 = $box00708;

        return $this;
    }

    public function getBox00709(): ?float
    {
        return $this->box00709;
    }

    public function setBox00709(?float $box00709): self
    {
        $this->box00709 = $box00709;

        return $this;
    }

    public function getBox00710(): ?float
    {
        return $this->box00710;
    }

    public function setBox00710(?float $box00710): self
    {
        $this->box00710 = $box00710;

        return $this;
    }

    public function getBox00711(): ?float
    {
        return $this->box00711;
    }

    public function setBox00711(?float $box00711): self
    {
        $this->box00711 = $box00711;

        return $this;
    }

    public function getBox00712(): ?float
    {
        return $this->box00712;
    }

    public function setBox00712(?float $box00712): self
    {
        $this->box00712 = $box00712;

        return $this;
    }

    public function getBox00760(): ?float
    {
        return $this->box00760;
    }

    public function setBox00760(?float $box00760): self
    {
        $this->box00760 = $box00760;

        return $this;
    }

    public function getBox00761(): ?float
    {
        return $this->box00761;
    }

    public function setBox00761(?float $box00761): self
    {
        $this->box00761 = $box00761;

        return $this;
    }

    public function getBox00762(): ?float
    {
        return $this->box00762;
    }

    public function setBox00762(?float $box00762): self
    {
        $this->box00762 = $box00762;

        return $this;
    }

    public function getBox01001(): ?float
    {
        return $this->box01001;
    }

    public function setBox01001(?float $box01001): self
    {
        $this->box01001 = $box01001;

        return $this;
    }

    public function getBox01002(): ?float
    {
        return $this->box01002;
    }

    public function setBox01002(?float $box01002): self
    {
        $this->box01002 = $box01002;

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
