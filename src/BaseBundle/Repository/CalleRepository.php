<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Repository ;

use Doctrine\ORM\EntityRepository;


class CalleRepository extends EntityRepository{
    
    public function getQueryTodasCalles(){
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT c,l,d FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    LEFT JOIN c.c_locali l
                    LEFT JOIN c.c_departa d
                    ORDER BY d.c_departa,l.c_localid DESC,c.n_calle ASC ');
        return $query; 
    }
    public function getTodasCalles() {
        return $this->getQueryTodasCalles()->getResult();
    }

    //-----------
    public function getQueryCallesParams($params,$valores) {
        
        
        $em= $this->getEntityManager();
        $string_query='SELECT c,l,d FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    LEFT JOIN c.c_locali l
                    LEFT JOIN c.c_departa d
                    WHERE ';
        $where="";
        
        if($params != null){
            for($i=0;$i<count($params);$i++){
                $where.=$params[$i].' AND ';
            }
            $where =  substr($where, 0, strlen($where)-4);
            $string_query.=$where.' ORDER BY d.c_departa,l.c_localid DESC,c.n_calle ASC';
            
        }else{
          
            $string_query='SELECT c,l,d FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    LEFT JOIN c.c_locali l
                    LEFT JOIN c.c_departa d
                    ORDER BY d.c_departa,l.c_localid DESC,c.n_calle ASC ';

        }
        
        $query=$em->createQuery($string_query);
        $query->setParameters($valores);
        return  $query;
    }
    public function getCallesParams($params,$valores){
        return $this->getQueryCallesParams($params,$valores)->getResult();
    }

    //-----------
    public function getCallesLocalidad($id_dpto,$id_localidad) {
       return $this->getQueryCallesLocalidad($id_dpto, $id_localidad)->getResult();
    }
    public function getQueryCallesLocalidad($id_dpto,$id_localidad){
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT c,l FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    LEFT JOIN c.c_locali l
                    WHERE l.c_localid = :idLoc AND l.c_departa = :idDepto
                    ORDER BY c.n_calle ');
        

        $query->setParameters(array(
            'idDepto'=> $id_dpto,
            'idLoc'=> $id_localidad
        ));
        return $query;
    }

    //-------------------------
    public function getInterseccionesCalle($id_calle) {
        return $this->getQueryInterseccionesCalle($id_calle)->getResult();
    }
    public function getQueryInterseccionesCalle($id_calle) {
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT z,c FROM
                    Ministerio\SigesBundle\Entity\Zonas z 
                    LEFT JOIN z.id_inter1 c
                    WHERE z.id_inter1 = :idCalle
                    ORDER BY z.inicio desc');
        $query->setParameters(array(
            'idCalle'=> $id_calle
        ));
        return $query;
    }

    //-------------------------
    public function getCalles() {
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT c FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    where c.c_locali=1
                    ORDER BY c.n_calle DESC ');
        return $query->getResult();
    }
    public function getCalle($id) {
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT c FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    WHERE c.id_calle = :id ');
        $query->setParameters(array(
            'id'=> $id
        ));
        return $query->getResult();
    }
    //-----------------
    public function getCalleXNombreDptoLoc($nombre,$id_dpto,$id_localidad) {
        return $this->getQueryCalleXNombreDeptoLoc($nombre, $id_dpto, $id_localidad)->getResult();
    }
    
    public function getQueryCalleXNombreDeptoLoc($nombre,$id_dpto,$id_localidad){
        $em = $this->getEntityManager();
        $query=$em->createQuery(
                'SELECT c,l FROM 
                    Ministerio\SigesBundle\Entity\Calles c 
                    LEFT JOIN c.c_locali l
                    WHERE l.c_localid = :idLoc AND l.c_departa = :idDepto AND c.n_calle = :nombre_calle');
        

        $query->setParameters(array(
            'idDepto'=> $id_dpto,
            'idLoc'=> $id_localidad,
            'nombre_calle'=> strtoupper($nombre)
        ));
        return $query;
    }
    //---------------------------
}