<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="paises")
*@ORM\Entity(repositoryClass="App\BaseBundle\Repository\PaisRepository")
 */
class Pais {
    

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */    
    protected $id;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=false)
    * @Assert\NotBlank() 
    * @Assert\Length(
    *  min="5",
    *  max="99"
    * ) 
     * 
    */
    protected $nombre_pais;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\BaseBundle\Entity\Estado")
    * @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
    */  
    protected $estado;
    public function __toString() {
        return $this->nombre_pais;
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
     * Set nombre_pais
     *
     * @param string $nombrePais
     * @return Pais
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombre_pais = $nombrePais;
    
        return $this;
    }

    /**
     * Get nombre_pais
     *
     * @return string 
     */
    public function getNombrePais()
    {
        return $this->nombre_pais;
    }

    /**
     * Set estado
     *
     * @param \App\BaseBundle\Entity\Estado $estado
     * @return Pais
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