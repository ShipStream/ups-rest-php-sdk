<?php

namespace ShipStream\Ups\Api\Model;

class PackageLevelResultStatus extends \ArrayObject
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
     * The Package Level void status code.  A numeric value that describes the status code. 1 = Voided or Already Voided;  0 = Not Voided
     *
     * @var string|null
     */
    protected $code;
    /**
     * A text description of the status code.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The Package Level void status code.  A numeric value that describes the status code. 1 = Voided or Already Voided;  0 = Not Voided
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The Package Level void status code.  A numeric value that describes the status code. 1 = Voided or Already Voided;  0 = Not Voided
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
     * A text description of the status code.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A text description of the status code.
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
}