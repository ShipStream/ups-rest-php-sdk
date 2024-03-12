<?php

namespace ShipStream\Ups\Api\Model;

class ResponseAlertDetail extends \ArrayObject
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
     * Warning code returned by the system.
     *
     * @var string
     */
    protected $code;
    /**
     * Warning messages returned by the system.
     *
     * @var string
     */
    protected $description;
    /**
     * Provides more information about the element that represents the alert.
     *
     * @var AlertDetailElementLevelInformation
     */
    protected $elementLevelInformation;
    /**
     * Warning code returned by the system.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Warning code returned by the system.
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
     * Warning messages returned by the system.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Warning messages returned by the system.
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
    /**
     * Provides more information about the element that represents the alert.
     *
     * @return AlertDetailElementLevelInformation
     */
    public function getElementLevelInformation() : AlertDetailElementLevelInformation
    {
        return $this->elementLevelInformation;
    }
    /**
     * Provides more information about the element that represents the alert.
     *
     * @param AlertDetailElementLevelInformation $elementLevelInformation
     *
     * @return self
     */
    public function setElementLevelInformation(AlertDetailElementLevelInformation $elementLevelInformation) : self
    {
        $this->initialized['elementLevelInformation'] = true;
        $this->elementLevelInformation = $elementLevelInformation;
        return $this;
    }
}