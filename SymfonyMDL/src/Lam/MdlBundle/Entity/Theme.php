<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Theme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\ThemeRepository")
 */
class Theme
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
     * @var string $NomTheme
     *
     * @ORM\Column(name="NomTheme", type="string", length=100)
     */
    private $NomTheme;


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
     * Set NomTheme
     *
     * @param string $nomTheme
     */
    public function setNomTheme($nomTheme)
    {
        $this->NomTheme = $nomTheme;
    }

    /**
     * Get NomTheme
     *
     * @return string 
     */
    public function getNomTheme()
    {
        return $this->NomTheme;
    }
    public function __construct()
    {
        $this->lesDetails = new \Doctrine\Common\Collections\ArrayCollection();
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