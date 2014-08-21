<?php

namespace Coachella\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password')
            ->add('fb_id')
            ->add('vb_id')
            ->add('fg_id')
        ;
    }

    public function getName()
    {
        return 'coachella_userbundle_userstype';
    }
}
