<?php

namespace ShipStream\Ups\Api\Model;

class EEIFilingOptionShipperFiled extends \ArrayObject
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
     * Indicates the EEI Shipper sub option.  Applicable for EEI form and is required. Valid value is: A- requires the ITN; B- requires the Exemption Legend; C- requires the post departure filing citation.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of ShipperFiled Code.  Applicable for EEI form.
     *
     * @var string
     */
    protected $description;
    /**
     * Input for Shipper Filed option A and AES Direct. The format is available from AESDirect website.  Valid and Required for Shipper Filed option A. EEI form only.
     *
     * @var string
     */
    protected $preDepartureITNNumber;
    /**
     * Input for Shipper Filed option B. 30.2(d)(2), 30.26(a), 30.36, 30.37(a), 30.37(b), 30.37(c), 30.37(d), 30.37(e), 30.37(f), 30.37(h), 30.37(i), 30.30(j), 30.37(k), 30.37(i), 30.37(j), 30.37(k), 30.37(l), 30.37(m), 30.37(n), 30.37(o), 30.37(p), 30.37(q), 30.37(r), 30.37(s), 30.37(t), 30.37(u), 30.37(x), 30.37(y)(1), 30.37(y)(2), 30.37(y)(3), 30.37(y)(4), 30.37(y)(5), 30.37(y)(6), 30.39, 30.40(a), 30.40(b), 30.40(c), 30.40(d), 30.8(b)  Valid and Required for Shipper Filed option B. EEI form only.
     *
     * @var string
     */
    protected $exemptionLegend;
    /**
     * Shipment Reference Number for use during interaction with AES. Valid for EEI form for Shipper Filed option 'C' and AES Direct Filed.
     *
     * @var string
     */
    protected $eEIShipmentReferenceNumber;
    /**
     * Indicates the EEI Shipper sub option.  Applicable for EEI form and is required. Valid value is: A- requires the ITN; B- requires the Exemption Legend; C- requires the post departure filing citation.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the EEI Shipper sub option.  Applicable for EEI form and is required. Valid value is: A- requires the ITN; B- requires the Exemption Legend; C- requires the post departure filing citation.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of ShipperFiled Code.  Applicable for EEI form.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of ShipperFiled Code.  Applicable for EEI form.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Input for Shipper Filed option A and AES Direct. The format is available from AESDirect website.  Valid and Required for Shipper Filed option A. EEI form only.
     *
     * @return string
     */
    public function getPreDepartureITNNumber() : string
    {
        return $this->preDepartureITNNumber;
    }
    /**
     * Input for Shipper Filed option A and AES Direct. The format is available from AESDirect website.  Valid and Required for Shipper Filed option A. EEI form only.
     *
     * @param string $preDepartureITNNumber
     *
     * @return self
     */
    public function setPreDepartureITNNumber(string $preDepartureITNNumber) : self
    {
        $this->initialized['preDepartureITNNumber'] = true;
        $this->preDepartureITNNumber = $preDepartureITNNumber;
        return $this;
    }
    /**
     * Input for Shipper Filed option B. 30.2(d)(2), 30.26(a), 30.36, 30.37(a), 30.37(b), 30.37(c), 30.37(d), 30.37(e), 30.37(f), 30.37(h), 30.37(i), 30.30(j), 30.37(k), 30.37(i), 30.37(j), 30.37(k), 30.37(l), 30.37(m), 30.37(n), 30.37(o), 30.37(p), 30.37(q), 30.37(r), 30.37(s), 30.37(t), 30.37(u), 30.37(x), 30.37(y)(1), 30.37(y)(2), 30.37(y)(3), 30.37(y)(4), 30.37(y)(5), 30.37(y)(6), 30.39, 30.40(a), 30.40(b), 30.40(c), 30.40(d), 30.8(b)  Valid and Required for Shipper Filed option B. EEI form only.
     *
     * @return string
     */
    public function getExemptionLegend() : string
    {
        return $this->exemptionLegend;
    }
    /**
     * Input for Shipper Filed option B. 30.2(d)(2), 30.26(a), 30.36, 30.37(a), 30.37(b), 30.37(c), 30.37(d), 30.37(e), 30.37(f), 30.37(h), 30.37(i), 30.30(j), 30.37(k), 30.37(i), 30.37(j), 30.37(k), 30.37(l), 30.37(m), 30.37(n), 30.37(o), 30.37(p), 30.37(q), 30.37(r), 30.37(s), 30.37(t), 30.37(u), 30.37(x), 30.37(y)(1), 30.37(y)(2), 30.37(y)(3), 30.37(y)(4), 30.37(y)(5), 30.37(y)(6), 30.39, 30.40(a), 30.40(b), 30.40(c), 30.40(d), 30.8(b)  Valid and Required for Shipper Filed option B. EEI form only.
     *
     * @param string $exemptionLegend
     *
     * @return self
     */
    public function setExemptionLegend(string $exemptionLegend) : self
    {
        $this->initialized['exemptionLegend'] = true;
        $this->exemptionLegend = $exemptionLegend;
        return $this;
    }
    /**
     * Shipment Reference Number for use during interaction with AES. Valid for EEI form for Shipper Filed option 'C' and AES Direct Filed.
     *
     * @return string
     */
    public function getEEIShipmentReferenceNumber() : string
    {
        return $this->eEIShipmentReferenceNumber;
    }
    /**
     * Shipment Reference Number for use during interaction with AES. Valid for EEI form for Shipper Filed option 'C' and AES Direct Filed.
     *
     * @param string $eEIShipmentReferenceNumber
     *
     * @return self
     */
    public function setEEIShipmentReferenceNumber(string $eEIShipmentReferenceNumber) : self
    {
        $this->initialized['eEIShipmentReferenceNumber'] = true;
        $this->eEIShipmentReferenceNumber = $eEIShipmentReferenceNumber;
        return $this;
    }
}