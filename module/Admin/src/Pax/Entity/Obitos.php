<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obitos
 *
 * @ORM\Table(name="obitos")
 * @ORM\Entity(repositoryClass="Pax\Entity\ObitosRepository")
 */
class Obitos
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
     * @ORM\Column(name="codigo_ass", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $codigoAss;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_associado", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nomeAssociado;

    /**
     * @var string
     *
     * @ORM\Column(name="data_obito", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataObito;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="velorio", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $velorio;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $tipoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="groupo", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $groupo;

    /**
     * @var string
     *
     * @ORM\Column(name="translado", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $translado;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $responsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="data_pagamento", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_urna", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $codUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_urna", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $valorUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="diferenca_urna", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $diferencaUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="atendente", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $atendente;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_sepultamento", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $horarioSepultamento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_tran", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $valorTran;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_velorio", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataVelorio;


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
     * Set codigoAss
     *
     * @param string $codigoAss
     * @return Obitos
     */
    public function setCodigoAss($codigoAss)
    {
        $this->codigoAss = $codigoAss;

        return $this;
    }

    /**
     * Get codigoAss
     *
     * @return string 
     */
    public function getCodigoAss()
    {
        return $this->codigoAss;
    }

    /**
     * Set nomeAssociado
     *
     * @param string $nomeAssociado
     * @return Obitos
     */
    public function setNomeAssociado($nomeAssociado)
    {
        $this->nomeAssociado = $nomeAssociado;

        return $this;
    }

    /**
     * Get nomeAssociado
     *
     * @return string 
     */
    public function getNomeAssociado()
    {
        return $this->nomeAssociado;
    }

    /**
     * Set dataObito
     *
     * @param string $dataObito
     * @return Obitos
     */
    public function setDataObito($dataObito)
    {
        $this->dataObito = $dataObito;

        return $this;
    }

    /**
     * Get dataObito
     *
     * @return string 
     */
    public function getDataObito()
    {
        return $this->dataObito;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Obitos
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
     * Set situacao
     *
     * @param string $situacao
     * @return Obitos
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return string 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Obitos
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
     * Set velorio
     *
     * @param string $velorio
     * @return Obitos
     */
    public function setVelorio($velorio)
    {
        $this->velorio = $velorio;

        return $this;
    }

    /**
     * Get velorio
     *
     * @return string 
     */
    public function getVelorio()
    {
        return $this->velorio;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Obitos
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     * @return Obitos
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return string 
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return Obitos
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string 
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set groupo
     *
     * @param string $groupo
     * @return Obitos
     */
    public function setGroupo($groupo)
    {
        $this->groupo = $groupo;

        return $this;
    }

    /**
     * Get groupo
     *
     * @return string 
     */
    public function getGroupo()
    {
        return $this->groupo;
    }

    /**
     * Set translado
     *
     * @param string $translado
     * @return Obitos
     */
    public function setTranslado($translado)
    {
        $this->translado = $translado;

        return $this;
    }

    /**
     * Get translado
     *
     * @return string 
     */
    public function getTranslado()
    {
        return $this->translado;
    }

    /**
     * Set responsavel
     *
     * @param string $responsavel
     * @return Obitos
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

    /**
     * Set dataPagamento
     *
     * @param string $dataPagamento
     * @return Obitos
     */
    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    /**
     * Get dataPagamento
     *
     * @return string 
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Set codUrna
     *
     * @param string $codUrna
     * @return Obitos
     */
    public function setCodUrna($codUrna)
    {
        $this->codUrna = $codUrna;

        return $this;
    }

    /**
     * Get codUrna
     *
     * @return string 
     */
    public function getCodUrna()
    {
        return $this->codUrna;
    }

    /**
     * Set valorUrna
     *
     * @param string $valorUrna
     * @return Obitos
     */
    public function setValorUrna($valorUrna)
    {
        $this->valorUrna = $valorUrna;

        return $this;
    }

    /**
     * Get valorUrna
     *
     * @return string 
     */
    public function getValorUrna()
    {
        return $this->valorUrna;
    }

    /**
     * Set diferencaUrna
     *
     * @param string $diferencaUrna
     * @return Obitos
     */
    public function setDiferencaUrna($diferencaUrna)
    {
        $this->diferencaUrna = $diferencaUrna;

        return $this;
    }

    /**
     * Get diferencaUrna
     *
     * @return string 
     */
    public function getDiferencaUrna()
    {
        return $this->diferencaUrna;
    }

    /**
     * Set atendente
     *
     * @param string $atendente
     * @return Obitos
     */
    public function setAtendente($atendente)
    {
        $this->atendente = $atendente;

        return $this;
    }

    /**
     * Get atendente
     *
     * @return string 
     */
    public function getAtendente()
    {
        return $this->atendente;
    }

    /**
     * Set horarioSepultamento
     *
     * @param string $horarioSepultamento
     * @return Obitos
     */
    public function setHorarioSepultamento($horarioSepultamento)
    {
        $this->horarioSepultamento = $horarioSepultamento;

        return $this;
    }

    /**
     * Get horarioSepultamento
     *
     * @return string 
     */
    public function getHorarioSepultamento()
    {
        return $this->horarioSepultamento;
    }

    /**
     * Set valorTotal
     *
     * @param string $valorTotal
     * @return Obitos
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return string 
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Obitos
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set valorTran
     *
     * @param string $valorTran
     * @return Obitos
     */
    public function setValorTran($valorTran)
    {
        $this->valorTran = $valorTran;

        return $this;
    }

    /**
     * Get valorTran
     *
     * @return string 
     */
    public function getValorTran()
    {
        return $this->valorTran;
    }

    /**
     * Set dataVelorio
     *
     * @param \DateTime $dataVelorio
     * @return Obitos
     */
    public function setDataVelorio($dataVelorio)
    {
        $this->dataVelorio = $dataVelorio;

        return $this;
    }

    /**
     * Get dataVelorio
     *
     * @return \DateTime 
     */
    public function getDataVelorio()
    {
        return $this->dataVelorio;
    }
}
