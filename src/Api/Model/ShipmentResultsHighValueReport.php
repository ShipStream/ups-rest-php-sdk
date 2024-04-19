<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsHighValueReport extends \ArrayObject
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
     * Container tag for the High Value Report image.
     *
     * @var HighValueReportImage
     */
    protected $image;
    /**
     * Container tag for the High Value Report image.
     *
     * @return HighValueReportImage
     */
    public function getImage() : HighValueReportImage
    {
        return $this->image;
    }
    /**
     * Container tag for the High Value Report image.
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