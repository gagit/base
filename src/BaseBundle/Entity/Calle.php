<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="calles")
*@ORM\Entity(repositoryClass="App\BaseBundle\Repository\CalleRepository")
 */
class Calle{
    

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */    
    protected $id;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank() 
    * @Assert\Length(
    *  min="5",
    *  max="99"
    * ) 
    */
    protected $nombre_calle;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\BaseBundle\Entity\Localidad")
    * @ORM\JoinColumn(name="id_localidad", referencedColumnName="id")
    */
    protected $localidad;
    
    
    /**
    * @ORM\Column(type="string", length=1)
    */
    protected $carga_en_of;
    
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */
    protected $fecha_creacion;
    
        
    public function __toString() {
        if($this->nombre_calle!=null && strlen($this->nombre_calle)>0)
           return $this->nombre_calle;
        else
            return "Sin nombre";
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
     * Set nombre_calle
     *
     * @param string $nombreCalle
     * @return Calle
     */
    public function setNombreCalle($nombreCalle)
    {
        $this->nombre_calle = $nombreCalle;
    
        return $this;
    }

    /**
     * Get nombre_calle
     *
     * @return string 
     */
    public function getNombreCalle()
    {
        return $this->nombre_calle;
    }

    /**
     * Set carga_en_of
     *
     * @param string $cargaEnOf
     * @return Calle
     */
    public function setCargaEnOf($cargaEnOf)
    {
        $this->carga_en_of = $cargaEnOf;
    
        return $this;
    }

    /**
     * Get carga_en_of
     *
     * @return string 
     */
    public function getCargaEnOf()
    {
        return $this->carga_en_of;
    }

    /**
     * Set fecha_creacion
     *
     * @param \DateTime $fechaCreacion
     * @return Calle
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fecha_creacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fecha_creacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set localidad
     *
     * @param \App\BaseBundle\Entity\Localidad $localidad
     * @return Calle
     */
    public function setLocalidad(\App\BaseBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return \App\BaseBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }
}