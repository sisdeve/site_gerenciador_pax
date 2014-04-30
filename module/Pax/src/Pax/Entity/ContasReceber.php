<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ContasReceber
 *
 * @ORM\Table(name="contas_receber")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\ContasReceberRepository")
 */
class ContasReceber extends AbstractEntity
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_servico", type="string", length=200, nullable=true)
     */
    private $descricaoServico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_servico", type="date", nullable=true)
     */
    private $dataServico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_vencimento", type="date", nullable=true)
     */
    private $dataVencimento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_servico", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorServico;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=100, nullable=true)
     */
    private $responsavel;


}
