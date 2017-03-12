<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujet
 *
 * @ORM\Table(name="sujet")
 * @ORM\Entity
 */
class Sujet
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
     * @ORM\Column(name="titre", type="string", length=250, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=250, nullable=false)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=350, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="name_user", type="string", length=300, nullable=true)
     */
    private $nameUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="disponibilite", type="integer", nullable=false)
     */
    private $disponibilite = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_participants", type="integer", nullable=true)
     */
    private $nbParticipants = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=250, nullable=true)
     */
    private $pic;


}

