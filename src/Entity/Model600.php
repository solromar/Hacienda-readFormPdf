<?php

namespace App\Entity;

use App\Repository\Model600Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model600Repository::class)
 */
class Model600 extends AbstractTimetrackeableEntity
{    
    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $conceptKey;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $accrualDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $passiveSubjectsNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $transmittingNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $documentDataType;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $authorityNameAndSurname;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $formalizationCity;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $protocolNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $concept;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $otherIdentifyingData;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $cadastralReference;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cadastralValue;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $area;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $declaredValue;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $exempt;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $notSubject;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $fundament;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $supplementaryLiquidation;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $associatedSupportingDocumentDate;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $associatedSupportingDocumentAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box3;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box4;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box5;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box6;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box7;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box8;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box9;

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
     * @ORM\OneToMany(targetEntity=PassiveSubject::class, mappedBy="Model600passiveSubjects")
     */
    private $passiveSubjects;

    /**
     * @ORM\OneToMany(targetEntity=Transmitting::class, mappedBy="Model600transmittings")
     */
    private $transmittings;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models600s")
     */
    private $taxModels;

    public function __construct()
    {
        parent::__construct();
        $this->passiveSubjects = new ArrayCollection();
        $this->transmittings = new ArrayCollection();
    }
    
    public function getConceptKey(): ?string
    {
        return $this->conceptKey;
    }

    public function setConceptKey(?string $conceptKey): self
    {
        $this->conceptKey = $conceptKey;

        return $this;
    }

    public function getAccrualDate(): ?\DateTimeInterface
    {
        return $this->accrualDate;
    }

    public function setAccrualDate(?\DateTimeInterface $accrualDate): self
    {
        $this->accrualDate = $accrualDate;

        return $this;
    }

    public function getPassiveSubjectsNumber(): ?int
    {
        return $this->passiveSubjectsNumber;
    }

    public function setPassiveSubjectsNumber(?int $passiveSubjectsNumber): self
    {
        $this->passiveSubjectsNumber = $passiveSubjectsNumber;

        return $this;
    }

    public function getTransmittingNumber(): ?int
    {
        return $this->transmittingNumber;
    }

    public function setTransmittingNumber(?int $transmittingNumber): self
    {
        $this->transmittingNumber = $transmittingNumber;

        return $this;
    }

    public function getDocumentDataType(): ?string
    {
        return $this->documentDataType;
    }

    public function setDocumentDataType(?string $documentDataType): self
    {
        $this->documentDataType = $documentDataType;

        return $this;
    }

    public function getAuthorityNameAndSurname(): ?string
    {
        return $this->authorityNameAndSurname;
    }

    public function setAuthorityNameAndSurname(?string $authorityNameAndSurname): self
    {
        $this->authorityNameAndSurname = $authorityNameAndSurname;

        return $this;
    }

    public function getFormalizationCity(): ?string
    {
        return $this->formalizationCity;
    }

    public function setFormalizationCity(?string $formalizationCity): self
    {
        $this->formalizationCity = $formalizationCity;

        return $this;
    }

    public function getProtocolNumber(): ?string
    {
        return $this->protocolNumber;
    }

    public function setProtocolNumber(?string $protocolNumber): self
    {
        $this->protocolNumber = $protocolNumber;

        return $this;
    }

    public function getConcept(): ?string
    {
        return $this->concept;
    }

    public function setConcept(?string $concept): self
    {
        $this->concept = $concept;

        return $this;
    }

    public function getOtherIdentifyingData(): ?string
    {
        return $this->otherIdentifyingData;
    }

