<?php

namespace ShipStream\Ups\Api\Model;

class ServiceSummaryService extends \ArrayObject
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
     * Optional. Description of service. Example, UPS Next Day Air, UPS Ground etc, as referenced by the Service Code.
     *
     * @var string
     */
    protected $description;
    /**
     * Optional. Description of service. Example, UPS Next Day Air, UPS Ground etc, as referenced by the Service Code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Optional. Description of service. Example, UPS Next Day Air, UPS Ground etc, as referenced by the Service Code.
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