<?php

namespace ShipStream\Ups\Api\Model;

class ReceiptSpecificationImageFormat extends \ArrayObject
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
     * Print code that determines the receipt format. Valid Codes are: EPL, SPL, ZPL and HTML.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of the receipt format code.
     *
     * @var string
     */
    protected $description;
    /**
     * Print code that determines the receipt format. Valid Codes are: EPL, SPL, ZPL and HTML.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Print code that determines the receipt format. Valid Codes are: EPL, SPL, ZPL and HTML.
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
     * Description of the receipt format code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the receipt format code.
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