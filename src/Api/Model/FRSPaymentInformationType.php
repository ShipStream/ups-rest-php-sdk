<?php

namespace ShipStream\Ups\Api\Model;

class FRSPaymentInformationType extends \ArrayObject
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
    * Valid codes:
    - 01 = Prepaid
    - 02 = FreightCollect
    - 03 = ThirdParty
    
    *
    * @var string
    */
    protected $code;
    /**
     * Specifies the description for Ground Freight Pricing payment type.
     *
     * @var string
     */
    protected $description;
    /**
    * Valid codes:
    - 01 = Prepaid
    - 02 = FreightCollect
    - 03 = ThirdParty
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Valid codes:
    - 01 = Prepaid
    - 02 = FreightCollect
    - 03 = ThirdParty
    
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
     * Specifies the description for Ground Freight Pricing payment type.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the description for Ground Freight Pricing payment type.
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