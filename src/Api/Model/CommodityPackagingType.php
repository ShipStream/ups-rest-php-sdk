<?php

namespace ShipStream\Ups\Api\Model;

class CommodityPackagingType extends \ArrayObject
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
    * Code associated with the Packaging Type.
    Refer to Packaging Types in the Appendix for valid values.
    *
    * @var string
    */
    protected $code;
    /**
     * Description for the code associated with the Packaging Type.
     *
     * @var string
     */
    protected $description;
    /**
    * Code associated with the Packaging Type.
    Refer to Packaging Types in the Appendix for valid values.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code associated with the Packaging Type.
    Refer to Packaging Types in the Appendix for valid values.
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
     * Description for the code associated with the Packaging Type.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for the code associated with the Packaging Type.
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