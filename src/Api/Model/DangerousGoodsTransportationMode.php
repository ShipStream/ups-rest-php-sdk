<?php

namespace ShipStream\Ups\Api\Model;

class DangerousGoodsTransportationMode extends \ArrayObject
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
     * The code associated with the transportation mode for the dangerous goods.
     *
     * @var string
     */
    protected $code;
    /**
     * A text description of the code for the transportation mode associated with the dangerous goods.
     *
     * @var string
     */
    protected $description;
    /**
     * The code associated with the transportation mode for the dangerous goods.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The code associated with the transportation mode for the dangerous goods.
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
     * A text description of the code for the transportation mode associated with the dangerous goods.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A text description of the code for the transportation mode associated with the dangerous goods.
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