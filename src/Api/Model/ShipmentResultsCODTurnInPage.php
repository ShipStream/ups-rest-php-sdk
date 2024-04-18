<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsCODTurnInPage extends \ArrayObject
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
     * The container of the image for COD Turn In Page.
     *
     * @var CODTurnInPageImage
     */
    protected $image;
    /**
     * The container of the image for COD Turn In Page.
     *
     * @return CODTurnInPageImage
     */
    public function getImage() : CODTurnInPageImage
    {
        return $this->image;
    }
    /**
     * The container of the image for COD Turn In Page.
     *
     * @param CODTurnInPageImage $image
     *
     * @return self
     */
    public function setImage(CODTurnInPageImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}