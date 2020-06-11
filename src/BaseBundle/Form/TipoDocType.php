<?php

/**
 * Description of TipoDocType
 *
 * @author Gabriel Toledo
 */

namespace App\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoDocType extends AbstractType{
    


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'empty_value' => 'Seleccione el tipo de documento',
            'empty_data' => null,
            'required' => false,
            'choices' => [
                'DNI'=>'DNI',
                'LE'=>'LE',
                'LC'=>'LC',
                'CEDULA PROVINCIAL'=>'CEDULA PROVINCIAL',
                'CEDULA FEDERAL'=>'CEDULA FEDERAL',
                'PASAPORTE'=>'PASAPORTE',
            ],
        ]);
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'tipo_doc';
    }
}
