<?php

namespace ShipStream\Ups\Api\Model;

class SubMilestone extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The sub-milestone category.
     *
     * @var string
     */
    protected $category;
    /**
     * The sub-milestone category.
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * The sub-milestone category.
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
}