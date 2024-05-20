<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestPickupAddress extends \ArrayObject
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
     * Company name
     *
     * @var string
     */
    protected $companyName;
    /**
     * Name of contact person
     *
     * @var string
     */
    protected $contactName;
    /**
     * Detailed street address. For Jan. 2010 release, only one AddressLine is allowed
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Room number
     *
     * @var string
     */
    protected $room;
    /**
     * Floor number
     *
     * @var string
     */
    protected $floor;
    /**
     * City or equivalent
     *
     * @var string
     */
    protected $city;
    /**
     * State or province for postal countries; county for Ireland (IE) and district code for Hong Kong (HK)
     *
     * @var string
     */
    protected $stateProvince;
    /**
    * - Barrio for Mexico (MX)
    - Urbanization for Puerto Rico (PR)
    - Shire for United Kingdom (UK)
    *
    * @var string
    */
    protected $urbanization;
    /**
     * Postal code or equivalent for postal countries
     *
     * @var string
     */
    protected $postalCode;
    /**
    * The pickup country or territory code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @var string
    */
    protected $countryCode;
    /**
    * Indicates if the pickup address is commercial or residential. 
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @var string
    */
    protected $residentialIndicator;
    /**
     * The specific spot to pickup at the address.
     *
     * @var string
     */
    protected $pickupPoint;
    /**
     * Contact telephone number.
     *
     * @var PickupAddressPhone
     */
    protected $phone;
    /**
     * Company name
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Company name
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Name of contact person
     *
     * @return string
     */
    public function getContactName() : string
    {
        return $this->contactName;
    }
    /**
     * Name of contact person
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName(string $contactName) : self
    {
        $this->initialized['contactName'] = true;
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * Detailed street address. For Jan. 2010 release, only one AddressLine is allowed
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Detailed street address. For Jan. 2010 release, only one AddressLine is allowed
     *
     * @param list<string> $addressLine
     *
     * @return self
     */
    public function setAddressLine(array $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * Room number
     *
     * @return string
     */
    public function getRoom() : string
    {
        return $this->room;
    }
    /**
     * Room number
     *
     * @param string $room
     *
     * @return self
     */
    public function setRoom(string $room) : self
    {
        $this->initialized['room'] = true;
        $this->room = $room;
        return $this;
    }
    /**
     * Floor number
     *
     * @return string
     */
    public function getFloor() : string
    {
        return $this->floor;
    }
    /**
     * Floor number
     *
     * @param string $floor
     *
     * @return self
     */
    public function setFloor(string $floor) : self
    {
        $this->initialized['floor'] = true;
        $this->floor = $floor;
        return $this;
    }
    /**
     * City or equivalent
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * City or equivalent
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * State or province for postal countries; county for Ireland (IE) and district code for Hong Kong (HK)
     *
     * @return string
     */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
     * State or province for postal countries; county for Ireland (IE) and district code for Hong Kong (HK)
     *
     * @param string $stateProvince
     *
     * @return self
     */
    public function setStateProvince(string $stateProvince) : self
    {
        $this->initialized['stateProvince'] = true;
        $this->stateProvince = $stateProvince;
        return $this;
    }
    /**
    * - Barrio for Mexico (MX)
    - Urbanization for Puerto Rico (PR)
    - Shire for United Kingdom (UK)
    *
    * @return string
    */
    public function getUrbanization() : string
    {
        return $this->urbanization;
    }
    /**
    * - Barrio for Mexico (MX)
    - Urbanization for Puerto Rico (PR)
    - Shire for United Kingdom (UK)
    *
    * @param string $urbanization
    *
    * @return self
    */
    public function setUrbanization(string $urbanization) : self
    {
        $this->initialized['urbanization'] = true;
        $this->urbanization = $urbanization;
        return $this;
    }
    /**
     * Postal code or equivalent for postal countries
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Postal code or equivalent for postal countries
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
    * The pickup country or territory code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * The pickup country or territory code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.
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
    * Indicates if the pickup address is commercial or residential. 
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @return string
    */
    public function getResidentialIndicator() : string
    {
        return $this->residentialIndicator;
    }
    /**
    * Indicates if the pickup address is commercial or residential. 
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @param string $residentialIndicator
    *
    * @return self
    */
    public function setResidentialIndicator(string $residentialIndicator) : self
    {
        $this->initialized['residentialIndicator'] = true;
        $this->residentialIndicator = $residentialIndicator;
        return $this;
    }
    /**
     * The specific spot to pickup at the address.
     *
     * @return string
     */
    public function getPickupPoint() : string
    {
        return $this->pickupPoint;
    }
    /**
     * The specific spot to pickup at the address.
     *
     * @param string $pickupPoint
     *
     * @return self
     */
    public function setPickupPoint(string $pickupPoint) : self
    {
        $this->initialized['pickupPoint'] = true;
        $this->pickupPoint = $pickupPoint;
        return $this;
    }
    /**
     * Contact telephone number.
     *
     * @return PickupAddressPhone
     */
    public function getPhone() : PickupAddressPhone
    {
        return $this->phone;
    }
    /**
     * Contact telephone number.
     *
     * @param PickupAddressPhone $phone
     *
     * @return self
     */
    public function setPhone(PickupAddressPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
}