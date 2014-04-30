<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * MovimentoCaixa
 *
 * @ORM\Table(name="movimento_caixa")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\MovimentoCaixaRepository")
 */
class MovimentoCaixa extends AbstractEntity
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_movimento", type="date", nullable=true)
     */
    private $dataMovimento;

    /**
     * @var string
     *
     * @ORM\Column(name="credor", type="string", length=45, nullable=true)
     */
    private $credor;

    /**
     * @var string
     *
     * @ORM\Column(name="discriminacao", type="string", length=250, nullable=true)
     */
    private $discriminacao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_lancado", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorLancado;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;


}
