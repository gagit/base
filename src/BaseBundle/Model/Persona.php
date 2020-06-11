<?php

namespace App\BaseBundle\Model;

use App\BaseBundle\Model\AbstractEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Intl\Exception\NotImplementedException;
use Symfony\Component\Validator\Constraints as Assert;


abstract class Persona extends AbstractEntity implements IPersonaFisica
{

    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=100, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(max=100)
     */
    protected $apellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=100, nullable=true)
     * @Assert\Length(max=100)
     */
    protected $apellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max=100)
     */
    protected $nombres;

    /**
     * @var TipoIdentificacion
     *
     * @ORM\ManyToOne(targetEntity="BitLogic\PersonaBundle\Entity\TipoIdentificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_documento_id", referencedColumnName="id")
     * })
     */
    protected $tipoIdentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=20, nullable=true)
     * @Assert\Length(max=20)
     */
    protected $numeroIdentificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     * @Assert\Date()
     */
    protected $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", nullable=true)
     */
    protected $sexo;

//    /**
//     * @var ArrayCollection
//     *
//     * @ORM\OneToMany(targetEntity="BitLogic\PersonaBundle\Entity\Contacto",
//     *     mappedBy="persona",
//     *     cascade={"persist", "remove"},
//     *     orphanRemoval=true)
//     */
    protected $contactos;

//    /**
//     * @var ArrayCollection
//     *
//     * @ORM\OneToMany(targetEntity="BitLogic\PersonaBundle\Entity\Domicilio",
//     *     mappedBy="persona",
//     *     cascade={"persist", "remove"},
//     *     orphanRemoval=true)
//     */
    protected $domicilios;

    public function __construct()
    {
        parent::__construct();
        $this->contactos = new ArrayCollection();
        $this->domicilios = new ArrayCollection();
    }


    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     *
     * @return Persona
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = strtoupper(trim($apellidoPaterno));

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     *
     * @return Persona
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = strtoupper(trim($apellidoMaterno));

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Persona
     */
    public function setNombres($nombres)
    {
        $this->nombres = strtoupper(trim($nombres));

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoIdentificacion
     *
     * @return Persona
     */
    public function setTipoIdentificacion($tipoIdentificacion)
    {
        $this->tipoIdentificacion = $tipoIdentificacion;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string
     */
    public function getTipoIdentificacion()
    {
        return $this->tipoIdentificacion;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroIdentificacion
     *
     * @return Persona
     */
    public function setNumeroIdentificacion($numeroIdentificacion)
    {
        $this->numeroIdentificacion = trim($numeroIdentificacion);

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string
     */
    public function getNumeroIdentificacion()
    {
        return $this->numeroIdentificacion;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Persona
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set sexo
     *
     * @param boolean $sexo
     *
     * @return Persona
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return boolean
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @return ArrayCollection
     */
    public function getContactos()
    {
        return $this->contactos;
    }

    /**
     * @param ArrayCollection $contactos
     * @return Persona
     */
    public function setContactos($contactos)
    {
        $this->contactos = $contactos;
        return $this;
    }

    /**
     * @param Contacto $contacto
     * @return $this
     */
    public function addContacto(IContacto $contacto)
    {
        $contacto->setPersona($this);
        $this->contactos->add($contacto);

        return $this;
    }

    /**
     * @param Contacto $contacto
     * @return $this
     */
    public function removeContacto(IContacto $contacto)
    {
        $contacto->setPersona(null);
        $this->contactos->removeElement($contacto);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getDomicilios()
    {
        return $this->domicilios;
    }

    /**
     * @param ArrayCollection $domicilios
     * @return Persona
     */
    public function setDomicilios(ArrayCollection $domicilios)
    {
        $this->domicilios = $domicilios;
        return $this;
    }

    /**
     * @param Domicilio $domicilio
     * @return $this
     */
    public function addDomicilio(IDomicilio $domicilio)
    {
        $domicilio->setPersona($this);
        $this->domicilios->add($domicilio);

        return $this;
    }

    /**
     * @param Domicilio $domicilio
     * @return $this
     */
    public function removeDomicilio(IDomicilio $domicilio)
    {
        $domicilio->setPersona(null);
        $this->domicilios->removeElement($domicilio);

        return $this;
    }

    /**
     * @param string $denominacion
     *
     * @return \BitLogic\PersonaBundle\Model\Persona
     */
    public function setDenominacion($denominacion)
    {
        throw new NotImplementedException();
    }

    /**
     *
     * @return string
     */
    public function getDenominacion()
    {
        return $this->nombres.', '.$this->apellidoPaterno;
    }

}
