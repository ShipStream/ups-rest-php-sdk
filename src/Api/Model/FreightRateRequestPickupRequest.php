<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestPickupRequest extends \ArrayObject
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
    * Date of the Pickup.
    Format: YYYYMMDD
    *
    * @var string
    */
    protected $pickupDate;
    /**
     * Additional Pickup comments or instructions.
     *
     * @var string
     */
    protected $additionalComments;
    /**
    * Date of the Pickup.
    Format: YYYYMMDD
    *
    * @return string
    */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
    * Date of the Pickup.
    Format: YYYYMMDD
    *
    * @param string $pickupDate
    *
    * @return self
    */
    public function setPickupDate(string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Additional Pickup comments or instructions.
     *
     * @return string
     */
    public function getAdditionalComments() : string
    {
        return $this->additionalComments;
    }
    /**
     * Additional Pickup comments or instructions.
     *
     * @param string $additionalComments
     *
     * @return self
     */
    public function setAdditionalComments(string $additionalComments) : self
    {
        $this->initialized['additionalComments'] = true;
        $this->additionalComments = $additionalComments;
        return $this;
    }
}