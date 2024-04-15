<?php

namespace ShipStream\Ups\Api\Model;

class ExistingShipmentIDConfirmationNumber extends \ArrayObject
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
    * Container for the type of unique pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @var ConfirmationNumberType|null
    */
    protected $type;
    /**
    * The unique pickup confirmation number or BOLID value.
    Required only for Shipment Updates.
    *
    * @var string|null
    */
    protected $value;
    /**
    * Container for the type of unique pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @return ConfirmationNumberType|null
    */
    public function getType() : ?ConfirmationNumberType
    {
        return $this->type;
    }
    /**
    * Container for the type of unique pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @param ConfirmationNumberType|null $type
    *
    * @return self
    */
    public function setType(?ConfirmationNumberType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
    * The unique pickup confirmation number or BOLID value.
    Required only for Shipment Updates.
    *
    * @return string|null
    */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
    * The unique pickup confirmation number or BOLID value.
    Required only for Shipment Updates.
    *
    * @param string|null $value
    *
    * @return self
    */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}