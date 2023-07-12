<?php

namespace App\Entity;

use App\Repository\TaxModelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaxModelRepository::class)
 */
class TaxModel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateAt;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $customDataId = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taxName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $presentationDate;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $assignedRecordNumber;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $csvCode;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $presenterNifNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $presenterSocialDenomination;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $presenterAs;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $wayOfEntry;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $supportingDocumentNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $presentationPurpose;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $declarantNifNumber;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $declarantSocialDenomination;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $legalRepresentativeNifNumber;

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
    private $financialPeriod;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $presentationMode;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $economicActivitiesNationalClassification;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $contactPersonNameAndSurname;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $contactPersonPhone;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $contactPersonEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $storeOutputOrigin;

    /**
     * @ORM\Column(type="text")
     */
    private $storeOutputOriginText;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getCustomDataId(): ?array
    {
        return $this->customDataId;
    }

    public function setCustomDataId(?array $customDataId): self
    {
        $this->customDataId = $customDataId;

        return $this;
    }

    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    public function setTaxName(string $taxName): self
    {
        $this->taxName = $taxName;

        return $this;
    }

    public function getPresentationDate(): ?\DateTimeInterface
    {
        return $this->presentationDate;
    }

    public function setPresentationDate(\DateTimeInterface $presentationDate): self
    {
        $this->presentationDate = $presentationDate;

        return $this;
    }

    public function getAssignedRecordNumber(): ?string
    {
        return $this->assignedRecordNumber;
    }

    public function setAssignedRecordNumber(string $assignedRecordNumber): self
    {
        $this->assignedRecordNumber = $assignedRecordNumber;

        return $this;
    }

    public function getCsvCode(): ?string
    {
        return $this->csvCode;
    }

    public function setCsvCode(string $csvCode): self
    {
        $this->csvCode = $csvCode;

        return $this;
    }

    public function getPresenterNifNumber(): ?string
    {
        return $this->presenterNifNumber;
    }

    public function setPresenterNifNumber(string $presenterNifNumber): self
    {
        $this->presenterNifNumber = $presenterNifNumber;

        return $this;
    }

    public function getPresenterSocialDenomination(): ?string
    {
        return $this->presenterSocialDenomination;
    }

    public function setPresenterSocialDenomination(string $presenterSocialDenomination): self
    {
        $this->presenterSocialDenomination = $presenterSocialDenomination;

        return $this;
    }

    public function getPresenterAs(): ?string
    {
        return $this->presenterAs;
    }

    public function setPresenterAs(string $presenterAs): self
    {
        $this->presenterAs = $presenterAs;

        return $this;
    }

    public function getWayOfEntry(): ?string
    {
        return $this->wayOfEntry;
    }

    public function setWayOfEntry(string $wayOfEntry): self
    {
        $this->wayOfEntry = $wayOfEntry;

        return $this;
    }

    public function getSupportingDocumentNumber(): ?string
    {
        return $this->supportingDocumentNumber;
    }

    public function setSupportingDocumentNumber(string $supportingDocumentNumber): self
    {
        $this->supportingDocumentNumber = $supportingDocumentNumber;

        return $this;
    }

    public function getPresentationPurpose(): ?string
    {
        return $this->presentationPurpose;
    }

    public function setPresentationPurpose(?string $presentationPurpose): self
    {
        $this->presentationPurpose = $presentationPurpose;

        return $this;
    }

    public function getDeclarantNifNumber(): ?string
    {
        return $this->declarantNifNumber;
    }

    public function setDeclarantNifNumber(string $declarantNifNumber): self
    {
        $this->declarantNifNumber = $declarantNifNumber;

        return $this;
    }

    public function getDeclarantSocialDenomination(): ?string
    {
        return $this->declarantSocialDenomination;
    }

    public function setDeclarantSocialDenomination(string $declarantSocialDenomination): self
    {
        $this->declarantSocialDenomination = $declarantSocialDenomination;

        return $this;
    }

    public function getLegalRepresentativeNifNumber(): ?string
    {
        return $this->legalRepresentativeNifNumber;
    }

    public function setLegalRepresentativeNifNumber(string $legalRepresentativeNifNumber): self
    {
        $this->legalRepresentativeNifNumber = $legalRepresentativeNifNumber;

        return $this;
    }

    public function getFinancialExercise(): ?string
    {
        return $this->financialExercise;
    }

    public function setFinancialExercise(string $financialExercise): self
    {
        $this->financialExercise = $financialExercise;

        return $this;
    }

    public function getFinancialExerciseType(): ?string
    {
        return $this->financialExerciseType;
    }

    public function setFinancialExerciseType(string $financialExerciseType): self
    {
        $this->financialExerciseType = $financialExerciseType;

        return $this;
    }

    public function getFinancialPeriod(): ?string
    {
        return $this->financialPeriod;
    }

    public function setFinancialPeriod(string $financialPeriod): self
    {
        $this->financialPeriod = $financialPeriod;

        return $this;
    }

    public function getPresentationMode(): ?string
    {
        return $this->presentationMode;
    }

    public function setPresentationMode(string $presentationMode): self
    {
        $this->presentationMode = $presentationMode;

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

    public function getContactPersonNameAndSurname(): ?string
    {
        return $this->contactPersonNameAndSurname;
    }

    public function setContactPersonNameAndSurname(?string $contactPersonNameAndSurname): self
    {
        $this->contactPersonNameAndSurname = $contactPersonNameAndSurname;

        return $this;
    }

    public function getContactPersonPhone(): ?string
    {
        return $this->contactPersonPhone;
    }

    public function setContactPersonPhone(?string $contactPersonPhone): self
    {
        $this->contactPersonPhone = $contactPersonPhone;

        return $this;
    }

    public function getContactPersonEmail(): ?string
    {
        return $this->contactPersonEmail;
    }

    public function setContactPersonEmail(?string $contactPersonEmail): self
    {
        $this->contactPersonEmail = $contactPersonEmail;

        return $this;
    }

    public function getStoreOutputOrigin(): ?string
    {
        return $this->storeOutputOrigin;
    }

    public function setStoreOutputOrigin(string $storeOutputOrigin): self
    {
        $this->storeOutputOrigin = $storeOutputOrigin;

        return $this;
    }

    public function getStoreOutputOriginText(): ?string
    {
        return $this->storeOutputOriginText;
    }

    public function setStoreOutputOriginText(string $storeOutputOriginText): self
    {
        $this->storeOutputOriginText = $storeOutputOriginText;

        return $this;
    }
}
