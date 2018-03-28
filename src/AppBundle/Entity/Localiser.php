<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Localiser
 *
 * @ORM\Table(name="loc_localiser")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocaliserRepository")
 */
class Localiser
{
    /**
     * @var int
     *
     * @ORM\Column(name="loc_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_code_postal", type="string", length=255, nullable=true)
     */
    private $codePostal;
    
        public function __construct()
    {
        $this->ville = new ArrayCollection();
        $this->codePostal = new ArrayCollection();
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Localiser
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
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
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Localiser
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    
    
    public function __toString()
    {
        return $this->codePostal .$this->ville ;
        
    }
}