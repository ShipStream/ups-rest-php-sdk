<?php

namespace ShipStream\Ups\Api\Model;

class ExcludeFromResultPostalCodeList extends \ArrayObject
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
     * 
     *
     * @var list<PostalCodeListPostalCode>|null
     */
    protected $postalCode;
    /**
     * 
     *
     * @return list<PostalCodeListPostalCode>|null
     */
    public function getPostalCode() : ?array
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param list<PostalCodeListPostalCode>|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?array $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
}