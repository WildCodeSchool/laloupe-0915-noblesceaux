<?php

namespace AppBundle\Entity;

/**
 * Regles
 */
class Regles
{
    /**
     * @var integer
     */
    private $idRegle;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $synthese;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idQuete;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idQuete = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idRegle
     *
     * @return integer
     */
    public function getIdRegle()
    {
        return $this->idRegle;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Regles
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set synthese
     *
     * @param string $synthese
     *
     * @return Regles
     */
    public function setSynthese($synthese)
    {
        $this->synthese = $synthese;

        return $this;
    }

    /**
     * Get synthese
     *
     * @return string
     */
    public function getSynthese()
    {
        return $this->synthese;
    }

    /**
     * Add idQuete
     *
     * @param \AppBundle\Entity\Quetes $idQuete
     *
     * @return Regles
     */
    public function addIdQuete(\AppBundle\Entity\Quetes $idQuete)
    {
        $this->idQuete[] = $idQuete;

        return $this;
    }

    /**
     * Remove idQuete
     *
     * @param \AppBundle\Entity\Quetes $idQuete
     */
    public function removeIdQuete(\AppBundle\Entity\Quetes $idQuete)
    {
        $this->idQuete->removeElement($idQuete);
    }

    /**
     * Get idQuete
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdQuete()
    {
        return $this->idQuete;
    }
}

