<?php

namespace Minsal\ModeloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlIncremento
 *
 * @ORM\Table(name="ctl_incremento", indexes={@ORM\Index(name="id_contrato", columns={"incremento_id_contrato"})})
 * @ORM\Entity
 */
class CtlIncremento
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
     * @ORM\Column(name="meses_desestimar", type="integer", nullable=false)
     */
    private $mesesDesestimar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \CtlContrato
     *
     * @ORM\ManyToOne(targetEntity="CtlContrato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="incremento_id_contrato", referencedColumnName="id")
     * })
     */
    private $incrementoContrato;


}
