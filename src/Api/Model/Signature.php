<?php

namespace ShipStream\Ups\Api\Model;

class Signature extends \ArrayObject
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
     * image
     *
     * @var string|null
     */
    protected $image;
    /**
     * image
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * image
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}