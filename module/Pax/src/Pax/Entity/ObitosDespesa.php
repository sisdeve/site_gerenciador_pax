<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ObitosDespesa
 *
 * @ORM\Table(name="obitos_despesa")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\ObitosDespesaRepository")
 */
class ObitosDespesa extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_obitos", type="integer", nullable=true)
     */
    private $codObitos;

    /**
     * @var string
     *
     * @ORM\Column(name="sepulta", type="string", length=45, nullable=true)
     */
    private $sepulta;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_sep", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorSep;

    /**
     * @var string
     *
     * @ORM\Column(name="paramento", type="string", length=45, nullable=true)
     */
    private $paramento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_par", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorPar;

    /**
     * @var string
     *
     * @ORM\Column(name="ornamento", type="string", length=45, nullable=true)
     */
    private $ornamento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_orn", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorOrn;

    /**
     * @var string
     *
     * @ORM\Column(name="velas", type="string", length=45, nullable=true)
     */
    private $velas;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_vela", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorVela;

    /**
     * @var string
     *
     * @ORM\Column(name="veu", type="string", length=45, nullable=true)
     */
    private $veu;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_veu", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorVeu;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_fal", type="string", length=45, nullable=true)
     */
    private $notaFal;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_nota", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorNota;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_ser", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorSer;


}
