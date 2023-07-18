<?php

namespace App\Entity;

use App\Repository\Model347Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=Model347Repository::class)
 */
class Model347 extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $financialExercise;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inclusionSupplementaryStatement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $modificationSupplementaryStatement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $substituteStatement;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $associatedSupportingDocumentNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box01;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box02;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $box03;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $box04;

    /**
     * @ORM\OneToMany(targetEntity=ThirdPartiesOperations::class, mappedBy="Model347thirdPartiesOperationses")
     */
    private $thirdPartiesOperationses;

    /**
     * @ORM\OneToMany(targetEntity=BusinessPremises::class, mappedBy="Model347businessPremiseses")
     */
    private $businessPremiseses;

    /**
     * @ORM\ManyToOne(targetEntity=TaxModel::class, inversedBy="models347s")
     */
    private $taxModels;

    public function __construct()
    {
        parent::__construct();
        $this->thirdPartiesOperationses = new ArrayCollection();
        $this->businessPremiseses = new ArrayCollection();
    }

    
    public function getFinancialExercise(): ?string
    {
        return $this->financialExercise;
    }

    public function setFinancialExercise(?string $financialExercise): self
    {
        $this->financialExercise = $financialExercise;

        return $this;
    }

    public function getInclusionSupplementaryStatement(): ?bool
    {
        return $this->inclusionSupplementaryStatement;
    }

    public function setInclusionSupplementaryStatement(?bool $inclusionSupplementaryStatement): self
    {
        $this->inclusionSupplementaryStatement = $inclusionSupplementaryStatement;

        return $this;
    }

    public function getModificationSupplementaryStatement(): ?bool
    {
        return $this->modificationSupplementaryStatement;
    }

    public function setModificationSupplementaryStatement(?bool $modificationSupplementaryStatement): self
    {
        $this->modificationSupplementaryStatement = $modificationSupplementaryStatement;

        return $this;
    }

    public function getSubstituteStatement(): ?bool
    {
        return $this->substituteStatement;
    }

    public function setSubstituteStatement(?bool $substituteStatement): self
    {
        $this->substituteStatement = $substituteStatement;

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

    public function getBox01(): ?int
    {
        return $this->box01;
    }

    public function setBox01(?int $box01): self
    {
        $this->box01 = $box01;

        return $this;
    }

    public function getBox02(): ?float
    {
        return $this->box02;
    }

    public function setBox02(?float $box02): self
    {
        $this->box02 = $box02;

        return $this;
    }

    public function getBox03(): ?int
    {
        return $this->box03;
    }

    public function setBox03(?int $box03): self
    {
        $this->box03 = $box03;

        return $this;
    }

    public function getBox04(): ?float
    {
        return $this->box04;
    }

    public function setBox04(?float $box04): self
    {
        $this->box04 = $box04;

        return $this;
    }

    /**
     * @return Collection<int, ThirdPartiesOperations>
     */
    public function getThirdPartiesOperationses(): Collection
    {
        return $this->thirdPartiesOperationses;
    }

    public function addThirdPartiesOperationse(ThirdPartiesOperations $thirdPartiesOperationse): self
    {
        if (!$this->thirdPartiesOperationses->contains($thirdPartiesOperationse)) {
            $this->thirdPartiesOperationses[] = $thirdPartiesOperationse;
            $thirdPartiesOperationse->setModel347thirdPartiesOperationses($this);
        }

        return $this;
    }

    public function removeThirdPartiesOperationse(ThirdPartiesOperations $thirdPartiesOperationse): self
    {
        if ($this->thirdPartiesOperationses->removeElement($thirdPartiesOperationse)) {
            // set the owning side to null (unless already changed)
            if ($thirdPartiesOperationse->getModel347thirdPartiesOperationses() === $this) {
                $thirdPartiesOperationse->setModel347thirdPartiesOperationses(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BusinessPremises>
     */
    public function getBusinessPremiseses(): Collection
    {
        return $this->businessPremiseses;
    }

    public function addBusinessPremisese(BusinessPremises $businessPremisese): self
    {
        if (!$this->businessPremiseses->contains($businessPremisese)) {
            $this->businessPremiseses[] = $businessPremisese;
            $businessPremisese->setModel347businessPremiseses($this);
        }

        return $this;
    }

    public function removeBusinessPremisese(BusinessPremises $businessPremisese): self
    {
        if ($this->businessPremiseses->removeElement($businessPremisese)) {
            // set the owning side to null (unless already changed)
            if ($businessPremisese->getModel347businessPremiseses() === $this) {
                $businessPremisese->setModel347businessPremiseses(null);
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
