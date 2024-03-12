<?php

namespace ShipStream\Ups\Api\Model;

class PackageUPSPremier extends \ArrayObject
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
    * UPS Premier Category.  Valid values are 01,02,03 UPS Premier Silver -01
    UPS Premier Gold - 02
    UPS Premier Platinum - 03
    *
    * @var string
    */
    protected $category;
    /**
     * SensorID is RFID for UPS Premier Silver. SensorID is MeshID for UPS Premier Gold or UPS Premier Platinum Package.
     *
     * @var string
     */
    protected $sensorID;
    /**
     * Handling Instruction Container.
     *
     * @var UPSPremierHandlingInstructions
     */
    protected $handlingInstructions;
    /**
    * UPS Premier Category.  Valid values are 01,02,03 UPS Premier Silver -01
    UPS Premier Gold - 02
    UPS Premier Platinum - 03
    *
    * @return string
    */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
    * UPS Premier Category.  Valid values are 01,02,03 UPS Premier Silver -01
    UPS Premier Gold - 02
    UPS Premier Platinum - 03
    *
    * @param string $category
    *
    * @return self
    */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * SensorID is RFID for UPS Premier Silver. SensorID is MeshID for UPS Premier Gold or UPS Premier Platinum Package.
     *
     * @return string
     */
    public function getSensorID() : string
    {
        return $this->sensorID;
    }
    /**
     * SensorID is RFID for UPS Premier Silver. SensorID is MeshID for UPS Premier Gold or UPS Premier Platinum Package.
     *
     * @param string $sensorID
     *
     * @return self
     */
    public function setSensorID(string $sensorID) : self
    {
        $this->initialized['sensorID'] = true;
        $this->sensorID = $sensorID;
        return $this;
    }
    /**
     * Handling Instruction Container.
     *
     * @return UPSPremierHandlingInstructions
     */
    public function getHandlingInstructions() : UPSPremierHandlingInstructions
    {
        return $this->handlingInstructions;
    }
    /**
     * Handling Instruction Container.
     *
     * @param UPSPremierHandlingInstructions $handlingInstructions
     *
     * @return self
     */
    public function setHandlingInstructions(UPSPremierHandlingInstructions $handlingInstructions) : self
    {
        $this->initialized['handlingInstructions'] = true;
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }
}