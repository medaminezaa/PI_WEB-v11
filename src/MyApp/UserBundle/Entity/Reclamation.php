<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
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
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="typeReclamation", type="string", length=30, nullable=false)
     */
    private $typereclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="date", nullable=false)
     */
    private $dateAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="datetime", nullable=false)
     */
    private $dateEnvoi = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="validitÃ©e", type="integer", nullable=true)
     */
    private $validitã©e;

    /**
     * @var integer
     *
     * @ORM\Column(name="RefMateriel", type="integer", nullable=false)
     */
    private $refmateriel;

    /**
     * @var string
     *
     * @ORM\Column(name="mailClient", type="string", length=300, nullable=false)
     */
    private $mailclient;


}

