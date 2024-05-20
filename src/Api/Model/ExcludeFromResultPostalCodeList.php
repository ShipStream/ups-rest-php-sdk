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
     * @var list<PostalCodeListPostalCode>
     */
    protected $postalCode;
    /**
     * 
     *
     * @return list<PostalCodeListPostalCode>
     */
    public function getPostalCode() : array
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param list<PostalCodeListPostalCode> $postalCode
     *
     * @return self
     */
    public function setPostalCode(array $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
}