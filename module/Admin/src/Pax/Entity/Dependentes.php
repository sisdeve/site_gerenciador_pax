<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependentes
 *
 * @ORM\Table(name="dependentes")
 * @ORM\Entity(repositoryClass="Pax\Entity\DependentesRepository")
 */
class Dependentes
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
     * @ORM\Column(name="cod_associado", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $codAssociado;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $tipo;


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
     * Set codAssociado
     *
     * @param string $codAssociado
     * @return Dependentes
     */
    public function setCodAssociado($codAssociado)
    {
        $this->codAssociado = $codAssociado;

        return $this;
    }

    /**
     * Get codAssociado
     *
     * @return string 
     */
    public function getCodAssociado()
    {
        return $this->codAssociado;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Dependentes
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
     * Set cpf
     *
     * @param string $cpf
     * @return Dependentes
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return Dependentes
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Dependentes
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Dependentes
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
}
