<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestPickupPiece extends \ArrayObject
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
     * Refer to Service Codes in the Appendix for valid values.
     *
     * @var string
     */
    protected $serviceCode;
    /**
    * Number of pieces to be picked up. 
    Max per service: 999
    *
    * @var string
    */
    protected $quantity;
    /**
    * The destination country code as defined by ISO-3166.
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @var string
    */
    protected $destinationCountryCode;
    /**
    * Container type. Valid values:
    - 01 = PACKAGE
    - 02 = UPS LETTER
    - 03 = PALLET
    
    Note: 03 is used for only WWEF services
    
    *
    * @var string
    */
    protected $containerCode;
    /**
     * Refer to Service Codes in the Appendix for valid values.
     *
     * @return string
     */
    public function getServiceCode() : string
    {
        return $this->serviceCode;
    }
    /**
     * Refer to Service Codes in the Appendix for valid values.
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode(string $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
    * Number of pieces to be picked up. 
    Max per service: 999
    *
    * @return string
    */
    public function getQuantity() : string
    {
        return $this->quantity;
    }
    /**
    * Number of pieces to be picked up. 
    Max per service: 999
    *
    * @param string $quantity
    *
    * @return self
    */
    public function setQuantity(string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
    * The destination country code as defined by ISO-3166.
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @return string
    */
    public function getDestinationCountryCode() : string
    {
        return $this->destinationCountryCode;
    }
    /**
    * The destination country code as defined by ISO-3166.
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @param string $destinationCountryCode
    *
    * @return self
    */
    public function setDestinationCountryCode(string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
    * Container type. Valid values:
    - 01 = PACKAGE
    - 02 = UPS LETTER
    - 03 = PALLET
    
    Note: 03 is used for only WWEF services
    
    *
    * @return string
    */
    public function getContainerCode() : string
    {
        return $this->containerCode;
    }
    /**
    * Container type. Valid values:
    - 01 = PACKAGE
    - 02 = UPS LETTER
    - 03 = PALLET
    
    Note: 03 is used for only WWEF services
    
    *
    * @param string $containerCode
    *
    * @return self
    */
    public function setContainerCode(string $containerCode) : self
    {
        $this->initialized['containerCode'] = true;
        $this->containerCode = $containerCode;
        return $this;
    }
}