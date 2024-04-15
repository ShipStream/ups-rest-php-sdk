<?php

namespace ShipStream\Ups\Api\Model;

class FRSShipmentDataTransportationCharges extends \ArrayObject
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
     * Gross Charges container. It indicates the shipment level gross Ground Freight Pricing transportation charges.
     *
     * @var TransportationChargesGrossCharge|null
     */
    protected $grossCharge;
    /**
     * Discount Amount container. It indicates the shipment level Ground Freight Pricing discount amount for transportation charges
     *
     * @var TransportationChargesDiscountAmount|null
     */
    protected $discountAmount;
    /**
     * It indicates the shipment level discount percentage for transportation charges.
     *
     * @var string|null
     */
    protected $discountPercentage;
    /**
     * Net Charges container. It indicates the shipment level net Ground Freight Pricing transportation charges.
     *
     * @var TransportationChargesNetCharge|null
     */
    protected $netCharge;
    /**
     * Gross Charges container. It indicates the shipment level gross Ground Freight Pricing transportation charges.
     *
     * @return TransportationChargesGrossCharge|null
     */
    public function getGrossCharge() : ?TransportationChargesGrossCharge
    {
        return $this->grossCharge;
    }
    /**
     * Gross Charges container. It indicates the shipment level gross Ground Freight Pricing transportation charges.
     *
     * @param TransportationChargesGrossCharge|null $grossCharge
     *
     * @return self
     */
    public function setGrossCharge(?TransportationChargesGrossCharge $grossCharge) : self
    {
        $this->initialized['grossCharge'] = true;
        $this->grossCharge = $grossCharge;
        return $this;
    }
    /**
     * Discount Amount container. It indicates the shipment level Ground Freight Pricing discount amount for transportation charges
     *
     * @return TransportationChargesDiscountAmount|null
     */
    public function getDiscountAmount() : ?TransportationChargesDiscountAmount
    {
        return $this->discountAmount;
    }
    /**
     * Discount Amount container. It indicates the shipment level Ground Freight Pricing discount amount for transportation charges
     *
     * @param TransportationChargesDiscountAmount|null $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(?TransportationChargesDiscountAmount $discountAmount) : self
    {
        $this->initialized['discountAmount'] = true;
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * It indicates the shipment level discount percentage for transportation charges.
     *
     * @return string|null
     */
    public function getDiscountPercentage() : ?string
    {
        return $this->discountPercentage;
    }
    /**
     * It indicates the shipment level discount percentage for transportation charges.
     *
     * @param string|null $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(?string $discountPercentage) : self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * Net Charges container. It indicates the shipment level net Ground Freight Pricing transportation charges.
     *
     * @return TransportationChargesNetCharge|null
     */
    public function getNetCharge() : ?TransportationChargesNetCharge
    {
        return $this->netCharge;
    }
    /**
     * Net Charges container. It indicates the shipment level net Ground Freight Pricing transportation charges.
     *
     * @param TransportationChargesNetCharge|null $netCharge
     *
     * @return self
     */
    public function setNetCharge(?TransportationChargesNetCharge $netCharge) : self
    {
        $this->initialized['netCharge'] = true;
        $this->netCharge = $netCharge;
        return $this;
    }
}