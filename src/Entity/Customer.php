<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Company;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=85)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_create;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_last_email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $has_answered;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $has_consommed;

    
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company", inversedBy="companies")
     */
    private $company;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->date_create;
    }

    public function setDateCreate(\DateTimeInterface $date_create): self
    {
        $this->date_create = $date_create;

        return $this;
    }

    public function getDateLastEmail(): ?\DateTimeInterface
    {
        return $this->date_last_email;
    }

    public function setDateLastEmail(?\DateTimeInterface $date_last_email): self
    {
        $this->date_last_email = $date_last_email;

        return $this;
    }

    public function getHasAnswered(): ?bool
    {
        return $this->has_answered;
    }

    public function setHasAnswered(?bool $has_answered): self
    {
        $this->has_answered = $has_answered;

        return $this;
    }

    public function getHasConsommed(): ?bool
    {
        return $this->has_consommed;
    }

    public function setHasConsommed(?bool $has_consommed): self
    {
        $this->has_consommed = $has_consommed;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    
}
