<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensalidade
 *
 * @ORM\Table(name="mensalidade")
 * @ORM\Entity(repositoryClass="Pax\Entity\MensalidadeRepository")
 */
class Mensalidade
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
     * @ORM\Column(name="codigo", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_referencia", type="string", length=2, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mesReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ano_referencia", type="string", length=4, precision=0, scale=0, nullable=true, unique=false)
     */
    private $anoReferencia;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_mensalidade", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorMensalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_funcionario", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $codFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_funcionario", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nomeFuncionario;


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
     * Set codigo
     *
     * @param string $codigo
     * @return Mensalidade
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Mensalidade
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set dataPagamento
     *
     * @param \DateTime $dataPagamento
     * @return Mensalidade
     */
    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    /**
     * Get dataPagamento
     *
     * @return \DateTime 
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Set mesReferencia
     *
     * @param string $mesReferencia
     * @return Mensalidade
     */
    public function setMesReferencia($mesReferencia)
    {
        $this->mesReferencia = $mesReferencia;

        return $this;
    }

    /**
     * Get mesReferencia
     *
     * @return string 
     */
    public function getMesReferencia()
    {
        return $this->mesReferencia;
    }

    /**
     * Set anoReferencia
     *
     * @param string $anoReferencia
     * @return Mensalidade
     */
    public function setAnoReferencia($anoReferencia)
    {
        $this->anoReferencia = $anoReferencia;

        return $this;
    }

    /**
     * Get anoReferencia
     *
     * @return string 
     */
    public function getAnoReferencia()
    {
        return $this->anoReferencia;
    }

    /**
     * Set valorMensalidade
     *
     * @param float $valorMensalidade
     * @return Mensalidade
     */
    public function setValorMensalidade($valorMensalidade)
    {
        $this->valorMensalidade = $valorMensalidade;

        return $this;
    }

    /**
     * Get valorMensalidade
     *
     * @return float 
     */
    public function getValorMensalidade()
    {
        return $this->valorMensalidade;
    }

    /**
     * Set codFuncionario
     *
     * @param integer $codFuncionario
     * @return Mensalidade
     */
    public function setCodFuncionario($codFuncionario)
    {
        $this->codFuncionario = $codFuncionario;

        return $this;
    }

    /**
     * Get codFuncionario
     *
     * @return integer 
     */
    public function getCodFuncionario()
    {
        return $this->codFuncionario;
    }

    /**
     * Set nomeFuncionario
     *
     * @param string $nomeFuncionario
     * @return Mensalidade
     */
    public function setNomeFuncionario($nomeFuncionario)
    {
        $this->nomeFuncionario = $nomeFuncionario;

        return $this;
    }

    /**
     * Get nomeFuncionario
     *
     * @return string 
     */
    public function getNomeFuncionario()
    {
        return $this->nomeFuncionario;
    }
}
