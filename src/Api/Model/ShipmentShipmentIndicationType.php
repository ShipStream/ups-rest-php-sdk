<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipmentIndicationType extends \ArrayObject
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
    * Valid values:
    - '01' - Hold for Pickup at UPS Access Point aka Direct to Retail (D2R)
    - '02' - UPS Access Point™ Delivery aka Retail to Retail (R2R)  If '01' code is present indicates shipment will be send to Retail location where it is held to consignee to claim.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description for the code.
     *
     * @var string
     */
    protected $description;
    /**
    * Valid values:
    - '01' - Hold for Pickup at UPS Access Point aka Direct to Retail (D2R)
    - '02' - UPS Access Point™ Delivery aka Retail to Retail (R2R)  If '01' code is present indicates shipment will be send to Retail location where it is held to consignee to claim.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Valid values:
    - '01' - Hold for Pickup at UPS Access Point aka Direct to Retail (D2R)
    - '02' - UPS Access Point™ Delivery aka Retail to Retail (R2R)  If '01' code is present indicates shipment will be send to Retail location where it is held to consignee to claim.
    
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description for the code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for the code.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}