<?php

namespace ShipStream\Ups\Api\Model;

class NotificationTextMessage extends \ArrayObject
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
    * Phone number for receiving Text PreAlertNotification.  Valid values are 0 - 9.
    
    If the country or territory of the message recipient is US, PR, CA, and VI, the layout is:
    1, area code, 7 digit phone number or 
    1, area code, 7 digit phone number, 4 digit extension number. 
    
    For other countries or territories, the layout is country or territory code, area code, 7 digit number.
    *
    * @var string|null
    */
    protected $phoneNumber;
    /**
    * Phone number for receiving Text PreAlertNotification.  Valid values are 0 - 9.
    
    If the country or territory of the message recipient is US, PR, CA, and VI, the layout is:
    1, area code, 7 digit phone number or 
    1, area code, 7 digit phone number, 4 digit extension number. 
    
    For other countries or territories, the layout is country or territory code, area code, 7 digit number.
    *
    * @return string|null
    */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
    * Phone number for receiving Text PreAlertNotification.  Valid values are 0 - 9.
    
    If the country or territory of the message recipient is US, PR, CA, and VI, the layout is:
    1, area code, 7 digit phone number or 
    1, area code, 7 digit phone number, 4 digit extension number. 
    
    For other countries or territories, the layout is country or territory code, area code, 7 digit number.
    *
    * @param string|null $phoneNumber
    *
    * @return self
    */
    public function setPhoneNumber(?string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}