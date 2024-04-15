<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetServiceCenterFacilitiesRequest extends \ArrayObject
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
     * Container for the Request.
     *
     * @var PickupGetServiceCenterFacilitiesRequestRequest|null
     */
    protected $request;
    /**
     * 
     *
     * @var list<PickupGetServiceCenterFacilitiesRequestPickupPiece>|null
     */
    protected $pickupPiece;
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required for drop off location search.
     *
     * @var PickupGetServiceCenterFacilitiesRequestOriginAddress|null
     */
    protected $originAddress;
    /**
     * DestinationAddress container.  Conditionally required for pickup location search.
     *
     * @var PickupGetServiceCenterFacilitiesRequestDestinationAddress|null
     */
    protected $destinationAddress;
    /**
    * Origin Country or Territory Locale.  Locale should be Origin Country. Example: en_US. 
    The Last 50 instruction will be send based on this locale. Locale is required if PoximityIndicator is present for Drop Off facilities.
    *
    * @var string|null
    */
    protected $locale;
    /**
     * Proximity Indicator.  Indicates the� user requested the proximity search for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday locations for the origin address and/or the airport code, and the sort code for destination address.
     *
     * @var string|null
     */
    protected $proximitySearchIndicator;
    /**
     * Container for the Request.
     *
     * @return PickupGetServiceCenterFacilitiesRequestRequest|null
     */
    public function getRequest() : ?PickupGetServiceCenterFacilitiesRequestRequest
    {
        return $this->request;
    }
    /**
     * Container for the Request.
     *
     * @param PickupGetServiceCenterFacilitiesRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?PickupGetServiceCenterFacilitiesRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupGetServiceCenterFacilitiesRequestPickupPiece>|null
     */
    public function getPickupPiece() : ?array
    {
        return $this->pickupPiece;
    }
    /**
     * 
     *
     * @param list<PickupGetServiceCenterFacilitiesRequestPickupPiece>|null $pickupPiece
     *
     * @return self
     */
    public function setPickupPiece(?array $pickupPiece) : self
    {
        $this->initialized['pickupPiece'] = true;
        $this->pickupPiece = $pickupPiece;
        return $this;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required for drop off location search.
     *
     * @return PickupGetServiceCenterFacilitiesRequestOriginAddress|null
     */
    public function getOriginAddress() : ?PickupGetServiceCenterFacilitiesRequestOriginAddress
    {
        return $this->originAddress;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required for drop off location search.
     *
     * @param PickupGetServiceCenterFacilitiesRequestOriginAddress|null $originAddress
     *
     * @return self
     */
    public function setOriginAddress(?PickupGetServiceCenterFacilitiesRequestOriginAddress $originAddress) : self
    {
        $this->initialized['originAddress'] = true;
        $this->originAddress = $originAddress;
        return $this;
    }
    /**
     * DestinationAddress container.  Conditionally required for pickup location search.
     *
     * @return PickupGetServiceCenterFacilitiesRequestDestinationAddress|null
     */
    public function getDestinationAddress() : ?PickupGetServiceCenterFacilitiesRequestDestinationAddress
    {
        return $this->destinationAddress;
    }
    /**
     * DestinationAddress container.  Conditionally required for pickup location search.
     *
     * @param PickupGetServiceCenterFacilitiesRequestDestinationAddress|null $destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress(?PickupGetServiceCenterFacilitiesRequestDestinationAddress $destinationAddress) : self
    {
        $this->initialized['destinationAddress'] = true;
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
    /**
    * Origin Country or Territory Locale.  Locale should be Origin Country. Example: en_US. 
    The Last 50 instruction will be send based on this locale. Locale is required if PoximityIndicator is present for Drop Off facilities.
    *
    * @return string|null
    */
    public function getLocale() : ?string
    {
        return $this->locale;
    }
    /**
    * Origin Country or Territory Locale.  Locale should be Origin Country. Example: en_US. 
    The Last 50 instruction will be send based on this locale. Locale is required if PoximityIndicator is present for Drop Off facilities.
    *
    * @param string|null $locale
    *
    * @return self
    */
    public function setLocale(?string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * Proximity Indicator.  Indicates the� user requested the proximity search for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday locations for the origin address and/or the airport code, and the sort code for destination address.
     *
     * @return string|null
     */
    public function getProximitySearchIndicator() : ?string
    {
        return $this->proximitySearchIndicator;
    }
    /**
     * Proximity Indicator.  Indicates the� user requested the proximity search for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday locations for the origin address and/or the airport code, and the sort code for destination address.
     *
     * @param string|null $proximitySearchIndicator
     *
     * @return self
     */
    public function setProximitySearchIndicator(?string $proximitySearchIndicator) : self
    {
        $this->initialized['proximitySearchIndicator'] = true;
        $this->proximitySearchIndicator = $proximitySearchIndicator;
        return $this;
    }
}