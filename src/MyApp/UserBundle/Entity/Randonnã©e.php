<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Randonnã©e
 *
 * @ORM\Table(name="randonnÃ©e")
 * @ORM\Entity
 */
class Randonnã©e
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="equipments", type="string", length=30, nullable=false)
     */
    private $equipments;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_retour", type="string", length=30, nullable=false)
     */
    private $heureRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_depart", type="string", length=30, nullable=false)
     */
    private $heureDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=30, nullable=false)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=30, nullable=false)
     */
    private $niveau;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=30, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=30, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="circuit", type="string", length=30, nullable=false)
     */
    private $circuit;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorieR", type="integer", nullable=false)
     */
    private $categorier;

    /**
     * @var integer
     *
     * @ORM\Column(name="orgId", type="integer", nullable=false)
     */
    private $orgid;

    /**
     * @var integer
     *
     * @ORM\Column(name="guidId", type="integer", nullable=false)
     */
    private $guidid;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=300, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="autorisationOfficiel", type="string", length=30, nullable=false)
     */
    private $autorisationofficiel;


}

