<?php

namespace ShipStream\Ups\Api\Model;

class PackageCommodity extends \ArrayObject
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
     * Freight Classification. Freight class partially determines the freight rate for the article.  Required for Ground Freight Pricing Shipments only.
     *
     * @var string
     */
    protected $freightClass;
    /**
     * Container to hold the NMFC codes.
     *
     * @var CommodityNMFC
     */
    protected $nMFC;
    /**
     * Freight Classification. Freight class partially determines the freight rate for the article.  Required for Ground Freight Pricing Shipments only.
     *
     * @return string
     */
    public function getFreightClass() : string
    {
        return $this->freightClass;
    }
    /**
     * Freight Classification. Freight class partially determines the freight rate for the article.  Required for Ground Freight Pricing Shipments only.
     *
     * @param string $freightClass
     *
     * @return self
     */
    public function setFreightClass(string $freightClass) : self
    {
        $this->initialized['freightClass'] = true;
        $this->freightClass = $freightClass;
        return $this;
    }
    /**
     * Container to hold the NMFC codes.
     *
     * @return CommodityNMFC
     */
    public function getNMFC() : CommodityNMFC
    {
        return $this->nMFC;
    }
    /**
     * Container to hold the NMFC codes.
     *
     * @param CommodityNMFC $nMFC
     *
     * @return self
     */
    public function setNMFC(CommodityNMFC $nMFC) : self
    {
        $this->initialized['nMFC'] = true;
        $this->nMFC = $nMFC;
        return $this;
    }
}