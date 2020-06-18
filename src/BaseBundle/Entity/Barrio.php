<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="barrios")
*@ORM\Entity(repositoryClass="App\BaseBundle\Repository\BarrioRepository")
 */
class Barrio {
    

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
    protected $nombre_barrio;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\BaseBundle\Entity\Localidad")
    * @ORM\JoinColumn(name="id_localidad", referencedColumnName="id")
    */
    protected $localidad;
    
    
    public function __toString() {
        return $this->nombre_barrio;
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
     * Set nombre_barrio
     *
     * @param string $nombreBarrio
     * @return Barrio
     */
    public function setNombreBarrio($nombreBarrio)
    {
        $this->nombre_barrio = $nombreBarrio;
    
        return $this;
    }

    /**
     * Get nombre_barrio
     *
     * @return string 
     */
    public function getNombreBarrio()
    {
        return $this->nombre_barrio;
    }

    /**
     * Set localidad
     *
     * @param \App\BaseBundle\Entity\Localidad $localidad
     * @return Barrio
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