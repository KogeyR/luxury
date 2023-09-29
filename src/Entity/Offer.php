<?php

namespace App\Entity;

use App\Repository\OfferRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfferRepository::class)] 
class Offer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reference = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isActive = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jobTitle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jobLocation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $closingAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $salary = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'offer')]
    private ?Application $application = null;


    


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\ManyToOne]
    private ?Type $typeId = null;

    #[ORM\ManyToOne]
    private ?Category $categoryId = null;

    #[ORM\ManyToOne]
    private ?Client $client = null;

    public function __construct()
    {
      
      
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(?string $jobTitle): static
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    public function getJobLocation(): ?string
    {
        return $this->jobLocation;
    }

    public function setJobLocation(?string $jobLocation): static
    {
        $this->jobLocation = $jobLocation;

        return $this;
    }

    public function getClosingAt(): ?\DateTimeImmutable
    {
        return $this->closingAt;
    }

    public function setClosingAt(?\DateTimeImmutable $closingAt): static
    {
        $this->closingAt = $closingAt;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(?string $salary): static
    {
        $this->salary = $salary;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getapplication(): ?Application
    {
        return $this->application;
    }

    public function setapplication(?Application $application): static
    {
        $this->application = $application;

        return $this;
    }

    /**
   

    /**
     * @return Collection<int, Client>
     */

   
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTypeId(): ?Type
    {
        return $this->typeId;
    }

    public function setTypeId(?Type $typeId): static
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }

    public function setCategoryId(?Category $categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }
}
