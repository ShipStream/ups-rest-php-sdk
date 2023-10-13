<?php

namespace ShipStream\Ups\Api\Model;

class ProductTariffInfo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Tariff Code of the product. 
    Valid characters are 0-9 and Decimal Point ("."). 
    Only 6 numeric fields will be considered during validation for the minimum length of the Tariff Code.
    *
    * @var string
    */
    protected $tariffCode;
    /**
    * Additional information on Tariff Code of the product. 
    Valid characters are 0-9 and Decimal point (�.�). 
    The DetailID is used by TradeAbility to help refine results and should not be reported on official customs documents as part of the Tariff Code.
    *
    * @var string
    */
    protected $detailID;
    /**
    * Secondary Tariff Code of the product. 
    Valid characters are 0-9 and Decimal point (�.�). 
    Only 6 numeric fields will be considered during validation for the minimum length of the Secondary Tariff Code.
    *
    * @var string
    */
    protected $secondaryTariffCode;
    /**
    * Additional information on Secondary Tariff Code of the product. 
    Valid characters are 0-9 and Decimal Point (�.�). 
    The SecondaryDetailID is used by TradeAbility to help refine results and should not be reported on official customs documents as part of the Tariff Code.
    *
    * @var string
    */
    protected $secondaryDetailID;
    /**
    * Tariff Code of the product. 
    Valid characters are 0-9 and Decimal Point ("."). 
    Only 6 numeric fields will be considered during validation for the minimum length of the Tariff Code.
    *
    * @return string
    */
    public function getTariffCode() : string
    {
        return $this->tariffCode;
    }
    /**
    * Tariff Code of the product. 
    Valid characters are 0-9 and Decimal Point ("."). 
    Only 6 numeric fields will be considered during validation for the minimum length of the Tariff Code.
    *
    * @param string $tariffCode
    *
    * @return self
    */
    public function setTariffCode(string $tariffCode) : self
    {
        $this->initialized['tariffCode'] = true;
        $this->tariffCode = $tariffCode;
        return $this;
    }
    /**
    * Additional information on Tariff Code of the product. 
    Valid characters are 0-9 and Decimal point (�.�). 
    The DetailID is used by TradeAbility to help refine results and should not be reported on official customs documents as part of the Tariff Code.
    *
    * @return string
    */
    public function getDetailID() : string
    {
        return $this->detailID;
    }
    /**
    * Additional information on Tariff Code of the product. 
    Valid characters are 0-9 and Decimal point (�.�). 
    The DetailID is used by TradeAbility to help refine results and should not be reported on official customs documents as part of the Tariff Code.
    *
    * @param string $detailID
    *
    * @return self
    */
    public function setDetailID(string $detailID) : self
    {
        $this->initialized['detailID'] = true;
        $this->detailID = $detailID;
        return $this;
    }
    /**
    * Secondary Tariff Code of the product. 
    Valid characters are 0-9 and Decimal point (�.�). 
    Only 6 numeric fields will be considered during validation for the minimum length of the Secondary Tariff Code.
    *
    * @return string
    */
    public function getSecondaryTariffCode() : string
    {
        return $this->secondaryTariffCode;
    }
    /**
    * Secondary Tariff Code of the product. 
    Valid characters are 0-9 and Decimal point (�.�). 
    Only 6 numeric fields will be considered during validation for the minimum length of the Secondary Tariff Code.
    *
    * @param string $secondaryTariffCode
    *
    * @return self
    */
    public function setSecondaryTariffCode(string $secondaryTariffCode) : self
    {
        $this->initialized['secondaryTariffCode'] = true;
        $this->secondaryTariffCode = $secondaryTariffCode;
        return $this;
    }
    /**
    * Additional information on Secondary Tariff Code of the product. 
    Valid characters are 0-9 and Decimal Point (�.�). 
    The SecondaryDetailID is used by TradeAbility to help refine results and should not be reported on official customs documents as part of the Tariff Code.
    *
    * @return string
    */
    public function getSecondaryDetailID() : string
    {
        return $this->secondaryDetailID;
    }
    /**
    * Additional information on Secondary Tariff Code of the product. 
    Valid characters are 0-9 and Decimal Point (�.�). 
    The SecondaryDetailID is used by TradeAbility to help refine results and should not be reported on official customs documents as part of the Tariff Code.
    *
    * @param string $secondaryDetailID
    *
    * @return self
    */
    public function setSecondaryDetailID(string $secondaryDetailID) : self
    {
        $this->initialized['secondaryDetailID'] = true;
        $this->secondaryDetailID = $secondaryDetailID;
        return $this;
    }
}