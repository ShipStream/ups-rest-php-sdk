<?php

namespace ShipStream\Ups\Api\Model;

class ShipFromTaxIDType extends \ArrayObject
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
    * Company's tax Identification type.  Valid values: EIN, DNS, and FGN. 
    Applies to EEI form only.
    *
    * @var string|null
    */
    protected $code;
    /**
     * Description of TaxID submitted.  Applies to EEI form only.
     *
     * @var string|null
     */
    protected $description;
    /**
    * Company's tax Identification type.  Valid values: EIN, DNS, and FGN. 
    Applies to EEI form only.
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Company's tax Identification type.  Valid values: EIN, DNS, and FGN. 
    Applies to EEI form only.
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
     * Description of TaxID submitted.  Applies to EEI form only.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of TaxID submitted.  Applies to EEI form only.
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