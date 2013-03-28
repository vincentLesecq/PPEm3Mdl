<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Lam\MdlBundle\Entity\participant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\participantRepository")
 */
class participant
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string")
	 * @Assert\MaxLength(100)
	 * @Assert\NotBlank
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string")
	 * @Assert\MaxLength(100)
	 * @Assert\NotBlank
     */
    private $prenom;

    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string")
	 * @Assert\MaxLength(100)
	 * @Assert\NotBlank
     */
    private $ville;

    /**
     * @var string $cp
     *
     * @ORM\Column(name="cp", type="string", length=5)
	 * @Assert\MaxLength(5)
	 * @Assert\MinLength(5)
	 * @Assert\NotBlank
     */
    private $cp;

    /**
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string")
	 * @Assert\MaxLength(100)
	 * @Assert\NotBlank
     */
    private $mail;

    /**
     * @var string $tel
     *
     * @ORM\Column(name="tel", type="string")
	 * @Assert\MaxLength(16)
	 * @Assert\MinLength(10)
	 * @Assert\NotBlank
     */
    private $tel;

    /**
     * @var string $nomAssociation
     *
     * @ORM\Column(name="nomAssociation", type="string")
	 * @Assert\MaxLength(150)
	 * @Assert\NotBlank
     */
    private $nomAssociation;
    
    
    /**
     * @var integer $nbBeneInscrit
     * 
     * @ORM\Column(name="nbBeneInscrit", type="integer")
	 * @Assert\NotBlank
     * 
     */
    private $nbBeneInscrit;

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
    *Set Id
    *
    *@param integer $id
    *@return participant
    */
    public function setId( $id)
    {
    	$this->id = $id;
    }
	
    /**
     * Set nom
     *
     * @param string $nom
	 *@return participant
     */
    public function setNom( $nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
	 *@return participant
     */
    public function setPrenom( $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set ville
     *
     * @param string $ville
	 * @return participant
     */
    public function setVille( $ville)
    {
        $this->ville = $ville;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param string $cp
	 * @return participant
     */
    public function setCp( $cp)
    {
        $this->cp = $cp;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set mail
     *
     * @param string $mail
	 * @return participant
     */
    public function setMail( $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param string $tel
	 * @return participant
     */
    public function setTel( $tel)
    {
        $this->tel = $tel;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set nomAssociation
     *
     * @param string $nomAssociation
	 * @return participant
     */
    public function setNomAssociation( $nomAssociation)
    {
        $this->nomAssociation = $nomAssociation;
    }

    /**
     * Get nomAssociation
     *
     * @return string 
     */
    public function getNomAssociation()
    {
        return $this->nomAssociation;
    }
    
    /**
     * Set nbBeneInscrit
     * 
     * @param integer $nbBeneInscrit
        * @return participant
     */
    public function setNbBeneInscrit( $nbBeneInscrit)
    {
        $this->nbBeneInscrit= $nbBeneInscrit;
    }
    
    /**
     * Get nbBeneInscrit
     * 
     * @return integer
     */
    public function getNbBeneInscrit()
    {
        return $this->nbBeneInscrit;
    }
}