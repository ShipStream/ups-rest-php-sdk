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
    * Container tag for the International forms image. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var FormImage|null
    */
    protected $image;
    /**
    * Container tag for the International forms image. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return FormImage|null
    */
    public function getImage() : ?FormImage
    {
        return $this->image;
    }
    /**
    * Container tag for the International forms image. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param FormImage|null $image
    *
    * @return self
    */
    public function setImage(?FormImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}