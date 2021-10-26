<?php

namespace App\Entity;

use App\Repository\BillsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BillsRepository::class)
 */
class Bills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_bill;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pdfName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateBill(): ?\DateTimeInterface
    {
        return $this->date_bill;
    }

    public function setDateBill(\DateTimeInterface $date_bill): self
    {
        $this->date_bill = $date_bill;

        return $this;
    }

    public function getPdfName(): ?string
    {
        return $this->pdfName;
    }

    public function setPdfName(string $pdfName): self
    {
        $this->pdfName = $pdfName;

        return $this;
    }
}
