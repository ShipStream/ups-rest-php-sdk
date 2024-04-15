<?php

namespace ShipStream\Ups\Api\Model;

class EMailInformationEMailType extends \ArrayObject
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
    * The code associated with the email type for the shipment service options.
    Valid values:
    001- Ship Notification
    002- Delivery Notification
    003 � Exception Notification
    004 � BOL/Labels(Ground Only)
    *
    * @var string|null
    */
    protected $code;
    /**
     * A text description of the code for the email type associated with the shipment service options.
     *
     * @var string|null
     */
    protected $description;
    /**
    * The code associated with the email type for the shipment service options.
    Valid values:
    001- Ship Notification
    002- Delivery Notification
    003 � Exception Notification
    004 � BOL/Labels(Ground Only)
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * The code associated with the email type for the shipment service options.
    Valid values:
    001- Ship Notification
    002- Delivery Notification
    003 � Exception Notification
    004 � BOL/Labels(Ground Only)
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * A text description of the code for the email type associated with the shipment service options.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A text description of the code for the email type associated with the shipment service options.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}