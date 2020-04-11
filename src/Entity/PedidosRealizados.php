<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PedidosRealizadosRepository")
 */
class PedidosRealizados
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
    private $fechapedido;

    /**
     * @ORM\Column(type="integer")
     */
    private $numpedidos;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private $imppedidos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechapedido(): ?\DateTimeInterface
    {
        return $this->fechapedido;
    }

    public function setFechapedido(\DateTimeInterface $fechapedido): self
    {
        $this->fechapedido = $fechapedido;

        return $this;
    }

    public function getNumpedidos(): ?int
    {
        return $this->numpedidos;
    }

    public function setNumpedidos(int $numpedidos): self
    {
        $this->numpedidos = $numpedidos;

        return $this;
    }

    public function getImppedidos(): ?string
    {
        return $this->imppedidos;
    }

    public function setImppedidos(string $imppedidos): self
    {
        $this->imppedidos = $imppedidos;

        return $this;
    }
}
