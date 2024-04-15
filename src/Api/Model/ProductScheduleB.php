<?php

namespace ShipStream\Ups\Api\Model;

class ProductScheduleB extends \ArrayObject
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
     * A unique 10-digit commodity classification code for the item being exported. (To classify a commodity access the following Web page: http://www.census.gov/foreign-trade/schedules/b/#search).  Applies to EEI forms only. Has to be 10 characters.
     *
     * @var string|null
     */
    protected $number;
    /**
     * The count of how many Schedule B units of the current good are in the shipment (EEI only). For example, if the Schedule B unit of measure is dozens and eight dozen, is being shipped, indicate 8 in this field.  Applies to EEI forms only. Conditionally required for EEI forms if ScheduleB UnitOfMeasurement is not X. Should be Numeric. Valid characters are 0 -9.
     *
     * @var list<string>|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var list<ScheduleBUnitOfMeasurement>|null
     */
    protected $unitOfMeasurement;
    /**
     * A unique 10-digit commodity classification code for the item being exported. (To classify a commodity access the following Web page: http://www.census.gov/foreign-trade/schedules/b/#search).  Applies to EEI forms only. Has to be 10 characters.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * A unique 10-digit commodity classification code for the item being exported. (To classify a commodity access the following Web page: http://www.census.gov/foreign-trade/schedules/b/#search).  Applies to EEI forms only. Has to be 10 characters.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The count of how many Schedule B units of the current good are in the shipment (EEI only). For example, if the Schedule B unit of measure is dozens and eight dozen, is being shipped, indicate 8 in this field.  Applies to EEI forms only. Conditionally required for EEI forms if ScheduleB UnitOfMeasurement is not X. Should be Numeric. Valid characters are 0 -9.
     *
     * @return list<string>|null
     */
    public function getQuantity() : ?array
    {
        return $this->quantity;
    }
    /**
     * The count of how many Schedule B units of the current good are in the shipment (EEI only). For example, if the Schedule B unit of measure is dozens and eight dozen, is being shipped, indicate 8 in this field.  Applies to EEI forms only. Conditionally required for EEI forms if ScheduleB UnitOfMeasurement is not X. Should be Numeric. Valid characters are 0 -9.
     *
     * @param list<string>|null $quantity
     *
     * @return self
     */
    public function setQuantity(?array $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<ScheduleBUnitOfMeasurement>|null
     */
    public function getUnitOfMeasurement() : ?array
    {
        return $this->unitOfMeasurement;
    }
    /**
     * 
     *
     * @param list<ScheduleBUnitOfMeasurement>|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?array $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}