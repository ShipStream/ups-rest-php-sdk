<?php

namespace ShipStream\Ups\Api\Model;

class ProductExcludeFromForm extends \ArrayObject
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
     * Indicates the name of the International form requested to NOT have product information.  Possible Values are 04 – NAFTA CO.  Please note that if this is used and you DO NOT have the corresponding form type requested this will be IGNORED.
     *
     * @var list<string>
     */
    protected $formType;
    /**
     * Indicates the name of the International form requested to NOT have product information.  Possible Values are 04 – NAFTA CO.  Please note that if this is used and you DO NOT have the corresponding form type requested this will be IGNORED.
     *
     * @return list<string>
     */
    public function getFormType() : array
    {
        return $this->formType;
    }
    /**
     * Indicates the name of the International form requested to NOT have product information.  Possible Values are 04 – NAFTA CO.  Please note that if this is used and you DO NOT have the corresponding form type requested this will be IGNORED.
     *
     * @param list<string> $formType
     *
     * @return self
     */
    public function setFormType(array $formType) : self
    {
        $this->initialized['formType'] = true;
        $this->formType = $formType;
        return $this;
    }
}