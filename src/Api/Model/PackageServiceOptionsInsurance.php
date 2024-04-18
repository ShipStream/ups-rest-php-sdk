<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsInsurance extends \ArrayObject
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
     * Container to hold Basic Flexible Parcel Indicator information.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var InsuranceBasicFlexibleParcelIndicator
     */
    protected $basicFlexibleParcelIndicator;
    /**
     * Container for Extended Flexible Parcel Indicator  Valid for UPS World Wide Express Freight shipments.
     *
     * @var InsuranceExtendedFlexibleParcelIndicator
     */
    protected $extendedFlexibleParcelIndicator;
    /**
     * Container to hold Time In Transit Flexible Parcel Indicator information.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var InsuranceTimeInTransitFlexibleParcelIndicator
     */
    protected $timeInTransitFlexibleParcelIndicator;
    /**
     * Container to hold Basic Flexible Parcel Indicator information.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return InsuranceBasicFlexibleParcelIndicator
     */
    public function getBasicFlexibleParcelIndicator() : InsuranceBasicFlexibleParcelIndicator
    {
        return $this->basicFlexibleParcelIndicator;
    }
    /**
     * Container to hold Basic Flexible Parcel Indicator information.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param InsuranceBasicFlexibleParcelIndicator $basicFlexibleParcelIndicator
     *
     * @return self
     */
    public function setBasicFlexibleParcelIndicator(InsuranceBasicFlexibleParcelIndicator $basicFlexibleParcelIndicator) : self
    {
        $this->initialized['basicFlexibleParcelIndicator'] = true;
        $this->basicFlexibleParcelIndicator = $basicFlexibleParcelIndicator;
        return $this;
    }
    /**
     * Container for Extended Flexible Parcel Indicator  Valid for UPS World Wide Express Freight shipments.
     *
     * @return InsuranceExtendedFlexibleParcelIndicator
     */
    public function getExtendedFlexibleParcelIndicator() : InsuranceExtendedFlexibleParcelIndicator
    {
        return $this->extendedFlexibleParcelIndicator;
    }
    /**
     * Container for Extended Flexible Parcel Indicator  Valid for UPS World Wide Express Freight shipments.
     *
     * @param InsuranceExtendedFlexibleParcelIndicator $extendedFlexibleParcelIndicator
     *
     * @return self
     */
    public function setExtendedFlexibleParcelIndicator(InsuranceExtendedFlexibleParcelIndicator $extendedFlexibleParcelIndicator) : self
    {
        $this->initialized['extendedFlexibleParcelIndicator'] = true;
        $this->extendedFlexibleParcelIndicator = $extendedFlexibleParcelIndicator;
        return $this;
    }
    /**
     * Container to hold Time In Transit Flexible Parcel Indicator information.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return InsuranceTimeInTransitFlexibleParcelIndicator
     */
    public function getTimeInTransitFlexibleParcelIndicator() : InsuranceTimeInTransitFlexibleParcelIndicator
    {
        return $this->timeInTransitFlexibleParcelIndicator;
    }
    /**
     * Container to hold Time In Transit Flexible Parcel Indicator information.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param InsuranceTimeInTransitFlexibleParcelIndicator $timeInTransitFlexibleParcelIndicator
     *
     * @return self
     */
    public function setTimeInTransitFlexibleParcelIndicator(InsuranceTimeInTransitFlexibleParcelIndicator $timeInTransitFlexibleParcelIndicator) : self
    {
        $this->initialized['timeInTransitFlexibleParcelIndicator'] = true;
        $this->timeInTransitFlexibleParcelIndicator = $timeInTransitFlexibleParcelIndicator;
        return $this;
    }
}