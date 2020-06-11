<?php

namespace App\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pagenum', 'number')
            ->add('pagenum', 'number')
            ->add('pagesize', 'number')
            ->add('sortdatafield', 'text')
            ->add('sortorder', 'text')
            ->setMethod('GET');

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\BaseBundle\Grilla\Filtro',
            'csrf_protection' => false,
        ]);
    }

    public function getName()
    {
        return 'filtro';
    }
}