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

    /**
     * @ORM\OneToMany(targetEntity=Model030::class, mappedBy="taxModels")
     */
    private $models030s;

    /**
     * @ORM\OneToMany(targetEntity=Model036::class, mappedBy="taxModels")
     */
    private $models036s;

    /**
     * @ORM\OneToMany(targetEntity=Model037::class, mappedBy="taxModels")
     */
    private $models037s;

    /**
     * @ORM\OneToMany(targetEntity=Model100::class, mappedBy="taxModels")
     */
    private $models100s;

    /**
     * @ORM\OneToMany(targetEntity=Model115::class, mappedBy="taxModels")
     */
    private $models115s;

    /**
     * @ORM\OneToMany(targetEntity=Model130::class, mappedBy="taxModels")
     */
    private $models130s;

    /**
     * @ORM\OneToMany(targetEntity=Model190::class, mappedBy="taxModels")
     */
    private $models190s;

    /**
     * @ORM\OneToMany(targetEntity=Model200::class, mappedBy="taxModels")
     */
    private $models200s;

    /**
     * @ORM\OneToMany(targetEntity=Model202::class, mappedBy="taxModels")
     */
    private $models202s;

    /**
     * @ORM\OneToMany(targetEntity=Model206::class, mappedBy="taxModels")
     */
    private $models206s;

    /**
     * @ORM\OneToMany(targetEntity=Model220::class, mappedBy="taxModels")
     */
    private $models220s;

    /**
     * @ORM\OneToMany(targetEntity=Model303::class, mappedBy="taxModels")
     */
    private $models303s;

    /**
     * @ORM\OneToMany(targetEntity=Model347::class, mappedBy="taxModels")
     */
    private $models347s;

    /**
     * @ORM\OneToMany(targetEntity=Model349::class, mappedBy="taxModels")
     */
    private $models349s;

    /**
     * @ORM\OneToMany(targetEntity=Model390::class, mappedBy="taxModels")
     */
    private $models390s;

    /**
     * @ORM\OneToMany(targetEntity=Model600::class, mappedBy="taxModels")
     */
    private $models600s;

    /**
     * @ORM\OneToMany(targetEntity=Model720::class, mappedBy="taxModels")
     */
    private $models720s;

    /**
     * @ORM\OneToMany(targetEntity=ModelD6::class, mappedBy="taxModels")
     */
    private $modelsD6s;

    public function __construct()
    {
        parent::__construct();
        $this->models111s = new ArrayCollection();
        $this->models030s = new ArrayCollection();
        $this->models036s = new ArrayCollection();
        $this->models037s = new ArrayCollection();
        $this->models100s = new ArrayCollection();
        $this->models115s = new ArrayCollection();
        $this->models130s = new ArrayCollection();
        $this->models190s = new ArrayCollection();
        $this->models200s = new ArrayCollection();
        $this->models202s = new ArrayCollection();
        $this->models206s = new ArrayCollection();
        $this->models220s = new ArrayCollection();
        $this->models303s = new ArrayCollection();
        $this->models347s = new ArrayCollection();
        $this->models349s = new ArrayCollection();
        $this->models390s = new ArrayCollection();
        $this->models600s = new ArrayCollection();
        $this->models720s = new ArrayCollection();
        $this->modelsD6s = new ArrayCollection();
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

    /**
     * @return Collection<int, Model030>
     */
    public function getModels030s(): Collection
    {
        return $this->models030s;
    }

    public function addModels030(Model030 $models030): self
    {
        if (!$this->models030s->contains($models030)) {
            $this->models030s[] = $models030;
            $models030->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels030(Model030 $models030): self
    {
        if ($this->models030s->removeElement($models030)) {
            // set the owning side to null (unless already changed)
            if ($models030->getTaxModels() === $this) {
                $models030->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model036>
     */
    public function getModels036s(): Collection
    {
        return $this->models036s;
    }

    public function addModels036(Model036 $models036): self
    {
        if (!$this->models036s->contains($models036)) {
            $this->models036s[] = $models036;
            $models036->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels036(Model036 $models036): self
    {
        if ($this->models036s->removeElement($models036)) {
            // set the owning side to null (unless already changed)
            if ($models036->getTaxModels() === $this) {
                $models036->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model037>
     */
    public function getModels037s(): Collection
    {
        return $this->models037s;
    }

    public function addModels037(Model037 $models037): self
    {
        if (!$this->models037s->contains($models037)) {
            $this->models037s[] = $models037;
            $models037->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels037(Model037 $models037): self
    {
        if ($this->models037s->removeElement($models037)) {
            // set the owning side to null (unless already changed)
            if ($models037->getTaxModels() === $this) {
                $models037->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model100>
     */
    public function getModels100s(): Collection
    {
        return $this->models100s;
    }

    public function addModels100(Model100 $models100): self
    {
        if (!$this->models100s->contains($models100)) {
            $this->models100s[] = $models100;
            $models100->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels100(Model100 $models100): self
    {
        if ($this->models100s->removeElement($models100)) {
            // set the owning side to null (unless already changed)
            if ($models100->getTaxModels() === $this) {
                $models100->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model115>
     */
    public function getModels115s(): Collection
    {
        return $this->models115s;
    }

    public function addModels115(Model115 $models115): self
    {
        if (!$this->models115s->contains($models115)) {
            $this->models115s[] = $models115;
            $models115->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels115(Model115 $models115): self
    {
        if ($this->models115s->removeElement($models115)) {
            // set the owning side to null (unless already changed)
            if ($models115->getTaxModels() === $this) {
                $models115->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model130>
     */
    public function getModels130s(): Collection
    {
        return $this->models130s;
    }

    public function addModels130(Model130 $models130): self
    {
        if (!$this->models130s->contains($models130)) {
            $this->models130s[] = $models130;
            $models130->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels130(Model130 $models130): self
    {
        if ($this->models130s->removeElement($models130)) {
            // set the owning side to null (unless already changed)
            if ($models130->getTaxModels() === $this) {
                $models130->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model190>
     */
    public function getModels190s(): Collection
    {
        return $this->models190s;
    }

    public function addModels190(Model190 $models190): self
    {
        if (!$this->models190s->contains($models190)) {
            $this->models190s[] = $models190;
            $models190->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels190(Model190 $models190): self
    {
        if ($this->models190s->removeElement($models190)) {
            // set the owning side to null (unless already changed)
            if ($models190->getTaxModels() === $this) {
                $models190->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model200>
     */
    public function getModels200s(): Collection
    {
        return $this->models200s;
    }

    public function addModels200(Model200 $models200): self
    {
        if (!$this->models200s->contains($models200)) {
            $this->models200s[] = $models200;
            $models200->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels200(Model200 $models200): self
    {
        if ($this->models200s->removeElement($models200)) {
            // set the owning side to null (unless already changed)
            if ($models200->getTaxModels() === $this) {
                $models200->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model202>
     */
    public function getModels202s(): Collection
    {
        return $this->models202s;
    }

    public function addModels202(Model202 $models202): self
    {
        if (!$this->models202s->contains($models202)) {
            $this->models202s[] = $models202;
            $models202->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels202(Model202 $models202): self
    {
        if ($this->models202s->removeElement($models202)) {
            // set the owning side to null (unless already changed)
            if ($models202->getTaxModels() === $this) {
                $models202->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model206>
     */
    public function getModels206s(): Collection
    {
        return $this->models206s;
    }

    public function addModels206(Model206 $models206): self
    {
        if (!$this->models206s->contains($models206)) {
            $this->models206s[] = $models206;
            $models206->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels206(Model206 $models206): self
    {
        if ($this->models206s->removeElement($models206)) {
            // set the owning side to null (unless already changed)
            if ($models206->getTaxModels() === $this) {
                $models206->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model220>
     */
    public function getModels220s(): Collection
    {
        return $this->models220s;
    }

    public function addModels220(Model220 $models220): self
    {
        if (!$this->models220s->contains($models220)) {
            $this->models220s[] = $models220;
            $models220->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels220(Model220 $models220): self
    {
        if ($this->models220s->removeElement($models220)) {
            // set the owning side to null (unless already changed)
            if ($models220->getTaxModels() === $this) {
                $models220->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model303>
     */
    public function getModels303s(): Collection
    {
        return $this->models303s;
    }

    public function addModels303(Model303 $models303): self
    {
        if (!$this->models303s->contains($models303)) {
            $this->models303s[] = $models303;
            $models303->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels303(Model303 $models303): self
    {
        if ($this->models303s->removeElement($models303)) {
            // set the owning side to null (unless already changed)
            if ($models303->getTaxModels() === $this) {
                $models303->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model347>
     */
    public function getModels347s(): Collection
    {
        return $this->models347s;
    }

    public function addModels347(Model347 $models347): self
    {
        if (!$this->models347s->contains($models347)) {
            $this->models347s[] = $models347;
            $models347->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels347(Model347 $models347): self
    {
        if ($this->models347s->removeElement($models347)) {
            // set the owning side to null (unless already changed)
            if ($models347->getTaxModels() === $this) {
                $models347->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model349>
     */
    public function getModels349s(): Collection
    {
        return $this->models349s;
    }

    public function addModels349(Model349 $models349): self
    {
        if (!$this->models349s->contains($models349)) {
            $this->models349s[] = $models349;
            $models349->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels349(Model349 $models349): self
    {
        if ($this->models349s->removeElement($models349)) {
            // set the owning side to null (unless already changed)
            if ($models349->getTaxModels() === $this) {
                $models349->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model390>
     */
    public function getModels390s(): Collection
    {
        return $this->models390s;
    }

    public function addModels390(Model390 $models390): self
    {
        if (!$this->models390s->contains($models390)) {
            $this->models390s[] = $models390;
            $models390->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels390(Model390 $models390): self
    {
        if ($this->models390s->removeElement($models390)) {
            // set the owning side to null (unless already changed)
            if ($models390->getTaxModels() === $this) {
                $models390->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model600>
     */
    public function getModels600s(): Collection
    {
        return $this->models600s;
    }

    public function addModels600(Model600 $models600): self
    {
        if (!$this->models600s->contains($models600)) {
            $this->models600s[] = $models600;
            $models600->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels600(Model600 $models600): self
    {
        if ($this->models600s->removeElement($models600)) {
            // set the owning side to null (unless already changed)
            if ($models600->getTaxModels() === $this) {
                $models600->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Model720>
     */
    public function getModels720s(): Collection
    {
        return $this->models720s;
    }

    public function addModels720(Model720 $models720): self
    {
        if (!$this->models720s->contains($models720)) {
            $this->models720s[] = $models720;
            $models720->setTaxModels($this);
        }

        return $this;
    }

    public function removeModels720(Model720 $models720): self
    {
        if ($this->models720s->removeElement($models720)) {
            // set the owning side to null (unless already changed)
            if ($models720->getTaxModels() === $this) {
                $models720->setTaxModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModelD6>
     */
    public function getModelsD6s(): Collection
    {
        return $this->modelsD6s;
    }

    public function addModelsD6(ModelD6 $modelsD6): self
    {
        if (!$this->modelsD6s->contains($modelsD6)) {
            $this->modelsD6s[] = $modelsD6;
            $modelsD6->setTaxModels($this);
        }

        return $this;
    }

    public function removeModelsD6(ModelD6 $modelsD6): self
    {
        if ($this->modelsD6s->removeElement($modelsD6)) {
            // set the owning side to null (unless already changed)
            if ($modelsD6->getTaxModels() === $this) {
                $modelsD6->setTaxModels(null);
            }
        }

        return $this;
    }

    
}
