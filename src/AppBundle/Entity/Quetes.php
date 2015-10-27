<?php

namespace AppBundle\Entity;

/**
 * Quetes
 */
class Quetes
{
    /**
     * @var integer
     */
    private $idQuete;

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
    private $idUtilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reglesRegle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUtilisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reglesRegle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idQuete
     *
     * @return integer
     */
    public function getIdQuete()
    {
        return $this->idQuete;
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
     * Add idUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateurs $idUtilisateur
     *
     * @return Quetes
     */
    public function addIdUtilisateur(\AppBundle\Entity\Utilisateurs $idUtilisateur)
    {
        $this->idUtilisateur[] = $idUtilisateur;

        return $this;
    }

    /**
     * Remove idUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateurs $idUtilisateur
     */
    public function removeIdUtilisateur(\AppBundle\Entity\Utilisateurs $idUtilisateur)
    {
        $this->idUtilisateur->removeElement($idUtilisateur);
    }

    /**
     * Get idUtilisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Add reglesRegle
     *
     * @param \AppBundle\Entity\Regles $reglesRegle
     *
     * @return Quetes
     */
    public function addReglesRegle(\AppBundle\Entity\Regles $reglesRegle)
    {
        $this->reglesRegle[] = $reglesRegle;

        return $this;
    }

    /**
     * Remove reglesRegle
     *
     * @param \AppBundle\Entity\Regles $reglesRegle
     */
    public function removeReglesRegle(\AppBundle\Entity\Regles $reglesRegle)
    {
        $this->reglesRegle->removeElement($reglesRegle);
    }

    /**
     * Get reglesRegle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReglesRegle()
    {
        return $this->reglesRegle;
    }
}
