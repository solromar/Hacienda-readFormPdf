<?php

namespace App\Entity;

use App\Repository\PreviousPeriodRectificationRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=PreviousPeriodRectificationRepository::class)
 */
class PreviousPeriodRectification extends AbstractTimetrackeableEntity
{

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $previousPeriodRectificationNumber;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $communityNifNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $socialDenomination;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $previousPeriodKey;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $exercise;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $period;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $rectifiedTaxBase;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $previousTaxBase;

    /**
     * @ORM\ManyToOne(targetEntity=Model349::class, inversedBy="previousPeriodRectifications")
     */
    private $Model349previousPeriodRectifications;


    public function getPreviousPeriodRectificationNumber(): ?int
    {
        return $this->previousPeriodRectificationNumber;
    }

    public function setPreviousPeriodRectificationNumber(?int $previousPeriodRectificationNumber): self
    {
        $this->previousPeriodRectificationNumber = $previousPeriodRectificationNumber;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getCommunityNifNumber(): ?string
    {
        return $this->communityNifNumber;
    }

    public function setCommunityNifNumber(?string $communityNifNumber): self
    {
        $this->communityNifNumber = $communityNifNumber;

        return $this;
    }

    public function getSocialDenomination(): ?string
    {
        return $this->socialDenomination;
    }

    public function setSocialDenomination(?string $socialDenomination): self
    {
        $this->socialDenomination = $socialDenomination;

        return $this;
    }

    public function getPreviousPeriodKey(): ?string
    {
        return $this->previousPeriodKey;
    }

    public function setPreviousPeriodKey(?string $previousPeriodKey): self
    {
        $this->previousPeriodKey = $previousPeriodKey;

        return $this;
    }

    public function getExercise(): ?string
    {
        return $this->exercise;
    }

    public function setExercise(?string $exercise): self
    {
        $this->exercise = $exercise;

        return $this;
    }

    public function getPeriod(): ?string
    {
        return $this->period;
    }

    public function setPeriod(?string $period): self
    {
        $this->period = $period;

        return $this;
    }

    public function getRectifiedTaxBase(): ?float
    {
        return $this->rectifiedTaxBase;
    }

    public function setRectifiedTaxBase(?float $rectifiedTaxBase): self
    {
        $this->rectifiedTaxBase = $rectifiedTaxBase;

        return $this;
    }

    public function getPreviousTaxBase(): ?float
    {
        return $this->previousTaxBase;
    }

    public function setPreviousTaxBase(?float $previousTaxBase): self
    {
        $this->previousTaxBase = $previousTaxBase;

        return $this;
    }

    public function getModel349previousPeriodRectifications(): ?Model349
    {
        return $this->Model349previousPeriodRectifications;
    }

    public function setModel349previousPeriodRectifications(?Model349 $Model349previousPeriodRectifications): self
    {
        $this->Model349previousPeriodRectifications = $Model349previousPeriodRectifications;

        return $this;
    }
}
