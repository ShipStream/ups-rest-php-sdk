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
     * @var FreightShipmentServiceOptionsPickupOptions|null
     */
    protected $pickupOptions;
    /**
     * DeliveryOptions Container.
     *
     * @var FreightShipmentServiceOptionsDeliveryOptions|null
     */
    protected $deliveryOptions;
    /**
    * OverSeasLeg Container.
    Accessorial required when origin or destination is Hawaii, Alaska, and Puerto Rico.
    *
    * @var ShipmentServiceOptionsOverSeasLeg|null
    */
    protected $overSeasLeg;
    /**
     * COD Container.
     *
     * @var FreightShipmentServiceOptionsCOD|null
     */
    protected $cOD;
    /**
     * DangerousGoods Container.
     *
     * @var ShipmentServiceOptionsDangerousGoods|null
     */
    protected $dangerousGoods;
    /**
     * SortingAndSegregating Container.
     *
     * @var ShipmentServiceOptionsSortingAndSegregating|null
     */
    protected $sortingAndSegregating;
    /**
     * ExcessDeclaredValue Container.
     *
     * @var ShipmentServiceOptionsExcessDeclaredValue|null
     */
    protected $excessDeclaredValue;
    /**
     * HandlingCharge Container.
     *
     * @var ShipmentServiceOptionsHandlingCharge|null
     */
    protected $handlingCharge;
    /**
     * The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required.
     *
     * @var string|null
     */
    protected $freezableProtectionIndicator;
    /**
    * The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required.
    It is recommended to provide 'LinearFeet' if this indicator is sent.
    *
    * @var string|null
    */
    protected $extremeLengthIndicator;
    /**
    * Dimensional length of the article(s), in 'feet'.
    Numeric value greater than '0' (Zero) should be given in LinearFeet.
    If Proper LinearFeet is not provided, accurate charge for extreme length articles might not be returned.
    If linear feet '0' (Zero) or any non-numeric/invalid character is sent, accurate charge for extreme length articles might not be returned.
    Ignored if ExtremeLengthIndicator is not present.
    *
    * @var string|null
    */
    protected $linearFeet;
    /**
     * Adjusted Height container.
     *
     * @var ShipmentServiceOptionsAdjustedHeight|null
     */
    protected $adjustedHeight;
    /**
     * PickupOptions Container.
     *
     * @return FreightShipmentServiceOptionsPickupOptions|null
     */
    public function getPickupOptions() : ?FreightShipmentServiceOptionsPickupOptions
    {
        return $this->pickupOptions;
    }
    /**
     * PickupOptions Container.
     *
     * @param FreightShipmentServiceOptionsPickupOptions|null $pickupOptions
     *
     * @return self
     */
    public function setPickupOptions(?FreightShipmentServiceOptionsPickupOptions $pickupOptions) : self
    {
        $this->initialized['pickupOptions'] = true;
        $this->pickupOptions = $pickupOptions;
        return $this;
    }
    /**
     * DeliveryOptions Container.
     *
     * @return FreightShipmentServiceOptionsDeliveryOptions|null
     */
    public function getDeliveryOptions() : ?FreightShipmentServiceOptionsDeliveryOptions
    {
        return $this->deliveryOptions;
    }
    /**
     * DeliveryOptions Container.
     *
     * @param FreightShipmentServiceOptionsDeliveryOptions|null $deliveryOptions
     *
     * @return self
     */
    public function setDeliveryOptions(?FreightShipmentServiceOptionsDeliveryOptions $deliveryOptions) : self
    {
        $this->initialized['deliveryOptions'] = true;
        $this->deliveryOptions = $deliveryOptions;
        return $this;
    }
    /**
    * OverSeasLeg Container.
    Accessorial required when origin or destination is Hawaii, Alaska, and Puerto Rico.
    *
    * @return ShipmentServiceOptionsOverSeasLeg|null
    */
    public function getOverSeasLeg() : ?ShipmentServiceOptionsOverSeasLeg
    {
        return $this->overSeasLeg;
    }
    /**
    * OverSeasLeg Container.
    Accessorial required when origin or destination is Hawaii, Alaska, and Puerto Rico.
    *
    * @param ShipmentServiceOptionsOverSeasLeg|null $overSeasLeg
    *
    * @return self
    */
    public function setOverSeasLeg(?ShipmentServiceOptionsOverSeasLeg $overSeasLeg) : self
    {
        $this->initialized['overSeasLeg'] = true;
        $this->overSeasLeg = $overSeasLeg;
        return $this;
    }
    /**
     * COD Container.
     *
     * @return FreightShipmentServiceOptionsCOD|null
     */
    public function getCOD() : ?FreightShipmentServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * COD Container.
     *
     * @param FreightShipmentServiceOptionsCOD|null $cOD
     *
     * @return self
     */
    public function setCOD(?FreightShipmentServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * DangerousGoods Container.
     *
     * @return ShipmentServiceOptionsDangerousGoods|null
     */
    public function getDangerousGoods() : ?ShipmentServiceOptionsDangerousGoods
    {
        return $this->dangerousGoods;
    }
    /**
     * DangerousGoods Container.
     *
     * @param ShipmentServiceOptionsDangerousGoods|null $dangerousGoods
     *
     * @return self
     */
    public function setDangerousGoods(?ShipmentServiceOptionsDangerousGoods $dangerousGoods) : self
    {
        $this->initialized['dangerousGoods'] = true;
        $this->dangerousGoods = $dangerousGoods;
        return $this;
    }
    /**
     * SortingAndSegregating Container.
     *
     * @return ShipmentServiceOptionsSortingAndSegregating|null
     */
    public function getSortingAndSegregating() : ?ShipmentServiceOptionsSortingAndSegregating
    {
        return $this->sortingAndSegregating;
    }
    /**
     * SortingAndSegregating Container.
     *
     * @param ShipmentServiceOptionsSortingAndSegregating|null $sortingAndSegregating
     *
     * @return self
     */
    public function setSortingAndSegregating(?ShipmentServiceOptionsSortingAndSegregating $sortingAndSegregating) : self
    {
        $this->initialized['sortingAndSegregating'] = true;
        $this->sortingAndSegregating = $sortingAndSegregating;
        return $this;
    }
    /**
     * ExcessDeclaredValue Container.
     *
     * @return ShipmentServiceOptionsExcessDeclaredValue|null
     */
    public function getExcessDeclaredValue() : ?ShipmentServiceOptionsExcessDeclaredValue
    {
        return $this->excessDeclaredValue;
    }
    /**
     * ExcessDeclaredValue Container.
     *
     * @param ShipmentServiceOptionsExcessDeclaredValue|null $excessDeclaredValue
     *
     * @return self
     */
    public function setExcessDeclaredValue(?ShipmentServiceOptionsExcessDeclaredValue $excessDeclaredValue) : self
    {
        $this->initialized['excessDeclaredValue'] = true;
        $this->excessDeclaredValue = $excessDeclaredValue;
        return $this;
    }
    /**
     * HandlingCharge Container.
     *
     * @return ShipmentServiceOptionsHandlingCharge|null
     */
    public function getHandlingCharge() : ?ShipmentServiceOptionsHandlingCharge
    {
        return $this->handlingCharge;
    }
    /**
     * HandlingCharge Container.
     *
     * @param ShipmentServiceOptionsHandlingCharge|null $handlingCharge
     *
     * @return self
     */
    public function setHandlingCharge(?ShipmentServiceOptionsHandlingCharge $handlingCharge) : self
    {
        $this->initialized['handlingCharge'] = true;
        $this->handlingCharge = $handlingCharge;
        return $this;
    }
    /**
     * The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required.
     *
     * @return string|null
     */
    public function getFreezableProtectionIndicator() : ?string
    {
        return $this->freezableProtectionIndicator;
    }
    /**
     * The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required.
     *
     * @param string|null $freezableProtectionIndicator
     *
     * @return self
     */
    public function setFreezableProtectionIndicator(?string $freezableProtectionIndicator) : self
    {
        $this->initialized['freezableProtectionIndicator'] = true;
        $this->freezableProtectionIndicator = $freezableProtectionIndicator;
        return $this;
    }
    /**
    * The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required.
    It is recommended to provide 'LinearFeet' if this indicator is sent.
    *
    * @return string|null
    */
    public function getExtremeLengthIndicator() : ?string
    {
        return $this->extremeLengthIndicator;
    }
    /**
    * The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required.
    It is recommended to provide 'LinearFeet' if this indicator is sent.
    *
    * @param string|null $extremeLengthIndicator
    *
    * @return self
    */
    public function setExtremeLengthIndicator(?string $extremeLengthIndicator) : self
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
    * @return string|null
    */
    public function getLinearFeet() : ?string
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
    * @param string|null $linearFeet
    *
    * @return self
    */
    public function setLinearFeet(?string $linearFeet) : self
    {
        $this->initialized['linearFeet'] = true;
        $this->linearFeet = $linearFeet;
        return $this;
    }
    /**
     * Adjusted Height container.
     *
     * @return ShipmentServiceOptionsAdjustedHeight|null
     */
    public function getAdjustedHeight() : ?ShipmentServiceOptionsAdjustedHeight
    {
        return $this->adjustedHeight;
    }
    /**
     * Adjusted Height container.
     *
     * @param ShipmentServiceOptionsAdjustedHeight|null $adjustedHeight
     *
     * @return self
     */
    public function setAdjustedHeight(?ShipmentServiceOptionsAdjustedHeight $adjustedHeight) : self
    {
        $this->initialized['adjustedHeight'] = true;
        $this->adjustedHeight = $adjustedHeight;
        return $this;
    }
}