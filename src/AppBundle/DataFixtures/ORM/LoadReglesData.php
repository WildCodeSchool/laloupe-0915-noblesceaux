<?php
// src/AppBundle/DataFixtures/ORM/LoadReglesData.php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Regles;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Extraits;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadReglesData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $entity = new Regles();
        $entity->setIntitule("Accords Participe passé");
        $entity->setSynthese("Blabla");
        $this->addReference('regle-pp', $entity);
        $em->persist($entity);

        $em->flush();

    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }

}




