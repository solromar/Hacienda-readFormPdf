<?php

namespace App\Entity;

use App\Repository\PerceptionRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=PerceptionRepository::class)
 */
class Perception extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $perceptionNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $percipientNifNumber;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $legalRepresentativeNifNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $percipientSocialDenomination;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $perceptionKey;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $subKey;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $withoutWorkDisabilityComprehensivePerception;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $withoutWorkDisabilityRetentions;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $accrualExercise;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $withoutWorkDisabilityAssessment;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $withoutWorkDisabilityMadePaymentsAccount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $withoutWorkDisabilityAccruedIncomeAccount;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $specialHousingSituation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $workDisabilityComprehensivePerception;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $workDisabilityRetentions;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $workDisabilityAssessment;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $workDisabilityMadePaymentsAccount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $workDisabilityAccruedIncomeAccount;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $percipientBirthYear;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $familySituation;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $spouseNifNumber;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $percipientDisability;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $contract;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $extensionWorkActivity;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $geographicalMobility;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $applicableReductions;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $deductibleExpenses;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $compensatoryPensions;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $foodAnnuities;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $externalFinancingHabitualResidence;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $childrenUnderThreeYearsTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $childrenUnderThreeYearsEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $restOfChildrenTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $restOfChildrenEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $countOfTheFirstThreeFirst;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $countOfTheFirstThreeSecond;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $countOfTheFirstThreeThird;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $littleDisabilityChildrenTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $littleDisabilityChildrenEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reducedMobilityChildrenTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reducedMobilityChildrenEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $severeDisabilityChildrenTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $severeDisabilityChildrenEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lesserAncestorsTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lesserAncestorsEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seniorAncestorsTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seniorAncestorsEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $littleDisabilityAncestorsTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $littleDisabilityAncestorsEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reducedMobilityAncestorsTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reducedMobilityAncestorsEntirely;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $severeDisabilityAncestorsTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $severeDisabilityAncestorsEntirely;

    /**
     * @ORM\ManyToOne(targetEntity=Model190::class, inversedBy="perceptions")
     */
    private $Model190Perceptions;

    
    public function getPerceptionNumber(): ?int
    {
        return $this->perceptionNumber;
    }

    public function setPerceptionNumber(?int $perceptionNumber): self
    {
        $this->perceptionNumber = $perceptionNumber;

        return $this;
    }

    public function getPercipientNifNumber(): ?string
    {
        return $this->percipientNifNumber;
    }

    public function setPercipientNifNumber(?string $percipientNifNumber): self
    {
        $this->percipientNifNumber = $percipientNifNumber;

        return $this;
    }

    public function getLegalRepresentativeNifNumber(): ?string
    {
        return $this->legalRepresentativeNifNumber;
    }

    public function setLegalRepresentativeNifNumber(?string $legalRepresentativeNifNumber): self
    {
        $this->legalRepresentativeNifNumber = $legalRepresentativeNifNumber;

        return $this;
    }

    public function getPercipientSocialDenomination(): ?string
    {
        return $this->percipientSocialDenomination;
    }

    public function setPercipientSocialDenomination(?string $percipientSocialDenomination): self
    {
        $this->percipientSocialDenomination = $percipientSocialDenomination;

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

    public function getPerceptionKey(): ?string
    {
        return $this->perceptionKey;
    }

    public function setPerceptionKey(?string $perceptionKey): self
    {
        $this->perceptionKey = $perceptionKey;

        return $this;
    }

    public function getSubKey(): ?string
    {
        return $this->subKey;
    }

    public function setSubKey(?string $subKey): self
    {
        $this->subKey = $subKey;

        return $this;
    }

    public function getWithoutWorkDisabilityComprehensivePerception(): ?float
    {
        return $this->withoutWorkDisabilityComprehensivePerception;
    }

    public function setWithoutWorkDisabilityComprehensivePerception(?float $withoutWorkDisabilityComprehensivePerception): self
    {
        $this->withoutWorkDisabilityComprehensivePerception = $withoutWorkDisabilityComprehensivePerception;

        return $this;
    }

    public function getWithoutWorkDisabilityRetentions(): ?int
    {
        return $this->withoutWorkDisabilityRetentions;
    }

    public function setWithoutWorkDisabilityRetentions(?int $withoutWorkDisabilityRetentions): self
    {
        $this->withoutWorkDisabilityRetentions = $withoutWorkDisabilityRetentions;

        return $this;
    }

    public function getAccrualExercise(): ?string
    {
        return $this->accrualExercise;
    }

    public function setAccrualExercise(?string $accrualExercise): self
    {
        $this->accrualExercise = $accrualExercise;

        return $this;
    }

    public function getWithoutWorkDisabilityAssessment(): ?float
    {
        return $this->withoutWorkDisabilityAssessment;
    }

    public function setWithoutWorkDisabilityAssessment(?float $withoutWorkDisabilityAssessment): self
    {
        $this->withoutWorkDisabilityAssessment = $withoutWorkDisabilityAssessment;

        return $this;
    }

    public function getWithoutWorkDisabilityMadePaymentsAccount(): ?float
    {
        return $this->withoutWorkDisabilityMadePaymentsAccount;
    }

    public function setWithoutWorkDisabilityMadePaymentsAccount(?float $withoutWorkDisabilityMadePaymentsAccount): self
    {
        $this->withoutWorkDisabilityMadePaymentsAccount = $withoutWorkDisabilityMadePaymentsAccount;

        return $this;
    }

    public function getWithoutWorkDisabilityAccruedIncomeAccount(): ?float
    {
        return $this->withoutWorkDisabilityAccruedIncomeAccount;
    }

    public function setWithoutWorkDisabilityAccruedIncomeAccount(?float $withoutWorkDisabilityAccruedIncomeAccount): self
    {
        $this->withoutWorkDisabilityAccruedIncomeAccount = $withoutWorkDisabilityAccruedIncomeAccount;

        return $this;
    }

    public function getSpecialHousingSituation(): ?bool
    {
        return $this->specialHousingSituation;
    }

    public function setSpecialHousingSituation(?bool $specialHousingSituation): self
    {
        $this->specialHousingSituation = $specialHousingSituation;

        return $this;
    }

    public function getWorkDisabilityComprehensivePerception(): ?float
    {
        return $this->workDisabilityComprehensivePerception;
    }

    public function setWorkDisabilityComprehensivePerception(?float $workDisabilityComprehensivePerception): self
    {
        $this->workDisabilityComprehensivePerception = $workDisabilityComprehensivePerception;

        return $this;
    }

    public function getWorkDisabilityRetentions(): ?float
    {
        return $this->workDisabilityRetentions;
    }

    public function setWorkDisabilityRetentions(?float $workDisabilityRetentions): self
    {
        $this->workDisabilityRetentions = $workDisabilityRetentions;

        return $this;
    }

    public function getWorkDisabilityAssessment(): ?float
    {
        return $this->workDisabilityAssessment;
    }

    public function setWorkDisabilityAssessment(?float $workDisabilityAssessment): self
    {
        $this->workDisabilityAssessment = $workDisabilityAssessment;

        return $this;
    }

    public function getWorkDisabilityMadePaymentsAccount(): ?float
    {
        return $this->workDisabilityMadePaymentsAccount;
    }

    public function setWorkDisabilityMadePaymentsAccount(?float $workDisabilityMadePaymentsAccount): self
    {
        $this->workDisabilityMadePaymentsAccount = $workDisabilityMadePaymentsAccount;

        return $this;
    }

    public function getWorkDisabilityAccruedIncomeAccount(): ?float
    {
        return $this->workDisabilityAccruedIncomeAccount;
    }

    public function setWorkDisabilityAccruedIncomeAccount(?float $workDisabilityAccruedIncomeAccount): self
    {
        $this->workDisabilityAccruedIncomeAccount = $workDisabilityAccruedIncomeAccount;

        return $this;
    }

    public function getPercipientBirthYear(): ?string
    {
        return $this->percipientBirthYear;
    }

    public function setPercipientBirthYear(?string $percipientBirthYear): self
    {
        $this->percipientBirthYear = $percipientBirthYear;

        return $this;
    }

    public function getFamilySituation(): ?string
    {
        return $this->familySituation;
    }

    public function setFamilySituation(?string $familySituation): self
    {
        $this->familySituation = $familySituation;

        return $this;
    }

    public function getSpouseNifNumber(): ?string
    {
        return $this->spouseNifNumber;
    }

    public function setSpouseNifNumber(?string $spouseNifNumber): self
    {
        $this->spouseNifNumber = $spouseNifNumber;

        return $this;
    }

    public function getPercipientDisability(): ?bool
    {
        return $this->percipientDisability;
    }

    public function setPercipientDisability(?bool $percipientDisability): self
    {
        $this->percipientDisability = $percipientDisability;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(?string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getExtensionWorkActivity(): ?bool
    {
        return $this->extensionWorkActivity;
    }

    public function setExtensionWorkActivity(?bool $extensionWorkActivity): self
    {
        $this->extensionWorkActivity = $extensionWorkActivity;

        return $this;
    }

    public function getGeographicalMobility(): ?bool
    {
        return $this->geographicalMobility;
    }

    public function setGeographicalMobility(?bool $geographicalMobility): self
    {
        $this->geographicalMobility = $geographicalMobility;

        return $this;
    }

    public function getApplicableReductions(): ?float
    {
        return $this->applicableReductions;
    }

    public function setApplicableReductions(?float $applicableReductions): self
    {
        $this->applicableReductions = $applicableReductions;

        return $this;
    }

    public function getDeductibleExpenses(): ?float
    {
        return $this->deductibleExpenses;
    }

    public function setDeductibleExpenses(?float $deductibleExpenses): self
    {
        $this->deductibleExpenses = $deductibleExpenses;

        return $this;
    }

    public function getCompensatoryPensions(): ?float
    {
        return $this->compensatoryPensions;
    }

    public function setCompensatoryPensions(?float $compensatoryPensions): self
    {
        $this->compensatoryPensions = $compensatoryPensions;

        return $this;
    }

    public function getFoodAnnuities(): ?float
    {
        return $this->foodAnnuities;
    }

    public function setFoodAnnuities(?float $foodAnnuities): self
    {
        $this->foodAnnuities = $foodAnnuities;

        return $this;
    }

    public function getExternalFinancingHabitualResidence(): ?bool
    {
        return $this->externalFinancingHabitualResidence;
    }

    public function setExternalFinancingHabitualResidence(?bool $externalFinancingHabitualResidence): self
    {
        $this->externalFinancingHabitualResidence = $externalFinancingHabitualResidence;

        return $this;
    }

    public function getChildrenUnderThreeYearsTotal(): ?int
    {
        return $this->childrenUnderThreeYearsTotal;
    }

    public function setChildrenUnderThreeYearsTotal(?int $childrenUnderThreeYearsTotal): self
    {
        $this->childrenUnderThreeYearsTotal = $childrenUnderThreeYearsTotal;

        return $this;
    }

    public function getChildrenUnderThreeYearsEntirely(): ?int
    {
        return $this->childrenUnderThreeYearsEntirely;
    }

    public function setChildrenUnderThreeYearsEntirely(?int $childrenUnderThreeYearsEntirely): self
    {
        $this->childrenUnderThreeYearsEntirely = $childrenUnderThreeYearsEntirely;

        return $this;
    }

    public function getRestOfChildrenTotal(): ?int
    {
        return $this->restOfChildrenTotal;
    }

    public function setRestOfChildrenTotal(?int $restOfChildrenTotal): self
    {
        $this->restOfChildrenTotal = $restOfChildrenTotal;

        return $this;
    }

    public function getRestOfChildrenEntirely(): ?int
    {
        return $this->restOfChildrenEntirely;
    }

    public function setRestOfChildrenEntirely(?int $restOfChildrenEntirely): self
    {
        $this->restOfChildrenEntirely = $restOfChildrenEntirely;

        return $this;
    }

    public function getCountOfTheFirstThreeFirst(): ?int
    {
        return $this->countOfTheFirstThreeFirst;
    }

    public function setCountOfTheFirstThreeFirst(?int $countOfTheFirstThreeFirst): self
    {
        $this->countOfTheFirstThreeFirst = $countOfTheFirstThreeFirst;

        return $this;
    }

    public function getCountOfTheFirstThreeSecond(): ?int
    {
        return $this->countOfTheFirstThreeSecond;
    }

    public function setCountOfTheFirstThreeSecond(?int $countOfTheFirstThreeSecond): self
    {
        $this->countOfTheFirstThreeSecond = $countOfTheFirstThreeSecond;

        return $this;
    }

    public function getCountOfTheFirstThreeThird(): ?int
    {
        return $this->countOfTheFirstThreeThird;
    }

    public function setCountOfTheFirstThreeThird(?int $countOfTheFirstThreeThird): self
    {
        $this->countOfTheFirstThreeThird = $countOfTheFirstThreeThird;

        return $this;
    }

    public function getLittleDisabilityChildrenTotal(): ?int
    {
        return $this->littleDisabilityChildrenTotal;
    }

    public function setLittleDisabilityChildrenTotal(?int $littleDisabilityChildrenTotal): self
    {
        $this->littleDisabilityChildrenTotal = $littleDisabilityChildrenTotal;

        return $this;
    }

    public function getLittleDisabilityChildrenEntirely(): ?int
    {
        return $this->littleDisabilityChildrenEntirely;
    }

    public function setLittleDisabilityChildrenEntirely(?int $littleDisabilityChildrenEntirely): self
    {
        $this->littleDisabilityChildrenEntirely = $littleDisabilityChildrenEntirely;

        return $this;
    }

    public function getReducedMobilityChildrenTotal(): ?int
    {
        return $this->reducedMobilityChildrenTotal;
    }

    public function setReducedMobilityChildrenTotal(?int $reducedMobilityChildrenTotal): self
    {
        $this->reducedMobilityChildrenTotal = $reducedMobilityChildrenTotal;

        return $this;
    }

    public function getReducedMobilityChildrenEntirely(): ?int
    {
        return $this->reducedMobilityChildrenEntirely;
    }

    public function setReducedMobilityChildrenEntirely(?int $reducedMobilityChildrenEntirely): self
    {
        $this->reducedMobilityChildrenEntirely = $reducedMobilityChildrenEntirely;

        return $this;
    }

    public function getSevereDisabilityChildrenTotal(): ?int
    {
        return $this->severeDisabilityChildrenTotal;
    }

    public function setSevereDisabilityChildrenTotal(?int $severeDisabilityChildrenTotal): self
    {
        $this->severeDisabilityChildrenTotal = $severeDisabilityChildrenTotal;

        return $this;
    }

    public function getSevereDisabilityChildrenEntirely(): ?int
    {
        return $this->severeDisabilityChildrenEntirely;
    }

    public function setSevereDisabilityChildrenEntirely(?int $severeDisabilityChildrenEntirely): self
    {
        $this->severeDisabilityChildrenEntirely = $severeDisabilityChildrenEntirely;

        return $this;
    }

    public function getLesserAncestorsTotal(): ?int
    {
        return $this->lesserAncestorsTotal;
    }

    public function setLesserAncestorsTotal(?int $lesserAncestorsTotal): self
    {
        $this->lesserAncestorsTotal = $lesserAncestorsTotal;

        return $this;
    }

    public function getLesserAncestorsEntirely(): ?int
    {
        return $this->lesserAncestorsEntirely;
    }

    public function setLesserAncestorsEntirely(?int $lesserAncestorsEntirely): self
    {
        $this->lesserAncestorsEntirely = $lesserAncestorsEntirely;

        return $this;
    }

    public function getSeniorAncestorsTotal(): ?int
    {
        return $this->seniorAncestorsTotal;
    }

    public function setSeniorAncestorsTotal(?int $seniorAncestorsTotal): self
    {
        $this->seniorAncestorsTotal = $seniorAncestorsTotal;

        return $this;
    }

    public function getSeniorAncestorsEntirely(): ?int
    {
        return $this->seniorAncestorsEntirely;
    }

    public function setSeniorAncestorsEntirely(?int $seniorAncestorsEntirely): self
    {
        $this->seniorAncestorsEntirely = $seniorAncestorsEntirely;

        return $this;
    }

    public function getLittleDisabilityAncestorsTotal(): ?int
    {
        return $this->littleDisabilityAncestorsTotal;
    }

    public function setLittleDisabilityAncestorsTotal(?int $littleDisabilityAncestorsTotal): self
    {
        $this->littleDisabilityAncestorsTotal = $littleDisabilityAncestorsTotal;

        return $this;
    }

    public function getLittleDisabilityAncestorsEntirely(): ?int
    {
        return $this->littleDisabilityAncestorsEntirely;
    }

    public function setLittleDisabilityAncestorsEntirely(?int $littleDisabilityAncestorsEntirely): self
    {
        $this->littleDisabilityAncestorsEntirely = $littleDisabilityAncestorsEntirely;

        return $this;
    }

    public function getReducedMobilityAncestorsTotal(): ?int
    {
        return $this->reducedMobilityAncestorsTotal;
    }

    public function setReducedMobilityAncestorsTotal(?int $reducedMobilityAncestorsTotal): self
    {
        $this->reducedMobilityAncestorsTotal = $reducedMobilityAncestorsTotal;

        return $this;
    }

    public function getReducedMobilityAncestorsEntirely(): ?int
    {
        return $this->reducedMobilityAncestorsEntirely;
    }

    public function setReducedMobilityAncestorsEntirely(?int $reducedMobilityAncestorsEntirely): self
    {
        $this->reducedMobilityAncestorsEntirely = $reducedMobilityAncestorsEntirely;

        return $this;
    }

    public function getSevereDisabilityAncestorsTotal(): ?int
    {
        return $this->severeDisabilityAncestorsTotal;
    }

    public function setSevereDisabilityAncestorsTotal(?int $severeDisabilityAncestorsTotal): self
    {
        $this->severeDisabilityAncestorsTotal = $severeDisabilityAncestorsTotal;

        return $this;
    }

    public function getSevereDisabilityAncestorsEntirely(): ?int
    {
        return $this->severeDisabilityAncestorsEntirely;
    }

    public function setSevereDisabilityAncestorsEntirely(?int $severeDisabilityAncestorsEntirely): self
    {
        $this->severeDisabilityAncestorsEntirely = $severeDisabilityAncestorsEntirely;

        return $this;
    }

    public function getModel190Perceptions(): ?Model190
    {
        return $this->Model190Perceptions;
    }

    public function setModel190Perceptions(?Model190 $Model190Perceptions): self
    {
        $this->Model190Perceptions = $Model190Perceptions;

        return $this;
    }
}
