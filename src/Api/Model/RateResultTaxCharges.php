<?php

namespace ShipStream\Ups\Api\Model;

class RateResultTaxCharges extends \ArrayObject
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
    * Type of Tax code. 
    Valid values: ALV, BTW, DDS, DDV, DPH, FPA, GST, IVA, IVA1, IVA2, IVA3, KM, MOMS, MWST, PDV, PST, PVM, PVN, QST, TVA, VAT, VSK.
    *
    * @var string
    */
    protected $type;
    /**
     * Monetary value of the tax.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
    * Type of Tax code. 
    Valid values: ALV, BTW, DDS, DDV, DPH, FPA, GST, IVA, IVA1, IVA2, IVA3, KM, MOMS, MWST, PDV, PST, PVM, PVN, QST, TVA, VAT, VSK.
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * Type of Tax code. 
    Valid values: ALV, BTW, DDS, DDV, DPH, FPA, GST, IVA, IVA1, IVA2, IVA3, KM, MOMS, MWST, PDV, PST, PVM, PVN, QST, TVA, VAT, VSK.
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Monetary value of the tax.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * Monetary value of the tax.
     *
     * @param string $monetaryValue
     *
     * @return self
     */
    public function setMonetaryValue(string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
}