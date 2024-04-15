<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsUPSPremiumCareForm extends \ArrayObject
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
     * Shipment Date associated with UPS Premium Care Shipment.   Valid Format: yyyyMMdd
     *
     * @var string|null
     */
    protected $shipmentDate;
    /**
    * Size of UPS Premium Care Form.  Valid values: 
    01 = A4 Size
    02 = Letter Size
    *
    * @var string|null
    */
    protected $pageSize;
    /**
    * Format of UPS Premium Care Form.  Valid values: 
    01 = PNG
    02 = PDF
    *
    * @var string|null
    */
    protected $printType;
    /**
     * Number of Copies of UPS Premium Care Form.  Valid value is 02.
     *
     * @var string|null
     */
    protected $numOfCopies;
    /**
     * Container to hold languages in which UPS Premium Care Form is required.
     *
     * @var UPSPremiumCareFormLanguageForUPSPremiumCare|null
     */
    protected $languageForUPSPremiumCare;
    /**
     * Shipment Date associated with UPS Premium Care Shipment.   Valid Format: yyyyMMdd
     *
     * @return string|null
     */
    public function getShipmentDate() : ?string
    {
        return $this->shipmentDate;
    }
    /**
     * Shipment Date associated with UPS Premium Care Shipment.   Valid Format: yyyyMMdd
     *
     * @param string|null $shipmentDate
     *
     * @return self
     */
    public function setShipmentDate(?string $shipmentDate) : self
    {
        $this->initialized['shipmentDate'] = true;
        $this->shipmentDate = $shipmentDate;
        return $this;
    }
    /**
    * Size of UPS Premium Care Form.  Valid values: 
    01 = A4 Size
    02 = Letter Size
    *
    * @return string|null
    */
    public function getPageSize() : ?string
    {
        return $this->pageSize;
    }
    /**
    * Size of UPS Premium Care Form.  Valid values: 
    01 = A4 Size
    02 = Letter Size
    *
    * @param string|null $pageSize
    *
    * @return self
    */
    public function setPageSize(?string $pageSize) : self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
    * Format of UPS Premium Care Form.  Valid values: 
    01 = PNG
    02 = PDF
    *
    * @return string|null
    */
    public function getPrintType() : ?string
    {
        return $this->printType;
    }
    /**
    * Format of UPS Premium Care Form.  Valid values: 
    01 = PNG
    02 = PDF
    *
    * @param string|null $printType
    *
    * @return self
    */
    public function setPrintType(?string $printType) : self
    {
        $this->initialized['printType'] = true;
        $this->printType = $printType;
        return $this;
    }
    /**
     * Number of Copies of UPS Premium Care Form.  Valid value is 02.
     *
     * @return string|null
     */
    public function getNumOfCopies() : ?string
    {
        return $this->numOfCopies;
    }
    /**
     * Number of Copies of UPS Premium Care Form.  Valid value is 02.
     *
     * @param string|null $numOfCopies
     *
     * @return self
     */
    public function setNumOfCopies(?string $numOfCopies) : self
    {
        $this->initialized['numOfCopies'] = true;
        $this->numOfCopies = $numOfCopies;
        return $this;
    }
    /**
     * Container to hold languages in which UPS Premium Care Form is required.
     *
     * @return UPSPremiumCareFormLanguageForUPSPremiumCare|null
     */
    public function getLanguageForUPSPremiumCare() : ?UPSPremiumCareFormLanguageForUPSPremiumCare
    {
        return $this->languageForUPSPremiumCare;
    }
    /**
     * Container to hold languages in which UPS Premium Care Form is required.
     *
     * @param UPSPremiumCareFormLanguageForUPSPremiumCare|null $languageForUPSPremiumCare
     *
     * @return self
     */
    public function setLanguageForUPSPremiumCare(?UPSPremiumCareFormLanguageForUPSPremiumCare $languageForUPSPremiumCare) : self
    {
        $this->initialized['languageForUPSPremiumCare'] = true;
        $this->languageForUPSPremiumCare = $languageForUPSPremiumCare;
        return $this;
    }
}