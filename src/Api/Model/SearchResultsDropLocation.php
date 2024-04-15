<?php

namespace ShipStream\Ups\Api\Model;

class SearchResultsDropLocation extends \ArrayObject
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
     * The location ID that corresponds to the UPS location. Do not expose the Location ID.
     *
     * @var string|null
     */
    protected $locationID;
    /**
    * OriginOrDestination will returned for FreightWillCallRequestType 1 Postal based and 3 City and/or State based search. 
    
    OriginOrDestination will be 01 for origin facilities and 02 for Destination facilities
    *
    * @var string|null
    */
    protected $originOrDestination;
    /**
    * Integrated Voice Response information. 
    ONLY FOR IVR.
    *
    * @var DropLocationIVR|null
    */
    protected $iVR;
    /**
     * Geocode is the latitude and longitude of the location address. The Geocode for the location address will be returned when Location is requested in the Request Option.
     *
     * @var DropLocationGeocode|null
     */
    protected $geocode;
    /**
     * Contains all of the basic information about a location, Consignee Name, Building Name, Address Lines, City, State/Province, Postal Code and Country or Terriotry Code.
     *
     * @var DropLocationAddressKeyFormat|null
     */
    protected $addressKeyFormat;
    /**
    * The UPS locations Phone number. A phone number of the location will be returned. 
    10 digits allowed for US, otherwise 1..15 digits allowed. 
    The phone number will be returned as a string.
    *
    * @var list<string>|null
    */
    protected $phoneNumber;
    /**
    * The UPS location's Fax number. A fax number of the location will be returned when available. 
    10 digits allowed for US, otherwise 1..15 digits allowed.
    The fax number will be returned as string.
    *
    * @var string|null
    */
    protected $faxNumber;
    /**
     * Email address of the UPS location. Returned when available.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * 
     *
     * @var list<DropLocationLocationAttribute>|null
     */
    protected $locationAttribute;
    /**
     * Container for the straight line distance from the origin to the UPS location.
     *
     * @var DropLocationDistance|null
     */
    protected $distance;
    /**
     * 
     *
     * @var list<DropLocationSpecialInstructions>|null
     */
    protected $specialInstructions;
    /**
    * The latest ground time the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location. 
    When a user specifies a Drop-off Time and Ground as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    *
    * @var list<string>|null
    */
    protected $latestGroundDropOffTime;
    /**
    * The latest airtime the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location. 
    When a user specifies a Drop-off Time and Air as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    *
    * @var list<string>|null
    */
    protected $latestAirDropOffTime;
    /**
     * Presence or Absence Indicator. If present, Indicates if the UPS location would have an additional charge. ASO locations will require an additional charge.
     *
     * @var string|null
     */
    protected $additionalChargeIndicator;
    /**
     * The standard hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @var string|null
     */
    protected $standardHoursOfOperation;
    /**
     * The non-standard hours of operation of the drop location. The location's time may differ because of holidays, weekends, or other factors that are beyond the locations control. Seven days preceding a given holiday the Non Standard Hours Of Operation will be returned along with the standard hours of operation if available.
     *
     * @var string|null
     */
    protected $nonStandardHoursOfOperation;
    /**
     * The will call hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @var string|null
     */
    protected $willCallHoursOfOperation;
    /**
     * The center number of the drop location if it is The UPS store.
     *
     * @var string|null
     */
    protected $number;
    /**
     * The home page URL of the drop location if it is The UPS store.
     *
     * @var string|null
     */
    protected $homePageURL;
    /**
     * Comments returned about the location. Text will be displayed in English or the locale given in the request. If Country Code is FR, and locale passed in the request is fr_FR then text will be displayed in French language, else comment will be displayed in English language.
     *
     * @var string|null
     */
    protected $comments;
    /**
     * Container for Additional Comments about Location.Text will be displayed in the Locale requested.
     *
     * @var DropLocationAdditionalComments|null
     */
    protected $additionalComments;
    /**
     * Textual disclaimer about the drop location.
     *
     * @var list<string>|null
     */
    protected $disclaimer;
    /**
     * SLIC.
     *
     * @var string|null
     */
    protected $sLIC;
    /**
     * TimeZone.
     *
     * @var string|null
     */
    protected $timezone;
    /**
     * PKG/FRT.
     *
     * @var string|null
     */
    protected $facilityType;
    /**
     * Operating Hours.
     *
     * @var DropLocationOperatingHours|null
     */
    protected $operatingHours;
    /**
     * 
     *
     * @var list<DropLocationLocalizedInstruction>|null
     */
    protected $localizedInstruction;
    /**
     * 
     *
     * @var list<DropLocationPromotionInformation>|null
     */
    protected $promotionInformation;
    /**
     * This container is only for Freight Will call Search.
     *
     * @var DropLocationSortCode|null
     */
    protected $sortCode;
    /**
     * Container to hold the list of service offerings at the end point.
     *
     * @var DropLocationServiceOfferingList|null
     */
    protected $serviceOfferingList;
    /**
    * Valid Values: 
    0-Do not display phone number
    1-Display phone number. 
    This indicator will be returned only for the contact type Telephone number. This indicator is used by the clients to determine whether to display the telephone number to the end user.
    *
    * @var string|null
    */
    protected $displayPhoneNumberIndicator;
    /**
     * Container for UPS Access Point specific parameters.
     *
     * @var DropLocationAccessPointInformation|null
     */
    protected $accessPointInformation;
    /**
     * Location Image container.
     *
     * @var DropLocationLocationImage|null
     */
    protected $locationImage;
    /**
     * Indicator for new location.
     *
     * @var string|null
     */
    protected $locationNewIndicator;
    /**
     * Promotional link URL for specific location.
     *
     * @var string|null
     */
    protected $promotionalLinkURL;
    /**
    * Feature Ranking values:
    Null or blank - Location is not featured. 
    1 - Featured Location ranked number 1.
    2 - Featured Location ranked number 2.
    *
    * @var string|null
    */
    protected $featuredRank;
    /**
    * Will Call Location Indicator values:
    Y - Signifies a Will Call location that serves the customers address. 
    N - Signifies it is not a Will Call location.
    Will Call locations are only returned with a "Y" indicator if the request included EnhancedSearchOption code 10.
    *
    * @var string|null
    */
    protected $willCallLocationIndicator;
    /**
     * The location ID that corresponds to the UPS location. Do not expose the Location ID.
     *
     * @return string|null
     */
    public function getLocationID() : ?string
    {
        return $this->locationID;
    }
    /**
     * The location ID that corresponds to the UPS location. Do not expose the Location ID.
     *
     * @param string|null $locationID
     *
     * @return self
     */
    public function setLocationID(?string $locationID) : self
    {
        $this->initialized['locationID'] = true;
        $this->locationID = $locationID;
        return $this;
    }
    /**
    * OriginOrDestination will returned for FreightWillCallRequestType 1 Postal based and 3 City and/or State based search. 
    
    OriginOrDestination will be 01 for origin facilities and 02 for Destination facilities
    *
    * @return string|null
    */
    public function getOriginOrDestination() : ?string
    {
        return $this->originOrDestination;
    }
    /**
    * OriginOrDestination will returned for FreightWillCallRequestType 1 Postal based and 3 City and/or State based search. 
    
    OriginOrDestination will be 01 for origin facilities and 02 for Destination facilities
    *
    * @param string|null $originOrDestination
    *
    * @return self
    */
    public function setOriginOrDestination(?string $originOrDestination) : self
    {
        $this->initialized['originOrDestination'] = true;
        $this->originOrDestination = $originOrDestination;
        return $this;
    }
    /**
    * Integrated Voice Response information. 
    ONLY FOR IVR.
    *
    * @return DropLocationIVR|null
    */
    public function getIVR() : ?DropLocationIVR
    {
        return $this->iVR;
    }
    /**
    * Integrated Voice Response information. 
    ONLY FOR IVR.
    *
    * @param DropLocationIVR|null $iVR
    *
    * @return self
    */
    public function setIVR(?DropLocationIVR $iVR) : self
    {
        $this->initialized['iVR'] = true;
        $this->iVR = $iVR;
        return $this;
    }
    /**
     * Geocode is the latitude and longitude of the location address. The Geocode for the location address will be returned when Location is requested in the Request Option.
     *
     * @return DropLocationGeocode|null
     */
    public function getGeocode() : ?DropLocationGeocode
    {
        return $this->geocode;
    }
    /**
     * Geocode is the latitude and longitude of the location address. The Geocode for the location address will be returned when Location is requested in the Request Option.
     *
     * @param DropLocationGeocode|null $geocode
     *
     * @return self
     */
    public function setGeocode(?DropLocationGeocode $geocode) : self
    {
        $this->initialized['geocode'] = true;
        $this->geocode = $geocode;
        return $this;
    }
    /**
     * Contains all of the basic information about a location, Consignee Name, Building Name, Address Lines, City, State/Province, Postal Code and Country or Terriotry Code.
     *
     * @return DropLocationAddressKeyFormat|null
     */
    public function getAddressKeyFormat() : ?DropLocationAddressKeyFormat
    {
        return $this->addressKeyFormat;
    }
    /**
     * Contains all of the basic information about a location, Consignee Name, Building Name, Address Lines, City, State/Province, Postal Code and Country or Terriotry Code.
     *
     * @param DropLocationAddressKeyFormat|null $addressKeyFormat
     *
     * @return self
     */
    public function setAddressKeyFormat(?DropLocationAddressKeyFormat $addressKeyFormat) : self
    {
        $this->initialized['addressKeyFormat'] = true;
        $this->addressKeyFormat = $addressKeyFormat;
        return $this;
    }
    /**
    * The UPS locations Phone number. A phone number of the location will be returned. 
    10 digits allowed for US, otherwise 1..15 digits allowed. 
    The phone number will be returned as a string.
    *
    * @return list<string>|null
    */
    public function getPhoneNumber() : ?array
    {
        return $this->phoneNumber;
    }
    /**
    * The UPS locations Phone number. A phone number of the location will be returned. 
    10 digits allowed for US, otherwise 1..15 digits allowed. 
    The phone number will be returned as a string.
    *
    * @param list<string>|null $phoneNumber
    *
    * @return self
    */
    public function setPhoneNumber(?array $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
    * The UPS location's Fax number. A fax number of the location will be returned when available. 
    10 digits allowed for US, otherwise 1..15 digits allowed.
    The fax number will be returned as string.
    *
    * @return string|null
    */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
    * The UPS location's Fax number. A fax number of the location will be returned when available. 
    10 digits allowed for US, otherwise 1..15 digits allowed.
    The fax number will be returned as string.
    *
    * @param string|null $faxNumber
    *
    * @return self
    */
    public function setFaxNumber(?string $faxNumber) : self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**
     * Email address of the UPS location. Returned when available.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Email address of the UPS location. Returned when available.
     *
     * @param string|null $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(?string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * 
     *
     * @return list<DropLocationLocationAttribute>|null
     */
    public function getLocationAttribute() : ?array
    {
        return $this->locationAttribute;
    }
    /**
     * 
     *
     * @param list<DropLocationLocationAttribute>|null $locationAttribute
     *
     * @return self
     */
    public function setLocationAttribute(?array $locationAttribute) : self
    {
        $this->initialized['locationAttribute'] = true;
        $this->locationAttribute = $locationAttribute;
        return $this;
    }
    /**
     * Container for the straight line distance from the origin to the UPS location.
     *
     * @return DropLocationDistance|null
     */
    public function getDistance() : ?DropLocationDistance
    {
        return $this->distance;
    }
    /**
     * Container for the straight line distance from the origin to the UPS location.
     *
     * @param DropLocationDistance|null $distance
     *
     * @return self
     */
    public function setDistance(?DropLocationDistance $distance) : self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * 
     *
     * @return list<DropLocationSpecialInstructions>|null
     */
    public function getSpecialInstructions() : ?array
    {
        return $this->specialInstructions;
    }
    /**
     * 
     *
     * @param list<DropLocationSpecialInstructions>|null $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(?array $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
    * The latest ground time the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location. 
    When a user specifies a Drop-off Time and Ground as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    *
    * @return list<string>|null
    */
    public function getLatestGroundDropOffTime() : ?array
    {
        return $this->latestGroundDropOffTime;
    }
    /**
    * The latest ground time the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location. 
    When a user specifies a Drop-off Time and Ground as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    *
    * @param list<string>|null $latestGroundDropOffTime
    *
    * @return self
    */
    public function setLatestGroundDropOffTime(?array $latestGroundDropOffTime) : self
    {
        $this->initialized['latestGroundDropOffTime'] = true;
        $this->latestGroundDropOffTime = $latestGroundDropOffTime;
        return $this;
    }
    /**
    * The latest airtime the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location. 
    When a user specifies a Drop-off Time and Air as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    *
    * @return list<string>|null
    */
    public function getLatestAirDropOffTime() : ?array
    {
        return $this->latestAirDropOffTime;
    }
    /**
    * The latest airtime the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location. 
    When a user specifies a Drop-off Time and Air as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    *
    * @param list<string>|null $latestAirDropOffTime
    *
    * @return self
    */
    public function setLatestAirDropOffTime(?array $latestAirDropOffTime) : self
    {
        $this->initialized['latestAirDropOffTime'] = true;
        $this->latestAirDropOffTime = $latestAirDropOffTime;
        return $this;
    }
    /**
     * Presence or Absence Indicator. If present, Indicates if the UPS location would have an additional charge. ASO locations will require an additional charge.
     *
     * @return string|null
     */
    public function getAdditionalChargeIndicator() : ?string
    {
        return $this->additionalChargeIndicator;
    }
    /**
     * Presence or Absence Indicator. If present, Indicates if the UPS location would have an additional charge. ASO locations will require an additional charge.
     *
     * @param string|null $additionalChargeIndicator
     *
     * @return self
     */
    public function setAdditionalChargeIndicator(?string $additionalChargeIndicator) : self
    {
        $this->initialized['additionalChargeIndicator'] = true;
        $this->additionalChargeIndicator = $additionalChargeIndicator;
        return $this;
    }
    /**
     * The standard hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @return string|null
     */
    public function getStandardHoursOfOperation() : ?string
    {
        return $this->standardHoursOfOperation;
    }
    /**
     * The standard hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @param string|null $standardHoursOfOperation
     *
     * @return self
     */
    public function setStandardHoursOfOperation(?string $standardHoursOfOperation) : self
    {
        $this->initialized['standardHoursOfOperation'] = true;
        $this->standardHoursOfOperation = $standardHoursOfOperation;
        return $this;
    }
    /**
     * The non-standard hours of operation of the drop location. The location's time may differ because of holidays, weekends, or other factors that are beyond the locations control. Seven days preceding a given holiday the Non Standard Hours Of Operation will be returned along with the standard hours of operation if available.
     *
     * @return string|null
     */
    public function getNonStandardHoursOfOperation() : ?string
    {
        return $this->nonStandardHoursOfOperation;
    }
    /**
     * The non-standard hours of operation of the drop location. The location's time may differ because of holidays, weekends, or other factors that are beyond the locations control. Seven days preceding a given holiday the Non Standard Hours Of Operation will be returned along with the standard hours of operation if available.
     *
     * @param string|null $nonStandardHoursOfOperation
     *
     * @return self
     */
    public function setNonStandardHoursOfOperation(?string $nonStandardHoursOfOperation) : self
    {
        $this->initialized['nonStandardHoursOfOperation'] = true;
        $this->nonStandardHoursOfOperation = $nonStandardHoursOfOperation;
        return $this;
    }
    /**
     * The will call hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @return string|null
     */
    public function getWillCallHoursOfOperation() : ?string
    {
        return $this->willCallHoursOfOperation;
    }
    /**
     * The will call hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @param string|null $willCallHoursOfOperation
     *
     * @return self
     */
    public function setWillCallHoursOfOperation(?string $willCallHoursOfOperation) : self
    {
        $this->initialized['willCallHoursOfOperation'] = true;
        $this->willCallHoursOfOperation = $willCallHoursOfOperation;
        return $this;
    }
    /**
     * The center number of the drop location if it is The UPS store.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * The center number of the drop location if it is The UPS store.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The home page URL of the drop location if it is The UPS store.
     *
     * @return string|null
     */
    public function getHomePageURL() : ?string
    {
        return $this->homePageURL;
    }
    /**
     * The home page URL of the drop location if it is The UPS store.
     *
     * @param string|null $homePageURL
     *
     * @return self
     */
    public function setHomePageURL(?string $homePageURL) : self
    {
        $this->initialized['homePageURL'] = true;
        $this->homePageURL = $homePageURL;
        return $this;
    }
    /**
     * Comments returned about the location. Text will be displayed in English or the locale given in the request. If Country Code is FR, and locale passed in the request is fr_FR then text will be displayed in French language, else comment will be displayed in English language.
     *
     * @return string|null
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * Comments returned about the location. Text will be displayed in English or the locale given in the request. If Country Code is FR, and locale passed in the request is fr_FR then text will be displayed in French language, else comment will be displayed in English language.
     *
     * @param string|null $comments
     *
     * @return self
     */
    public function setComments(?string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * Container for Additional Comments about Location.Text will be displayed in the Locale requested.
     *
     * @return DropLocationAdditionalComments|null
     */
    public function getAdditionalComments() : ?DropLocationAdditionalComments
    {
        return $this->additionalComments;
    }
    /**
     * Container for Additional Comments about Location.Text will be displayed in the Locale requested.
     *
     * @param DropLocationAdditionalComments|null $additionalComments
     *
     * @return self
     */
    public function setAdditionalComments(?DropLocationAdditionalComments $additionalComments) : self
    {
        $this->initialized['additionalComments'] = true;
        $this->additionalComments = $additionalComments;
        return $this;
    }
    /**
     * Textual disclaimer about the drop location.
     *
     * @return list<string>|null
     */
    public function getDisclaimer() : ?array
    {
        return $this->disclaimer;
    }
    /**
     * Textual disclaimer about the drop location.
     *
     * @param list<string>|null $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(?array $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * SLIC.
     *
     * @return string|null
     */
    public function getSLIC() : ?string
    {
        return $this->sLIC;
    }
    /**
     * SLIC.
     *
     * @param string|null $sLIC
     *
     * @return self
     */
    public function setSLIC(?string $sLIC) : self
    {
        $this->initialized['sLIC'] = true;
        $this->sLIC = $sLIC;
        return $this;
    }
    /**
     * TimeZone.
     *
     * @return string|null
     */
    public function getTimezone() : ?string
    {
        return $this->timezone;
    }
    /**
     * TimeZone.
     *
     * @param string|null $timezone
     *
     * @return self
     */
    public function setTimezone(?string $timezone) : self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * PKG/FRT.
     *
     * @return string|null
     */
    public function getFacilityType() : ?string
    {
        return $this->facilityType;
    }
    /**
     * PKG/FRT.
     *
     * @param string|null $facilityType
     *
     * @return self
     */
    public function setFacilityType(?string $facilityType) : self
    {
        $this->initialized['facilityType'] = true;
        $this->facilityType = $facilityType;
        return $this;
    }
    /**
     * Operating Hours.
     *
     * @return DropLocationOperatingHours|null
     */
    public function getOperatingHours() : ?DropLocationOperatingHours
    {
        return $this->operatingHours;
    }
    /**
     * Operating Hours.
     *
     * @param DropLocationOperatingHours|null $operatingHours
     *
     * @return self
     */
    public function setOperatingHours(?DropLocationOperatingHours $operatingHours) : self
    {
        $this->initialized['operatingHours'] = true;
        $this->operatingHours = $operatingHours;
        return $this;
    }
    /**
     * 
     *
     * @return list<DropLocationLocalizedInstruction>|null
     */
    public function getLocalizedInstruction() : ?array
    {
        return $this->localizedInstruction;
    }
    /**
     * 
     *
     * @param list<DropLocationLocalizedInstruction>|null $localizedInstruction
     *
     * @return self
     */
    public function setLocalizedInstruction(?array $localizedInstruction) : self
    {
        $this->initialized['localizedInstruction'] = true;
        $this->localizedInstruction = $localizedInstruction;
        return $this;
    }
    /**
     * 
     *
     * @return list<DropLocationPromotionInformation>|null
     */
    public function getPromotionInformation() : ?array
    {
        return $this->promotionInformation;
    }
    /**
     * 
     *
     * @param list<DropLocationPromotionInformation>|null $promotionInformation
     *
     * @return self
     */
    public function setPromotionInformation(?array $promotionInformation) : self
    {
        $this->initialized['promotionInformation'] = true;
        $this->promotionInformation = $promotionInformation;
        return $this;
    }
    /**
     * This container is only for Freight Will call Search.
     *
     * @return DropLocationSortCode|null
     */
    public function getSortCode() : ?DropLocationSortCode
    {
        return $this->sortCode;
    }
    /**
     * This container is only for Freight Will call Search.
     *
     * @param DropLocationSortCode|null $sortCode
     *
     * @return self
     */
    public function setSortCode(?DropLocationSortCode $sortCode) : self
    {
        $this->initialized['sortCode'] = true;
        $this->sortCode = $sortCode;
        return $this;
    }
    /**
     * Container to hold the list of service offerings at the end point.
     *
     * @return DropLocationServiceOfferingList|null
     */
    public function getServiceOfferingList() : ?DropLocationServiceOfferingList
    {
        return $this->serviceOfferingList;
    }
    /**
     * Container to hold the list of service offerings at the end point.
     *
     * @param DropLocationServiceOfferingList|null $serviceOfferingList
     *
     * @return self
     */
    public function setServiceOfferingList(?DropLocationServiceOfferingList $serviceOfferingList) : self
    {
        $this->initialized['serviceOfferingList'] = true;
        $this->serviceOfferingList = $serviceOfferingList;
        return $this;
    }
    /**
    * Valid Values: 
    0-Do not display phone number
    1-Display phone number. 
    This indicator will be returned only for the contact type Telephone number. This indicator is used by the clients to determine whether to display the telephone number to the end user.
    *
    * @return string|null
    */
    public function getDisplayPhoneNumberIndicator() : ?string
    {
        return $this->displayPhoneNumberIndicator;
    }
    /**
    * Valid Values: 
    0-Do not display phone number
    1-Display phone number. 
    This indicator will be returned only for the contact type Telephone number. This indicator is used by the clients to determine whether to display the telephone number to the end user.
    *
    * @param string|null $displayPhoneNumberIndicator
    *
    * @return self
    */
    public function setDisplayPhoneNumberIndicator(?string $displayPhoneNumberIndicator) : self
    {
        $this->initialized['displayPhoneNumberIndicator'] = true;
        $this->displayPhoneNumberIndicator = $displayPhoneNumberIndicator;
        return $this;
    }
    /**
     * Container for UPS Access Point specific parameters.
     *
     * @return DropLocationAccessPointInformation|null
     */
    public function getAccessPointInformation() : ?DropLocationAccessPointInformation
    {
        return $this->accessPointInformation;
    }
    /**
     * Container for UPS Access Point specific parameters.
     *
     * @param DropLocationAccessPointInformation|null $accessPointInformation
     *
     * @return self
     */
    public function setAccessPointInformation(?DropLocationAccessPointInformation $accessPointInformation) : self
    {
        $this->initialized['accessPointInformation'] = true;
        $this->accessPointInformation = $accessPointInformation;
        return $this;
    }
    /**
     * Location Image container.
     *
     * @return DropLocationLocationImage|null
     */
    public function getLocationImage() : ?DropLocationLocationImage
    {
        return $this->locationImage;
    }
    /**
     * Location Image container.
     *
     * @param DropLocationLocationImage|null $locationImage
     *
     * @return self
     */
    public function setLocationImage(?DropLocationLocationImage $locationImage) : self
    {
        $this->initialized['locationImage'] = true;
        $this->locationImage = $locationImage;
        return $this;
    }
    /**
     * Indicator for new location.
     *
     * @return string|null
     */
    public function getLocationNewIndicator() : ?string
    {
        return $this->locationNewIndicator;
    }
    /**
     * Indicator for new location.
     *
     * @param string|null $locationNewIndicator
     *
     * @return self
     */
    public function setLocationNewIndicator(?string $locationNewIndicator) : self
    {
        $this->initialized['locationNewIndicator'] = true;
        $this->locationNewIndicator = $locationNewIndicator;
        return $this;
    }
    /**
     * Promotional link URL for specific location.
     *
     * @return string|null
     */
    public function getPromotionalLinkURL() : ?string
    {
        return $this->promotionalLinkURL;
    }
    /**
     * Promotional link URL for specific location.
     *
     * @param string|null $promotionalLinkURL
     *
     * @return self
     */
    public function setPromotionalLinkURL(?string $promotionalLinkURL) : self
    {
        $this->initialized['promotionalLinkURL'] = true;
        $this->promotionalLinkURL = $promotionalLinkURL;
        return $this;
    }
    /**
    * Feature Ranking values:
    Null or blank - Location is not featured. 
    1 - Featured Location ranked number 1.
    2 - Featured Location ranked number 2.
    *
    * @return string|null
    */
    public function getFeaturedRank() : ?string
    {
        return $this->featuredRank;
    }
    /**
    * Feature Ranking values:
    Null or blank - Location is not featured. 
    1 - Featured Location ranked number 1.
    2 - Featured Location ranked number 2.
    *
    * @param string|null $featuredRank
    *
    * @return self
    */
    public function setFeaturedRank(?string $featuredRank) : self
    {
        $this->initialized['featuredRank'] = true;
        $this->featuredRank = $featuredRank;
        return $this;
    }
    /**
    * Will Call Location Indicator values:
    Y - Signifies a Will Call location that serves the customers address. 
    N - Signifies it is not a Will Call location.
    Will Call locations are only returned with a "Y" indicator if the request included EnhancedSearchOption code 10.
    *
    * @return string|null
    */
    public function getWillCallLocationIndicator() : ?string
    {
        return $this->willCallLocationIndicator;
    }
    /**
    * Will Call Location Indicator values:
    Y - Signifies a Will Call location that serves the customers address. 
    N - Signifies it is not a Will Call location.
    Will Call locations are only returned with a "Y" indicator if the request included EnhancedSearchOption code 10.
    *
    * @param string|null $willCallLocationIndicator
    *
    * @return self
    */
    public function setWillCallLocationIndicator(?string $willCallLocationIndicator) : self
    {
        $this->initialized['willCallLocationIndicator'] = true;
        $this->willCallLocationIndicator = $willCallLocationIndicator;
        return $this;
    }
}