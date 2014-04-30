<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\EmpresasRepository")
 */
class Empresas extends AbstractEntity
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
     * @ORM\Column(name="cod_for", type="integer", nullable=true)
     */
    private $codFor;

    /**
     * @var string
     *
     * @ORM\Column(name="razao", type="string", length=45, nullable=true)
     */
    private $razao;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=45, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, nullable=true)
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
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="inc_est", type="string", length=15, nullable=true)
     */
    private $incEst;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;



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
     * Set codFor
     *
     * @param integer $codFor
     * @return Empresas
     */
    public function setCodFor($codFor)
    {
        $this->codFor = $codFor;

        return $this;
    }

    /**
     * Get codFor
     *
     * @return integer 
     */
    public function getCodFor()
    {
        return $this->codFor;
    }

    /**
     * Set razao
     *
     * @param string $razao
     * @return Empresas
     */
    public function setRazao($razao)
    {
        $this->razao = $razao;

        return $this;
    }

    /**
     * Get razao
     *
     * @return string 
     */
    public function getRazao()
    {
        return $this->razao;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Empresas
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
     * @return Empresas
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
     * @return Empresas
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
     * Set cnpj
     *
     * @param string $cnpj
     * @return Empresas
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
     * Set incEst
     *
     * @param string $incEst
     * @return Empresas
     */
    public function setIncEst($incEst)
    {
        $this->incEst = $incEst;

        return $this;
    }

    /**
     * Get incEst
     *
     * @return string 
     */
    public function getIncEst()
    {
        return $this->incEst;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Empresas
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
}
