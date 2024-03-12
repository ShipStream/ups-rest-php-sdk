<?php

namespace ShipStream\Ups\Api\Model;

class AdjustedHeightUnitOfMeasurement extends \ArrayObject
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
     * Code associated with the Unit of Measurement for the Adjusted weight.
     *
     * @var string
     */
    protected $code;
    /**
     * Description for the code associated with the Unit of Measurement for the Adjusted weight.
     *
     * @var string
     */
    protected $description;
    /**
     * Code associated with the Unit of Measurement for the Adjusted weight.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code associated with the Unit of Measurement for the Adjusted weight.
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
     * Description for the code associated with the Unit of Measurement for the Adjusted weight.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for the code associated with the Unit of Measurement for the Adjusted weight.
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