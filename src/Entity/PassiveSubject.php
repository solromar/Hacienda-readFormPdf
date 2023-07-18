<?php

namespace App\Entity;

use App\Repository\PassiveSubjectRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=PassiveSubjectRepository::class)
 */
class PassiveSubject extends AbstractTimetrackeableEntity
{

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $sharePercentage;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nifNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $socialDenomination;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $roadName;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $houseNumber;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $ladder;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $floor;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $door;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $faxNumber;

    /**
     * @ORM\ManyToOne(targetEntity=Model600::class, inversedBy="passiveSubjects")
     */
    private $Model600passiveSubjects;


    public function getSharePercentage(): ?float
    {
        return $this->sharePercentage;
    }

    public function setSharePercentage(?float $sharePercentage): self
    {
        $this->sharePercentage = $sharePercentage;

        return $this;
    }

    public function getNifNumber(): ?string
    {
        return $this->nifNumber;
    }

    public function setNifNumber(?string $nifNumber): self
    {
        $this->nifNumber = $nifNumber;

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

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getRoadName(): ?string
    {
        return $this->roadName;
    }

    public function setRoadName(?string $roadName): self
    {
        $this->roadName = $roadName;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getLadder(): ?string
    {
        return $this->ladder;
    }

    public function setLadder(?string $ladder): self
    {
        $this->ladder = $ladder;

        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->floor;
    }

    public function setFloor(?string $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getDoor(): ?string
    {
        return $this->door;
    }

    public function setDoor(?string $door): self
    {
        $this->door = $door;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(?string $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    public function getModel600passiveSubjects(): ?Model600
    {
        return $this->Model600passiveSubjects;
    }

    public function setModel600passiveSubjects(?Model600 $Model600passiveSubjects): self
    {
        $this->Model600passiveSubjects = $Model600passiveSubjects;

        return $this;
    }
}
