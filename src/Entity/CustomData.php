<?php

namespace App\Entity;

use App\Repository\CustomDataRepository;
use Doctrine\ORM\Mapping as ORM;
use Dracoder\EntityBundle\Model\AbstractTimetrackeableEntity;

/**
 * @ORM\Entity(repositoryClass=CustomDataRepository::class)
 */
class CustomData extends AbstractTimetrackeableEntity
{
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dataString;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $dataAmount;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataTimestamp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dataNumeric;

    
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDataString(): ?string
    {
        return $this->dataString;
    }

    public function setDataString(?string $dataString): self
    {
        $this->dataString = $dataString;

        return $this;
    }

    public function getDataAmount(): ?float
    {
        return $this->dataAmount;
    }

    public function setDataAmount(?float $dataAmount): self
    {
        $this->dataAmount = $dataAmount;

        return $this;
    }

    public function getDataDate(): ?\DateTimeInterface
    {
        return $this->dataDate;
    }

    public function setDataDate(?\DateTimeInterface $dataDate): self
    {
        $this->dataDate = $dataDate;

        return $this;
    }

    public function getDataTimestamp(): ?\DateTimeInterface
    {
        return $this->dataTimestamp;
    }

    public function setDataTimestamp(?\DateTimeInterface $dataTimestamp): self
    {
        $this->dataTimestamp = $dataTimestamp;

        return $this;
    }

    public function getDataNumeric(): ?int
    {
        return $this->dataNumeric;
    }

    public function setDataNumeric(?int $dataNumeric): self
    {
        $this->dataNumeric = $dataNumeric;

        return $this;
    }
}
