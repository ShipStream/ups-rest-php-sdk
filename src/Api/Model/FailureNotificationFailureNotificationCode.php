<?php

namespace ShipStream\Ups\Api\Model;

class FailureNotificationFailureNotificationCode extends \ArrayObject
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
    * Code representing type of failure email notification. Valid values:
    - 01 – Package is ready to pickup at UPS Access Point - Original
    - 02 – Package is ready to pickup at UPS Access Point - Reminder
    - 03 – Package is delivery to alternate delivery location
    - 04 – Package is returned to Sender from UPS Access Point Location
    *
    * @var string
    */
    protected $code;
    /**
     * Not used.
     *
     * @var string
     */
    protected $description;
    /**
    * Code representing type of failure email notification. Valid values:
    - 01 – Package is ready to pickup at UPS Access Point - Original
    - 02 – Package is ready to pickup at UPS Access Point - Reminder
    - 03 – Package is delivery to alternate delivery location
    - 04 – Package is returned to Sender from UPS Access Point Location
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code representing type of failure email notification. Valid values:
    - 01 – Package is ready to pickup at UPS Access Point - Original
    - 02 – Package is ready to pickup at UPS Access Point - Reminder
    - 03 – Package is delivery to alternate delivery location
    - 04 – Package is returned to Sender from UPS Access Point Location
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
     * Not used.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Not used.
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