<?php
/**
 * Created by PhpStorm.
 */

namespace App\BaseBundle\Filtro;

/*
filterscount:0
groupscount:0
pagenum:1
pagesize:10
recordstartindex:10
recordendindex:20
*/

/**
 * Class Filtro
 *
 * @package App\BaseBundle\Filtro
 */
class Filtro
{
    /**
     * @var number
     */
    private $pagenum;

    /**
     * @var number
     */
    private $pagesize;

    /**
     * @var string
     */
    private $sortdatafield;

    /**
     * @var string
     */
    private $sortorder;

    /**
     * @var array
     */
    private $data;

    /** @var  array */
    private $filter_fields;

    public function __construct()
    {
        $this->pagenum = 0;
        $this->pagesize = 10;
        $this->filter_fields = [];
    }

    /**
     * @return number
     */
    public function getPagenum()
    {
        return $this->pagenum;
    }

    /**
     * @param number $pagenum
     * @return Filtro
     */
    public function setPagenum($pagenum)
    {
        $this->pagenum = $pagenum;
        return $this;
    }

    /**
     * @return number
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * @param number $pagesize
     * @return Filtro
     */
    public function setPagesize($pagesize)
    {
        $this->pagesize = $pagesize;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortdatafield()
    {
        return $this->sortdatafield;
    }

    /**
     * @param string $sortdatafield
     * @return Filtro
     */
    public function setSortdatafield($sortdatafield)
    {
        $this->sortdatafield = $sortdatafield;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * @param string $sortorder
     * @return Filtro
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return Filtro
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getFilterFields()
    {
        return $this->filter_fields;
    }

    /**
     * @param array $filter_fields
     * @return Filtro
     */
    public function setFilterFields($filter_fields)
    {
        $this->filter_fields = $filter_fields;
        return $this;
    }

    public function getFirstResult()
    {
        return ($this->pagenum+1) * $this->pagesize;
    }

    public function __set($name, $value)
    {
        $this->filter_fields[$name] = $value;

        return $this;
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->filter_fields)){
            return $this->filter_fields[$name];
        } else {
            return false;
        }
    }
}