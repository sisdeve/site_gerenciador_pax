<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Associados
 *
 * @ORM\Table(name="associados")
 * @ORM\Entity(repositoryClass="Pax\Entity\AssociadosRepository")
 */
class Associados
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
     * @ORM\Column(name="cod_associado", type="integer", precision=0, scale=0, nullable=true, unique=false)
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
     * @ORM\Column(name="contrato", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="porcento", type="string", length=2, precision=0, scale=0, nullable=true, unique=false)
     */
    private $porcento;

    /**
     * @var string
     *
     * @ORM\Column(name="viajem", type="string", length=3, precision=0, scale=0, nullable=true, unique=false)
     */
    private $viajem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia_pagemento", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $diaPagemento;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil", type="string", length=10, precision=0, scale=0, nullable=true, unique=false)
     */
    private $estadoCivil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="profissao", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $profissao;

    /**
     * @var string
     *
     * @ORM\Column(name="religiao", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $religiao;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_cobranca", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $enderecoCobranca;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, precision=0, scale=0, nullable=true, unique=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=11, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="pai", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $pai;

    /**
     * @var string
     *
     * @ORM\Column(name="mae", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mae;

    /**
     * @var string
     *
     * @ORM\Column(name="conjugue", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $conjugue;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cpf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_contrato", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="translado", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $translado;

    /**
     * @var integer
     *
     * @ORM\Column(name="vendedor", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $vendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $observacao;


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
     * @param integer $codAssociado
     * @return Associados
     */
    public function setCodAssociado($codAssociado)
    {
        $this->codAssociado = $codAssociado;

        return $this;
    }

    /**
     * Get codAssociado
     *
     * @return integer 
     */
    public function getCodAssociado()
    {
        return $this->codAssociado;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Associados
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
     * Set contrato
     *
     * @param string $contrato
     * @return Associados
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
     * Set serie
     *
     * @param string $serie
     * @return Associados
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set porcento
     *
     * @param string $porcento
     * @return Associados
     */
    public function setPorcento($porcento)
    {
        $this->porcento = $porcento;

        return $this;
    }

    /**
     * Get porcento
     *
     * @return string 
     */
    public function getPorcento()
    {
        return $this->porcento;
    }

    /**
     * Set viajem
     *
     * @param string $viajem
     * @return Associados
     */
    public function setViajem($viajem)
    {
        $this->viajem = $viajem;

        return $this;
    }

    /**
     * Get viajem
     *
     * @return string 
     */
    public function getViajem()
    {
        return $this->viajem;
    }

    /**
     * Set diaPagemento
     *
     * @param \DateTime $diaPagemento
     * @return Associados
     */
    public function setDiaPagemento($diaPagemento)
    {
        $this->diaPagemento = $diaPagemento;

        return $this;
    }

    /**
     * Get diaPagemento
     *
     * @return \DateTime 
     */
    public function getDiaPagemento()
    {
        return $this->diaPagemento;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return Associados
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return Associados
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set profissao
     *
     * @param string $profissao
     * @return Associados
     */
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;

        return $this;
    }

    /**
     * Get profissao
     *
     * @return string 
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set religiao
     *
     * @param string $religiao
     * @return Associados
     */
    public function setReligiao($religiao)
    {
        $this->religiao = $religiao;

        return $this;
    }

    /**
     * Get religiao
     *
     * @return string 
     */
    public function getReligiao()
    {
        return $this->religiao;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Associados
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set enderecoCobranca
     *
     * @param string $enderecoCobranca
     * @return Associados
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;

        return $this;
    }

    /**
     * Get enderecoCobranca
     *
     * @return string 
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Associados
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
     * Set estado
     *
     * @param string $estado
     * @return Associados
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Associados
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Associados
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Associados
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return Associados
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set pai
     *
     * @param string $pai
     * @return Associados
     */
    public function setPai($pai)
    {
        $this->pai = $pai;

        return $this;
    }

    /**
     * Get pai
     *
     * @return string 
     */
    public function getPai()
    {
        return $this->pai;
    }

    /**
     * Set mae
     *
     * @param string $mae
     * @return Associados
     */
    public function setMae($mae)
    {
        $this->mae = $mae;

        return $this;
    }

    /**
     * Get mae
     *
     * @return string 
     */
    public function getMae()
    {
        return $this->mae;
    }

    /**
     * Set conjugue
     *
     * @param string $conjugue
     * @return Associados
     */
    public function setConjugue($conjugue)
    {
        $this->conjugue = $conjugue;

        return $this;
    }

    /**
     * Get conjugue
     *
     * @return string 
     */
    public function getConjugue()
    {
        return $this->conjugue;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return Associados
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
     * Set dataContrato
     *
     * @param \DateTime $dataContrato
     * @return Associados
     */
    public function setDataContrato($dataContrato)
    {
        $this->dataContrato = $dataContrato;

        return $this;
    }

    /**
     * Get dataContrato
     *
     * @return \DateTime 
     */
    public function getDataContrato()
    {
        return $this->dataContrato;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return Associados
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
     * @return Associados
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
     * Set translado
     *
     * @param string $translado
     * @return Associados
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
     * Set vendedor
     *
     * @param integer $vendedor
     * @return Associados
     */
    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    /**
     * Get vendedor
     *
     * @return integer 
     */
    public function getVendedor()
    {
        return $this->vendedor;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Associados
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
    }
}
