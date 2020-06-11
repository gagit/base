<?php


namespace App\BaseBundle\Model;

/**
 * Interface Identificable
 *
 * Getter and setter of if for entities.
 *
 */
interface Identificable {

    /**
     * Return the id of the entity
     * @return mixed
     */
    public function getId();

    /**
     * Sets the id of the entity
     * @param $id
     * @return mixed
     */
    public function setId($id);
}