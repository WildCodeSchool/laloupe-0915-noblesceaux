<?php

namespace AppBundle\Entity;

/**
 * Butins
 */
class Butins
{
    /**
     * @var integer
     */
    private $idButin;

    /**
     * @var string
     */
    private $butin;

    /**
     * @var string
     */
    private $probabilite;

    /**
     * @var boolean
     */
    private $parchemin;

    /**
     * @var string
     */
    private $texteParchemin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idUtilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUtilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idButin
     *
     * @return integer
     */
    public function getIdButin()
    {
        return $this->idButin;
    }

    /**
     * Set butin
     *
     * @param string $butin
     *
     * @return Butins
     */
    public function setButin($butin)
    {
        $this->butin = $butin;

        return $this;
    }

    /**
     * Get butin
     *
     * @return string
     */
    public function getButin()
    {
        return $this->butin;
    }

    /**
     * Set probabilite
     *
     * @param string $probabilite
     *
     * @return Butins
     */
    public function setProbabilite($probabilite)
    {
        $this->probabilite = $probabilite;

        return $this;
    }

    /**
     * Get probabilite
     *
     * @return string
     */
    public function getProbabilite()
    {
        return $this->probabilite;
    }

    /**
     * Set parchemin
     *
     * @param boolean $parchemin
     *
     * @return Butins
     */
    public function setParchemin($parchemin)
    {
        $this->parchemin = $parchemin;

        return $this;
    }

    /**
     * Get parchemin
     *
     * @return boolean
     */
    public function getParchemin()
    {
        return $this->parchemin;
    }

    /**
     * Set texteParchemin
     *
     * @param string $texteParchemin
     *
     * @return Butins
     */
    public function setTexteParchemin($texteParchemin)
    {
        $this->texteParchemin = $texteParchemin;

        return $this;
    }

    /**
     * Get texteParchemin
     *
     * @return string
     */
    public function getTexteParchemin()
    {
        return $this->texteParchemin;
    }

    /**
     * Add idUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateurs $idUtilisateur
     *
     * @return Butins
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
}

