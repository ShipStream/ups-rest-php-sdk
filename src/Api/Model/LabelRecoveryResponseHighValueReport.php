<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseHighValueReport extends \ArrayObject
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
     * Container for the High Value Report image for Import Control Shipments.
     *
     * @var HighValueReportImage|null
     */
    protected $image;
    /**
     * Container for the High Value Report image for Import Control Shipments.
     *
     * @return HighValueReportImage|null
     */
    public function getImage() : ?HighValueReportImage
    {
        return $this->image;
    }
    /**
     * Container for the High Value Report image for Import Control Shipments.
     *
     * @param HighValueReportImage|null $image
     *
     * @return self
     */
    public function setImage(?HighValueReportImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}