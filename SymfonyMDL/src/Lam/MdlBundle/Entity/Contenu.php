<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Contenu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\ContenuRepository")
 */
class Contenu
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
     * @var integer $Ordre
     *
     * @ORM\Column(name="Ordre", type="integer")
     */
    private $Ordre;

       /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Lam\MdlBundle\Entity\FormationInformatique")
     *       
     */
    private $laFormationInformatique;

     /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Lam\MdlBundle\Entity\Theme")
     */
    private $leTheme;

       /**
* @ORM\ManyToMany(targetEntity="Lam\MdlBundle\Entity\Detail",
cascade={"persist"})
*/
private $lesDetails;

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
     * Set Ordre
     *
     * @param integer $ordre
     */
    public function setOrdre($ordre)
    {
        $this->Ordre = $ordre;
    }

    /**
     * Get Ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->Ordre;
    }
    public function __construct()
    {
        $this->lesDetails = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set leTheme
     *
     * @param Lam\MdlBundle\Entity\Theme $leTheme
     */
    public function setLeTheme(\Lam\MdlBundle\Entity\Theme $leTheme)
    {
        $this->leTheme = $leTheme;
    }

    /**
     * Get leTheme
     *
     * @return Lam\MdlBundle\Entity\Theme 
     */
    public function getLeTheme()
    {
        return $this->leTheme;
    }

    /**
     * Add lesDetails
     *
     * @param Lam\MdlBundle\Entity\Detail $lesDetails
     */
    public function addDetail(\Lam\MdlBundle\Entity\Detail $lesDetails)
    {
        $this->lesDetails[] = $lesDetails;
    }

    /**
     * Get lesDetails
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLesDetails()
    {
        return $this->lesDetails;
    }
}