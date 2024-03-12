<?php

namespace ShipStream\Ups\Api\Model;

class CN22FormCN22Content extends \ArrayObject
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
     * Total number of items associated with this content.  Required if the CN22 form container is present.
     *
     * @var string
     */
    protected $cN22ContentQuantity;
    /**
    * Detailed description of the content.
    
    If the combined MI package and CN22 label is requested, only the first 30 characters will appear on the combined label.  Required if the CN22 form container is present.
    *
    * @var string
    */
    protected $cN22ContentDescription;
    /**
     * Container for CN22 content weight.
     *
     * @var CN22ContentCN22ContentWeight
     */
    protected $cN22ContentWeight;
    /**
     * Total value of the items associated with this content.  Required if the CN22 form container is present.
     *
     * @var string
     */
    protected $cN22ContentTotalValue;
    /**
     * Currently only USD is supported.  Required if the CN22 form container is present.
     *
     * @var string
     */
    protected $cN22ContentCurrencyCode;
    /**
     * Country or Territory of Origin from where the CN22 contents originated.
     *
     * @var string
     */
    protected $cN22ContentCountryOfOrigin;
    /**
     * The tariff number associated with the CN22 contents.
     *
     * @var string
     */
    protected $cN22ContentTariffNumber;
    /**
     * Total number of items associated with this content.  Required if the CN22 form container is present.
     *
     * @return string
     */
    public function getCN22ContentQuantity() : string
    {
        return $this->cN22ContentQuantity;
    }
    /**
     * Total number of items associated with this content.  Required if the CN22 form container is present.
     *
     * @param string $cN22ContentQuantity
     *
     * @return self
     */
    public function setCN22ContentQuantity(string $cN22ContentQuantity) : self
    {
        $this->initialized['cN22ContentQuantity'] = true;
        $this->cN22ContentQuantity = $cN22ContentQuantity;
        return $this;
    }
    /**
    * Detailed description of the content.
    
    If the combined MI package and CN22 label is requested, only the first 30 characters will appear on the combined label.  Required if the CN22 form container is present.
    *
    * @return string
    */
    public function getCN22ContentDescription() : string
    {
        return $this->cN22ContentDescription;
    }
    /**
    * Detailed description of the content.
    
    If the combined MI package and CN22 label is requested, only the first 30 characters will appear on the combined label.  Required if the CN22 form container is present.
    *
    * @param string $cN22ContentDescription
    *
    * @return self
    */
    public function setCN22ContentDescription(string $cN22ContentDescription) : self
    {
        $this->initialized['cN22ContentDescription'] = true;
        $this->cN22ContentDescription = $cN22ContentDescription;
        return $this;
    }
    /**
     * Container for CN22 content weight.
     *
     * @return CN22ContentCN22ContentWeight
     */
    public function getCN22ContentWeight() : CN22ContentCN22ContentWeight
    {
        return $this->cN22ContentWeight;
    }
    /**
     * Container for CN22 content weight.
     *
     * @param CN22ContentCN22ContentWeight $cN22ContentWeight
     *
     * @return self
     */
    public function setCN22ContentWeight(CN22ContentCN22ContentWeight $cN22ContentWeight) : self
    {
        $this->initialized['cN22ContentWeight'] = true;
        $this->cN22ContentWeight = $cN22ContentWeight;
        return $this;
    }
    /**
     * Total value of the items associated with this content.  Required if the CN22 form container is present.
     *
     * @return string
     */
    public function getCN22ContentTotalValue() : string
    {
        return $this->cN22ContentTotalValue;
    }
    /**
     * Total value of the items associated with this content.  Required if the CN22 form container is present.
     *
     * @param string $cN22ContentTotalValue
     *
     * @return self
     */
    public function setCN22ContentTotalValue(string $cN22ContentTotalValue) : self
    {
        $this->initialized['cN22ContentTotalValue'] = true;
        $this->cN22ContentTotalValue = $cN22ContentTotalValue;
        return $this;
    }
    /**
     * Currently only USD is supported.  Required if the CN22 form container is present.
     *
     * @return string
     */
    public function getCN22ContentCurrencyCode() : string
    {
        return $this->cN22ContentCurrencyCode;
    }
    /**
     * Currently only USD is supported.  Required if the CN22 form container is present.
     *
     * @param string $cN22ContentCurrencyCode
     *
     * @return self
     */
    public function setCN22ContentCurrencyCode(string $cN22ContentCurrencyCode) : self
    {
        $this->initialized['cN22ContentCurrencyCode'] = true;
        $this->cN22ContentCurrencyCode = $cN22ContentCurrencyCode;
        return $this;
    }
    /**
     * Country or Territory of Origin from where the CN22 contents originated.
     *
     * @return string
     */
    public function getCN22ContentCountryOfOrigin() : string
    {
        return $this->cN22ContentCountryOfOrigin;
    }
    /**
     * Country or Territory of Origin from where the CN22 contents originated.
     *
     * @param string $cN22ContentCountryOfOrigin
     *
     * @return self
     */
    public function setCN22ContentCountryOfOrigin(string $cN22ContentCountryOfOrigin) : self
    {
        $this->initialized['cN22ContentCountryOfOrigin'] = true;
        $this->cN22ContentCountryOfOrigin = $cN22ContentCountryOfOrigin;
        return $this;
    }
    /**
     * The tariff number associated with the CN22 contents.
     *
     * @return string
     */
    public function getCN22ContentTariffNumber() : string
    {
        return $this->cN22ContentTariffNumber;
    }
    /**
     * The tariff number associated with the CN22 contents.
     *
     * @param string $cN22ContentTariffNumber
     *
     * @return self
     */
    public function setCN22ContentTariffNumber(string $cN22ContentTariffNumber) : self
    {
        $this->initialized['cN22ContentTariffNumber'] = true;
        $this->cN22ContentTariffNumber = $cN22ContentTariffNumber;
        return $this;
    }
}