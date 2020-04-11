<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccesoCarrosRepository")
 */
class AccesoCarros
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fechacarro;

    /**
     * @ORM\Column(type="integer")
     */
    private $numcarros;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private $importecarros;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechacarro(): ?\DateTimeInterface
    {
        return $this->fechacarro;
    }

    public function setFechacarro(\DateTimeInterface $fechacarro): self
    {
        $this->fechacarro = $fechacarro;

        return $this;
    }

    public function getNumcarros(): ?int
    {
        return $this->numcarros;
    }

    public function setNumcarros(int $numcarros): self
    {
        $this->numcarros = $numcarros;

        return $this;
    }

    public function getImportecarros(): ?string
    {
        return $this->importecarros;
    }

    public function setImportecarros(string $importecarros): self
    {
        $this->importecarros = $importecarros;

        return $this;
    }
}
