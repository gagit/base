<?php

namespace App\BaseBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * IPersona
 */
interface IPersona
{
   /**
     * @param string $denominacion
     *
     * @return Persona
     */
    public function setDenominacion($denominacion);

    /**
     *
     * @return string
     */
    public function getDenominacion();

    /**
     *
     * @param string setTipoIdentificacion
     */
    public function setTipoIdentificacion($setTipoIdentificacion);

    /**
     *
     * @return string
     */
    public function getTipoIdentificacion();

    /**
     *
     * @param string $numeroIdentificacion
     *
     * @return Persona
     */
    public function setNumeroIdentificacion($numeroIdentificacion);

    /**
     *
     * @return string
     */
    public function getNumeroIdentificacion();

    /**
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Persona
     */
    public function setFechaNacimiento($fechaNacimiento);

    /**
      *
     * @return \DateTime
     */
    public function getFechaNacimiento();

    /**
     * @return ArrayCollection
     */
    public function getContactos();

    /**
     * @param ArrayCollection $contactos
     * @return Persona
     */
    public function setContactos($contactos);

    /**
     * @param Contacto $contacto
     * @return $this
     */
    public function addContacto(IContacto $contacto);

    /**
     * @param Contacto $contacto
     * @return $this
     */
    public function removeContacto(IContacto $contacto);

    /**
     * @return ArrayCollection
     */
    public function getDomicilios();

    /**
     * @param ArrayCollection $domicilios
     * @return Persona
     */
    public function setDomicilios(ArrayCollection $domicilios);

    /**
     * @param Domicilio $domicilio
     * @return $this
     */
    public function addDomicilio(IDomicilio $domicilio);


    /**
     * @param Domicilio $domicilio
     * @return $this
     */
    public function removeDomicilio(IDomicilio $domicilio);

}
