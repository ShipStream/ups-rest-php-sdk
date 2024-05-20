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
     * @var string
     */
    protected $locationID;
    /**
    * OriginOrDestination will returned for FreightWillCallRequestType 1 Postal based and 3 City and/or State based search. 
    
    OriginOrDestination will be 01 for origin facilities and 02 for Destination facilities
    *
    * @var string
    */
    protected $originOrDestination;
    /**
    * Integrated Voice Response information. 
    ONLY FOR IVR.
    *
    * @var DropLocationIVR
    */
    protected $iVR;
    /**
     * Geocode is the latitude and longitude of the location address. The Geocode for the location address will be returned when Location is requested in the Request Option.
     *
     * @var DropLocationGeocode
     */
    protected $geocode;
    /**
     * Contains all of the basic information about a location, Consignee Name, Building Name, Address Lines, City, State/Province, Postal Code and Country or Terriotry Code.
     *
     * @var DropLocationAddressKeyFormat
     */
    protected $addressKeyFormat;
    /**
    * The UPS locations Phone number. A phone number of the location will be returned.
    
    10 digits allowed for US, otherwise 1..15 digits allowed.
    
    The phone number will be returned as a string.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @var list<string>
    */
    protected $phoneNumber;
    /**
    * The UPS location's Fax number. A fax number of the location will be returned when available. 
    10 digits allowed for US, otherwise 1..15 digits allowed.
    The fax number will be returned as string.
    *
    * @var string
    */
    protected $faxNumber;
    /**
     * Email address of the UPS location. Returned when available.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
    * OptionType is a container that indicates the type of the location attribute.
    
    There are 4 types of attributes.
    
    They are: Location, Retail Location, Additional Services and Program Type.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @var list<DropLocationLocationAttribute>
    */
    protected $locationAttribute;
    /**
     * Container for the straight line distance from the origin to the UPS location.
     *
     * @var DropLocationDistance
     */
    protected $distance;
    /**
     * Walking directions.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<DropLocationSpecialInstructions>
     */
    protected $specialInstructions;
    /**
    * The latest ground time the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location.
    
    When a user specifies a Drop-off Time and Ground as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @var list<string>
    */
    protected $latestGroundDropOffTime;
    /**
    * The latest airtime the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location.
    
    When a user specifies a Drop-off Time and Air as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @var list<string>
    */
    protected $latestAirDropOffTime;
    /**
     * Presence or Absence Indicator. If present, Indicates if the UPS location would have an additional charge. ASO locations will require an additional charge.
     *
     * @var string
     */
    protected $additionalChargeIndicator;
    /**
     * The standard hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @var string
     */
    protected $standardHoursOfOperation;
    /**
     * The non-standard hours of operation of the drop location. The location's time may differ because of holidays, weekends, or other factors that are beyond the locations control. Seven days preceding a given holiday the Non Standard Hours Of Operation will be returned along with the standard hours of operation if available.
     *
     * @var string
     */
    protected $nonStandardHoursOfOperation;
    /**
     * The will call hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @var string
     */
    protected $willCallHoursOfOperation;
    /**
     * The center number of the drop location if it is The UPS store.
     *
     * @var string
     */
    protected $number;
    /**
     * The home page URL of the drop location if it is The UPS store.
     *
     * @var string
     */
    protected $homePageURL;
    /**
     * Comments returned about the location. Text will be displayed in English or the locale given in the request. If Country Code is FR, and locale passed in the request is "fr_FR" then text will be displayed in French language, else comment will be displayed in English language.
     *
     * @var string
     */
    protected $comments;
    /**
     * Container for Additional Comments about Location.Text will be displayed in the Locale requested.
     *
     * @var DropLocationAdditionalComments
     */
    protected $additionalComments;
    /**
     * Textual disclaimer about the drop location.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<string>
     */
    protected $disclaimer;
    /**
     * SLIC.
     *
     * @var string
     */
    protected $sLIC;
    /**
     * TimeZone.
     *
     * @var string
     */
    protected $timezone;
    /**
     * PKG/FRT.
     *
     * @var string
     */
    protected $facilityType;
    /**
     * Operating Hours.
     *
     * @var DropLocationOperatingHours
     */
    protected $operatingHours;
    /**
     * LocalizedInstruction container. Applicable for SearchOptionCode 01, 02, 03.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<DropLocationLocalizedInstruction>
     */
    protected $localizedInstruction;
    /**
     * Container to hold any promotion text for the location. Text will be displayed in English or the locale given in the request.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<DropLocationPromotionInformation>
     */
    protected $promotionInformation;
    /**
     * This container is only for Freight Will call Search.
     *
     * @var DropLocationSortCode
     */
    protected $sortCode;
    /**
     * Container to hold the list of service offerings at the end point.
     *
     * @var DropLocationServiceOfferingList
     */
    protected $serviceOfferingList;
    /**
    * Valid Values: 
    0-Do not display phone number
    1-Display phone number. 
    This indicator will be returned only for the contact type Telephone number. This indicator is used by the clients to determine whether to display the telephone number to the end user.
    *
    * @var string
    */
    protected $displayPhoneNumberIndicator;
    /**
     * Container for UPS Access Point specific parameters.
     *
     * @var DropLocationAccessPointInformation
     */
    protected $accessPointInformation;
    /**
     * Location Image container.
     *
     * @var DropLocationLocationImage
     */
    protected $locationImage;
    /**
     * Indicator for new location.
     *
     * @var string
     */
    protected $locationNewIndicator;
    /**
     * Promotional link URL for specific location.
     *
     * @var string
     */
    protected $promotionalLinkURL;
    /**
    * Feature Ranking values:
    Null or blank - Location is not featured. 
    1 - Featured Location ranked number 1.
    2 - Featured Location ranked number 2.
    *
    * @var string
    */
    protected $featuredRank;
    /**
    * Will Call Location Indicator values:
    - Y – Signifies a Will Call location that serves the customers address.
    - N - Signifies it is not a Will Call location.
    
    Will Call locations are only returned with a \"Y\" indicator if the request included EnhancedSearchOption code 10.
    
    *
    * @var string
    */
    protected $willCallLocationIndicator;
    /**
     * The location ID that corresponds to the UPS location. Do not expose the Location ID.
     *
     * @return string
     */
    public function getLocationID() : string
    {
        return $this->locationID;
    }
    /**
     * The location ID that corresponds to the UPS location. Do not expose the Location ID.
     *
     * @param string $locationID
     *
     * @return self
     */
    public function setLocationID(string $locationID) : self
    {
        $this->initialized['locationID'] = true;
        $this->locationID = $locationID;
        return $this;
    }
    /**
    * OriginOrDestination will returned for FreightWillCallRequestType 1 Postal based and 3 City and/or State based search. 
    
    OriginOrDestination will be 01 for origin facilities and 02 for Destination facilities
    *
    * @return string
    */
    public function getOriginOrDestination() : string
    {
        return $this->originOrDestination;
    }
    /**
    * OriginOrDestination will returned for FreightWillCallRequestType 1 Postal based and 3 City and/or State based search. 
    
    OriginOrDestination will be 01 for origin facilities and 02 for Destination facilities
    *
    * @param string $originOrDestination
    *
    * @return self
    */
    public function setOriginOrDestination(string $originOrDestination) : self
    {
        $this->initialized['originOrDestination'] = true;
        $this->originOrDestination = $originOrDestination;
        return $this;
    }
    /**
    * Integrated Voice Response information. 
    ONLY FOR IVR.
    *
    * @return DropLocationIVR
    */
    public function getIVR() : DropLocationIVR
    {
        return $this->iVR;
    }
    /**
    * Integrated Voice Response information. 
    ONLY FOR IVR.
    *
    * @param DropLocationIVR $iVR
    *
    * @return self
    */
    public function setIVR(DropLocationIVR $iVR) : self
    {
        $this->initialized['iVR'] = true;
        $this->iVR = $iVR;
        return $this;
    }
    /**
     * Geocode is the latitude and longitude of the location address. The Geocode for the location address will be returned when Location is requested in the Request Option.
     *
     * @return DropLocationGeocode
     */
    public function getGeocode() : DropLocationGeocode
    {
        return $this->geocode;
    }
    /**
     * Geocode is the latitude and longitude of the location address. The Geocode for the location address will be returned when Location is requested in the Request Option.
     *
     * @param DropLocationGeocode $geocode
     *
     * @return self
     */
    public function setGeocode(DropLocationGeocode $geocode) : self
    {
        $this->initialized['geocode'] = true;
        $this->geocode = $geocode;
        return $this;
    }
    /**
     * Contains all of the basic information about a location, Consignee Name, Building Name, Address Lines, City, State/Province, Postal Code and Country or Terriotry Code.
     *
     * @return DropLocationAddressKeyFormat
     */
    public function getAddressKeyFormat() : DropLocationAddressKeyFormat
    {
        return $this->addressKeyFormat;
    }
    /**
     * Contains all of the basic information about a location, Consignee Name, Building Name, Address Lines, City, State/Province, Postal Code and Country or Terriotry Code.
     *
     * @param DropLocationAddressKeyFormat $addressKeyFormat
     *
     * @return self
     */
    public function setAddressKeyFormat(DropLocationAddressKeyFormat $addressKeyFormat) : self
    {
        $this->initialized['addressKeyFormat'] = true;
        $this->addressKeyFormat = $addressKeyFormat;
        return $this;
    }
    /**
    * The UPS locations Phone number. A phone number of the location will be returned.
    
    10 digits allowed for US, otherwise 1..15 digits allowed.
    
    The phone number will be returned as a string.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @return list<string>
    */
    public function getPhoneNumber() : array
    {
        return $this->phoneNumber;
    }
    /**
    * The UPS locations Phone number. A phone number of the location will be returned.
    
    10 digits allowed for US, otherwise 1..15 digits allowed.
    
    The phone number will be returned as a string.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @param list<string> $phoneNumber
    *
    * @return self
    */
    public function setPhoneNumber(array $phoneNumber) : self
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
    * @return string
    */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
    * The UPS location's Fax number. A fax number of the location will be returned when available. 
    10 digits allowed for US, otherwise 1..15 digits allowed.
    The fax number will be returned as string.
    *
    * @param string $faxNumber
    *
    * @return self
    */
    public function setFaxNumber(string $faxNumber) : self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**
     * Email address of the UPS location. Returned when available.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Email address of the UPS location. Returned when available.
     *
     * @param string $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
    * OptionType is a container that indicates the type of the location attribute.
    
    There are 4 types of attributes.
    
    They are: Location, Retail Location, Additional Services and Program Type.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @return list<DropLocationLocationAttribute>
    */
    public function getLocationAttribute() : array
    {
        return $this->locationAttribute;
    }
    /**
    * OptionType is a container that indicates the type of the location attribute.
    
    There are 4 types of attributes.
    
    They are: Location, Retail Location, Additional Services and Program Type.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @param list<DropLocationLocationAttribute> $locationAttribute
    *
    * @return self
    */
    public function setLocationAttribute(array $locationAttribute) : self
    {
        $this->initialized['locationAttribute'] = true;
        $this->locationAttribute = $locationAttribute;
        return $this;
    }
    /**
     * Container for the straight line distance from the origin to the UPS location.
     *
     * @return DropLocationDistance
     */
    public function getDistance() : DropLocationDistance
    {
        return $this->distance;
    }
    /**
     * Container for the straight line distance from the origin to the UPS location.
     *
     * @param DropLocationDistance $distance
     *
     * @return self
     */
    public function setDistance(DropLocationDistance $distance) : self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * Walking directions.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<DropLocationSpecialInstructions>
     */
    public function getSpecialInstructions() : array
    {
        return $this->specialInstructions;
    }
    /**
     * Walking directions.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<DropLocationSpecialInstructions> $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(array $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
    * The latest ground time the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location.
    
    When a user specifies a Drop-off Time and Ground as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @return list<string>
    */
    public function getLatestGroundDropOffTime() : array
    {
        return $this->latestGroundDropOffTime;
    }
    /**
    * The latest ground time the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location.
    
    When a user specifies a Drop-off Time and Ground as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @param list<string> $latestGroundDropOffTime
    *
    * @return self
    */
    public function setLatestGroundDropOffTime(array $latestGroundDropOffTime) : self
    {
        $this->initialized['latestGroundDropOffTime'] = true;
        $this->latestGroundDropOffTime = $latestGroundDropOffTime;
        return $this;
    }
    /**
    * The latest airtime the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location.
    
    When a user specifies a Drop-off Time and Air as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @return list<string>
    */
    public function getLatestAirDropOffTime() : array
    {
        return $this->latestAirDropOffTime;
    }
    /**
    * The latest airtime the users can Drop-off the package at the location to be picked up. The time information is based on the time at the UPS location.
    
    When a user specifies a Drop-off Time and Air as the Service Type, the locations that have latest Drop-off times equal to or later than the specified Drop-off time and service type are returned.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @param list<string> $latestAirDropOffTime
    *
    * @return self
    */
    public function setLatestAirDropOffTime(array $latestAirDropOffTime) : self
    {
        $this->initialized['latestAirDropOffTime'] = true;
        $this->latestAirDropOffTime = $latestAirDropOffTime;
        return $this;
    }
    /**
     * Presence or Absence Indicator. If present, Indicates if the UPS location would have an additional charge. ASO locations will require an additional charge.
     *
     * @return string
     */
    public function getAdditionalChargeIndicator() : string
    {
        return $this->additionalChargeIndicator;
    }
    /**
     * Presence or Absence Indicator. If present, Indicates if the UPS location would have an additional charge. ASO locations will require an additional charge.
     *
     * @param string $additionalChargeIndicator
     *
     * @return self
     */
    public function setAdditionalChargeIndicator(string $additionalChargeIndicator) : self
    {
        $this->initialized['additionalChargeIndicator'] = true;
        $this->additionalChargeIndicator = $additionalChargeIndicator;
        return $this;
    }
    /**
     * The standard hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @return string
     */
    public function getStandardHoursOfOperation() : string
    {
        return $this->standardHoursOfOperation;
    }
    /**
     * The standard hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @param string $standardHoursOfOperation
     *
     * @return self
     */
    public function setStandardHoursOfOperation(string $standardHoursOfOperation) : self
    {
        $this->initialized['standardHoursOfOperation'] = true;
        $this->standardHoursOfOperation = $standardHoursOfOperation;
        return $this;
    }
    /**
     * The non-standard hours of operation of the drop location. The location's time may differ because of holidays, weekends, or other factors that are beyond the locations control. Seven days preceding a given holiday the Non Standard Hours Of Operation will be returned along with the standard hours of operation if available.
     *
     * @return string
     */
    public function getNonStandardHoursOfOperation() : string
    {
        return $this->nonStandardHoursOfOperation;
    }
    /**
     * The non-standard hours of operation of the drop location. The location's time may differ because of holidays, weekends, or other factors that are beyond the locations control. Seven days preceding a given holiday the Non Standard Hours Of Operation will be returned along with the standard hours of operation if available.
     *
     * @param string $nonStandardHoursOfOperation
     *
     * @return self
     */
    public function setNonStandardHoursOfOperation(string $nonStandardHoursOfOperation) : self
    {
        $this->initialized['nonStandardHoursOfOperation'] = true;
        $this->nonStandardHoursOfOperation = $nonStandardHoursOfOperation;
        return $this;
    }
    /**
     * The will call hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @return string
     */
    public function getWillCallHoursOfOperation() : string
    {
        return $this->willCallHoursOfOperation;
    }
    /**
     * The will call hours of operation of the drop location will be returned when available. The location's time may differ because of holidays.
     *
     * @param string $willCallHoursOfOperation
     *
     * @return self
     */
    public function setWillCallHoursOfOperation(string $willCallHoursOfOperation) : self
    {
        $this->initialized['willCallHoursOfOperation'] = true;
        $this->willCallHoursOfOperation = $willCallHoursOfOperation;
        return $this;
    }
    /**
     * The center number of the drop location if it is The UPS store.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The center number of the drop location if it is The UPS store.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The home page URL of the drop location if it is The UPS store.
     *
     * @return string
     */
    public function getHomePageURL() : string
    {
        return $this->homePageURL;
    }
    /**
     * The home page URL of the drop location if it is The UPS store.
     *
     * @param string $homePageURL
     *
     * @return self
     */
    public function setHomePageURL(string $homePageURL) : self
    {
        $this->initialized['homePageURL'] = true;
        $this->homePageURL = $homePageURL;
        return $this;
    }
    /**
     * Comments returned about the location. Text will be displayed in English or the locale given in the request. If Country Code is FR, and locale passed in the request is "fr_FR" then text will be displayed in French language, else comment will be displayed in English language.
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * Comments returned about the location. Text will be displayed in English or the locale given in the request. If Country Code is FR, and locale passed in the request is "fr_FR" then text will be displayed in French language, else comment will be displayed in English language.
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * Container for Additional Comments about Location.Text will be displayed in the Locale requested.
     *
     * @return DropLocationAdditionalComments
     */
    public function getAdditionalComments() : DropLocationAdditionalComments
    {
        return $this->additionalComments;
    }
    /**
     * Container for Additional Comments about Location.Text will be displayed in the Locale requested.
     *
     * @param DropLocationAdditionalComments $additionalComments
     *
     * @return self
     */
    public function setAdditionalComments(DropLocationAdditionalComments $additionalComments) : self
    {
        $this->initialized['additionalComments'] = true;
        $this->additionalComments = $additionalComments;
        return $this;
    }
    /**
     * Textual disclaimer about the drop location.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<string>
     */
    public function getDisclaimer() : array
    {
        return $this->disclaimer;
    }
    /**
     * Textual disclaimer about the drop location.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<string> $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(array $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * SLIC.
     *
     * @return string
     */
    public function getSLIC() : string
    {
        return $this->sLIC;
    }
    /**
     * SLIC.
     *
     * @param string $sLIC
     *
     * @return self
     */
    public function setSLIC(string $sLIC) : self
    {
        $this->initialized['sLIC'] = true;
        $this->sLIC = $sLIC;
        return $this;
    }
    /**
     * TimeZone.
     *
     * @return string
     */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * TimeZone.
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone) : self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * PKG/FRT.
     *
     * @return string
     */
    public function getFacilityType() : string
    {
        return $this->facilityType;
    }
    /**
     * PKG/FRT.
     *
     * @param string $facilityType
     *
     * @return self
     */
    public function setFacilityType(string $facilityType) : self
    {
        $this->initialized['facilityType'] = true;
        $this->facilityType = $facilityType;
        return $this;
    }
    /**
     * Operating Hours.
     *
     * @return DropLocationOperatingHours
     */
    public function getOperatingHours() : DropLocationOperatingHours
    {
        return $this->operatingHours;
    }
    /**
     * Operating Hours.
     *
     * @param DropLocationOperatingHours $operatingHours
     *
     * @return self
     */
    public function setOperatingHours(DropLocationOperatingHours $operatingHours) : self
    {
        $this->initialized['operatingHours'] = true;
        $this->operatingHours = $operatingHours;
        return $this;
    }
    /**
     * LocalizedInstruction container. Applicable for SearchOptionCode 01, 02, 03.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<DropLocationLocalizedInstruction>
     */
    public function getLocalizedInstruction() : array
    {
        return $this->localizedInstruction;
    }
    /**
     * LocalizedInstruction container. Applicable for SearchOptionCode 01, 02, 03.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<DropLocationLocalizedInstruction> $localizedInstruction
     *
     * @return self
     */
    public function setLocalizedInstruction(array $localizedInstruction) : self
    {
        $this->initialized['localizedInstruction'] = true;
        $this->localizedInstruction = $localizedInstruction;
        return $this;
    }
    /**
     * Container to hold any promotion text for the location. Text will be displayed in English or the locale given in the request.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<DropLocationPromotionInformation>
     */
    public function getPromotionInformation() : array
    {
        return $this->promotionInformation;
    }
    /**
     * Container to hold any promotion text for the location. Text will be displayed in English or the locale given in the request.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<DropLocationPromotionInformation> $promotionInformation
     *
     * @return self
     */
    public function setPromotionInformation(array $promotionInformation) : self
    {
        $this->initialized['promotionInformation'] = true;
        $this->promotionInformation = $promotionInformation;
        return $this;
    }
    /**
     * This container is only for Freight Will call Search.
     *
     * @return DropLocationSortCode
     */
    public function getSortCode() : DropLocationSortCode
    {
        return $this->sortCode;
    }
    /**
     * This container is only for Freight Will call Search.
     *
     * @param DropLocationSortCode $sortCode
     *
     * @return self
     */
    public function setSortCode(DropLocationSortCode $sortCode) : self
    {
        $this->initialized['sortCode'] = true;
        $this->sortCode = $sortCode;
        return $this;
    }
    /**
     * Container to hold the list of service offerings at the end point.
     *
     * @return DropLocationServiceOfferingList
     */
    public function getServiceOfferingList() : DropLocationServiceOfferingList
    {
        return $this->serviceOfferingList;
    }
    /**
     * Container to hold the list of service offerings at the end point.
     *
     * @param DropLocationServiceOfferingList $serviceOfferingList
     *
     * @return self
     */
    public function setServiceOfferingList(DropLocationServiceOfferingList $serviceOfferingList) : self
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
    * @return string
    */
    public function getDisplayPhoneNumberIndicator() : string
    {
        return $this->displayPhoneNumberIndicator;
    }
    /**
    * Valid Values: 
    0-Do not display phone number
    1-Display phone number. 
    This indicator will be returned only for the contact type Telephone number. This indicator is used by the clients to determine whether to display the telephone number to the end user.
    *
    * @param string $displayPhoneNumberIndicator
    *
    * @return self
    */
    public function setDisplayPhoneNumberIndicator(string $displayPhoneNumberIndicator) : self
    {
        $this->initialized['displayPhoneNumberIndicator'] = true;
        $this->displayPhoneNumberIndicator = $displayPhoneNumberIndicator;
        return $this;
    }
    /**
     * Container for UPS Access Point specific parameters.
     *
     * @return DropLocationAccessPointInformation
     */
    public function getAccessPointInformation() : DropLocationAccessPointInformation
    {
        return $this->accessPointInformation;
    }
    /**
     * Container for UPS Access Point specific parameters.
     *
     * @param DropLocationAccessPointInformation $accessPointInformation
     *
     * @return self
     */
    public function setAccessPointInformation(DropLocationAccessPointInformation $accessPointInformation) : self
    {
        $this->initialized['accessPointInformation'] = true;
        $this->accessPointInformation = $accessPointInformation;
        return $this;
    }
    /**
     * Location Image container.
     *
     * @return DropLocationLocationImage
     */
    public function getLocationImage() : DropLocationLocationImage
    {
        return $this->locationImage;
    }
    /**
     * Location Image container.
     *
     * @param DropLocationLocationImage $locationImage
     *
     * @return self
     */
    public function setLocationImage(DropLocationLocationImage $locationImage) : self
    {
        $this->initialized['locationImage'] = true;
        $this->locationImage = $locationImage;
        return $this;
    }
    /**
     * Indicator for new location.
     *
     * @return string
     */
    public function getLocationNewIndicator() : string
    {
        return $this->locationNewIndicator;
    }
    /**
     * Indicator for new location.
     *
     * @param string $locationNewIndicator
     *
     * @return self
     */
    public function setLocationNewIndicator(string $locationNewIndicator) : self
    {
        $this->initialized['locationNewIndicator'] = true;
        $this->locationNewIndicator = $locationNewIndicator;
        return $this;
    }
    /**
     * Promotional link URL for specific location.
     *
     * @return string
     */
    public function getPromotionalLinkURL() : string
    {
        return $this->promotionalLinkURL;
    }
    /**
     * Promotional link URL for specific location.
     *
     * @param string $promotionalLinkURL
     *
     * @return self
     */
    public function setPromotionalLinkURL(string $promotionalLinkURL) : self
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
    * @return string
    */
    public function getFeaturedRank() : string
    {
        return $this->featuredRank;
    }
    /**
    * Feature Ranking values:
    Null or blank - Location is not featured. 
    1 - Featured Location ranked number 1.
    2 - Featured Location ranked number 2.
    *
    * @param string $featuredRank
    *
    * @return self
    */
    public function setFeaturedRank(string $featuredRank) : self
    {
        $this->initialized['featuredRank'] = true;
        $this->featuredRank = $featuredRank;
        return $this;
    }
    /**
    * Will Call Location Indicator values:
    - Y – Signifies a Will Call location that serves the customers address.
    - N - Signifies it is not a Will Call location.
    
    Will Call locations are only returned with a \"Y\" indicator if the request included EnhancedSearchOption code 10.
    
    *
    * @return string
    */
    public function getWillCallLocationIndicator() : string
    {
        return $this->willCallLocationIndicator;
    }
    /**
    * Will Call Location Indicator values:
    - Y – Signifies a Will Call location that serves the customers address.
    - N - Signifies it is not a Will Call location.
    
    Will Call locations are only returned with a \"Y\" indicator if the request included EnhancedSearchOption code 10.
    
    *
    * @param string $willCallLocationIndicator
    *
    * @return self
    */
    public function setWillCallLocationIndicator(string $willCallLocationIndicator) : self
    {
        $this->initialized['willCallLocationIndicator'] = true;
        $this->willCallLocationIndicator = $willCallLocationIndicator;
        return $this;
    }
}