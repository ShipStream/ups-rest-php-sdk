<?php

namespace ShipStream\Ups\Api\Model;

class ProductPackingListInfo extends \ArrayObject
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
     * @var list<PackingListInfoPackageAssociated>
     */
    protected $packageAssociated;
    /**
     * 
     *
     * @return list<PackingListInfoPackageAssociated>
     */
    public function getPackageAssociated() : array
    {
        return $this->packageAssociated;
    }
    /**
     * 
     *
     * @param list<PackingListInfoPackageAssociated> $packageAssociated
     *
     * @return self
     */
    public function setPackageAssociated(array $packageAssociated) : self
    {
        $this->initialized['packageAssociated'] = true;
        $this->packageAssociated = $packageAssociated;
        return $this;
    }
}