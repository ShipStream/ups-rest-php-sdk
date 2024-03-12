<?php

namespace ShipStream\Ups\Api\Model;

class CommodityNMFC extends \ArrayObject
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
     * Specifies the Commodity's NMFC prime code.  Required if NMFC Container is present.
     *
     * @var string
     */
    protected $primeCode;
    /**
     * Specifies the Commodity's NMFC sub code.  Needs to be provided when the SubCode associated with the PrimeCode is other than 00. UPS defaults the sub value to 00 if not provided. If provided the Sub Code should be associated with the PrimeCode of the NMFC.
     *
     * @var string
     */
    protected $subCode;
    /**
     * Specifies the Commodity's NMFC prime code.  Required if NMFC Container is present.
     *
     * @return string
     */
    public function getPrimeCode() : string
    {
        return $this->primeCode;
    }
    /**
     * Specifies the Commodity's NMFC prime code.  Required if NMFC Container is present.
     *
     * @param string $primeCode
     *
     * @return self
     */
    public function setPrimeCode(string $primeCode) : self
    {
        $this->initialized['primeCode'] = true;
        $this->primeCode = $primeCode;
        return $this;
    }
    /**
     * Specifies the Commodity's NMFC sub code.  Needs to be provided when the SubCode associated with the PrimeCode is other than 00. UPS defaults the sub value to 00 if not provided. If provided the Sub Code should be associated with the PrimeCode of the NMFC.
     *
     * @return string
     */
    public function getSubCode() : string
    {
        return $this->subCode;
    }
    /**
     * Specifies the Commodity's NMFC sub code.  Needs to be provided when the SubCode associated with the PrimeCode is other than 00. UPS defaults the sub value to 00 if not provided. If provided the Sub Code should be associated with the PrimeCode of the NMFC.
     *
     * @param string $subCode
     *
     * @return self
     */
    public function setSubCode(string $subCode) : self
    {
        $this->initialized['subCode'] = true;
        $this->subCode = $subCode;
        return $this;
    }
}