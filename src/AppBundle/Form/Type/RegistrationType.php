<?php
// src/AppBundle/Form/Type/RegistrationType.php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;




class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array('label' => 'Prénom'))
            ->add('lastname', null, array('label' => 'Nom'))
            ->add('date_of_birth', null, array('label' => 'Date de naissance'))
            ->add('avatar', null, array('label' => 'Avatar'))
            ->add('personnage', null, array('label' => 'Personnage'))
            ->add('afficher_nom', null, array('label' => 'Afficher nom réel'))
            ->add('plainPassword', 'password', array(
                'label' => 'Mot de passe'
            ))
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}
