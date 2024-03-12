<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsHandlingCharge extends \ArrayObject
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
    * Percentage amount consistent with the handling charge.
    Either Percentage or Amount needs to be present, not both.
    Negative value allowed.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 7 characters. The decimal ".", does not count as a character.
    *
    * @var string
    */
    protected $percentage;
    /**
    * HandlingCharge Amount Container.
    Either Percentage or Amount needs to be present, not both.
    *
    * @var HandlingChargeAmount
    */
    protected $amount;
    /**
    * Percentage amount consistent with the handling charge.
    Either Percentage or Amount needs to be present, not both.
    Negative value allowed.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 7 characters. The decimal ".", does not count as a character.
    *
    * @return string
    */
    public function getPercentage() : string
    {
        return $this->percentage;
    }
    /**
    * Percentage amount consistent with the handling charge.
    Either Percentage or Amount needs to be present, not both.
    Negative value allowed.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 7 characters. The decimal ".", does not count as a character.
    *
    * @param string $percentage
    *
    * @return self
    */
    public function setPercentage(string $percentage) : self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
    /**
    * HandlingCharge Amount Container.
    Either Percentage or Amount needs to be present, not both.
    *
    * @return HandlingChargeAmount
    */
    public function getAmount() : HandlingChargeAmount
    {
        return $this->amount;
    }
    /**
    * HandlingCharge Amount Container.
    Either Percentage or Amount needs to be present, not both.
    *
    * @param HandlingChargeAmount $amount
    *
    * @return self
    */
    public function setAmount(HandlingChargeAmount $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}