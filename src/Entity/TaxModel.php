<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TaxModelRepository;
use Dracoder\EntityBundle\Model\AbstractEntity;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;
use Symfony\Component\DependencyInjection\Loader\ProtectedPhpFileLoader;

/**
 * @ORM\Entity(repositoryClass=TaxModelRepository::class)
 */
abstract class TaxModel extends AbstractTimetrackeableEntity
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $taxName;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $presentationDate;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $assignedRecordNumber;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $csvCode;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $presenterNifNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $presenterSocialDenomination;

    /**
     * @ORM\Column(type="string", length=120)
     */
    protected $presenterAs;

    /**
     * @ORM\Column(type="string", length=120)
     */
    protected $wayOfEntry;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $supportingDocumentNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $presentationPurpose;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $declarantNifNumber;

    /**
     * @ORM\Column(type="string", length=120)
     */
    protected $declarantSocialDenomination;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $legalRepresentativeNifNumber;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $financialExercise;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $financialExerciseType;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $financialPeriod;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $presentationMode;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $economicActivitiesNationalClassification;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    protected $contactPersonNameAndSurname;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $contactPersonPhone;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $contactPersonEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $storeOutputOrigin;

    /**
     * @ORM\Column(type="text")
     */
    protected $storeOutputOriginText;

    /**
     * @ORM\OneToMany(targetEntity=Model111::class, mappedBy="taxModels")
     */
    private $models111s;

    public function __construct()
    {
        parent::__construct();
        $this->models111s = new ArrayCollection();
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

    /**
     * @return Collection<int, Model111>
     */
    public function getModels111s(): Collection
    {
        return $this->models111s;
    }

    public function addModels111(Model111 $models111): self
    {
        if (!$this->models111s->contains($models111)) {
            $this->models111s[] = $models111;
            $models111->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels111(Model111 $models111): self
    {
        if ($this->models111s->removeElement($models111)) {
            // set the owning side to null (unless already changed)
            if ($models111->getTaxModels() === $this) {
                $models111->setTaxModels(null);
            }
        }

        return $this;
    }

    
}
