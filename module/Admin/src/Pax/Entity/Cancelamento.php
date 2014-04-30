<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cancelamento
 *
 * @ORM\Table(name="cancelamento")
 * @ORM\Entity(repositoryClass="Pax\Entity\CancelamentoRepository")
 */
class Cancelamento
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
     * @ORM\Column(name="nome", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_canc", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $motivo;


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
     * Set nome
     *
     * @param string $nome
     * @return Cancelamento
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
     * Set dataCanc
     *
     * @param \DateTime $dataCanc
     * @return Cancelamento
     */
    public function setDataCanc($dataCanc)
    {
        $this->dataCanc = $dataCanc;

        return $this;
    }

    /**
     * Get dataCanc
     *
     * @return \DateTime 
     */
    public function getDataCanc()
    {
        return $this->dataCanc;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Cancelamento
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
     * Set motivo
     *
     * @param string $motivo
     * @return Cancelamento
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }
}
