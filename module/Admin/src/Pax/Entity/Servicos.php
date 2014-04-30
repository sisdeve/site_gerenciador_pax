<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicos
 *
 * @ORM\Table(name="servicos")
 * @ORM\Entity(repositoryClass="Pax\Entity\ServicosRepository")
 */
class Servicos
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
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=200, precision=0, scale=0, nullable=true, unique=false)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_servico", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataServico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_venc", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataVenc;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valor;


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
     * Set cliente
     *
     * @param string $cliente
     * @return Servicos
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Servicos
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
     * Set dataServico
     *
     * @param \DateTime $dataServico
     * @return Servicos
     */
    public function setDataServico($dataServico)
    {
        $this->dataServico = $dataServico;

        return $this;
    }

    /**
     * Get dataServico
     *
     * @return \DateTime 
     */
    public function getDataServico()
    {
        return $this->dataServico;
    }

    /**
     * Set dataVenc
     *
     * @param \DateTime $dataVenc
     * @return Servicos
     */
    public function setDataVenc($dataVenc)
    {
        $this->dataVenc = $dataVenc;

        return $this;
    }

    /**
     * Get dataVenc
     *
     * @return \DateTime 
     */
    public function getDataVenc()
    {
        return $this->dataVenc;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return Servicos
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
