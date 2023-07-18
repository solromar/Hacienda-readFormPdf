<?php

namespace App\Entity;

use App\Repository\BusinessPremisesRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=BusinessPremisesRepository::class)
 */
class BusinessPremises extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $businessPremisesNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $tenantNifNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $representativeNifNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $tenantSocialDenomination;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $operationAmount;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $cadastralReferenceCode;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $situationCode;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $roadType;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $roadName;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $numberType;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $houseNumber;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $qualifierNumber;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $block;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $gate;

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
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $addressComplement;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $locality;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $cityCode;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $provinceCode;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $postalCode;

    /**
     * @ORM\ManyToOne(targetEntity=Model347::class, inversedBy="businessPremiseses")
     */
    private $Model347businessPremiseses;

    
    public function getBusinessPremisesNumber(): ?int
    {
        return $this->businessPremisesNumber;
    }

    public function setBusinessPremisesNumber(?int $businessPremisesNumber): self
    {
        $this->businessPremisesNumber = $businessPremisesNumber;

        return $this;
    }

    public function getTenantNifNumber(): ?string
    {
        return $this->tenantNifNumber;
    }

    public function setTenantNifNumber(?string $tenantNifNumber): self
    {
        $this->tenantNifNumber = $tenantNifNumber;

        return $this;
    }

    public function getRepresentativeNifNumber(): ?string
    {
        return $this->representativeNifNumber;
    }

    public function setRepresentativeNifNumber(?string $representativeNifNumber): self
    {
        $this->representativeNifNumber = $representativeNifNumber;

        return $this;
    }

    public function getTenantSocialDenomination(): ?string
    {
        return $this->tenantSocialDenomination;
    }

    public function setTenantSocialDenomination(?string $tenantSocialDenomination): self
    {
        $this->tenantSocialDenomination = $tenantSocialDenomination;

        return $this;
    }

    public function getOperationAmount(): ?float
    {
        return $this->operationAmount;
    }

    public function setOperationAmount(?float $operationAmount): self
    {
        $this->operationAmount = $operationAmount;

        return $this;
    }

    public function getCadastralReferenceCode(): ?string
    {
        return $this->cadastralReferenceCode;
    }

    public function setCadastralReferenceCode(?string $cadastralReferenceCode): self
    {
        $this->cadastralReferenceCode = $cadastralReferenceCode;

        return $this;
    }

    public function getSituationCode(): ?string
    {
        return $this->situationCode;
    }

    public function setSituationCode(?string $situationCode): self
    {
        $this->situationCode = $situationCode;

        return $this;
    }

    public function getRoadType(): ?string
    {
        return $this->roadType;
    }

    public function setRoadType(?string $roadType): self
    {
        $this->roadType = $roadType;

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

    public function getNumberType(): ?string
    {
        return $this->numberType;
    }

    public function setNumberType(?string $numberType): self
    {
        $this->numberType = $numberType;

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

    public function getQualifierNumber(): ?string
    {
        return $this->qualifierNumber;
    }

    public function setQualifierNumber(?string $qualifierNumber): self
    {
        $this->qualifierNumber = $qualifierNumber;

        return $this;
    }

    public function getBlock(): ?string
    {
        return $this->block;
    }

    public function setBlock(?string $block): self
    {
        $this->block = $block;

        return $this;
    }

    public function getGate(): ?string
    {
        return $this->gate;
    }

    public function setGate(?string $gate): self
    {
        $this->gate = $gate;

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

    public function getAddressComplement(): ?string
    {
        return $this->addressComplement;
    }

    public function setAddressComplement(?string $addressComplement): self
    {
        $this->addressComplement = $addressComplement;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;

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

    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    public function setCityCode(?string $cityCode): self
    {
        $this->cityCode = $cityCode;

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

    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    public function setProvinceCode(?string $provinceCode): self
    {
        $this->provinceCode = $provinceCode;

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

    public function getModel347businessPremiseses(): ?Model347
    {
        return $this->Model347businessPremiseses;
    }

    public function setModel347businessPremiseses(?Model347 $Model347businessPremiseses): self
    {
        $this->Model347businessPremiseses = $Model347businessPremiseses;

        return $this;
    }
}
