<?php

namespace App\Entity;

use App\Repository\IntracommunityOperationRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=IntracommunityOperationRepository::class)
 */
class IntracommunityOperation extends AbstractTimetrackeableEntity
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $intracommunityOperationNumber;

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
    private $intracommunityOperationKey;

    /**
     * @ORM\Column(type="float")
     */
    private $taxBase;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $cKeyCountryCode;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $cKeyCommunityNifNumber;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $cKeySocialDenomination;

    /**
     * @ORM\ManyToOne(targetEntity=Model349::class, inversedBy="intracommunityOperations")
     */
    private $model349intracommunityOperation;

    
    public function getIntracommunityOperationNumber(): ?int
    {
        return $this->intracommunityOperationNumber;
    }

    public function setIntracommunityOperationNumber(?int $intracommunityOperationNumber): self
    {
        $this->intracommunityOperationNumber = $intracommunityOperationNumber;

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

    public function getIntracommunityOperationKey(): ?string
    {
        return $this->intracommunityOperationKey;
    }

    public function setIntracommunityOperationKey(?string $intracommunityOperationKey): self
    {
        $this->intracommunityOperationKey = $intracommunityOperationKey;

        return $this;
    }

    public function getTaxBase(): ?float
    {
        return $this->taxBase;
    }

    public function setTaxBase(float $taxBase): self
    {
        $this->taxBase = $taxBase;

        return $this;
    }

    public function getCKeyCountryCode(): ?string
    {
        return $this->cKeyCountryCode;
    }

    public function setCKeyCountryCode(?string $cKeyCountryCode): self
    {
        $this->cKeyCountryCode = $cKeyCountryCode;

        return $this;
    }

    public function getCKeyCommunityNifNumber(): ?string
    {
        return $this->cKeyCommunityNifNumber;
    }

    public function setCKeyCommunityNifNumber(?string $cKeyCommunityNifNumber): self
    {
        $this->cKeyCommunityNifNumber = $cKeyCommunityNifNumber;

        return $this;
    }

    public function getCKeySocialDenomination(): ?string
    {
        return $this->cKeySocialDenomination;
    }

    public function setCKeySocialDenomination(?string $cKeySocialDenomination): self
    {
        $this->cKeySocialDenomination = $cKeySocialDenomination;

        return $this;
    }

    public function getModel349intracommunityOperation(): ?Model349
    {
        return $this->model349intracommunityOperation;
    }

    public function setModel349intracommunityOperation(?Model349 $model349intracommunityOperation): self
    {
        $this->model349intracommunityOperation = $model349intracommunityOperation;

        return $this;
    }
}
