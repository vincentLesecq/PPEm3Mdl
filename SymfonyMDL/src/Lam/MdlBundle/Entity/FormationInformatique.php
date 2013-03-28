<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\FormationInformatique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\FormationInformatiqueRepository")
 */
class FormationInformatique
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
     * @ORM\Column(name="Objectif", type="text")
     */
    private $Objectif;

 
    /**
     * @var  $Public
     *
     * @ORM\Column(name="Public", type="string", length=150)
     */
    private $Public;

    /**
     * @var text $Prerequis
     *
     * @ORM\Column(name="Prerequis", type="text")
     */
    private $Prerequis;
/**
     * @var int $nbPlace
     *
     * @ORM\Column(name="nbPlace", type="integer", length=3)
     */
    private $nbPlace;
   /**
     * @var string $Logo
     *
     * @ORM\Column(name="Logo", type="string", length=50)
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
     * Set Prerequis
     *
     * @param text $prerequis
     */
    public function setPrerequis($prerequis)
    {
        $this->Prerequis = $prerequis;
    }

    /**
     * Get Prerequis
     *
     * @return text 
     */
    public function getPrerequis()
    {
        return $this->Prerequis;
    }

    /**
     * Set Public
     *
     * @param text $public
     */
    public function setPublic($public)
    {
        $this->Public = $public;
    }

    /**
     * Get Public
     *
     * @return text 
     */
    public function getPublic()
    {
        return $this->Public;
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