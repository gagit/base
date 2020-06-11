<?php

namespace App\BaseBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * IDomicilio

 */
interface IDomicilio
{


    /**
     * @return string
     */
    public function getTextoDomicilio();

    /**
     * @param string $textoDomicilio
     * @return IDomicilio
     */
    public function setTextoDomicilio($textoDomicilio);


    /**
     * @return string
     */
    public function getCalle();

    /**
     * @param string $calle
     * @return IDomicilio
     */
    public function setCalle($calle);

    /**
     * @return string
     */
    public function getNumero();

    /**
     * @param string $numero
     * @return IDomicilio
     */
    public function setNumero($numero);

    /**
     * @return int
     */
    public function getPiso();

    /**
     * @param int $piso
     * @return IDomicilio
     */
    public function setPiso($piso);

    /**
     * @return string
     */
    public function getDepto();

    /**
     * @param string $depto
     * @return IDomicilio
     */
    public function setDepto($depto);

    /**
     * @return string
     */
    public function getLocalidad();

    /**
     * @param string $localidad
     * @return IDomicilio
     */
    public function setLocalidad($localidad);

    /**
     * @return string
     */
    public function getDepartamento();

    /**
     * @param string $departamento
     * @return IDomicilio
     */
    public function setDepartamento($departamento);

    /**
     * @return string
     */
    public function getProvincia();

    /**
     * @param string $provincia
     * @return IDomicilio
     */
    public function setProvincia($provincia);

    /**
     * @return string
     */
    public function getCodigoPostal();


    /**
     * @param string $codigoPostal
     * @return IDomicilio
     */
    public function setCodigoPostal($codigoPostal);

    /**
     * @return string
     */
    public function getObservaciones();

    /**
     * @param string $observaciones
     * @return IDomicilio
     */
    public function setObservaciones($observaciones);


}