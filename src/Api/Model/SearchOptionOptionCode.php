<?php

namespace ShipStream\Ups\Api\Model;

class SearchOptionOptionCode extends \ArrayObject
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
}