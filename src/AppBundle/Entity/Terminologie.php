<?php

namespace AppBundle\Entity;

/**
 * Terminologie
 */
class Terminologie
{



    // GENERATED CODE
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $terme;

    /**
     * @var string
     */
    private $definition;

    /**
     * @var string
     */
    private $liens;

    /**
     * @var \AppBundle\Entity\Regles
     */
    private $idRegle;


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
     * Set terme
     *
     * @param string $terme
     *
     * @return Terminologie
     */
    public function setTerme($terme)
    {
        $this->terme = $terme;

        return $this;
    }

    /**
     * Get terme
     *
     * @return string
     */
    public function getTerme()
    {
        return $this->terme;
    }

    /**
     * Set definition
     *
     * @param string $definition
     *
     * @return Terminologie
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set liens
     *
     * @param string $liens
     *
     * @return Terminologie
     */
    public function setLiens($liens)
    {
        $this->liens = $liens;

        return $this;
    }

    /**
     * Get liens
     *
     * @return string
     */
    public function getLiens()
    {
        return $this->liens;
    }

    /**
     * Set idRegle
     *
     * @param \AppBundle\Entity\Regles $idRegle
     *
     * @return Terminologie
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
