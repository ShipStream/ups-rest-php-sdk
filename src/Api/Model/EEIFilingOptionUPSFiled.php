<?php

namespace ShipStream\Ups\Api\Model;

class EEIFilingOptionUPSFiled extends \ArrayObject
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
     * Container for POA.  Applicable for EEI form.
     *
     * @var UPSFiledPOA
     */
    protected $pOA;
    /**
     * Container for POA.  Applicable for EEI form.
     *
     * @return UPSFiledPOA
     */
    public function getPOA() : UPSFiledPOA
    {
        return $this->pOA;
    }
    /**
     * Container for POA.  Applicable for EEI form.
     *
     * @param UPSFiledPOA $pOA
     *
     * @return self
     */
    public function setPOA(UPSFiledPOA $pOA) : self
    {
        $this->initialized['pOA'] = true;
        $this->pOA = $pOA;
        return $this;
    }
}