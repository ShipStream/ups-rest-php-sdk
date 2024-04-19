<?php

namespace ShipStream\Ups\Api\Model;

class RateResultDisclaimer extends \ArrayObject
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
    * Disclaimer code. Valid values:
    - 01 = Taxes are included in the shipping cost and apply to the transportation charges but additional duties/taxes may apply and are not reflected in the total amount due.
    - 02 = Additional duties/taxes may apply and are not reflected in the total amount due.
    - 03 = Additional duties/taxes may apply and are not reflected in the total amount due.
    - 04 = Taxes were unable to be determined and may apply to the shipment.
    - 05 = Rate excludes VAT. Rate includes a fuel surcharge, but excludes taxes, duties and other charges that may apply to the shipment.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of Disclaimer.
     *
     * @var string
     */
    protected $description;
    /**
    * Disclaimer code. Valid values:
    - 01 = Taxes are included in the shipping cost and apply to the transportation charges but additional duties/taxes may apply and are not reflected in the total amount due.
    - 02 = Additional duties/taxes may apply and are not reflected in the total amount due.
    - 03 = Additional duties/taxes may apply and are not reflected in the total amount due.
    - 04 = Taxes were unable to be determined and may apply to the shipment.
    - 05 = Rate excludes VAT. Rate includes a fuel surcharge, but excludes taxes, duties and other charges that may apply to the shipment.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Disclaimer code. Valid values:
    - 01 = Taxes are included in the shipping cost and apply to the transportation charges but additional duties/taxes may apply and are not reflected in the total amount due.
    - 02 = Additional duties/taxes may apply and are not reflected in the total amount due.
    - 03 = Additional duties/taxes may apply and are not reflected in the total amount due.
    - 04 = Taxes were unable to be determined and may apply to the shipment.
    - 05 = Rate excludes VAT. Rate includes a fuel surcharge, but excludes taxes, duties and other charges that may apply to the shipment.
    
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
     * Description of Disclaimer.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of Disclaimer.
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