<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Customer;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity(repositoryClass=CompanyRepository::class)
 */
class Company
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
  
    /**
     * @ORM\Column(type="string", length=18, nullable=true)
     */
    private $companyName;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="company")
     */
    private $users;

       /**
     * @ORM\OneToMany(targetEntity="App\Entity\Customer", mappedBy="company")
     */
    private $customers;

    /**
     * @ORM\Column(type="string", length=18, nullable=true)
     */
    private $siren;



    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->customers = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): User
    {
        return $this->users;
    }

    /**
    * @return Collection|Customer[]
    */
    public function getCustomers(): Customer
    {
        return $this->customers;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }


    public function getSiren(): ?string
    {
        return $this->siren;
    }

    public function setSiren(?string $siren): self
    {
        $this->siren = $siren;

        return $this;
    }

    public function __toString() {
        return $this->companyName;
    }
}
