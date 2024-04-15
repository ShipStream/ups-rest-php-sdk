<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestShipmentDetail extends \ArrayObject
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
    * The presence of the tag HazmatIndicator indicates that the commodity is of type dangerous goods.
    Required if one or more commodities within the shipment is hazardous.
    *
    * @var string|null
    */
    protected $hazmatIndicator;
    /**
     * PackagingType Container.
     *
     * @var ShipmentDetailPackagingType|null
     */
    protected $packagingType;
    /**
     * Number of pieces.
     *
     * @var string|null
     */
    protected $numberOfPieces;
    /**
     * Description of the line item.
     *
     * @var string|null
     */
    protected $descriptionOfCommodity;
    /**
     * Weight Container.
     *
     * @var ShipmentDetailWeight|null
     */
    protected $weight;
    /**
    * The presence of the tag HazmatIndicator indicates that the commodity is of type dangerous goods.
    Required if one or more commodities within the shipment is hazardous.
    *
    * @return string|null
    */
    public function getHazmatIndicator() : ?string
    {
        return $this->hazmatIndicator;
    }
    /**
    * The presence of the tag HazmatIndicator indicates that the commodity is of type dangerous goods.
    Required if one or more commodities within the shipment is hazardous.
    *
    * @param string|null $hazmatIndicator
    *
    * @return self
    */
    public function setHazmatIndicator(?string $hazmatIndicator) : self
    {
        $this->initialized['hazmatIndicator'] = true;
        $this->hazmatIndicator = $hazmatIndicator;
        return $this;
    }
    /**
     * PackagingType Container.
     *
     * @return ShipmentDetailPackagingType|null
     */
    public function getPackagingType() : ?ShipmentDetailPackagingType
    {
        return $this->packagingType;
    }
    /**
     * PackagingType Container.
     *
     * @param ShipmentDetailPackagingType|null $packagingType
     *
     * @return self
     */
    public function setPackagingType(?ShipmentDetailPackagingType $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Number of pieces.
     *
     * @return string|null
     */
    public function getNumberOfPieces() : ?string
    {
        return $this->numberOfPieces;
    }
    /**
     * Number of pieces.
     *
     * @param string|null $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(?string $numberOfPieces) : self
    {
        $this->initialized['numberOfPieces'] = true;
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * Description of the line item.
     *
     * @return string|null
     */
    public function getDescriptionOfCommodity() : ?string
    {
        return $this->descriptionOfCommodity;
    }
    /**
     * Description of the line item.
     *
     * @param string|null $descriptionOfCommodity
     *
     * @return self
     */
    public function setDescriptionOfCommodity(?string $descriptionOfCommodity) : self
    {
        $this->initialized['descriptionOfCommodity'] = true;
        $this->descriptionOfCommodity = $descriptionOfCommodity;
        return $this;
    }
    /**
     * Weight Container.
     *
     * @return ShipmentDetailWeight|null
     */
    public function getWeight() : ?ShipmentDetailWeight
    {
        return $this->weight;
    }
    /**
     * Weight Container.
     *
     * @param ShipmentDetailWeight|null $weight
     *
     * @return self
     */
    public function setWeight(?ShipmentDetailWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}