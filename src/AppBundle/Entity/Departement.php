<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="dep_departement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartementRepository")
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="dep_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_departementCode", type="string", length=255)
     */
    private $departementCode;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_departementName", type="string", length=255)
     */
    private $departementName;


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
     * Set departementCode
     *
     * @param string $departementCode
     *
     * @return Departement
     */
    public function setDepartementCode($departementCode)
    {
        $this->departementCode = $departementCode;

        return $this;
    }

    /**
     * Get departementCode
     *
     * @return string
     */
    public function getDepartementCode()
    {
        return $this->departementCode;
    }

    /**
     * Set departementName
     *
     * @param string $departementName
     *
     * @return Departement
     */
    public function setDepartementName($departementName)
    {
        $this->departementName = $departementName;

        return $this;
    }

    /**
     * Get departementName
     *
     * @return string
     */
    public function getDepartementName()
    {
        return $this->departementName;
    }
}

