<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotasFiscais
 *
 * @ORM\Table(name="notas_fiscais")
 * @ORM\Entity(repositoryClass="Pax\Entity\NotasFiscaisRepository")
 */
class NotasFiscais
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
     * @ORM\Column(name="nun_nota", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nunNota;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_fornecedor", type="string", length=5, precision=0, scale=0, nullable=true, unique=false)
     */
    private $codFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="inc_estatual", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $incEstatual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_emissao", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_produto", type="string", length=5, precision=0, scale=0, nullable=true, unique=false)
     */
    private $codProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="string", length=5, precision=0, scale=0, nullable=true, unique=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade", type="string", length=5, precision=0, scale=0, nullable=true, unique=false)
     */
    private $unidade;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_unitario", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $valorUnitario;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=5, scale=2, nullable=true, unique=false)
     */
    private $total;


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
     * Set nunNota
     *
     * @param string $nunNota
     * @return NotasFiscais
     */
    public function setNunNota($nunNota)
    {
        $this->nunNota = $nunNota;

        return $this;
    }

    /**
     * Get nunNota
     *
     * @return string 
     */
    public function getNunNota()
    {
        return $this->nunNota;
    }

    /**
     * Set codFornecedor
     *
     * @param string $codFornecedor
     * @return NotasFiscais
     */
    public function setCodFornecedor($codFornecedor)
    {
        $this->codFornecedor = $codFornecedor;

        return $this;
    }

    /**
     * Get codFornecedor
     *
     * @return string 
     */
    public function getCodFornecedor()
    {
        return $this->codFornecedor;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return NotasFiscais
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     * @return NotasFiscais
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set incEstatual
     *
     * @param string $incEstatual
     * @return NotasFiscais
     */
    public function setIncEstatual($incEstatual)
    {
        $this->incEstatual = $incEstatual;

        return $this;
    }

    /**
     * Get incEstatual
     *
     * @return string 
     */
    public function getIncEstatual()
    {
        return $this->incEstatual;
    }

    /**
     * Set dataEmissao
     *
     * @param \DateTime $dataEmissao
     * @return NotasFiscais
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    /**
     * Get dataEmissao
     *
     * @return \DateTime 
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Set codProduto
     *
     * @param string $codProduto
     * @return NotasFiscais
     */
    public function setCodProduto($codProduto)
    {
        $this->codProduto = $codProduto;

        return $this;
    }

    /**
     * Get codProduto
     *
     * @return string 
     */
    public function getCodProduto()
    {
        return $this->codProduto;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return NotasFiscais
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
     * Set quantidade
     *
     * @param string $quantidade
     * @return NotasFiscais
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return string 
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set unidade
     *
     * @param string $unidade
     * @return NotasFiscais
     */
    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;

        return $this;
    }

    /**
     * Get unidade
     *
     * @return string 
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    /**
     * Set valorUnitario
     *
     * @param float $valorUnitario
     * @return NotasFiscais
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get valorUnitario
     *
     * @return float 
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return NotasFiscais
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }
}
