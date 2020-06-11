<?php

/**
 * Description of SexoType
 *
 * @author Gabriel Toledo
 */

namespace App\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SexoType extends AbstractType{
    


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'empty_value' => 'Seleccione Sexo',
            'empty_data' => null,
             'required' => false,
            'choices' => [
                'M'=>'Maculino',
                'F'=>'Femenino',
            ],
        ]);
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'sexo';
    }
}
