<?php

namespace AppBundle\Entity;

/**
 * Questionnaires
 */
class Questionnaires
{
    /**
     * @var integer
     */
    private $idQuestion;

    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $reponsesPossibles;

    /**
     * @var string
     */
    private $bonneReponse;

    /**
     * @var \AppBundle\Entity\Regles
     */
    private $idRegle;

    /**
     * @var \AppBundle\Entity\Butins
     */
    private $idButin;


    /**
     * Set idQuestion
     *
     * @param integer $idQuestion
     *
     * @return Questionnaires
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion
     *
     * @return integer
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return Questionnaires
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponsesPossibles
     *
     * @param string $reponsesPossibles
     *
     * @return Questionnaires
     */
    public function setReponsesPossibles($reponsesPossibles)
    {
        $this->reponsesPossibles = $reponsesPossibles;

        return $this;
    }

    /**
     * Get reponsesPossibles
     *
     * @return string
     */
    public function getReponsesPossibles()
    {
        return $this->reponsesPossibles;
    }

    /**
     * Set bonneReponse
     *
     * @param string $bonneReponse
     *
     * @return Questionnaires
     */
    public function setBonneReponse($bonneReponse)
    {
        $this->bonneReponse = $bonneReponse;

        return $this;
    }

    /**
     * Get bonneReponse
     *
     * @return string
     */
    public function getBonneReponse()
    {
        return $this->bonneReponse;
    }

    /**
     * Set idRegle
     *
     * @param \AppBundle\Entity\Regles $idRegle
     *
     * @return Questionnaires
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
     * @return Questionnaires
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

