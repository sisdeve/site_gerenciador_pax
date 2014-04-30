<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Obitos
 *
 * @ORM\Table(name="obitos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\ObitosRepository")
 */
class Obitos extends AbstractEntity
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
     * @ORM\Column(name="codigo_ass", type="string", length=45, nullable=true)
     */
    private $codigoAss;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_associado", type="string", length=45, nullable=true)
     */
    private $nomeAssociado;

    /**
     * @var string
     *
     * @ORM\Column(name="data_obito", type="string", length=45, nullable=true)
     */
    private $dataObito;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=45, nullable=true)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="velorio", type="string", length=45, nullable=true)
     */
    private $velorio;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=45, nullable=true)
     */
    private $tipoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=45, nullable=true)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="groupo", type="string", length=45, nullable=true)
     */
    private $groupo;

    /**
     * @var string
     *
     * @ORM\Column(name="translado", type="string", length=45, nullable=true)
     */
    private $translado;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=45, nullable=true)
     */
    private $responsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="data_pagamento", type="string", length=45, nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_urna", type="string", length=45, nullable=true)
     */
    private $codUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_urna", type="string", length=45, nullable=true)
     */
    private $valorUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="diferenca_urna", type="string", length=45, nullable=true)
     */
    private $diferencaUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="atendente", type="string", length=45, nullable=true)
     */
    private $atendente;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_sepultamento", type="string", length=45, nullable=true)
     */
    private $horarioSepultamento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="string", length=45, nullable=true)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_tran", type="string", length=45, nullable=true)
     */
    private $valorTran;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_velorio", type="date", nullable=true)
     */
    private $dataVelorio;


}
