<?php
// src/AppBundle/DataFixtures/ORM/LoadQuetesData.php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Quetes;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadQuetesData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $entity = new Quetes();
        $entity->addRegle($em->merge($this->getReference('regle-pp')));
        $entity->setDifficulte(true);
        $entity->setCodeCategorie("salut");
        $entity->setNbEtapes(true);
        $entity->setType("ckckckckc");
        $entity->setHautFait(true);





        $em->persist($entity);
        $em->flush();

    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }

}




