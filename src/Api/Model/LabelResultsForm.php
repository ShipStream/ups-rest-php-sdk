<?php

namespace ShipStream\Ups\Api\Model;

class LabelResultsForm extends \ArrayObject
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
     * Container tag for the International Forms image.
     *
     * @var LRFormImage|null
     */
    protected $image;
    /**
     * Container tag for the International Forms image.
     *
     * @return LRFormImage|null
     */
    public function getImage() : ?LRFormImage
    {
        return $this->image;
    }
    /**
     * Container tag for the International Forms image.
     *
     * @param LRFormImage|null $image
     *
     * @return self
     */
    public function setImage(?LRFormImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}