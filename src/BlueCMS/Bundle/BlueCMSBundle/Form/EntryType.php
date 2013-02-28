<?php

namespace BlueCMS\Bundle\BlueCMSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EntryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('created')
            ->add('iduser')
        ;
    }

    public function getName()
    {
        return 'bluecms_bundle_bluecmsbundle_entrytype';
    }
}
