<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObitosDespesa
 *
 * @ORM\Table(name="obitos_despesa")
 * @ORM\Entity(repositoryClass="Pax\Entity\ObitosDespesaRepository")
 */
class ObitosDespesa
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
     * @ORM\Column(name="cod_obitos", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $codObitos;

    /**
     * @var string
     *
     * @ORM\Column(name="sepulta", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $sepulta;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_sep", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorSep;

    /**
     * @var string
     *
     * @ORM\Column(name="paramento", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $paramento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_par", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorPar;

    /**
     * @var string
     *
     * @ORM\Column(name="ornamento", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $ornamento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_orn", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorOrn;

    /**
     * @var string
     *
     * @ORM\Column(name="velas", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $velas;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_vela", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorVela;

    /**
     * @var string
     *
     * @ORM\Column(name="veu", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $veu;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_veu", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorVeu;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_fal", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $notaFal;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_nota", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorNota;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_ser", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorSer;


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
     * Set codObitos
     *
     * @param integer $codObitos
     * @return ObitosDespesa
     */
    public function setCodObitos($codObitos)
    {
        $this->codObitos = $codObitos;

        return $this;
    }

    /**
     * Get codObitos
     *
     * @return integer 
     */
    public function getCodObitos()
    {
        return $this->codObitos;
    }

    /**
     * Set sepulta
     *
     * @param string $sepulta
     * @return ObitosDespesa
     */
    public function setSepulta($sepulta)
    {
        $this->sepulta = $sepulta;

        return $this;
    }

    /**
     * Get sepulta
     *
     * @return string 
     */
    public function getSepulta()
    {
        return $this->sepulta;
    }

    /**
     * Set valorSep
     *
     * @param float $valorSep
     * @return ObitosDespesa
     */
    public function setValorSep($valorSep)
    {
        $this->valorSep = $valorSep;

        return $this;
    }

    /**
     * Get valorSep
     *
     * @return float 
     */
    public function getValorSep()
    {
        return $this->valorSep;
    }

    /**
     * Set paramento
     *
     * @param string $paramento
     * @return ObitosDespesa
     */
    public function setParamento($paramento)
    {
        $this->paramento = $paramento;

        return $this;
    }

    /**
     * Get paramento
     *
     * @return string 
     */
    public function getParamento()
    {
        return $this->paramento;
    }

    /**
     * Set valorPar
     *
     * @param float $valorPar
     * @return ObitosDespesa
     */
    public function setValorPar($valorPar)
    {
        $this->valorPar = $valorPar;

        return $this;
    }

    /**
     * Get valorPar
     *
     * @return float 
     */
    public function getValorPar()
    {
        return $this->valorPar;
    }

    /**
     * Set ornamento
     *
     * @param string $ornamento
     * @return ObitosDespesa
     */
    public function setOrnamento($ornamento)
    {
        $this->ornamento = $ornamento;

        return $this;
    }

    /**
     * Get ornamento
     *
     * @return string 
     */
    public function getOrnamento()
    {
        return $this->ornamento;
    }

    /**
     * Set valorOrn
     *
     * @param float $valorOrn
     * @return ObitosDespesa
     */
    public function setValorOrn($valorOrn)
    {
        $this->valorOrn = $valorOrn;

        return $this;
    }

    /**
     * Get valorOrn
     *
     * @return float 
     */
    public function getValorOrn()
    {
        return $this->valorOrn;
    }

    /**
     * Set velas
     *
     * @param string $velas
     * @return ObitosDespesa
     */
    public function setVelas($velas)
    {
        $this->velas = $velas;

        return $this;
    }

    /**
     * Get velas
     *
     * @return string 
     */
    public function getVelas()
    {
        return $this->velas;
    }

    /**
     * Set valorVela
     *
     * @param float $valorVela
     * @return ObitosDespesa
     */
    public function setValorVela($valorVela)
    {
        $this->valorVela = $valorVela;

        return $this;
    }

    /**
     * Get valorVela
     *
     * @return float 
     */
    public function getValorVela()
    {
        return $this->valorVela;
    }

    /**
     * Set veu
     *
     * @param string $veu
     * @return ObitosDespesa
     */
    public function setVeu($veu)
    {
        $this->veu = $veu;

        return $this;
    }

    /**
     * Get veu
     *
     * @return string 
     */
    public function getVeu()
    {
        return $this->veu;
    }

    /**
     * Set valorVeu
     *
     * @param float $valorVeu
     * @return ObitosDespesa
     */
    public function setValorVeu($valorVeu)
    {
        $this->valorVeu = $valorVeu;

        return $this;
    }

    /**
     * Get valorVeu
     *
     * @return float 
     */
    public function getValorVeu()
    {
        return $this->valorVeu;
    }

    /**
     * Set notaFal
     *
     * @param string $notaFal
     * @return ObitosDespesa
     */
    public function setNotaFal($notaFal)
    {
        $this->notaFal = $notaFal;

        return $this;
    }

    /**
     * Get notaFal
     *
     * @return string 
     */
    public function getNotaFal()
    {
        return $this->notaFal;
    }

    /**
     * Set valorNota
     *
     * @param float $valorNota
     * @return ObitosDespesa
     */
    public function setValorNota($valorNota)
    {
        $this->valorNota = $valorNota;

        return $this;
    }

    /**
     * Get valorNota
     *
     * @return float 
     */
    public function getValorNota()
    {
        return $this->valorNota;
    }

    /**
     * Set valorSer
     *
     * @param float $valorSer
     * @return ObitosDespesa
     */
    public function setValorSer($valorSer)
    {
        $this->valorSer = $valorSer;

        return $this;
    }

    /**
     * Get valorSer
     *
     * @return float 
     */
    public function getValorSer()
    {
        return $this->valorSer;
    }
}
