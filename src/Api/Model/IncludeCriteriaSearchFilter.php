<?php

namespace ShipStream\Ups\Api\Model;

class IncludeCriteriaSearchFilter extends \ArrayObject
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
     * DCR/DCO Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search for access points with DCR. Any data in the element is ignored.
     *
     * @var string|null
     */
    protected $dCRIndicator;
    /**
     * Shipping Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search of access points with shipping availability. Any data in it is ignored.
     *
     * @var string|null
     */
    protected $shippingAvailabilityIndicator;
    /**
     * Value for the number of days to check for shipping availability from� the current day. When this value is present, ShippingAvailabilityIndicator is implied implicitly.
     *
     * @var string|null
     */
    protected $shipperPreparationDelay;
    /**
     * This contains the distance (in given UnitOfMeasurement) wherin to sort the click and collect access point locations above other� access point locations� when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @var string|null
     */
    protected $clickAndCollectSortWithDistance;
    /**
     * DCR/DCO Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search for access points with DCR. Any data in the element is ignored.
     *
     * @return string|null
     */
    public function getDCRIndicator() : ?string
    {
        return $this->dCRIndicator;
    }
    /**
     * DCR/DCO Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search for access points with DCR. Any data in the element is ignored.
     *
     * @param string|null $dCRIndicator
     *
     * @return self
     */
    public function setDCRIndicator(?string $dCRIndicator) : self
    {
        $this->initialized['dCRIndicator'] = true;
        $this->dCRIndicator = $dCRIndicator;
        return $this;
    }
    /**
     * Shipping Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search of access points with shipping availability. Any data in it is ignored.
     *
     * @return string|null
     */
    public function getShippingAvailabilityIndicator() : ?string
    {
        return $this->shippingAvailabilityIndicator;
    }
    /**
     * Shipping Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search of access points with shipping availability. Any data in it is ignored.
     *
     * @param string|null $shippingAvailabilityIndicator
     *
     * @return self
     */
    public function setShippingAvailabilityIndicator(?string $shippingAvailabilityIndicator) : self
    {
        $this->initialized['shippingAvailabilityIndicator'] = true;
        $this->shippingAvailabilityIndicator = $shippingAvailabilityIndicator;
        return $this;
    }
    /**
     * Value for the number of days to check for shipping availability from� the current day. When this value is present, ShippingAvailabilityIndicator is implied implicitly.
     *
     * @return string|null
     */
    public function getShipperPreparationDelay() : ?string
    {
        return $this->shipperPreparationDelay;
    }
    /**
     * Value for the number of days to check for shipping availability from� the current day. When this value is present, ShippingAvailabilityIndicator is implied implicitly.
     *
     * @param string|null $shipperPreparationDelay
     *
     * @return self
     */
    public function setShipperPreparationDelay(?string $shipperPreparationDelay) : self
    {
        $this->initialized['shipperPreparationDelay'] = true;
        $this->shipperPreparationDelay = $shipperPreparationDelay;
        return $this;
    }
    /**
     * This contains the distance (in given UnitOfMeasurement) wherin to sort the click and collect access point locations above other� access point locations� when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @return string|null
     */
    public function getClickAndCollectSortWithDistance() : ?string
    {
        return $this->clickAndCollectSortWithDistance;
    }
    /**
     * This contains the distance (in given UnitOfMeasurement) wherin to sort the click and collect access point locations above other� access point locations� when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @param string|null $clickAndCollectSortWithDistance
     *
     * @return self
     */
    public function setClickAndCollectSortWithDistance(?string $clickAndCollectSortWithDistance) : self
    {
        $this->initialized['clickAndCollectSortWithDistance'] = true;
        $this->clickAndCollectSortWithDistance = $clickAndCollectSortWithDistance;
        return $this;
    }
}