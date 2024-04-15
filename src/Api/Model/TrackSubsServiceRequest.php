<?php

namespace ShipStream\Ups\Api\Model;

class TrackSubsServiceRequest extends \ArrayObject
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
     * Locale setting is composed of language code and country code, separated by an underscore. This field is reserved for future use.
     *
     * @var string|null
     */
    protected $locale;
    /**
     * Represents the country code. This field is reserved for future use.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Represents list of tracking numbers in request.
     *
     * @var list<string>|null
     */
    protected $trackingNumberList;
    /**
     * Represents scan/event preferences for the subscription endpoint, Place holder for Future use.
     *
     * @var list<string>|null
     */
    protected $scanPreference;
    /**
     * The destination container related to the clients endpoint API. To which messages would be sent on an event on the package.
     *
     * @var Destination|null
     */
    protected $destination;
    /**
     * Locale setting is composed of language code and country code, separated by an underscore. This field is reserved for future use.
     *
     * @return string|null
     */
    public function getLocale() : ?string
    {
        return $this->locale;
    }
    /**
     * Locale setting is composed of language code and country code, separated by an underscore. This field is reserved for future use.
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
     * Represents the country code. This field is reserved for future use.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Represents the country code. This field is reserved for future use.
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Represents list of tracking numbers in request.
     *
     * @return list<string>|null
     */
    public function getTrackingNumberList() : ?array
    {
        return $this->trackingNumberList;
    }
    /**
     * Represents list of tracking numbers in request.
     *
     * @param list<string>|null $trackingNumberList
     *
     * @return self
     */
    public function setTrackingNumberList(?array $trackingNumberList) : self
    {
        $this->initialized['trackingNumberList'] = true;
        $this->trackingNumberList = $trackingNumberList;
        return $this;
    }
    /**
     * Represents scan/event preferences for the subscription endpoint, Place holder for Future use.
     *
     * @return list<string>|null
     */
    public function getScanPreference() : ?array
    {
        return $this->scanPreference;
    }
    /**
     * Represents scan/event preferences for the subscription endpoint, Place holder for Future use.
     *
     * @param list<string>|null $scanPreference
     *
     * @return self
     */
    public function setScanPreference(?array $scanPreference) : self
    {
        $this->initialized['scanPreference'] = true;
        $this->scanPreference = $scanPreference;
        return $this;
    }
    /**
     * The destination container related to the clients endpoint API. To which messages would be sent on an event on the package.
     *
     * @return Destination|null
     */
    public function getDestination() : ?Destination
    {
        return $this->destination;
    }
    /**
     * The destination container related to the clients endpoint API. To which messages would be sent on an event on the package.
     *
     * @param Destination|null $destination
     *
     * @return self
     */
    public function setDestination(?Destination $destination) : self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
}