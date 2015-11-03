<?php

namespace AppBundle\Entity;

/**
 * Quetes
 */
class Quetes
{















    // GENERATED CODE

   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codeCategorie;

    /**
     * @var boolean
     */
    private $nbEtapes;

    /**
     * @var string
     */
    private $type;

    /**
     * @var boolean
     */
    private $difficulte;

    /**
     * @var string
     */
    private $masque;

    /**
     * @var boolean
     */
    private $hautFait;

    /**
     * @var integer
     */
    private $tempsLimite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $regles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeCategorie
     *
     * @param string $codeCategorie
     *
     * @return Quetes
     */
    public function setCodeCategorie($codeCategorie)
    {
        $this->codeCategorie = $codeCategorie;

        return $this;
    }

    /**
     * Get codeCategorie
     *
     * @return string
     */
    public function getCodeCategorie()
    {
        return $this->codeCategorie;
    }

    /**
     * Set nbEtapes
     *
     * @param boolean $nbEtapes
     *
     * @return Quetes
     */
    public function setNbEtapes($nbEtapes)
    {
        $this->nbEtapes = $nbEtapes;

        return $this;
    }

    /**
     * Get nbEtapes
     *
     * @return boolean
     */
    public function getNbEtapes()
    {
        return $this->nbEtapes;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Quetes
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set difficulte
     *
     * @param boolean $difficulte
     *
     * @return Quetes
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
     * Set masque
     *
     * @param string $masque
     *
     * @return Quetes
     */
    public function setMasque($masque)
    {
        $this->masque = $masque;

        return $this;
    }

    /**
     * Get masque
     *
     * @return string
     */
    public function getMasque()
    {
        return $this->masque;
    }

    /**
     * Set hautFait
     *
     * @param boolean $hautFait
     *
     * @return Quetes
     */
    public function setHautFait($hautFait)
    {
        $this->hautFait = $hautFait;

        return $this;
    }

    /**
     * Get hautFait
     *
     * @return boolean
     */
    public function getHautFait()
    {
        return $this->hautFait;
    }

    /**
     * Set tempsLimite
     *
     * @param integer $tempsLimite
     *
     * @return Quetes
     */
    public function setTempsLimite($tempsLimite)
    {
        $this->tempsLimite = $tempsLimite;

        return $this;
    }

    /**
     * Get tempsLimite
     *
     * @return integer
     */
    public function getTempsLimite()
    {
        return $this->tempsLimite;
    }

    /**
     * Add regle
     *
     * @param \AppBundle\Entity\Regles $regle
     *
     * @return Quetes
     */
    public function addRegle(\AppBundle\Entity\Regles $regle)
    {
        $this->regles[] = $regle;

        return $this;
    }

    /**
     * Remove regle
     *
     * @param \AppBundle\Entity\Regles $regle
     */
    public function removeRegle(\AppBundle\Entity\Regles $regle)
    {
        $this->regles->removeElement($regle);
    }

    /**
     * Get regles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegles()
    {
        return $this->regles;
    }
}
