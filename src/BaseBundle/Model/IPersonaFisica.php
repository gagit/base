<?php

namespace App\BaseBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * IPersona
 */
interface IPersonaFisica extends IPersona
{


    /**
     * @param string $apellidoPaterno
     *
     * @return Persona
     */
    public function setApellidoPaterno($apellidoPaterno);

    /**
     *
     * @return string
     */
    public function getApellidoPaterno();

    /**
     *
     * @param string $apellidoMaterno
     *
     * @return Persona
     */
    public function setApellidoMaterno($apellidoMaterno);

    /**
     *
     * @return string
     */
    public function getApellidoMaterno();

    /**
     *
     * @param string $nombres
     *
     * @return Persona
     */
    public function setNombres($nombres);

    /**
     *
     * @return string
     */
    public function getNombres();

    /**
     *
     * @param string $tipoDocumento
     */
    public function setTipoIdentificacion($tipoDocumento);

    /**
     *
     * @return string
     */
    public function getTipoIdentificacion();

    /**
     *
     * @param string $numeroDocumento
     *
     * @return Persona
     */
    public function setNumeroIdentificacion($numeroDocumento);

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
     *
     * @param boolean $sexo
     *
     * @return Persona
     */
    public function setSexo($sexo);

    /**
     *
     * @return boolean
     */
    public function getSexo();


}
