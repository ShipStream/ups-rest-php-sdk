<?php

namespace ShipStream\Ups\Api\Model;

class EEIInformationDDTCInformation extends \ArrayObject
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
    * The specific citation (exemption number) under the International Traffic in Arms Regulations (ITAR) from the Code of Federal Register (see 22 CFR 120-130) that exempts the shipment from the requirements for a license or other written authorization from the Directorate of Trade Controls (DDTC). 
    Refer to EEI License Codes in the Appendix for valid values.  Applies to EEI Form only. This field is applicable for EEIFiling option 1A and 3.
    *
    * @var string|null
    */
    protected $iTARExemptionNumber;
    /**
     * Digit numeric code (e.g. 01-18, 20 or 21). Indicates the U.S. Munitions List (USML) category article, service or related technical data as it applies to the article reported.  Applies to EEI form only. It is required for EEIFilingOption code 3.
     *
     * @var string|null
     */
    protected $uSMLCategoryCode;
    /**
     * Presence/Absent indicator. Certification by the U.S. exporter that the exporter is an eligible party to participate in the defense trade.
     *
     * @var string|null
     */
    protected $eligiblePartyIndicator;
    /**
     * It is a unique registration code assigned to the registrant. The DDTC registration code consist of a letter prefix, M (assigned to a manufacturer and/or exporter) or K (assigned to a broker), followed by four or five digits (e.g. K-1234 or M12345).  It is required for EEIFilingOption code 3.
     *
     * @var string|null
     */
    protected $registrationNumber;
    /**
     * Export Quantity.  Applies to EEI form only. It is required for EEIFilingOption code 3. Only positive integer value is valid.
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * Container for unit of measurement.  Applies to EEI form only. It is required for EEIFilingOption code 3.
     *
     * @var DDTCInformationUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Presence/ Absence Indicator.  Applies to EEI form only.
     *
     * @var string|null
     */
    protected $significantMilitaryEquipmentIndicator;
    /**
     * Approved Community Member Number (ACM). It is required to be provided along with ITARExemptionNumber for some License code (SGB and SAU). The ACM# for the United Kingdom (License code SGB) must begin with UK followed by 9 numbers.  The ACM# for Australia (License Code SAU) must begin with DTT followed by 8 numbers.  Applies to EEI form only.  It is required for EEIFilingOption code 1A and 3.
     *
     * @var string|null
     */
    protected $aCMNumber;
    /**
    * The specific citation (exemption number) under the International Traffic in Arms Regulations (ITAR) from the Code of Federal Register (see 22 CFR 120-130) that exempts the shipment from the requirements for a license or other written authorization from the Directorate of Trade Controls (DDTC). 
    Refer to EEI License Codes in the Appendix for valid values.  Applies to EEI Form only. This field is applicable for EEIFiling option 1A and 3.
    *
    * @return string|null
    */
    public function getITARExemptionNumber() : ?string
    {
        return $this->iTARExemptionNumber;
    }
    /**
    * The specific citation (exemption number) under the International Traffic in Arms Regulations (ITAR) from the Code of Federal Register (see 22 CFR 120-130) that exempts the shipment from the requirements for a license or other written authorization from the Directorate of Trade Controls (DDTC). 
    Refer to EEI License Codes in the Appendix for valid values.  Applies to EEI Form only. This field is applicable for EEIFiling option 1A and 3.
    *
    * @param string|null $iTARExemptionNumber
    *
    * @return self
    */
    public function setITARExemptionNumber(?string $iTARExemptionNumber) : self
    {
        $this->initialized['iTARExemptionNumber'] = true;
        $this->iTARExemptionNumber = $iTARExemptionNumber;
        return $this;
    }
    /**
     * Digit numeric code (e.g. 01-18, 20 or 21). Indicates the U.S. Munitions List (USML) category article, service or related technical data as it applies to the article reported.  Applies to EEI form only. It is required for EEIFilingOption code 3.
     *
     * @return string|null
     */
    public function getUSMLCategoryCode() : ?string
    {
        return $this->uSMLCategoryCode;
    }
    /**
     * Digit numeric code (e.g. 01-18, 20 or 21). Indicates the U.S. Munitions List (USML) category article, service or related technical data as it applies to the article reported.  Applies to EEI form only. It is required for EEIFilingOption code 3.
     *
     * @param string|null $uSMLCategoryCode
     *
     * @return self
     */
    public function setUSMLCategoryCode(?string $uSMLCategoryCode) : self
    {
        $this->initialized['uSMLCategoryCode'] = true;
        $this->uSMLCategoryCode = $uSMLCategoryCode;
        return $this;
    }
    /**
     * Presence/Absent indicator. Certification by the U.S. exporter that the exporter is an eligible party to participate in the defense trade.
     *
     * @return string|null
     */
    public function getEligiblePartyIndicator() : ?string
    {
        return $this->eligiblePartyIndicator;
    }
    /**
     * Presence/Absent indicator. Certification by the U.S. exporter that the exporter is an eligible party to participate in the defense trade.
     *
     * @param string|null $eligiblePartyIndicator
     *
     * @return self
     */
    public function setEligiblePartyIndicator(?string $eligiblePartyIndicator) : self
    {
        $this->initialized['eligiblePartyIndicator'] = true;
        $this->eligiblePartyIndicator = $eligiblePartyIndicator;
        return $this;
    }
    /**
     * It is a unique registration code assigned to the registrant. The DDTC registration code consist of a letter prefix, M (assigned to a manufacturer and/or exporter) or K (assigned to a broker), followed by four or five digits (e.g. K-1234 or M12345).  It is required for EEIFilingOption code 3.
     *
     * @return string|null
     */
    public function getRegistrationNumber() : ?string
    {
        return $this->registrationNumber;
    }
    /**
     * It is a unique registration code assigned to the registrant. The DDTC registration code consist of a letter prefix, M (assigned to a manufacturer and/or exporter) or K (assigned to a broker), followed by four or five digits (e.g. K-1234 or M12345).  It is required for EEIFilingOption code 3.
     *
     * @param string|null $registrationNumber
     *
     * @return self
     */
    public function setRegistrationNumber(?string $registrationNumber) : self
    {
        $this->initialized['registrationNumber'] = true;
        $this->registrationNumber = $registrationNumber;
        return $this;
    }
    /**
     * Export Quantity.  Applies to EEI form only. It is required for EEIFilingOption code 3. Only positive integer value is valid.
     *
     * @return string|null
     */
    public function getQuantity() : ?string
    {
        return $this->quantity;
    }
    /**
     * Export Quantity.  Applies to EEI form only. It is required for EEIFilingOption code 3. Only positive integer value is valid.
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Container for unit of measurement.  Applies to EEI form only. It is required for EEIFilingOption code 3.
     *
     * @return DDTCInformationUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?DDTCInformationUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container for unit of measurement.  Applies to EEI form only. It is required for EEIFilingOption code 3.
     *
     * @param DDTCInformationUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?DDTCInformationUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Presence/ Absence Indicator.  Applies to EEI form only.
     *
     * @return string|null
     */
    public function getSignificantMilitaryEquipmentIndicator() : ?string
    {
        return $this->significantMilitaryEquipmentIndicator;
    }
    /**
     * Presence/ Absence Indicator.  Applies to EEI form only.
     *
     * @param string|null $significantMilitaryEquipmentIndicator
     *
     * @return self
     */
    public function setSignificantMilitaryEquipmentIndicator(?string $significantMilitaryEquipmentIndicator) : self
    {
        $this->initialized['significantMilitaryEquipmentIndicator'] = true;
        $this->significantMilitaryEquipmentIndicator = $significantMilitaryEquipmentIndicator;
        return $this;
    }
    /**
     * Approved Community Member Number (ACM). It is required to be provided along with ITARExemptionNumber for some License code (SGB and SAU). The ACM# for the United Kingdom (License code SGB) must begin with UK followed by 9 numbers.  The ACM# for Australia (License Code SAU) must begin with DTT followed by 8 numbers.  Applies to EEI form only.  It is required for EEIFilingOption code 1A and 3.
     *
     * @return string|null
     */
    public function getACMNumber() : ?string
    {
        return $this->aCMNumber;
    }
    /**
     * Approved Community Member Number (ACM). It is required to be provided along with ITARExemptionNumber for some License code (SGB and SAU). The ACM# for the United Kingdom (License code SGB) must begin with UK followed by 9 numbers.  The ACM# for Australia (License Code SAU) must begin with DTT followed by 8 numbers.  Applies to EEI form only.  It is required for EEIFilingOption code 1A and 3.
     *
     * @param string|null $aCMNumber
     *
     * @return self
     */
    public function setACMNumber(?string $aCMNumber) : self
    {
        $this->initialized['aCMNumber'] = true;
        $this->aCMNumber = $aCMNumber;
        return $this;
    }
}