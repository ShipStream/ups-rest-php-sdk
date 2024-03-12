<?php

namespace ShipStream\Ups\Api\Model;

class LabelSpecificationInstruction extends \ArrayObject
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
     * For Exchange Forward Shipment, by default Label will have Exchange Routing instruction Text as EXCHANGE-LIKE ITEM ONLY. If code value is: 01- EXCHANGE-LIKE ITEM ONLY, 02- EXCHANGE-DRIVER INSTRUCTIONS INSIDE.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of the label Instruction code.
     *
     * @var string
     */
    protected $description;
    /**
     * For Exchange Forward Shipment, by default Label will have Exchange Routing instruction Text as EXCHANGE-LIKE ITEM ONLY. If code value is: 01- EXCHANGE-LIKE ITEM ONLY, 02- EXCHANGE-DRIVER INSTRUCTIONS INSIDE.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * For Exchange Forward Shipment, by default Label will have Exchange Routing instruction Text as EXCHANGE-LIKE ITEM ONLY. If code value is: 01- EXCHANGE-LIKE ITEM ONLY, 02- EXCHANGE-DRIVER INSTRUCTIONS INSIDE.
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
     * Description of the label Instruction code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the label Instruction code.
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