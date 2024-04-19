<?php

namespace ShipStream\Ups\Api\Model;

class ProductWeightUnitOfMeasurement extends \ArrayObject
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
    * Code for unit of Measurement of weight.  Applies to CO and EEI forms only.  Valid values:
    - KGS
    - LBS
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the Unit of Measure.
     *
     * @var string
     */
    protected $description;
    /**
    * Code for unit of Measurement of weight.  Applies to CO and EEI forms only.  Valid values:
    - KGS
    - LBS
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code for unit of Measurement of weight.  Applies to CO and EEI forms only.  Valid values:
    - KGS
    - LBS
    
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
     * Description of the Unit of Measure.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the Unit of Measure.
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