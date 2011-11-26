<?php

namespace Ecs\AgentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PositionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('position_name')
            ->add('position_default_roles')
        ;
    }

    public function getName()
    {
        return 'ecs_agentmanagerbundle_positiontype';
    }
}
