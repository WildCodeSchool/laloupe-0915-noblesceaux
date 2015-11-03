<?php

namespace AppBundle\Entity;

/**
 * Regles
 */
class Regles
{
















    // GENERATED CODE

    /**
     * @var integer
     */
    private $id;

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
    private $quetes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quetes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add quete
     *
     * @param \AppBundle\Entity\Quetes $quete
     *
     * @return Regles
     */
    public function addQuete(\AppBundle\Entity\Quetes $quete)
    {
        $this->quetes[] = $quete;

        return $this;
    }

    /**
     * Remove quete
     *
     * @param \AppBundle\Entity\Quetes $quete
     */
    public function removeQuete(\AppBundle\Entity\Quetes $quete)
    {
        $this->quetes->removeElement($quete);
    }

    /**
     * Get quetes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuetes()
    {
        return $this->quetes;
    }
}
