<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContasReceber
 *
 * @ORM\Table(name="contas_receber")
 * @ORM\Entity(repositoryClass="Pax\Entity\ContasReceberRepository")
 */
class ContasReceber
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
     * @ORM\Column(name="nome", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_servico", type="string", length=200, precision=0, scale=0, nullable=true, unique=false)
     */
    private $descricaoServico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_servico", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataServico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_vencimento", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataVencimento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_servico", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorServico;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $responsavel;


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
     * Set nome
     *
     * @param string $nome
     * @return ContasReceber
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
     * Set descricaoServico
     *
     * @param string $descricaoServico
     * @return ContasReceber
     */
    public function setDescricaoServico($descricaoServico)
    {
        $this->descricaoServico = $descricaoServico;

        return $this;
    }

    /**
     * Get descricaoServico
     *
     * @return string 
     */
    public function getDescricaoServico()
    {
        return $this->descricaoServico;
    }

    /**
     * Set dataServico
     *
     * @param \DateTime $dataServico
     * @return ContasReceber
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
     * Set dataVencimento
     *
     * @param \DateTime $dataVencimento
     * @return ContasReceber
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }

    /**
     * Get dataVencimento
     *
     * @return \DateTime 
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * Set valorServico
     *
     * @param float $valorServico
     * @return ContasReceber
     */
    public function setValorServico($valorServico)
    {
        $this->valorServico = $valorServico;

        return $this;
    }

    /**
     * Get valorServico
     *
     * @return float 
     */
    public function getValorServico()
    {
        return $this->valorServico;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return ContasReceber
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set responsavel
     *
     * @param string $responsavel
     * @return ContasReceber
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return string 
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }
}
