<?php


namespace App\BaseBundle\Model;

/**
 * IContacto
 *
 */
interface IContacto
{

    /**
     * @return string
     */
    public function getTipoContacto();

    /**
     * @param string $tipoContacto
     * @return IContacto
     */
    public function setTipoContacto($tipoContacto);

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return IContacto
     */
    public function setValorContacto($valorContacto);

    /**
     * Get valor
     *
     * @return string
     */
    public function getValorContacto();


    /**
     * Set persona
     *
     * @param IPersona $persona
     *
     * @return IContacto
     */
    public function setPersona(IPersona $persona);

    /**
     * Get persona
     *
     * @return IPersona
     */
    public function getPersona();
}
