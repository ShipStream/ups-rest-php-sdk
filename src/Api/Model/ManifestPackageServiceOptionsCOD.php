<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackageServiceOptionsCOD extends \ArrayObject
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
    * The code associated with the type of COD. Valid values:
    1 - Regular COD
    2 - Express COD
    3 - Tagless COD
    *
    * @var string|null
    */
    protected $cODCode;
    /**
     * COD Amount container.
     *
     * @var CODCODAmount|null
     */
    protected $cODAmount;
    /**
    * The code associated with the type of COD. Valid values:
    1 - Regular COD
    2 - Express COD
    3 - Tagless COD
    *
    * @return string|null
    */
    public function getCODCode() : ?string
    {
        return $this->cODCode;
    }
    /**
    * The code associated with the type of COD. Valid values:
    1 - Regular COD
    2 - Express COD
    3 - Tagless COD
    *
    * @param string|null $cODCode
    *
    * @return self
    */
    public function setCODCode(?string $cODCode) : self
    {
        $this->initialized['cODCode'] = true;
        $this->cODCode = $cODCode;
        return $this;
    }
    /**
     * COD Amount container.
     *
     * @return CODCODAmount|null
     */
    public function getCODAmount() : ?CODCODAmount
    {
        return $this->cODAmount;
    }
    /**
     * COD Amount container.
     *
     * @param CODCODAmount|null $cODAmount
     *
     * @return self
     */
    public function setCODAmount(?CODCODAmount $cODAmount) : self
    {
        $this->initialized['cODAmount'] = true;
        $this->cODAmount = $cODAmount;
        return $this;
    }
}