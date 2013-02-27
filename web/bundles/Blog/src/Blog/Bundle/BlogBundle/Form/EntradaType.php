<?php

namespace Blog\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EntradaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('contenido')
            ->add('fecha')
        ;
    }

    public function getName()
    {
        return 'blog_bundle_blogbundle_entradatype';
    }
}
