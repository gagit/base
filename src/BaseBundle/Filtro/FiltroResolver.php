<?php
/**
 * Class FiltroResolver.
 */

namespace App\BaseBundle\Filtro;


use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class FiltroResolver
{
    public static function handleRequest(Form $form, Request $request )
    {
        //$filtro = new Filtro();
        try{
            $form->handleRequest($request);
            /** @var Filtro $filtro */
            $filtro = $form->getData();
            if($filtro) {
                $filtro
                    ->setPagenum($request->get('pagenum'))
                    ->setPagesize($request->get('pagesize'))
                    ->setSortdatafield($request->get('sortdatafield'))
                    ->setSortorder($request->get('sortorder'));
                
            } else {
                $filtro = new Filtro();
            }
        }catch(\Exception $ex) {
            echo "Filtro Resolver: ".$ex->getMessage();
            //$filtros = new Filtro();
        }
        return $filtro;
    }
}