<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="liv_livraison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LivraisonRepository")
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="liv_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="liv_lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="liv_date", type="datetime")
     */
    private $date;

     /**
     * @ORM\ManyToOne(targetEntity="Localiser")
     * @ORM\JoinColumn(name="loc_oid", referencedColumnName="loc_oid")
     */
    private $Livraison;

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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Livraison
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Livraison
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set livraison
     *
     * @param \AppBundle\Entity\Livraison $livraison
     *
     * @return Livraison
     */
    public function setLivraison(\AppBundle\Entity\Livraison $livraison = null)
    {
        $this->Livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return \AppBundle\Entity\Livraison
     */
    public function getLivraison()
    {
        return $this->Livraison;
    }
}
