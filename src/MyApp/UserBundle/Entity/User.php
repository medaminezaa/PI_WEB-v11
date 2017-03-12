<?php

/**
 * Created by PhpStorm.
 * User: Othman Ben Jemaa
 * Date: 08/03/2017
 * Time: 18:13
 */
namespace MyApp\UserBundle \Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */

class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=30, nullable=true)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=30, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=30, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=true)
     */
    private $role;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=200, nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="connected", type="integer", nullable=false)
     */
    private $connected = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=true)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="disponibilité", type="integer", nullable=true)
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="competance", type="string", length=30, nullable=true)
     */
    private $competance;

    /**
     * @var string
     *
     * @ORM\Column(name="typeOrganisateur", type="string", length=30, nullable=true)
     */
    private $typeorganisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_fidel", type="integer", nullable=true)
     */
    private $ptFidel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="typeAgence", type="string", length=30, nullable=true)
     */
    private $typeagence;

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * @param int $connected
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getCompetance()
    {
        return $this->competance;
    }

    /**
     * @param string $competance
     */
    public function setCompetance($competance)
    {
        $this->competance = $competance;
    }

    /**
     * @return int
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param int $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param string $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getTypeorganisateur()
    {
        return $this->typeorganisateur;
    }

    /**
     * @param string $typeorganisateur
     */
    public function setTypeorganisateur($typeorganisateur)
    {
        $this->typeorganisateur = $typeorganisateur;
    }

    /**
     * @return int
     */
    public function getPtFidel()
    {
        return $this->ptFidel;
    }

    /**
     * @param int $ptFidel
     */
    public function setPtFidel($ptFidel)
    {
        $this->ptFidel = $ptFidel;
    }

    /**
     * @return string
     */
    public function getTypeagence()
    {
        return $this->typeagence;
    }

    /**
     * @param string $typeagence
     */
    public function setTypeagence($typeagence)
    {
        $this->typeagence = $typeagence;
    }



}