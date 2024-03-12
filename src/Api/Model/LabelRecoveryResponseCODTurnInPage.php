<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseCODTurnInPage extends \ArrayObject
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
     * Container for COD Turnin Page Image.
     *
     * @var LRCODTurnInPageImage
     */
    protected $image;
    /**
     * Container for COD Turnin Page Image.
     *
     * @return LRCODTurnInPageImage
     */
    public function getImage() : LRCODTurnInPageImage
    {
        return $this->image;
    }
    /**
     * Container for COD Turnin Page Image.
     *
     * @param LRCODTurnInPageImage $image
     *
     * @return self
     */
    public function setImage(LRCODTurnInPageImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}