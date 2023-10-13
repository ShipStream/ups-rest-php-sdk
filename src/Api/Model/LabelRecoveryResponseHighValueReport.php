<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseHighValueReport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Container for the High Value Report image for Import Control Shipments.
     *
     * @var HighValueReportImage
     */
    protected $image;
    /**
     * Container for the High Value Report image for Import Control Shipments.
     *
     * @return HighValueReportImage
     */
    public function getImage() : HighValueReportImage
    {
        return $this->image;
    }
    /**
     * Container for the High Value Report image for Import Control Shipments.
     *
     * @param HighValueReportImage $image
     *
     * @return self
     */
    public function setImage(HighValueReportImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}