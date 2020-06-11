<?php

namespace App\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltroHtmlType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('pagenum', NumberType::class,[
                //'mapped'=>false
            ])
            ->add('pagenum', NumberType::class,[
                'mapped'=>false
            ])
            ->add('pagesize', NumberType::class,[
                'mapped'=>false
            ])
            ->add('sortdatafield', TextType::class,[
                'mapped'=>false
            ])
            ->add('sortorder', TextType::class,[
                'mapped'=>false
            ])
            ->add('btnBuscar', SubmitType::class,[
                'attr'=> [
                     'class'=>'btn btn-default fa fa-search',
                     'data-toggle' => 'tooltip',
                     'data-placement'=> 'top',
                     'title'=> 'Buscar',
                          ],
                  'label'=>' ']
                  )
//            ->add('btnLimpiarFiltro', SubmitType::class,[
//                'attr'=> [
//                    // 'onclick'=>"return confirm('limpiaForm($('#idFiltro')');",
//                     'class'=>'btn btn-default fa fa-eraser',
//                     'data-toggle' => 'tooltip',
//                     'data-placement'=> 'top',
//                     'title'=> 'Limpiar los filtros seleccionados',
//                          ],
//                  'label'=>' ']
//                  )
            ->setMethod('GET');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\BaseBundle\Filtro\Filtro',
            'csrf_protection' => false,
        ]);
    }


}