<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\FormationRepository")
 */
class Formation
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
     * @var date $Date
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $Date;

    /**
     * @var string $Horaire
     *
     * @ORM\Column(name="Horaire", type="string", length=30)
     */
    private $Horaire;

    /**
     * @var string $Salle
     *
     * @ORM\Column(name="Salle", type="string", length=30)
     */
    private $Salle;

    /**
     * @var string $Adresse
     *
     * @ORM\Column(name="Adresse", type="string", length=150)
     */
    private $Adresse;

    /**
     * @var string $Cout
     *
     * @ORM\Column(name="Cout", type="string", length=100)
     */
    private $Cout;

    /**
     * @var string $Repas
     *
     * @ORM\Column(name="Repas", type="string", length=100)
     */
    private $Repas;

    /**
     * @var date $DateLimite
     *
     * @ORM\Column(name="DateLimite", type="date")
     */
    private $DateLimite;
/**
     * @var int $nbInscrit
     *
     * @ORM\Column(name="nbInscrit", type="integer", length=3)
     */
    private $nbInscrit;
  /**
* @ORM\ManyToMany(targetEntity="Lam\MdlBundle\Entity\Intervenant",
cascade={"persist"})
*/
private $lesIntervenants;

  /**
     * @ORM\ManyToOne(targetEntity="Lam\MdlBundle\Entity\FormationSport")
     * @ORM\JoinColumn(nullable=true)
     */
    private $laFormationSport;
    
     /**
     * @ORM\ManyToOne(targetEntity="Lam\MdlBundle\Entity\FormationInformatique")
     * @ORM\JoinColumn(nullable=true)
     */
    private $laFormationInformatique;
    
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
     * Set Date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->Date = $date;
    }

    /**
     * Get Date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->Date;
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
     * Set Adresse
     *
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;
    }

    /**
     * Get Adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set Cout
     *
     * @param string $cout
     */
    public function setCout($cout)
    {
        $this->Cout = $cout;
    }

    /**
     * Get Cout
     *
     * @return string 
     */
    public function getCout()
    {
        return $this->Cout;
    }

    /**
     * Set Repas
     *
     * @param string $repas
     */
    public function setRepas($repas)
    {
        $this->Repas = $repas;
    }

    /**
     * Get Repas
     *
     * @return string 
     */
    public function getRepas()
    {
        return $this->Repas;
    }

    /**
     * Set DateLimite
     *
     * @param date $dateLimite
     */
    public function setDateLimite($dateLimite)
    {
        $this->DateLimite = $dateLimite;
    }

    /**
     * Get DateLimite
     *
     * @return date 
     */
    public function getDateLimite()
    {
        return $this->DateLimite;
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
     * Set laFormationSport
     *
     * @param Lam\MdlBundle\Entity\FormationSport $laFormationSport
     */
    public function setLaFormationSport(\Lam\MdlBundle\Entity\FormationSport $laFormationSport)
    {
        $this->laFormationSport = $laFormationSport;
    }

    /**
     * Get laFormationSport
     *
     * @return Lam\MdlBundle\Entity\FormationSport 
     */
    public function getLaFormationSport()
    {
        return $this->laFormationSport;
    }

    /**
     * Set laFormationInformatique
     *
     * @param Lam\MdlBundle\Entity\FormationInformatique $laFormationInformatique
     */
    public function setLaFormationInformatique(\Lam\MdlBundle\Entity\FormationInformatique $laFormationInformatique)
    {
        $this->laFormationInformatique = $laFormationInformatique;
    }

    /**
     * Get laFormationInformatique
     *
     * @return Lam\MdlBundle\Entity\FormationInformatique 
     */
    public function getLaFormationInformatique()
    {
        return $this->laFormationInformatique;
    }

    /**
     * Set nbInscrit
     *
     * @param integer $nbInscrit
     */
    public function setNbInscrit($nbInscrit)
    {
        $this->nbInscrit = $nbInscrit;
    }

    /**
     * Get nbInscrit
     *
     * @return integer 
     */
    public function getNbInscrit()
    {
        return $this->nbInscrit;
    }
}