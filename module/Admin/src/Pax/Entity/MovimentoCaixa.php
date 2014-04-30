<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimentoCaixa
 *
 * @ORM\Table(name="movimento_caixa")
 * @ORM\Entity(repositoryClass="Pax\Entity\MovimentoCaixaRepository")
 */
class MovimentoCaixa
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_movimento", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataMovimento;

    /**
     * @var string
     *
     * @ORM\Column(name="credor", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $credor;

    /**
     * @var string
     *
     * @ORM\Column(name="discriminacao", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $discriminacao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_lancado", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorLancado;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, precision=0, scale=0, nullable=true, unique=false)
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
     * Set dataMovimento
     *
     * @param \DateTime $dataMovimento
     * @return MovimentoCaixa
     */
    public function setDataMovimento($dataMovimento)
    {
        $this->dataMovimento = $dataMovimento;

        return $this;
    }

    /**
     * Get dataMovimento
     *
     * @return \DateTime 
     */
    public function getDataMovimento()
    {
        return $this->dataMovimento;
    }

    /**
     * Set credor
     *
     * @param string $credor
     * @return MovimentoCaixa
     */
    public function setCredor($credor)
    {
        $this->credor = $credor;

        return $this;
    }

    /**
     * Get credor
     *
     * @return string 
     */
    public function getCredor()
    {
        return $this->credor;
    }

    /**
     * Set discriminacao
     *
     * @param string $discriminacao
     * @return MovimentoCaixa
     */
    public function setDiscriminacao($discriminacao)
    {
        $this->discriminacao = $discriminacao;

        return $this;
    }

    /**
     * Get discriminacao
     *
     * @return string 
     */
    public function getDiscriminacao()
    {
        return $this->discriminacao;
    }

    /**
     * Set valorLancado
     *
     * @param float $valorLancado
     * @return MovimentoCaixa
     */
    public function setValorLancado($valorLancado)
    {
        $this->valorLancado = $valorLancado;

        return $this;
    }

    /**
     * Get valorLancado
     *
     * @return float 
     */
    public function getValorLancado()
    {
        return $this->valorLancado;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return MovimentoCaixa
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
