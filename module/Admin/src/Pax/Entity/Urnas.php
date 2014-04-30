<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Urnas
 *
 * @ORM\Table(name="urnas")
 * @ORM\Entity(repositoryClass="Pax\Entity\UrnasRepository")
 */
class Urnas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $cod;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $saldo;

    /**
     * @var float
     *
     * @ORM\Column(name="compra", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $compra;

    /**
     * @var float
     *
     * @ORM\Column(name="venda", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $venda;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cod
     *
     * @param integer $cod
     * @return Urnas
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return integer 
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Urnas
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return Urnas
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set compra
     *
     * @param float $compra
     * @return Urnas
     */
    public function setCompra($compra)
    {
        $this->compra = $compra;

        return $this;
    }

    /**
     * Get compra
     *
     * @return float 
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set venda
     *
     * @param float $venda
     * @return Urnas
     */
    public function setVenda($venda)
    {
        $this->venda = $venda;

        return $this;
    }

    /**
     * Get venda
     *
     * @return float 
     */
    public function getVenda()
    {
        return $this->venda;
    }
}
