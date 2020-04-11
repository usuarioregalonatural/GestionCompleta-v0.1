<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DatospubliRepository")
 */
class Datospubli
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
    private $fecha;

    /**
     * @ORM\Column(type="integer")
     */
    private $impresiones;

    /**
     * @ORM\Column(type="integer")
     */
    private $clicks;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $ctr;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $coste;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $medio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getImpresiones(): ?int
    {
        return $this->impresiones;
    }

    public function setImpresiones(int $impresiones): self
    {
        $this->impresiones = $impresiones;

        return $this;
    }

    public function getClicks(): ?int
    {
        return $this->clicks;
    }

    public function setClicks(int $clicks): self
    {
        $this->clicks = $clicks;

        return $this;
    }

    public function getCtr(): ?string
    {
        return $this->ctr;
    }

    public function setCtr(string $ctr): self
    {
        $this->ctr = $ctr;

        return $this;
    }

    public function getCoste(): ?string
    {
        return $this->coste;
    }

    public function setCoste(string $coste): self
    {
        $this->coste = $coste;

        return $this;
    }

    public function getMedio(): ?string
    {
        return $this->medio;
    }

    public function setMedio(string $medio): self
    {
        $this->medio = $medio;

        return $this;
    }
}
