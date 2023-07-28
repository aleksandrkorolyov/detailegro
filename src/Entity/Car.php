<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    private ?string $fuel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_url = null;

    #[ORM\ManyToMany(targetEntity: CarPart::class, mappedBy: 'compatibility')]
    private Collection $carParts;

    public function __construct()
    {
        $this->carParts = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->brand;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): static
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * @return Collection<int, CarPart>
     */
    public function getCarParts(): Collection
    {
        return $this->carParts;
    }

    public function addCarPart(CarPart $carPart): static
    {
        if (!$this->carParts->contains($carPart)) {
            $this->carParts->add($carPart);
            $carPart->addCompatibility($this);
        }

        return $this;
    }

    public function removeCarPart(CarPart $carPart): static
    {
        if ($this->carParts->removeElement($carPart)) {
            $carPart->removeCompatibility($this);
        }

        return $this;
    }
}
