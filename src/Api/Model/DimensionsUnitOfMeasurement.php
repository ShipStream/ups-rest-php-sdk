<?php

namespace ShipStream\Ups\Api\Model;

class DimensionsUnitOfMeasurement extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Package dimensions measurement code. Valid codes: IN = Inches CM = Centimeters 00 = Metric Units Of Measurement 01 = English Units of Measurement	The unit of measurement must be valid for the Shipper country or territory. 
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * Description of the package dimensions measurement units.
     *
     * @var string
     */
    protected $description;
    /**
     * Package dimensions measurement code. Valid codes: IN = Inches CM = Centimeters 00 = Metric Units Of Measurement 01 = English Units of Measurement	The unit of measurement must be valid for the Shipper country or territory. 
     *
     * @return string
     */
    public function getUnitOfMeasurement() : string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Package dimensions measurement code. Valid codes: IN = Inches CM = Centimeters 00 = Metric Units Of Measurement 01 = English Units of Measurement	The unit of measurement must be valid for the Shipper country or territory. 
     *
     * @param string $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(string $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Description of the package dimensions measurement units.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the package dimensions measurement units.
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