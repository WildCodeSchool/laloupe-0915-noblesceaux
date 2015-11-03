<?php

namespace AppBundle\Entity;

/**
 * Greffons
 */
class Greffons
{
    /**
     * @var integer
     */
    private $idGreffon;

    /**
     * @var boolean
     */
    private $ordre;

    /**
     * @var string
     */
    private $supplement;

    /**
     * @var \AppBundle\Entity\Regles
     */
    private $idRegle;


    /**
     * Set idGreffon
     *
     * @param integer $idGreffon
     *
     * @return Greffons
     */
    public function setIdGreffon($idGreffon)
    {
        $this->idGreffon = $idGreffon;

        return $this;
    }

    /**
     * Get idGreffon
     *
     * @return integer
     */
    public function getIdGreffon()
    {
        return $this->idGreffon;
    }

    /**
     * Set ordre
     *
     * @param boolean $ordre
     *
     * @return Greffons
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return boolean
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set supplement
     *
     * @param string $supplement
     *
     * @return Greffons
     */
    public function setSupplement($supplement)
    {
        $this->supplement = $supplement;

        return $this;
    }

    /**
     * Get supplement
     *
     * @return string
     */
    public function getSupplement()
    {
        return $this->supplement;
    }

    /**
     * Set idRegle
     *
     * @param \AppBundle\Entity\Regles $idRegle
     *
     * @return Greffons
     */
    public function setIdRegle(\AppBundle\Entity\Regles $idRegle = null)
    {
        $this->idRegle = $idRegle;

        return $this;
    }

    /**
     * Get idRegle
     *
     * @return \AppBundle\Entity\Regles
     */
    public function getIdRegle()
    {
        return $this->idRegle;
    }
}