    public function setOtherIdentifyingData(?string $otherIdentifyingData): self
    {
        $this->otherIdentifyingData = $otherIdentifyingData;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCadastralReference(): ?string
    {
        return $this->cadastralReference;
    }

    public function setCadastralReference(?string $cadastralReference): self
    {
        $this->cadastralReference = $cadastralReference;

        return $this;
    }

    public function getCadastralValue(): ?float
    {
        return $this->cadastralValue;
    }

    public function setCadastralValue(?float $cadastralValue): self
    {
        $this->cadastralValue = $cadastralValue;

        return $this;
    }

    public function getArea(): ?float
    {
        return $this->area;
    }

    public function setArea(?float $area): self
    {
        $this->area = $area;

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

    public function getDeclaredValue(): ?string
    {
        return $this->declaredValue;
    }

    public function setDeclaredValue(?string $declaredValue): self
    {
        $this->declaredValue = $declaredValue;

        return $this;
    }

    public function getExempt(): ?bool
    {
        return $this->exempt;
    }

    public function setExempt(?bool $exempt): self
    {
        $this->exempt = $exempt;

        return $this;
    }

    public function getNotSubject(): ?bool
    {
        return $this->notSubject;
    }

    public function setNotSubject(?bool $notSubject): self
    {
        $this->notSubject = $notSubject;

        return $this;
    }

    public function getFundament(): ?string
    {
        return $this->fundament;
    }

    public function setFundament(?string $fundament): self
    {
        $this->fundament = $fundament;

        return $this;
    }

    public function getSupplementaryLiquidation(): ?bool
    {
        return $this->supplementaryLiquidation;
    }

    public function setSupplementaryLiquidation(?bool $supplementaryLiquidation): self
    {
        $this->supplementaryLiquidation = $supplementaryLiquidation;

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

    public function getAssociatedSupportingDocumentDate(): ?\DateTimeInterface
    {
        return $this->associatedSupportingDocumentDate;
    }

    public function setAssociatedSupportingDocumentDate(?\DateTimeInterface $associatedSupportingDocumentDate): self
    {
        $this->associatedSupportingDocumentDate = $associatedSupportingDocumentDate;

        return $this;
    }

    public function getAssociatedSupportingDocumentAmount(): ?float
    {
        return $this->associatedSupportingDocumentAmount;
    }

    public function setAssociatedSupportingDocumentAmount(?float $associatedSupportingDocumentAmount): self
    {
        $this->associatedSupportingDocumentAmount = $associatedSupportingDocumentAmount;

        return $this;
    }

    public function getBox1(): ?float
    {
        return $this->box1;
    }

    public function setBox1(?float $box1): self
    {
        $this->box1 = $box1;

        return $this;
    }

    public function getBox2(): ?float
    {
        return $this->box2;
    }

    public function setBox2(?float $box2): self
    {
        $this->box2 = $box2;

        return $this;
    }

    public function getBox3(): ?float
    {
        return $this->box3;
    }

    public function setBox3(?float $box3): self
    {
        $this->box3 = $box3;

        return $this;
    }

    public function getBox4(): ?float
    {
        return $this->box4;
    }

    public function setBox4(?float $box4): self
    {
        $this->box4 = $box4;

        return $this;
    }

    public function getBox5(): ?float
    {
        return $this->box5;
    }

    public function setBox5(?float $box5): self
    {
        $this->box5 = $box5;

        return $this;
    }

    public function getBox6(): ?float
    {
        return $this->box6;
    }

    public function setBox6(?float $box6): self
    {
        $this->box6 = $box6;

        return $this;
    }

    public function getBox7(): ?float
    {
        return $this->box7;
    }

    public function setBox7(?float $box7): self
    {
        $this->box7 = $box7;

        return $this;
    }

    public function getBox8(): ?float
    {
        return $this->box8;
    }

    public function setBox8(?float $box8): self
    {
        $this->box8 = $box8;

        return $this;
    }

    public function getBox9(): ?float
    {
        return $this->box9;
    }

    public function setBox9(?float $box9): self
    {
        $this->box9 = $box9;

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

    /**
     * @return Collection<int, PassiveSubject>
     */
    public function getPassiveSubjects(): Collection
    {
        return $this->passiveSubjects;
    }

    public function addPassiveSubject(PassiveSubject $passiveSubject): self
    {
        if (!$this->passiveSubjects->contains($passiveSubject)) {
            $this->passiveSubjects[] = $passiveSubject;
            $passiveSubject->setModel600passiveSubjects($this);
        }

        return $this;
    }

    public function removePassiveSubject(PassiveSubject $passiveSubject): self
    {
        if ($this->passiveSubjects->removeElement($passiveSubject)) {
            // set the owning side to null (unless already changed)
            if ($passiveSubject->getModel600passiveSubjects() === $this) {
                $passiveSubject->setModel600passiveSubjects(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Transmitting>
     */
    public function getTransmittings(): Collection
    {
        return $this->transmittings;
    }

    public function addTransmitting(Transmitting $transmitting): self
    {
        if (!$this->transmittings->contains($transmitting)) {
            $this->transmittings[] = $transmitting;
            $transmitting->setModel600transmittings($this);
        }

        return $this;
    }

    public function removeTransmitting(Transmitting $transmitting): self
    {
        if ($this->transmittings->removeElement($transmitting)) {
            // set the owning side to null (unless already changed)
            if ($transmitting->getModel600transmittings() === $this) {
                $transmitting->setModel600transmittings(null);
            }
        }

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
