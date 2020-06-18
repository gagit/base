<?php

/**
 * @author gabriel
 */

namespace App\BaseBundle\Entity ;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*@ORM\Table(name="departamentos")
*@ORM\Entity(repositoryClass="App\BaseBundle\Repository\DepartamentoRepository")
 */
class Departamento {
    

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
    protected $nombre_departamento;
    
    /**
    * @ORM\ManyToOne(targetEntity="Provincia")
    * @ORM\JoinColumn(name="id_provincia", referencedColumnName="id")
    */
    protected $provincia;
    
    
    public function __toString(){
        return $this->nombre_departamento;
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
     * Set nombre_departamento
     *
     * @param string $nombreDepartamento
     * @return Departamento
     */
    public function setNombreDepartamento($nombreDepartamento)
    {
        $this->nombre_departamento = $nombreDepartamento;
    
        return $this;
    }

    /**
     * Get nombre_departamento
     *
     * @return string 
     */
    public function getNombreDepartamento()
    {
        return $this->nombre_departamento;
    }

    /**
     * Set provincia
     *
     * @param \App\BaseBundle\Provincia $provincia
     * @return Departamento
     */
    public function setProvincia(\App\BaseBundle\Provincia $provincia = null)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return \App\BaseBundle\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}