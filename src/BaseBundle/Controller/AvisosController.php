<?php

namespace App\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Sistema controller.
 *
 * @Route("/avisos")
 */
class AvisosController extends Controller
{
    /**
     * Muestra la pantalla de zona restringida.
     *
     * @Route("/no_autorizado", name="no_autorizado")
     * @Template()
     */
    public function noAutorizadoAction()
    {
        return [];
    }


}
