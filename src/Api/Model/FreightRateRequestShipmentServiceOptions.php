<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestShipmentServiceOptions extends \ArrayObject
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
     * PickupOptions Container.
     *
     * @var FreightShipmentServiceOptionsPickupOptions
     */
    protected $pickupOptions;
    /**
     * DeliveryOptions Container.
     *
     * @var FreightShipmentServiceOptionsDeliveryOptions
     */
    protected $deliveryOptions;
    /**
    * OverSeasLeg Container.
    Accessorial required when origin or destination is Hawaii, Alaska, and Puerto Rico.
    *
    * @var ShipmentServiceOptionsOverSeasLeg
    */
    protected $overSeasLeg;
    /**
     * COD Container.
     *
     * @var FreightShipmentServiceOptionsCOD
     */
    protected $cOD;
    /**
     * DangerousGoods Container.
     *
     * @var ShipmentServiceOptionsDangerousGoods
     */
    protected $dangerousGoods;
    /**
     * SortingAndSegregating Container.
     *
     * @var ShipmentServiceOptionsSortingAndSegregating
     */
    protected $sortingAndSegregating;
    /**
     * ExcessDeclaredValue Container.
     *
     * @var ShipmentServiceOptionsExcessDeclaredValue
     */
    protected $excessDeclaredValue;
    /**
     * HandlingCharge Container.
     *
     * @var ShipmentServiceOptionsHandlingCharge
     */
    protected $handlingCharge;
    /**
     * The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required.
     *
     * @var string
     */
    protected $freezableProtectionIndicator;
    /**
    * The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required.
    It is recommended to provide 'LinearFeet' if this indicator is sent.
    *
    * @var string
    */
    protected $extremeLengthIndicator;
    /**
    * Dimensional length of the article(s), in 'feet'.
    Numeric value greater than '0' (Zero) should be given in LinearFeet.
    If Proper LinearFeet is not provided, accurate charge for extreme length articles might not be returned.
    If linear feet '0' (Zero) or any non-numeric/invalid character is sent, accurate charge for extreme length articles might not be returned.
    Ignored if ExtremeLengthIndicator is not present.
    *
    * @var string
    */
    protected $linearFeet;
    /**
     * Adjusted Height container.
     *
     * @var ShipmentServiceOptionsAdjustedHeight
     */
    protected $adjustedHeight;
    /**
     * PickupOptions Container.
     *
     * @return FreightShipmentServiceOptionsPickupOptions
     */
    public function getPickupOptions() : FreightShipmentServiceOptionsPickupOptions
    {
        return $this->pickupOptions;
    }
    /**
     * PickupOptions Container.
     *
     * @param FreightShipmentServiceOptionsPickupOptions $pickupOptions
     *
     * @return self
     */
    public function setPickupOptions(FreightShipmentServiceOptionsPickupOptions $pickupOptions) : self
    {
        $this->initialized['pickupOptions'] = true;
        $this->pickupOptions = $pickupOptions;
        return $this;
    }
    /**
     * DeliveryOptions Container.
     *
     * @return FreightShipmentServiceOptionsDeliveryOptions
     */
    public function getDeliveryOptions() : FreightShipmentServiceOptionsDeliveryOptions
    {
        return $this->deliveryOptions;
    }
    /**
     * DeliveryOptions Container.
     *
     * @param FreightShipmentServiceOptionsDeliveryOptions $deliveryOptions
     *
     * @return self
     */
    public function setDeliveryOptions(FreightShipmentServiceOptionsDeliveryOptions $deliveryOptions) : self
    {
        $this->initialized['deliveryOptions'] = true;
        $this->deliveryOptions = $deliveryOptions;
        return $this;
    }
    /**
    * OverSeasLeg Container.
    Accessorial required when origin or destination is Hawaii, Alaska, and Puerto Rico.
    *
    * @return ShipmentServiceOptionsOverSeasLeg
    */
    public function getOverSeasLeg() : ShipmentServiceOptionsOverSeasLeg
    {
        return $this->overSeasLeg;
    }
    /**
    * OverSeasLeg Container.
    Accessorial required when origin or destination is Hawaii, Alaska, and Puerto Rico.
    *
    * @param ShipmentServiceOptionsOverSeasLeg $overSeasLeg
    *
    * @return self
    */
    public function setOverSeasLeg(ShipmentServiceOptionsOverSeasLeg $overSeasLeg) : self
    {
        $this->initialized['overSeasLeg'] = true;
        $this->overSeasLeg = $overSeasLeg;
        return $this;
    }
    /**
     * COD Container.
     *
     * @return FreightShipmentServiceOptionsCOD
     */
    public function getCOD() : FreightShipmentServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * COD Container.
     *
     * @param FreightShipmentServiceOptionsCOD $cOD
     *
     * @return self
     */
    public function setCOD(FreightShipmentServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * DangerousGoods Container.
     *
     * @return ShipmentServiceOptionsDangerousGoods
     */
    public function getDangerousGoods() : ShipmentServiceOptionsDangerousGoods
    {
        return $this->dangerousGoods;
    }
    /**
     * DangerousGoods Container.
     *
     * @param ShipmentServiceOptionsDangerousGoods $dangerousGoods
     *
     * @return self
     */
    public function setDangerousGoods(ShipmentServiceOptionsDangerousGoods $dangerousGoods) : self
    {
        $this->initialized['dangerousGoods'] = true;
        $this->dangerousGoods = $dangerousGoods;
        return $this;
    }
    /**
     * SortingAndSegregating Container.
     *
     * @return ShipmentServiceOptionsSortingAndSegregating
     */
    public function getSortingAndSegregating() : ShipmentServiceOptionsSortingAndSegregating
    {
        return $this->sortingAndSegregating;
    }
    /**
     * SortingAndSegregating Container.
     *
     * @param ShipmentServiceOptionsSortingAndSegregating $sortingAndSegregating
     *
     * @return self
     */
    public function setSortingAndSegregating(ShipmentServiceOptionsSortingAndSegregating $sortingAndSegregating) : self
    {
        $this->initialized['sortingAndSegregating'] = true;
        $this->sortingAndSegregating = $sortingAndSegregating;
        return $this;
    }
    /**
     * ExcessDeclaredValue Container.
     *
     * @return ShipmentServiceOptionsExcessDeclaredValue
     */
    public function getExcessDeclaredValue() : ShipmentServiceOptionsExcessDeclaredValue
    {
        return $this->excessDeclaredValue;
    }
    /**
     * ExcessDeclaredValue Container.
     *
     * @param ShipmentServiceOptionsExcessDeclaredValue $excessDeclaredValue
     *
     * @return self
     */
    public function setExcessDeclaredValue(ShipmentServiceOptionsExcessDeclaredValue $excessDeclaredValue) : self
    {
        $this->initialized['excessDeclaredValue'] = true;
        $this->excessDeclaredValue = $excessDeclaredValue;
        return $this;
    }
    /**
     * HandlingCharge Container.
     *
     * @return ShipmentServiceOptionsHandlingCharge
     */
    public function getHandlingCharge() : ShipmentServiceOptionsHandlingCharge
    {
        return $this->handlingCharge;
    }
    /**
     * HandlingCharge Container.
     *
     * @param ShipmentServiceOptionsHandlingCharge $handlingCharge
     *
     * @return self
     */
    public function setHandlingCharge(ShipmentServiceOptionsHandlingCharge $handlingCharge) : self
    {
        $this->initialized['handlingCharge'] = true;
        $this->handlingCharge = $handlingCharge;
        return $this;
    }
    /**
     * The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required.
     *
     * @return string
     */
    public function getFreezableProtectionIndicator() : string
    {
        return $this->freezableProtectionIndicator;
    }
    /**
     * The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required.
     *
     * @param string $freezableProtectionIndicator
     *
     * @return self
     */
    public function setFreezableProtectionIndicator(string $freezableProtectionIndicator) : self
    {
        $this->initialized['freezableProtectionIndicator'] = true;
        $this->freezableProtectionIndicator = $freezableProtectionIndicator;
        return $this;
    }
    /**
    * The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required.
    It is recommended to provide 'LinearFeet' if this indicator is sent.
    *
    * @return string
    */
    public function getExtremeLengthIndicator() : string
    {
        return $this->extremeLengthIndicator;
    }
    /**
    * The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required.
    It is recommended to provide 'LinearFeet' if this indicator is sent.
    *
    * @param string $extremeLengthIndicator
    *
    * @return self
    */
    public function setExtremeLengthIndicator(string $extremeLengthIndicator) : self
    {
        $this->initialized['extremeLengthIndicator'] = true;
        $this->extremeLengthIndicator = $extremeLengthIndicator;
        return $this;
    }
    /**
    * Dimensional length of the article(s), in 'feet'.
    Numeric value greater than '0' (Zero) should be given in LinearFeet.
    If Proper LinearFeet is not provided, accurate charge for extreme length articles might not be returned.
    If linear feet '0' (Zero) or any non-numeric/invalid character is sent, accurate charge for extreme length articles might not be returned.
    Ignored if ExtremeLengthIndicator is not present.
    *
    * @return string
    */
    public function getLinearFeet() : string
    {
        return $this->linearFeet;
    }
    /**
    * Dimensional length of the article(s), in 'feet'.
    Numeric value greater than '0' (Zero) should be given in LinearFeet.
    If Proper LinearFeet is not provided, accurate charge for extreme length articles might not be returned.
    If linear feet '0' (Zero) or any non-numeric/invalid character is sent, accurate charge for extreme length articles might not be returned.
    Ignored if ExtremeLengthIndicator is not present.
    *
    * @param string $linearFeet
    *
    * @return self
    */
    public function setLinearFeet(string $linearFeet) : self
    {
        $this->initialized['linearFeet'] = true;
        $this->linearFeet = $linearFeet;
        return $this;
    }
    /**
     * Adjusted Height container.
     *
     * @return ShipmentServiceOptionsAdjustedHeight
     */
    public function getAdjustedHeight() : ShipmentServiceOptionsAdjustedHeight
    {
        return $this->adjustedHeight;
    }
    /**
     * Adjusted Height container.
     *
     * @param ShipmentServiceOptionsAdjustedHeight $adjustedHeight
     *
     * @return self
     */
    public function setAdjustedHeight(ShipmentServiceOptionsAdjustedHeight $adjustedHeight) : self
    {
        $this->initialized['adjustedHeight'] = true;
        $this->adjustedHeight = $adjustedHeight;
        return $this;
    }
}