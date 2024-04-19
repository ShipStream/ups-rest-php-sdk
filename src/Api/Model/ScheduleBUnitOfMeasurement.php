<?php

namespace ShipStream\Ups\Api\Model;

class ScheduleBUnitOfMeasurement extends \ArrayObject
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
    * The unit of measure indicated on the Export License. Enter an X if there is no unit of measure in the Schedule B Unit field.  Applies to EEI forms only. Required for the EEI form.
    
    Refer to ScheduleB Unit of Measure Codes in the Appendix for valid values.
    
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
    * The unit of measure indicated on the Export License. Enter an X if there is no unit of measure in the Schedule B Unit field.  Applies to EEI forms only. Required for the EEI form.
    
    Refer to ScheduleB Unit of Measure Codes in the Appendix for valid values.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The unit of measure indicated on the Export License. Enter an X if there is no unit of measure in the Schedule B Unit field.  Applies to EEI forms only. Required for the EEI form.
    
    Refer to ScheduleB Unit of Measure Codes in the Appendix for valid values.
    
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