<?php

namespace ShipStream\Ups\Api\Model;

class ShipFromVendorInfo extends \ArrayObject
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
    * Code that identifies the type of Vendor Collect ID Number. Valid Values
    - 0356 = IOSS
    - 0357 = VOEC
    - 0358 = HMRC
    
    Vendor Collect ID Number type code will be printed on commercial invoice if present.
    
    *
    * @var string
    */
    protected $vendorCollectIDTypeCode;
    /**
    * Shipper's VAT Tax collection registration number to be entered by Shipper at time of shipment creation. Presence of this number as part of the shipment information implies the shipper has collected/paid the required VAT tax (outside of UPS/UPS systems). Vendor Colect ID Number will be printed on commercial invoice if present.
    
    Sample Values:   'IMDEU1234567' (IOSS #),  'VOEC1234567' (VOEC #),  'GB1234567' (HMRC #)
    
    Required if the shipment is subject to Vendor Collect ID collection
    
    *
    * @var string
    */
    protected $vendorCollectIDNumber;
    /**
     * Consignee Type. 01 = Business  02 = Consumer NA = Not Applicable
     *
     * @var string
     */
    protected $consigneeType;
    /**
    * Code that identifies the type of Vendor Collect ID Number. Valid Values
    - 0356 = IOSS
    - 0357 = VOEC
    - 0358 = HMRC
    
    Vendor Collect ID Number type code will be printed on commercial invoice if present.
    
    *
    * @return string
    */
    public function getVendorCollectIDTypeCode() : string
    {
        return $this->vendorCollectIDTypeCode;
    }
    /**
    * Code that identifies the type of Vendor Collect ID Number. Valid Values
    - 0356 = IOSS
    - 0357 = VOEC
    - 0358 = HMRC
    
    Vendor Collect ID Number type code will be printed on commercial invoice if present.
    
    *
    * @param string $vendorCollectIDTypeCode
    *
    * @return self
    */
    public function setVendorCollectIDTypeCode(string $vendorCollectIDTypeCode) : self
    {
        $this->initialized['vendorCollectIDTypeCode'] = true;
        $this->vendorCollectIDTypeCode = $vendorCollectIDTypeCode;
        return $this;
    }
    /**
    * Shipper's VAT Tax collection registration number to be entered by Shipper at time of shipment creation. Presence of this number as part of the shipment information implies the shipper has collected/paid the required VAT tax (outside of UPS/UPS systems). Vendor Colect ID Number will be printed on commercial invoice if present.
    
    Sample Values:   'IMDEU1234567' (IOSS #),  'VOEC1234567' (VOEC #),  'GB1234567' (HMRC #)
    
    Required if the shipment is subject to Vendor Collect ID collection
    
    *
    * @return string
    */
    public function getVendorCollectIDNumber() : string
    {
        return $this->vendorCollectIDNumber;
    }
    /**
    * Shipper's VAT Tax collection registration number to be entered by Shipper at time of shipment creation. Presence of this number as part of the shipment information implies the shipper has collected/paid the required VAT tax (outside of UPS/UPS systems). Vendor Colect ID Number will be printed on commercial invoice if present.
    
    Sample Values:   'IMDEU1234567' (IOSS #),  'VOEC1234567' (VOEC #),  'GB1234567' (HMRC #)
    
    Required if the shipment is subject to Vendor Collect ID collection
    
    *
    * @param string $vendorCollectIDNumber
    *
    * @return self
    */
    public function setVendorCollectIDNumber(string $vendorCollectIDNumber) : self
    {
        $this->initialized['vendorCollectIDNumber'] = true;
        $this->vendorCollectIDNumber = $vendorCollectIDNumber;
        return $this;
    }
    /**
     * Consignee Type. 01 = Business  02 = Consumer NA = Not Applicable
     *
     * @return string
     */
    public function getConsigneeType() : string
    {
        return $this->consigneeType;
    }
    /**
     * Consignee Type. 01 = Business  02 = Consumer NA = Not Applicable
     *
     * @param string $consigneeType
     *
     * @return self
     */
    public function setConsigneeType(string $consigneeType) : self
    {
        $this->initialized['consigneeType'] = true;
        $this->consigneeType = $consigneeType;
        return $this;
    }
}