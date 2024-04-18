<?php

namespace ShipStream\Ups\Api\Model;

class PackageWeightUnitOfMeasurement extends \ArrayObject
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
    * Package weight unit of measurement code.
    
    Valid values:
    - LBS = Pounds
    - KGS = Kilograms
    - OZS = Ounces
    
    Unit of Measurement "OZS" is the only valid UOM for some of the Mail Innovations Forward and Worldwide Economy DDU Shipments.
    
    Please refer to Appendix for more details regarding the valid combination of Mail Innovation Forward Shipment services, Package Type and Unit of Measurement.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the unit of measurement for package weight.
     *
     * @var string
     */
    protected $description;
    /**
    * Package weight unit of measurement code.
    
    Valid values:
    - LBS = Pounds
    - KGS = Kilograms
    - OZS = Ounces
    
    Unit of Measurement "OZS" is the only valid UOM for some of the Mail Innovations Forward and Worldwide Economy DDU Shipments.
    
    Please refer to Appendix for more details regarding the valid combination of Mail Innovation Forward Shipment services, Package Type and Unit of Measurement.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Package weight unit of measurement code.
    
    Valid values:
    - LBS = Pounds
    - KGS = Kilograms
    - OZS = Ounces
    
    Unit of Measurement "OZS" is the only valid UOM for some of the Mail Innovations Forward and Worldwide Economy DDU Shipments.
    
    Please refer to Appendix for more details regarding the valid combination of Mail Innovation Forward Shipment services, Package Type and Unit of Measurement.
    
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
     * Description of the unit of measurement for package weight.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the unit of measurement for package weight.
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