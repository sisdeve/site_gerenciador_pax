<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moedas
 *
 * @ORM\Table(name="moedas")
 * @ORM\Entity(repositoryClass="Pax\Entity\MoedasRepository")
 */
class Moedas
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
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=5, scale=2, nullable=true, unique=false)
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
     * Set nome
     *
     * @param string $nome
     * @return Moedas
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
     * Set valor
     *
     * @param float $valor
     * @return Moedas
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
