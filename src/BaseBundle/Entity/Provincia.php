<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="provincias")
*@ORM\Entity(repositoryClass="App\BaseBundle\Repository\ProvinciaRepository")
 */
class Provincia{
    

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
    protected $nombre;
    
    
    /**
    * @ORM\ManyToOne(targetEntity="Pais")
    * @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
    */
    protected $pais;
    
  


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
     * Set nombre
     *
     * @param string $nombre
     * @return Provincia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set pais
     *
     * @param \App\BaseBundle\Pais $pais
     * @return Provincia
     */
    public function setPais(\App\BaseBundle\Pais $pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return \App\BaseBundle\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }
}