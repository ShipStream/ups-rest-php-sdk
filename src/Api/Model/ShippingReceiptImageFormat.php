<?php

namespace ShipStream\Ups\Api\Model;

class ShippingReceiptImageFormat extends \ArrayObject
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
     * Code representing the format in which a receipt is delivered. Valid values: HTML = HTML format.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description of the image format.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code representing the format in which a receipt is delivered. Valid values: HTML = HTML format.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code representing the format in which a receipt is delivered. Valid values: HTML = HTML format.
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
     * Description of the image format.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the image format.
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