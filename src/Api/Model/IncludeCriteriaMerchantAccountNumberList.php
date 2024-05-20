<?php

namespace ShipStream\Ups\Api\Model;

class IncludeCriteriaMerchantAccountNumberList extends \ArrayObject
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
     * Account number to be used for a private network access point search where a UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @var list<string>
     */
    protected $merchantAccountNumber;
    /**
     * Account number to be used for a private network access point search where a UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @return list<string>
     */
    public function getMerchantAccountNumber() : array
    {
        return $this->merchantAccountNumber;
    }
    /**
     * Account number to be used for a private network access point search where a UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @param list<string> $merchantAccountNumber
     *
     * @return self
     */
    public function setMerchantAccountNumber(array $merchantAccountNumber) : self
    {
        $this->initialized['merchantAccountNumber'] = true;
        $this->merchantAccountNumber = $merchantAccountNumber;
        return $this;
    }
}