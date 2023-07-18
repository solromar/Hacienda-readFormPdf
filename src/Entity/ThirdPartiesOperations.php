<?php

namespace App\Entity;

use App\Repository\ThirdPartiesOperationsRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=ThirdPartiesOperationsRepository::class)
 */
class ThirdPartiesOperations extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $thirdPartiesOperationsNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $declaredNifNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ivaDeclaredNifNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $representativeNifNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $declaredSocialDenomination;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $provinceCode;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $operationKey;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $secureOperation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $businessPremisesLease;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ivaCashierOperation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $passiveSubjectInvestmentOperation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $otherThanCustomsOperation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $receivedCashAmount;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $exercise;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $annualOperationsAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $annualRealEstateTransfersAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $annualIvaCashierAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $firstTermOperationsAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $secondTermOperationsAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $thirdTermOperationsAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $fourthTermOperationsAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $firstTermRealEstateTransfersAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $secondTermRealEstateTransfersAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $thirdTermRealEstateTransfersAmount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $fourthTermRealEstateTransfersAmount;

    /**
     * @ORM\ManyToOne(targetEntity=Model347::class, inversedBy="thirdPartiesOperationses")
     */
    private $Model347thirdPartiesOperationses;

    
    public function getThirdPartiesOperationsNumber(): ?int
    {
        return $this->thirdPartiesOperationsNumber;
    }

    public function setThirdPartiesOperationsNumber(?int $thirdPartiesOperationsNumber): self
    {
        $this->thirdPartiesOperationsNumber = $thirdPartiesOperationsNumber;

        return $this;
    }

    public function getDeclaredNifNumber(): ?string
    {
        return $this->declaredNifNumber;
    }

    public function setDeclaredNifNumber(?string $declaredNifNumber): self
    {
        $this->declaredNifNumber = $declaredNifNumber;

        return $this;
    }

    public function getIvaDeclaredNifNumber(): ?string
    {
        return $this->ivaDeclaredNifNumber;
    }

    public function setIvaDeclaredNifNumber(?string $ivaDeclaredNifNumber): self
    {
        $this->ivaDeclaredNifNumber = $ivaDeclaredNifNumber;

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

    public function getDeclaredSocialDenomination(): ?string
    {
        return $this->declaredSocialDenomination;
    }

    public function setDeclaredSocialDenomination(?string $declaredSocialDenomination): self
    {
        $this->declaredSocialDenomination = $declaredSocialDenomination;

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

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getOperationKey(): ?string
    {
        return $this->operationKey;
    }

    public function setOperationKey(?string $operationKey): self
    {
        $this->operationKey = $operationKey;

        return $this;
    }

    public function getSecureOperation(): ?bool
    {
        return $this->secureOperation;
    }

    public function setSecureOperation(?bool $secureOperation): self
    {
        $this->secureOperation = $secureOperation;

        return $this;
    }

    public function getBusinessPremisesLease(): ?bool
    {
        return $this->businessPremisesLease;
    }

    public function setBusinessPremisesLease(?bool $businessPremisesLease): self
    {
        $this->businessPremisesLease = $businessPremisesLease;

        return $this;
    }

    public function getIvaCashierOperation(): ?bool
    {
        return $this->ivaCashierOperation;
    }

    public function setIvaCashierOperation(?bool $ivaCashierOperation): self
    {
        $this->ivaCashierOperation = $ivaCashierOperation;

        return $this;
    }

    public function getPassiveSubjectInvestmentOperation(): ?bool
    {
        return $this->passiveSubjectInvestmentOperation;
    }

    public function setPassiveSubjectInvestmentOperation(?bool $passiveSubjectInvestmentOperation): self
    {
        $this->passiveSubjectInvestmentOperation = $passiveSubjectInvestmentOperation;

        return $this;
    }

    public function getOtherThanCustomsOperation(): ?bool
    {
        return $this->otherThanCustomsOperation;
    }

    public function setOtherThanCustomsOperation(?bool $otherThanCustomsOperation): self
    {
        $this->otherThanCustomsOperation = $otherThanCustomsOperation;

        return $this;
    }

    public function getReceivedCashAmount(): ?float
    {
        return $this->receivedCashAmount;
    }

    public function setReceivedCashAmount(?float $receivedCashAmount): self
    {
        $this->receivedCashAmount = $receivedCashAmount;

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

    public function getAnnualOperationsAmount(): ?float
    {
        return $this->annualOperationsAmount;
    }

    public function setAnnualOperationsAmount(?float $annualOperationsAmount): self
    {
        $this->annualOperationsAmount = $annualOperationsAmount;

        return $this;
    }

    public function getAnnualRealEstateTransfersAmount(): ?float
    {
        return $this->annualRealEstateTransfersAmount;
    }

    public function setAnnualRealEstateTransfersAmount(?float $annualRealEstateTransfersAmount): self
    {
        $this->annualRealEstateTransfersAmount = $annualRealEstateTransfersAmount;

        return $this;
    }

    public function getAnnualIvaCashierAmount(): ?float
    {
        return $this->annualIvaCashierAmount;
    }

    public function setAnnualIvaCashierAmount(?float $annualIvaCashierAmount): self
    {
        $this->annualIvaCashierAmount = $annualIvaCashierAmount;

        return $this;
    }

    public function getFirstTermOperationsAmount(): ?float
    {
        return $this->firstTermOperationsAmount;
    }

    public function setFirstTermOperationsAmount(?float $firstTermOperationsAmount): self
    {
        $this->firstTermOperationsAmount = $firstTermOperationsAmount;

        return $this;
    }

    public function getSecondTermOperationsAmount(): ?float
    {
        return $this->secondTermOperationsAmount;
    }

    public function setSecondTermOperationsAmount(?float $secondTermOperationsAmount): self
    {
        $this->secondTermOperationsAmount = $secondTermOperationsAmount;

        return $this;
    }

    public function getThirdTermOperationsAmount(): ?float
    {
        return $this->thirdTermOperationsAmount;
    }

    public function setThirdTermOperationsAmount(?float $thirdTermOperationsAmount): self
    {
        $this->thirdTermOperationsAmount = $thirdTermOperationsAmount;

        return $this;
    }

    public function getFourthTermOperationsAmount(): ?float
    {
        return $this->fourthTermOperationsAmount;
    }

    public function setFourthTermOperationsAmount(?float $fourthTermOperationsAmount): self
    {
        $this->fourthTermOperationsAmount = $fourthTermOperationsAmount;

        return $this;
    }

    public function getFirstTermRealEstateTransfersAmount(): ?float
    {
        return $this->firstTermRealEstateTransfersAmount;
    }

    public function setFirstTermRealEstateTransfersAmount(?float $firstTermRealEstateTransfersAmount): self
    {
        $this->firstTermRealEstateTransfersAmount = $firstTermRealEstateTransfersAmount;

        return $this;
    }

    public function getSecondTermRealEstateTransfersAmount(): ?float
    {
        return $this->secondTermRealEstateTransfersAmount;
    }

    public function setSecondTermRealEstateTransfersAmount(?float $secondTermRealEstateTransfersAmount): self
    {
        $this->secondTermRealEstateTransfersAmount = $secondTermRealEstateTransfersAmount;

        return $this;
    }

    public function getThirdTermRealEstateTransfersAmount(): ?float
    {
        return $this->thirdTermRealEstateTransfersAmount;
    }

    public function setThirdTermRealEstateTransfersAmount(?float $thirdTermRealEstateTransfersAmount): self
    {
        $this->thirdTermRealEstateTransfersAmount = $thirdTermRealEstateTransfersAmount;

        return $this;
    }

    public function getFourthTermRealEstateTransfersAmount(): ?float
    {
        return $this->fourthTermRealEstateTransfersAmount;
    }

    public function setFourthTermRealEstateTransfersAmount(?float $fourthTermRealEstateTransfersAmount): self
    {
        $this->fourthTermRealEstateTransfersAmount = $fourthTermRealEstateTransfersAmount;

        return $this;
    }

    public function getModel347thirdPartiesOperationses(): ?Model347
    {
        return $this->Model347thirdPartiesOperationses;
    }

    public function setModel347thirdPartiesOperationses(?Model347 $Model347thirdPartiesOperationses): self
    {
        $this->Model347thirdPartiesOperationses = $Model347thirdPartiesOperationses;

        return $this;
    }
}
