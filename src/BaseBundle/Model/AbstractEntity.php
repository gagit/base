<?php

namespace App\BaseBundle\Model;

/**
 * Abstract Model
 */
abstract class AbstractEntity implements Identificable
{
    use Traits\IdTrait;
}