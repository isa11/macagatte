<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
// use Symfony\Component\Validator\Constraints as Assert;

 /**
 * @ORM\Entity
 * @ORM\Table(name="uti_utilisateur")  
 */

class Utilisateur extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="uti_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="uti_nom", type="string", length=255, nullable=true)
     */
    private $nom;


    /**
     * @var string
     *
     * @ORM\Column(name="uti_prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_entreprise", type="string", length=255)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_description", type="text", length=255)
     */
    private $description;

     /**
     * @var string
     * 
     * @ORM\Column(name="uti_img", type="string", length=255)
     */
    private $img;

    /*
     * @var string
     *
     * @ORM\Column(name="uti_nSiren", type="string", length=255)
     */
    private $nSiren;

    /**
     * @ORM\ManyToOne(targetEntity="Localiser")
     * @ORM\JoinColumn(name="loc_oid", referencedColumnName="loc_oid")
     */
    private $localiser;


    public function __construct()
    {
        
        parent::__construct();
        
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Utilisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
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
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Utilisateur
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Utilisateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $img
     *
     * @return Utilisateur
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getimg()
    {
        return $this->img;
    }

    /**
     * Set nSiren
     *
     * @param string $nSiren
     *
     * @return Utilisateur
     */
    public function setNSiren($nSiren)
    {
        $this->nSiren = $nSiren;

        return $this;
    }

    /**
     * Get nSiren
     *
     * @return string
     */
    public function getNSiren()
    {
        return $this->nSiren;
    }
    
    
    

    /**
     * Set localiser
     *
     * @param \AppBundle\Entity\Localiser $localiser
     *
     * @return Utilisateur
     */
    public function setLocaliser(\AppBundle\Entity\Localiser $localiser = null)
    {
        $this->localiser = $localiser;

        $this;

    
    }

    /**
     * Get localiser
     *
     * @return \AppBundle\Entity\Localiser
     */
    public function getLocaliser()
    {
        return $this->localiser;
    }

    

    

    

}
