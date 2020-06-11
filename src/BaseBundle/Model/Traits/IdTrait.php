<?php
/**
 * Created by PhpStorm.
 */

namespace App\BaseBundle\Model\Traits;


trait IdTrait
{
    /**
     * @var integer
     *
     * Model id
     */
    protected $id;
    /**
     * Set id
     *
     * @param mixed $id Model Id
     *
     * @return $this self Object
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Get id
     *
     * @return mixed Model identifier
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * String representation of an entity
     *
     * @return string String representation of current entity
     */
    public function __toString()
    {
        return (string) $this->id;
    }
}