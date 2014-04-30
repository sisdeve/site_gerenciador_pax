<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Urnas
 *
 * @ORM\Table(name="urnas")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\UrnasRepository")
 */
class Urnas extends AbstractEntity
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
     * @ORM\Column(name="cod", type="integer", nullable=true)
     */
    private $cod;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", nullable=true)
     */
    private $saldo;

    /**
     * @var float
     *
     * @ORM\Column(name="compra", type="float", precision=5, scale=2, nullable=true)
     */
    private $compra;

    /**
     * @var float
     *
     * @ORM\Column(name="venda", type="float", precision=5, scale=2, nullable=true)
     */
    private $venda;


}
