<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryActivityLocation extends \ArrayObject
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
     * Information that specifies a physical location where package delivery activity occurs.
     *
     * @var ActivityLocationAddressArtifactFormat
     */
    protected $addressArtifactFormat;
    /**
     * Information that specifies a physical location where package delivery activity occurs.
     *
     * @return ActivityLocationAddressArtifactFormat
     */
    public function getAddressArtifactFormat() : ActivityLocationAddressArtifactFormat
    {
        return $this->addressArtifactFormat;
    }
    /**
     * Information that specifies a physical location where package delivery activity occurs.
     *
     * @param ActivityLocationAddressArtifactFormat $addressArtifactFormat
     *
     * @return self
     */
    public function setAddressArtifactFormat(ActivityLocationAddressArtifactFormat $addressArtifactFormat) : self
    {
        $this->initialized['addressArtifactFormat'] = true;
        $this->addressArtifactFormat = $addressArtifactFormat;
        return $this;
    }
}