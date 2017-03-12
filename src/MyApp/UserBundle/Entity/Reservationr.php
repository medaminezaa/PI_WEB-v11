<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationr
 *
 * @ORM\Table(name="reservationr")
 * @ORM\Entity
 */
class Reservationr
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
     * @ORM\Column(name="capacite", type="string", length=100, nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="nbredejour", type="string", length=100, nullable=false)
     */
    private $nbredejour;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreplace", type="string", length=100, nullable=false)
     */
    private $nombreplace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateres", type="date", nullable=false)
     */
    private $dateres;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=100, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="remise", type="string", length=100, nullable=false)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="string", length=100, nullable=false)
     */
    private $total;


}

