<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Servicos
 *
 * @ORM\Table(name="servicos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\ServicosRepository")
 */
class Servicos extends AbstractEntity
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
     * @ORM\Column(name="cliente", type="string", length=45, nullable=true)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=200, nullable=true)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_servico", type="date", nullable=true)
     */
    private $dataServico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_venc", type="date", nullable=true)
     */
    private $dataVenc;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_", type="float", precision=5, scale=2, nullable=true)
     */
    private $valor;


}
