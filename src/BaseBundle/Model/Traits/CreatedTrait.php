<?php
/**
 * Created by PhpStorm.
 * User: cgarcia
 * Date: 30/12/15
 * Time: 11:54
 */

namespace Tarsio\Component\Core\Model\Traits;

use Doctrine\ORM\Mapping as ORM;

trait CreatedTrait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;



    /**
     * Return the last user who modify the entity.
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets the last user who created the entity.
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Return the last date where modify the entity.
     * @return \DateTime
     */
    public function getCreatedAt()
    {
            return $this->createdAt;
    }

    /**
     * Sets the last date where the entity is created.
     * @return this
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
