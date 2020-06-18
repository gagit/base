<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="localidades")
*@ORM\Entity(repositoryClass="App\BaseBundle\Repository\LocalidadRepository")
 */
class Localidad {
    

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */    
    protected $id;
    
    /**
    * @ORM\Column(type="string", length=50)
    * @Assert\NotBlank() 
    * @Assert\Length(
    *  min="5",
    *  max="99"
    * ) 
    */
    protected $nombre_localidad;
    
    /**
    * @ORM\ManyToOne(targetEntity="Departamento")
    * @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
    */
    protected $departamento;
    

    
    
    public function __toString(){
        
        return $this->nombre_localidad;
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Localidad
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * Set nombre_localidad
     *
     * @param string $nombreLocalidad
     * @return Localidad
     */
    public function setNombreLocalidad($nombreLocalidad)
    {
        $this->nombre_localidad = $nombreLocalidad;
    
        return $this;
    }

    /**
     * Get nombre_localidad
     *
     * @return string 
     */
    public function getNombreLocalidad()
    {
        return $this->nombre_localidad;
    }

    /**
     * Set departamento
     *
     * @param \App\BaseBundle\Departamento $departamento
     * @return Localidad
     */
    public function setDepartamento(\App\BaseBundle\Departamento $departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \App\BaseBundle\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}