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
     * @var string
     */
    protected $locale;
    /**
     * Represents the country code. This field is reserved for future use.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Represents list of tracking numbers in request.
     *
     * @var list<string>
     */
    protected $trackingNumberList;
    /**
     * Represents scan/event preferences for the subscription endpoint, Place holder for Future use.
     *
     * @var list<string>
     */
    protected $scanPreference;
    /**
     * The destination container related to the clients endpoint API. To which messages would be sent on an event on the package.
     *
     * @var Destination
     */
    protected $destination;
    /**
     * Locale setting is composed of language code and country code, separated by an underscore. This field is reserved for future use.
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Locale setting is composed of language code and country code, separated by an underscore. This field is reserved for future use.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * Represents the country code. This field is reserved for future use.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Represents the country code. This field is reserved for future use.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Represents list of tracking numbers in request.
     *
     * @return list<string>
     */
    public function getTrackingNumberList() : array
    {
        return $this->trackingNumberList;
    }
    /**
     * Represents list of tracking numbers in request.
     *
     * @param list<string> $trackingNumberList
     *
     * @return self
     */
    public function setTrackingNumberList(array $trackingNumberList) : self
    {
        $this->initialized['trackingNumberList'] = true;
        $this->trackingNumberList = $trackingNumberList;
        return $this;
    }
    /**
     * Represents scan/event preferences for the subscription endpoint, Place holder for Future use.
     *
     * @return list<string>
     */
    public function getScanPreference() : array
    {
        return $this->scanPreference;
    }
    /**
     * Represents scan/event preferences for the subscription endpoint, Place holder for Future use.
     *
     * @param list<string> $scanPreference
     *
     * @return self
     */
    public function setScanPreference(array $scanPreference) : self
    {
        $this->initialized['scanPreference'] = true;
        $this->scanPreference = $scanPreference;
        return $this;
    }
    /**
     * The destination container related to the clients endpoint API. To which messages would be sent on an event on the package.
     *
     * @return Destination
     */
    public function getDestination() : Destination
    {
        return $this->destination;
    }
    /**
     * The destination container related to the clients endpoint API. To which messages would be sent on an event on the package.
     *
     * @param Destination $destination
     *
     * @return self
     */
    public function setDestination(Destination $destination) : self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
}