<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalReferenceDataResponse extends \ArrayObject
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
     * Contains Dangerous Goods Utility Chemical Reference Data response components.
     *
     * @var ChemicalReferenceDataResponseResponse|null
     */
    protected $response;
    /**
     * 
     *
     * @var list<ChemicalReferenceDataResponseChemicalData>|null
     */
    protected $chemicalData;
    /**
     * Contains Dangerous Goods Utility Chemical Reference Data response components.
     *
     * @return ChemicalReferenceDataResponseResponse|null
     */
    public function getResponse() : ?ChemicalReferenceDataResponseResponse
    {
        return $this->response;
    }
    /**
     * Contains Dangerous Goods Utility Chemical Reference Data response components.
     *
     * @param ChemicalReferenceDataResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?ChemicalReferenceDataResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return list<ChemicalReferenceDataResponseChemicalData>|null
     */
    public function getChemicalData() : ?array
    {
        return $this->chemicalData;
    }
    /**
     * 
     *
     * @param list<ChemicalReferenceDataResponseChemicalData>|null $chemicalData
     *
     * @return self
     */
    public function setChemicalData(?array $chemicalData) : self
    {
        $this->initialized['chemicalData'] = true;
        $this->chemicalData = $chemicalData;
        return $this;
    }
}