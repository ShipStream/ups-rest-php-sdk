<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsCOD extends \ArrayObject
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
     * For valid values refer to: Rating and Shipping COD Supported Countries or Territories in the Appendix.
     *
     * @var string
     */
    protected $cODFundsCode;
    /**
     * COD Amount container.
     *
     * @var PackageServiceOptionsCODCODAmount
     */
    protected $cODAmount;
    /**
     * For valid values refer to: Rating and Shipping COD Supported Countries or Territories in the Appendix.
     *
     * @return string
     */
    public function getCODFundsCode() : string
    {
        return $this->cODFundsCode;
    }
    /**
     * For valid values refer to: Rating and Shipping COD Supported Countries or Territories in the Appendix.
     *
     * @param string $cODFundsCode
     *
     * @return self
     */
    public function setCODFundsCode(string $cODFundsCode) : self
    {
        $this->initialized['cODFundsCode'] = true;
        $this->cODFundsCode = $cODFundsCode;
        return $this;
    }
    /**
     * COD Amount container.
     *
     * @return PackageServiceOptionsCODCODAmount
     */
    public function getCODAmount() : PackageServiceOptionsCODCODAmount
    {
        return $this->cODAmount;
    }
    /**
     * COD Amount container.
     *
     * @param PackageServiceOptionsCODCODAmount $cODAmount
     *
     * @return self
     */
    public function setCODAmount(PackageServiceOptionsCODCODAmount $cODAmount) : self
    {
        $this->initialized['cODAmount'] = true;
        $this->cODAmount = $cODAmount;
        return $this;
    }
}