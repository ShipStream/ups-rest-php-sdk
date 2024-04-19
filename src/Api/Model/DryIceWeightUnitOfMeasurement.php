<?php

namespace ShipStream\Ups\Api\Model;

class DryIceWeightUnitOfMeasurement extends \ArrayObject
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
    * DryIce weight unit of measurement code. Valid values:
    - 00 = KG (Metric Unit of Measurements) or KGS
    - 01 = LB (English Unit of Measurements) or LBS  The following values are valid : 00, 01, KG, KGS, LBS.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description for unit of measurement for Dry Ice Weight.
     *
     * @var string
     */
    protected $description;
    /**
    * DryIce weight unit of measurement code. Valid values:
    - 00 = KG (Metric Unit of Measurements) or KGS
    - 01 = LB (English Unit of Measurements) or LBS  The following values are valid : 00, 01, KG, KGS, LBS.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * DryIce weight unit of measurement code. Valid values:
    - 00 = KG (Metric Unit of Measurements) or KGS
    - 01 = LB (English Unit of Measurements) or LBS  The following values are valid : 00, 01, KG, KGS, LBS.
    
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
     * Description for unit of measurement for Dry Ice Weight.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for unit of measurement for Dry Ice Weight.
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