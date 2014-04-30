<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionarios
 *
 * @ORM\Table(name="funcionarios")
 * @ORM\Entity(repositoryClass="Pax\Entity\FuncionariosRepository")
 */
class Funcionarios
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
     * @ORM\Column(name="codigo", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
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
     * @ORM\Column(name="cep", type="string", length=10, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cpf;

    /**
     * @var float
     *
     * @ORM\Column(name="comissao", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $comissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_adm", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=40, precision=0, scale=0, nullable=true, unique=false)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $login;


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
     * Set codigo
     *
     * @param integer $codigo
     * @return Funcionarios
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Funcionarios
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
     * Set endereco
     *
     * @param string $endereco
     * @return Funcionarios
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
     * Set cidade
     *
     * @param string $cidade
     * @return Funcionarios
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
     * @return Funcionarios
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
     * @return Funcionarios
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
     * Set rg
     *
     * @param string $rg
     * @return Funcionarios
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
     * Set cpf
     *
     * @param string $cpf
     * @return Funcionarios
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
     * Set comissao
     *
     * @param float $comissao
     * @return Funcionarios
     */
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }

    /**
     * Get comissao
     *
     * @return float 
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * Set dataAdm
     *
     * @param \DateTime $dataAdm
     * @return Funcionarios
     */
    public function setDataAdm($dataAdm)
    {
        $this->dataAdm = $dataAdm;

        return $this;
    }

    /**
     * Get dataAdm
     *
     * @return \DateTime 
     */
    public function getDataAdm()
    {
        return $this->dataAdm;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Funcionarios
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Funcionarios
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }
}
