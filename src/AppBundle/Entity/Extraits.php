<?php

namespace AppBundle\Entity;

/**
 * Extraits
 */
class Extraits
{
    /**
     * @var integer
     */
    private $idExtrait;

    /**
     * @var string
     */
    private $extrait;

    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $source;

    /**
     * @var boolean
     */
    private $difficulte;

    /**
     * @var \AppBundle\Entity\Regles
     */
    private $idRegle;

    /**
     * @var \AppBundle\Entity\Butins
     */
    private $idButin;


    /**
     * Set idExtrait
     *
     * @param integer $idExtrait
     *
     * @return Extraits
     */
    public function setIdExtrait($idExtrait)
    {
        $this->idExtrait = $idExtrait;

        return $this;
    }

    /**
     * Get idExtrait
     *
     * @return integer
     */
    public function getIdExtrait()
    {
        return $this->idExtrait;
    }

    /**
     * Set extrait
     *
     * @param string $extrait
     *
     * @return Extraits
     */
    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return string
     */
    public function getExtrait()
    {
        return $this->extrait;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Extraits
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Extraits
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set difficulte
     *
     * @param boolean $difficulte
     *
     * @return Extraits
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return boolean
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set idRegle
     *
     * @param \AppBundle\Entity\Regles $idRegle
     *
     * @return Extraits
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

    /**
     * Set idButin
     *
     * @param \AppBundle\Entity\Butins $idButin
     *
     * @return Extraits
     */
    public function setIdButin(\AppBundle\Entity\Butins $idButin = null)
    {
        $this->idButin = $idButin;

        return $this;
    }

    /**
     * Get idButin
     *
     * @return \AppBundle\Entity\Butins
     */
    public function getIdButin()
    {
        return $this->idButin;
    }
}

