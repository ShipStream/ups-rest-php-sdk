<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsDisclaimer extends \ArrayObject
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
     * Code representing type of Disclaimer.   Refer to Disclaimer Codes and Messages in the Appendix for various disclaimers that would be possible for a given shipment.
     *
     * @var string
     */
    protected $code;
    /**
    * Disclaimer description.   This field would be returned only if TaxInformationIndicator is present in a request.
    
    Refer to Disclaimer Codes and Messages in the Appendix for various disclaimers that would be possible for a given shipment.
    *
    * @var string
    */
    protected $description;
    /**
     * Code representing type of Disclaimer.   Refer to Disclaimer Codes and Messages in the Appendix for various disclaimers that would be possible for a given shipment.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code representing type of Disclaimer.   Refer to Disclaimer Codes and Messages in the Appendix for various disclaimers that would be possible for a given shipment.
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
    * Disclaimer description.   This field would be returned only if TaxInformationIndicator is present in a request.
    
    Refer to Disclaimer Codes and Messages in the Appendix for various disclaimers that would be possible for a given shipment.
    *
    * @return string
    */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
    * Disclaimer description.   This field would be returned only if TaxInformationIndicator is present in a request.
    
    Refer to Disclaimer Codes and Messages in the Appendix for various disclaimers that would be possible for a given shipment.
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