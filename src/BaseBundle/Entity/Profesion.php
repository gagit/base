<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="profesiones")
*@ORM\Entity
 */
class Profesion {
    

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */    
    protected $id;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=false)
    * @Assert\NotNull()
    */
    protected $nombre_profesion;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\BaseBundle\Entity\Estado")
    * @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
    */  
    protected $estado;
    

 public function __toString() {
     return $this->nombre_profesion;
 }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre_profesion
     *
     * @param string $nombreProfesion
     * @return Profesion
     */
    public function setNombreProfesion($nombreProfesion)
    {
        $this->nombre_profesion = $nombreProfesion;
    
        return $this;
    }

    /**
     * Get nombre_profesion
     *
     * @return string 
     */
    public function getNombreProfesion()
    {
        return $this->nombre_profesion;
    }

    /**
     * Set estado
     *
     * @param \App\BaseBundle\Entity\Estado $estado
     * @return Profesion
     */
    public function setEstado(\App\BaseBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \App\BaseBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}