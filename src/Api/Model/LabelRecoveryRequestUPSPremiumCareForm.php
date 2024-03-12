<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequestUPSPremiumCareForm extends \ArrayObject
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
    * Size of UPS Premium Care Form.  Valid values: 
    01 = A4 Size
    02 = Letter Size
    *
    * @var string
    */
    protected $pageSize;
    /**
    * Format of UPS Premium Care Form.  Valid values: 
    01 = PNG
    02 = PDF
    *
    * @var string
    */
    protected $printType;
    /**
    * Size of UPS Premium Care Form.  Valid values: 
    01 = A4 Size
    02 = Letter Size
    *
    * @return string
    */
    public function getPageSize() : string
    {
        return $this->pageSize;
    }
    /**
    * Size of UPS Premium Care Form.  Valid values: 
    01 = A4 Size
    02 = Letter Size
    *
    * @param string $pageSize
    *
    * @return self
    */
    public function setPageSize(string $pageSize) : self
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
    * @return string
    */
    public function getPrintType() : string
    {
        return $this->printType;
    }
    /**
    * Format of UPS Premium Care Form.  Valid values: 
    01 = PNG
    02 = PDF
    *
    * @param string $printType
    *
    * @return self
    */
    public function setPrintType(string $printType) : self
    {
        $this->initialized['printType'] = true;
        $this->printType = $printType;
        return $this;
    }
}