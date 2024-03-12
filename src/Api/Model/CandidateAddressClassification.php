<?php

namespace ShipStream\Ups\Api\Model;

class CandidateAddressClassification extends \ArrayObject
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
    * Contains the classification code of the address:
    0 - UnClassified
    1 - Commercial
    2 - Residential
    *
    * @var string
    */
    protected $code;
    /**
     * Contains the text description of the address classification code (see Code above).
     *
     * @var string
     */
    protected $description;
    /**
    * Contains the classification code of the address:
    0 - UnClassified
    1 - Commercial
    2 - Residential
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Contains the classification code of the address:
    0 - UnClassified
    1 - Commercial
    2 - Residential
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Contains the text description of the address classification code (see Code above).
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Contains the text description of the address classification code (see Code above).
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}