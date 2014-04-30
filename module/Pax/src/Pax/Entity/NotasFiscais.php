<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * NotasFiscais
 *
 * @ORM\Table(name="notas_fiscais")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\NotasFiscaisRepository")
 */
class NotasFiscais extends AbstractEntity
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
     * @ORM\Column(name="nun_nota", type="string", length=45, nullable=true)
     */
    private $nunNota;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_fornecedor", type="string", length=5, nullable=true)
     */
    private $codFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=100, nullable=true)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="inc_estatual", type="string", length=20, nullable=true)
     */
    private $incEstatual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_emissao", type="date", nullable=true)
     */
    private $dataEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_produto", type="string", length=5, nullable=true)
     */
    private $codProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="string", length=5, nullable=true)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade", type="string", length=5, nullable=true)
     */
    private $unidade;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_unitario", type="float", precision=5, scale=2, nullable=true)
     */
    private $valorUnitario;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=5, scale=2, nullable=true)
     */
    private $total;


}
