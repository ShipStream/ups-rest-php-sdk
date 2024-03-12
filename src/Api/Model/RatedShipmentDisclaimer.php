<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentDisclaimer extends \ArrayObject
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
     * Code representing type of Disclaimer. Refer to the Appendix for possible code values.
     *
     * @var string
     */
    protected $code;
    /**
     * Disclaimer description. Please refer to Appendix for possible descriptions.
     *
     * @var string
     */
    protected $description;
    /**
     * Code representing type of Disclaimer. Refer to the Appendix for possible code values.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code representing type of Disclaimer. Refer to the Appendix for possible code values.
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
     * Disclaimer description. Please refer to Appendix for possible descriptions.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Disclaimer description. Please refer to Appendix for possible descriptions.
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