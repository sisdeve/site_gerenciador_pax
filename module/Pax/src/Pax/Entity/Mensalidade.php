<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mensalidade
 *
 * @ORM\Table(name="mensalidade")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\MensalidadeRepository")
 */
class Mensalidade extends AbstractEntity
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
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=45, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="date", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_referencia", type="string", length=2, nullable=true)
     */
    private $mesReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ano_referencia", type="string", length=4, nullable=true)
     */
    private $anoReferencia;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_mensalidade", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorMensalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_funcionario", type="integer", nullable=true)
     */
    private $codFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_funcionario", type="string", length=45, nullable=true)
     */
    private $nomeFuncionario;


}
