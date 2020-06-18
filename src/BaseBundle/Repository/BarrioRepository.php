<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Repository ;

use Doctrine\ORM\EntityRepository;

class BarrioRepository extends EntityRepository{
    
  
    public function getBarriosLocalidad($idLocalidad,$idDepto) {
        return $this->getQueryBarriosLocalidad($idLocalidad, $idDepto)->getResult();
    }
    public function getQueryBarriosLocalidad($idLocalidad,$idDepto) {
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT c,l FROM 
                    Ministerio\SigesBundle\Entity\Barrios c
                    LEFT JOIN c.c_localid l
                    WHERE l.c_localid = :idLoc AND l.c_departa = :idDepto
                    ORDER BY c.n_barrio DESC ');
        $query->setParameters(array(
            'idDepto'=> $idDepto,
            'idLoc'=> $idLocalidad
        ));
        return $query;
    }
    
}