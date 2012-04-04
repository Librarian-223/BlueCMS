<?php

namespace Blog\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ComentarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('comentario')
            ->add('fecha')
            ->add('entrada')
        ;
    }

    public function getName()
    {
        return 'blog_bundle_blogbundle_comentariotype';
    }
}
