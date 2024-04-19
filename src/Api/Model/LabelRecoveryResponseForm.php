<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseForm extends \ArrayObject
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
     * @var LabelRecoveryFormImage
     */
    protected $image;
    /**
     * Container tag for the International Forms image.
     *
     * @return LabelRecoveryFormImage
     */
    public function getImage() : LabelRecoveryFormImage
    {
        return $this->image;
    }
    /**
     * Container tag for the International Forms image.
     *
     * @param LabelRecoveryFormImage $image
     *
     * @return self
     */
    public function setImage(LabelRecoveryFormImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}