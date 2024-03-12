<?php

namespace ShipStream\Ups\Api\Model;

class DANGEROUSGOODSUTILITYRequestWrapper extends \ArrayObject
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
     * Dangerous Goods Utility Request container for Chemical Reference Data.
     *
     * @var ChemicalReferenceDataRequest
     */
    protected $chemicalReferenceDataRequest;
    /**
     * Dangerous Goods Utility Request container for Chemical Reference Data.
     *
     * @return ChemicalReferenceDataRequest
     */
    public function getChemicalReferenceDataRequest() : ChemicalReferenceDataRequest
    {
        return $this->chemicalReferenceDataRequest;
    }
    /**
     * Dangerous Goods Utility Request container for Chemical Reference Data.
     *
     * @param ChemicalReferenceDataRequest $chemicalReferenceDataRequest
     *
     * @return self
     */
    public function setChemicalReferenceDataRequest(ChemicalReferenceDataRequest $chemicalReferenceDataRequest) : self
    {
        $this->initialized['chemicalReferenceDataRequest'] = true;
        $this->chemicalReferenceDataRequest = $chemicalReferenceDataRequest;
        return $this;
    }
}