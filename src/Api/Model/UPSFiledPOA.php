<?php

namespace ShipStream\Ups\Api\Model;

class UPSFiledPOA extends \ArrayObject
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
     * Indicates the EEI UPS Filed POA filing option.  Applicable for EEI form. Valid values are 1- One Time POA; 2- Blanket POA.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description for POA Code.  Applicable for EEI form.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Indicates the EEI UPS Filed POA filing option.  Applicable for EEI form. Valid values are 1- One Time POA; 2- Blanket POA.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Indicates the EEI UPS Filed POA filing option.  Applicable for EEI form. Valid values are 1- One Time POA; 2- Blanket POA.
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
     * Description for POA Code.  Applicable for EEI form.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description for POA Code.  Applicable for EEI form.
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