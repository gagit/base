<?php
/**
 * Created by PhpStorm.
 * User: cgarcia
 * Date: 30/12/15
 * Time: 11:54
 */

namespace Tarsio\Component\Core\Model\Traits;

use Doctrine\ORM\Mapping as ORM;

trait ModifiedTrait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", nullable=false)
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime", nullable=false)
     */
    private $modifiedAt;
    /**
     * Return the last user who modify the entity.
     * @return mixed
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Sets the last user who modified the entity.
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Return the last date where modify the entity.
     * @return \DateTime
     */
    public function getModifiedAt()
    {
            return $this->modifiedAt;
    }

    /**
     * Sets the last date where the entity is modified.
     * @return this
     */
    public function setModifiedAt(\DateTime $modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }
}
