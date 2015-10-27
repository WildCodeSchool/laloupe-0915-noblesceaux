<?php

namespace AppBundle\Entity;

/**
 * QuetesEnCours
 */
class QuetesEnCours
{
    /**
     * @var integer
     */
    private $pvActuels;

    /**
     * @var string
     */
    private $extraitsEnAttente;

    /**
     * @var boolean
     */
    private $etapeActuelle;

    /**
     * @var integer
     */
    private $nbErreurs;

    /**
     * @var integer
     */
    private $nbActions;

    /**
     * @var \AppBundle\Entity\Quetes
     */
    private $idQuete;

    /**
     * @var \AppBundle\Entity\Utilisateurs
     */
    private $idUtilisateur;


    /**
     * Set pvActuels
     *
     * @param integer $pvActuels
     *
     * @return QuetesEnCours
     */
    public function setPvActuels($pvActuels)
    {
        $this->pvActuels = $pvActuels;

        return $this;
    }

    /**
     * Get pvActuels
     *
     * @return integer
     */
    public function getPvActuels()
    {
        return $this->pvActuels;
    }

    /**
     * Set extraitsEnAttente
     *
     * @param string $extraitsEnAttente
     *
     * @return QuetesEnCours
     */
    public function setExtraitsEnAttente($extraitsEnAttente)
    {
        $this->extraitsEnAttente = $extraitsEnAttente;

        return $this;
    }

    /**
     * Get extraitsEnAttente
     *
     * @return string
     */
    public function getExtraitsEnAttente()
    {
        return $this->extraitsEnAttente;
    }

    /**
     * Set etapeActuelle
     *
     * @param boolean $etapeActuelle
     *
     * @return QuetesEnCours
     */
    public function setEtapeActuelle($etapeActuelle)
    {
        $this->etapeActuelle = $etapeActuelle;

        return $this;
    }

    /**
     * Get etapeActuelle
     *
     * @return boolean
     */
    public function getEtapeActuelle()
    {
        return $this->etapeActuelle;
    }

    /**
     * Set nbErreurs
     *
     * @param integer $nbErreurs
     *
     * @return QuetesEnCours
     */
    public function setNbErreurs($nbErreurs)
    {
        $this->nbErreurs = $nbErreurs;

        return $this;
    }

    /**
     * Get nbErreurs
     *
     * @return integer
     */
    public function getNbErreurs()
    {
        return $this->nbErreurs;
    }

    /**
     * Set nbActions
     *
     * @param integer $nbActions
     *
     * @return QuetesEnCours
     */
    public function setNbActions($nbActions)
    {
        $this->nbActions = $nbActions;

        return $this;
    }

    /**
     * Get nbActions
     *
     * @return integer
     */
    public function getNbActions()
    {
        return $this->nbActions;
    }

    /**
     * Set idQuete
     *
     * @param \AppBundle\Entity\Quetes $idQuete
     *
     * @return QuetesEnCours
     */
    public function setIdQuete(\AppBundle\Entity\Quetes $idQuete = null)
    {
        $this->idQuete = $idQuete;

        return $this;
    }

    /**
     * Get idQuete
     *
     * @return \AppBundle\Entity\Quetes
     */
    public function getIdQuete()
    {
        return $this->idQuete;
    }

    /**
     * Set idUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateurs $idUtilisateur
     *
     * @return QuetesEnCours
     */
    public function setIdUtilisateur(\AppBundle\Entity\Utilisateurs $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \AppBundle\Entity\Utilisateurs
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return QuetesEnCours
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}
