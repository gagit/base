<?php

/**
 * Description of FichaHiddenType
 *
 * @author Gabriel Toledo
 */

namespace App\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MesesTxtType extends AbstractType{
    


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'empty_value' => 'Seleccione mes',
            'choices' => [
                'ENERO'=>'ENERO',
                'FEBRERO'=>'FEBRERO',
                'MARZO'=>'MARZO',
                'ABRIL'=>'ABRIL',
                'MAYO'=>'MAYO',
                'JUNIO'=>'JUNIO',
                'JULIO'=>'JULIO',
                'AGOSTO'=>'AGOSTO',
                'SEPTIEMBRE'=>'SEPTIEMBRE',
                'OCTUBRE'=>'OCTUBRE',
                'NOVIEMBRE'=>'NOVIEMBRE',
                'DICIEMBRE'=>'DICIEMBRE',
            ],
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'meses_txt';
    }
}
