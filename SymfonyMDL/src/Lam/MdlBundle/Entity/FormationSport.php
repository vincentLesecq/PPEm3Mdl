<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\FormationSport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\FormationSportRepository")
 */
class FormationSport
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Titre
     *
     * @ORM\Column(name="Titre", type="string", length=100)
     */
    private $Titre;

 
    /**
     * @var string $Objectif
     *
     * @ORM\Column(name="Objectif", type="string", length=100)
     */
    private $Objectif;

/**
     * @var int $nbPlace
     *
     * @ORM\Column(name="nbPlace", type="integer", length=3)
     */
    private $nbPlace;
    
    /**
     * @var string $Logo
     *
     * @ORM\Column(name="Logo", type="string", length=100)
     */
    private $Logo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->Titre = $titre;
    }

    /**
     * Get Titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set Salle
     *
     * @param string $salle
     */
    public function setSalle($salle)
    {
        $this->Salle = $salle;
    }

    /**
     * Get Salle
     *
     * @return string 
     */
    public function getSalle()
    {
        return $this->Salle;
    }

    /**
     * Set Date
     *
     * @param DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->Date = $date;
    }

    /**
     * Get Date
     *
     * @return DateTime 
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set Objectif
     *
     * @param string $objectif
     */
    public function setObjectif($objectif)
    {
        $this->Objectif = $objectif;
    }

    /**
     * Get Objectif
     *
     * @return string 
     */
    public function getObjectif()
    {
        return $this->Objectif;
    }

    /**
     * Set Horaire
     *
     * @param string $horaire
     */
    public function setHoraire($horaire)
    {
        $this->Horaire = $horaire;
    }

    /**
     * Get Horaire
     *
     * @return string 
     */
    public function getHoraire()
    {
        return $this->Horaire;
    }

    /**
     * Set Logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->Logo = $logo;
    }

    /**
     * Get Logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    public function __construct()
    {
        $this->lesIntervenants = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lesIntervenants
     *
     * @param Lam\MdlBundle\Entity\Intervenant $lesIntervenants
     */
    public function addIntervenant(\Lam\MdlBundle\Entity\Intervenant $lesIntervenants)
    {
        $this->lesIntervenants[] = $lesIntervenants;
    }

    /**
     * Get lesIntervenants
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLesIntervenants()
    {
        return $this->lesIntervenants;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;
    }

    /**
     * Get nbPlace
     *
     * @return integer 
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }
}