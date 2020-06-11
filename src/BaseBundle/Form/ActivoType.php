<?php

/**
 * Description of ActivoType
 *
 * @author Gabriel Toledo
 */

namespace App\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActivoType extends AbstractType{
    


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'empty_value' => ' ',
            'empty_data' => null,
             'required' => false,
            'choices' => [
                'S'=>'S',
                'N'=>'N',
            ],
        ]);
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'activo';
    }
}
