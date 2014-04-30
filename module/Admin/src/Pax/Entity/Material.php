<?php

namespace Pax\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material")
 * @ORM\Entity(repositoryClass="Pax\Entity\MaterialRepository")
 */
class Material
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
     * @ORM\Column(name="cod_urna", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $codUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=200, precision=0, scale=0, nullable=true, unique=false)
     */
    private $descricao;


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
     * Set codUrna
     *
     * @param integer $codUrna
     * @return Material
     */
    public function setCodUrna($codUrna)
    {
        $this->codUrna = $codUrna;

        return $this;
    }

    /**
     * Get codUrna
     *
     * @return integer 
     */
    public function getCodUrna()
    {
        return $this->codUrna;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Material
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
}
