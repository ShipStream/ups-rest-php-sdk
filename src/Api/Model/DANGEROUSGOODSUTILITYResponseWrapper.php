<?php

namespace ShipStream\Ups\Api\Model;

class DANGEROUSGOODSUTILITYResponseWrapper extends \ArrayObject
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
     * Dangerous Goods Utility Response container for Chemical Reference Data.
     *
     * @var ChemicalReferenceDataResponse|null
     */
    protected $chemicalReferenceDataResponse;
    /**
     * Dangerous Goods Utility Response container for Chemical Reference Data.
     *
     * @return ChemicalReferenceDataResponse|null
     */
    public function getChemicalReferenceDataResponse() : ?ChemicalReferenceDataResponse
    {
        return $this->chemicalReferenceDataResponse;
    }
    /**
     * Dangerous Goods Utility Response container for Chemical Reference Data.
     *
     * @param ChemicalReferenceDataResponse|null $chemicalReferenceDataResponse
     *
     * @return self
     */
    public function setChemicalReferenceDataResponse(?ChemicalReferenceDataResponse $chemicalReferenceDataResponse) : self
    {
        $this->initialized['chemicalReferenceDataResponse'] = true;
        $this->chemicalReferenceDataResponse = $chemicalReferenceDataResponse;
        return $this;
    }
}