<?php

namespace App\Entity;

use App\Repository\CarPartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarPartRepository::class)]
class CarPart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 1000)]
    private ?string $describrtion = null;

    #[ORM\ManyToMany(targetEntity: Car::class, inversedBy: 'carParts')]
    private Collection $compatibility;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_url = null;

    public function __construct()
    {
        $this->compatibility = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescribrtion(): ?string
    {
        return $this->describrtion;
    }

    public function setDescribrtion(string $describrtion): static
    {
        $this->describrtion = $describrtion;

        return $this;
    }

    /**
     * @return Collection<int, Car>
     */
    public function getCompatibility(): Collection
    {
        return $this->compatibility;
    }

    public function addCompatibility(Car $compatibility): static
    {
        if (!$this->compatibility->contains($compatibility)) {
            $this->compatibility->add($compatibility);
        }

        return $this;
    }

    public function removeCompatibility(Car $compatibility): static
    {
        $this->compatibility->removeElement($compatibility);

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
}
