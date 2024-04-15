<?php

namespace ShipStream\Ups\Api\Model;

class GenericShipTo extends \ArrayObject
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
     * Location name that the package is shipped to.
     *
     * @var string|null
     */
    protected $locationID;
    /**
     * Alias of the location where the package is received.
     *
     * @var string|null
     */
    protected $receivingAddressName;
    /**
     * Bookmark of the package is shifted to.
     *
     * @var string|null
     */
    protected $bookmark;
    /**
     * Location name that the package is shipped to.
     *
     * @return string|null
     */
    public function getLocationID() : ?string
    {
        return $this->locationID;
    }
    /**
     * Location name that the package is shipped to.
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
     * Alias of the location where the package is received.
     *
     * @return string|null
     */
    public function getReceivingAddressName() : ?string
    {
        return $this->receivingAddressName;
    }
    /**
     * Alias of the location where the package is received.
     *
     * @param string|null $receivingAddressName
     *
     * @return self
     */
    public function setReceivingAddressName(?string $receivingAddressName) : self
    {
        $this->initialized['receivingAddressName'] = true;
        $this->receivingAddressName = $receivingAddressName;
        return $this;
    }
    /**
     * Bookmark of the package is shifted to.
     *
     * @return string|null
     */
    public function getBookmark() : ?string
    {
        return $this->bookmark;
    }
    /**
     * Bookmark of the package is shifted to.
     *
     * @param string|null $bookmark
     *
     * @return self
     */
    public function setBookmark(?string $bookmark) : self
    {
        $this->initialized['bookmark'] = true;
        $this->bookmark = $bookmark;
        return $this;
    }
}