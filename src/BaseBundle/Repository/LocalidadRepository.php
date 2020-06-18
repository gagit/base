<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Repository ;

use Doctrine\ORM\EntityRepository;

class LocalidadRepository extends EntityRepository{
    
       public function getLocalidad2($id_localidad,$id_dpto){
        
        $em= $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT l FROM 
                    Ministerio\SigesBundle\Entity\Localidades l
                    WHERE (l.c_departa= :id_departamento  AND  l.c_localid = :id_localidad) '
                );
        $query->setParameters(array(
            'id_localidad'=>$id_localidad,            
            'id_departamento'=>$id_dpto            
        ));
                
        $result=$query->getSingleResult();

        
        return $result;

    }
       public function getLocalidadesDpto($id_dpto){
       
           return $this->getQueryLocalidadesDpto($id_dpto)->getResult();

       }
       public function getQueryLocalidadesDpto($id_dpto){

            $em= $this->getEntityManager();
            $query=$em->createQuery(
                    'SELECT l FROM 
                        Ministerio\SigesBundle\Entity\Localidades l
                        WHERE (l.c_departa= :id_departamento  )'
                    );
            $query->setParameters(array(
                'id_departamento'=>$id_dpto            
            ));
            return $query;
        }
  
}