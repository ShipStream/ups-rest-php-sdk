<?php

namespace ShipStream\Ups\Api\Model;

class RatePackageServiceOptionsDryIce extends \ArrayObject
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
     * Regulation set for DryIce Shipment. Valid values: CFR = For HazMat regulated by US Dept of Transportation within the U.S. or ground shipments to Canada,IATA = For Worldwide Air movement.   The following values are valid: CFR and IATA.
     *
     * @var string
     */
    protected $regulationSet;
    /**
     * Container for Dry Ice weight.
     *
     * @var DryIceDryIceWeight
     */
    protected $dryIceWeight;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the Dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 KGS or 5.5 LBS.
     *
     * @var string
     */
    protected $medicalUseIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Indicates a Dry Ice audit will be performed per the Regulation Set requirements. Empty tag means indicator is present.
     *
     * @var string
     */
    protected $auditRequired;
    /**
     * Regulation set for DryIce Shipment. Valid values: CFR = For HazMat regulated by US Dept of Transportation within the U.S. or ground shipments to Canada,IATA = For Worldwide Air movement.   The following values are valid: CFR and IATA.
     *
     * @return string
     */
    public function getRegulationSet() : string
    {
        return $this->regulationSet;
    }
    /**
     * Regulation set for DryIce Shipment. Valid values: CFR = For HazMat regulated by US Dept of Transportation within the U.S. or ground shipments to Canada,IATA = For Worldwide Air movement.   The following values are valid: CFR and IATA.
     *
     * @param string $regulationSet
     *
     * @return self
     */
    public function setRegulationSet(string $regulationSet) : self
    {
        $this->initialized['regulationSet'] = true;
        $this->regulationSet = $regulationSet;
        return $this;
    }
    /**
     * Container for Dry Ice weight.
     *
     * @return DryIceDryIceWeight
     */
    public function getDryIceWeight() : DryIceDryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * Container for Dry Ice weight.
     *
     * @param DryIceDryIceWeight $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(DryIceDryIceWeight $dryIceWeight) : self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the Dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 KGS or 5.5 LBS.
     *
     * @return string
     */
    public function getMedicalUseIndicator() : string
    {
        return $this->medicalUseIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the Dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 KGS or 5.5 LBS.
     *
     * @param string $medicalUseIndicator
     *
     * @return self
     */
    public function setMedicalUseIndicator(string $medicalUseIndicator) : self
    {
        $this->initialized['medicalUseIndicator'] = true;
        $this->medicalUseIndicator = $medicalUseIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Indicates a Dry Ice audit will be performed per the Regulation Set requirements. Empty tag means indicator is present.
     *
     * @return string
     */
    public function getAuditRequired() : string
    {
        return $this->auditRequired;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Indicates a Dry Ice audit will be performed per the Regulation Set requirements. Empty tag means indicator is present.
     *
     * @param string $auditRequired
     *
     * @return self
     */
    public function setAuditRequired(string $auditRequired) : self
    {
        $this->initialized['auditRequired'] = true;
        $this->auditRequired = $auditRequired;
        return $this;
    }
}