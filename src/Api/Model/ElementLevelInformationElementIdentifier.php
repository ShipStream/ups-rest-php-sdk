<?php

namespace ShipStream\Ups\Api\Model;

class ElementLevelInformationElementIdentifier extends \ArrayObject
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
     * Represents the type of element. Possible values are 'P' and 'C'.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Represents the value of element.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Represents the type of element. Possible values are 'P' and 'C'.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Represents the type of element. Possible values are 'P' and 'C'.
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
     * Represents the value of element.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Represents the value of element.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}