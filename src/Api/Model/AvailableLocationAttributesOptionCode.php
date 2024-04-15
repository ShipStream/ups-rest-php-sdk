<?php

namespace ShipStream\Ups\Api\Model;

class AvailableLocationAttributesOptionCode extends \ArrayObject
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
     * The valid list of codes and description for Retail Locations or Additional Services or Pro-gram Types that are currently available in the database. This can be obtained by a separate type of request (Request Option 8, 16, 24, 32, 40, 48 and 56).
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description is only applicable for Program types and Additional Services. It is not provided with Location detail. It is only provided when the request is for All available additional ser-vices or all available Program types. Text will be displayed in the locale requested.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Name will indicate the name of Location/Retail Location or Additional Services or Program Types depending on the option code. Text will be displayed in the locale requested.
     *
     * @var string|null
     */
    protected $name;
    /**
     * N/A
     *
     * @var string|null
     */
    protected $category;
    /**
     * Container to hold information regarding pickup details for each day of the week.
     *
     * @var OptionCodeTransportationPickUpSchedule|null
     */
    protected $transportationPickUpSchedule;
    /**
     * The valid list of codes and description for Retail Locations or Additional Services or Pro-gram Types that are currently available in the database. This can be obtained by a separate type of request (Request Option 8, 16, 24, 32, 40, 48 and 56).
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The valid list of codes and description for Retail Locations or Additional Services or Pro-gram Types that are currently available in the database. This can be obtained by a separate type of request (Request Option 8, 16, 24, 32, 40, 48 and 56).
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description is only applicable for Program types and Additional Services. It is not provided with Location detail. It is only provided when the request is for All available additional ser-vices or all available Program types. Text will be displayed in the locale requested.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description is only applicable for Program types and Additional Services. It is not provided with Location detail. It is only provided when the request is for All available additional ser-vices or all available Program types. Text will be displayed in the locale requested.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Name will indicate the name of Location/Retail Location or Additional Services or Program Types depending on the option code. Text will be displayed in the locale requested.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name will indicate the name of Location/Retail Location or Additional Services or Program Types depending on the option code. Text will be displayed in the locale requested.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * N/A
     *
     * @return string|null
     */
    public function getCategory() : ?string
    {
        return $this->category;
    }
    /**
     * N/A
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Container to hold information regarding pickup details for each day of the week.
     *
     * @return OptionCodeTransportationPickUpSchedule|null
     */
    public function getTransportationPickUpSchedule() : ?OptionCodeTransportationPickUpSchedule
    {
        return $this->transportationPickUpSchedule;
    }
    /**
     * Container to hold information regarding pickup details for each day of the week.
     *
     * @param OptionCodeTransportationPickUpSchedule|null $transportationPickUpSchedule
     *
     * @return self
     */
    public function setTransportationPickUpSchedule(?OptionCodeTransportationPickUpSchedule $transportationPickUpSchedule) : self
    {
        $this->initialized['transportationPickUpSchedule'] = true;
        $this->transportationPickUpSchedule = $transportationPickUpSchedule;
        return $this;
    }
}