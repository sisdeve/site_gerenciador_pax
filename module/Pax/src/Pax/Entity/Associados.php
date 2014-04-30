<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Associados
 *
 * @ORM\Table(name="associados")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\AssociadosRepository")
 */
class Associados extends AbstractEntity
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
     * @ORM\Column(name="cod_associado", type="integer", nullable=true)
     */
    private $codAssociado;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=45, nullable=true)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=45, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="porcento", type="string", length=2, nullable=true)
     */
    private $porcento;

    /**
     * @var string
     *
     * @ORM\Column(name="viajem", type="string", length=3, nullable=true)
     */
    private $viajem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia_pagemento", type="datetime", nullable=true)
     */
    private $diaPagemento;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil", type="string", length=10, nullable=true)
     */
    private $estadoCivil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="profissao", type="string", length=45, nullable=true)
     */
    private $profissao;

    /**
     * @var string
     *
     * @ORM\Column(name="religiao", type="string", length=45, nullable=true)
     */
    private $religiao;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_cobranca", type="string", length=100, nullable=true)
     */
    private $enderecoCobranca;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=100, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=11, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=100, nullable=true)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="pai", type="string", length=100, nullable=true)
     */
    private $pai;

    /**
     * @var string
     *
     * @ORM\Column(name="mae", type="string", length=100, nullable=true)
     */
    private $mae;

    /**
     * @var string
     *
     * @ORM\Column(name="conjugue", type="string", length=100, nullable=true)
     */
    private $conjugue;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15, nullable=true)
     */
    private $cpf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_contrato", type="date", nullable=true)
     */
    private $dataContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=15, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="translado", type="string", length=100, nullable=true)
     */
    private $translado;

    /**
     * @var integer
     *
     * @ORM\Column(name="vendedor", type="integer", nullable=true)
     */
    private $vendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;


}
