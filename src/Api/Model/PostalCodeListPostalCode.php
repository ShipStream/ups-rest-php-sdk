<?php

namespace ShipStream\Ups\Api\Model;

class PostalCodeListPostalCode extends \ArrayObject
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
     * Primary postal code.
     *
     * @var string|null
     */
    protected $primaryPostalCode;
    /**
     * Secondary postal code.
     *
     * @var string|null
     */
    protected $secondaryPostalCode;
    /**
     * Primary postal code.
     *
     * @return string|null
     */
    public function getPrimaryPostalCode() : ?string
    {
        return $this->primaryPostalCode;
    }
    /**
     * Primary postal code.
     *
     * @param string|null $primaryPostalCode
     *
     * @return self
     */
    public function setPrimaryPostalCode(?string $primaryPostalCode) : self
    {
        $this->initialized['primaryPostalCode'] = true;
        $this->primaryPostalCode = $primaryPostalCode;
        return $this;
    }
    /**
     * Secondary postal code.
     *
     * @return string|null
     */
    public function getSecondaryPostalCode() : ?string
    {
        return $this->secondaryPostalCode;
    }
    /**
     * Secondary postal code.
     *
     * @param string|null $secondaryPostalCode
     *
     * @return self
     */
    public function setSecondaryPostalCode(?string $secondaryPostalCode) : self
    {
        $this->initialized['secondaryPostalCode'] = true;
        $this->secondaryPostalCode = $secondaryPostalCode;
        return $this;
    }
}