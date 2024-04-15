<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipmentInformationFreightDensityInfo extends \ArrayObject
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
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @var string|null
     */
    protected $adjustedHeightIndicator;
    /**
     * Container for the adjusted height.  Required if AdjustedHeightIndicator is present.
     *
     * @var FreightDensityInfoAdjustedHeight|null
     */
    protected $adjustedHeight;
    /**
     * 
     *
     * @var list<FreightDensityInfoHandlingUnits>|null
     */
    protected $handlingUnits;
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @return string|null
     */
    public function getAdjustedHeightIndicator() : ?string
    {
        return $this->adjustedHeightIndicator;
    }
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @param string|null $adjustedHeightIndicator
     *
     * @return self
     */
    public function setAdjustedHeightIndicator(?string $adjustedHeightIndicator) : self
    {
        $this->initialized['adjustedHeightIndicator'] = true;
        $this->adjustedHeightIndicator = $adjustedHeightIndicator;
        return $this;
    }
    /**
     * Container for the adjusted height.  Required if AdjustedHeightIndicator is present.
     *
     * @return FreightDensityInfoAdjustedHeight|null
     */
    public function getAdjustedHeight() : ?FreightDensityInfoAdjustedHeight
    {
        return $this->adjustedHeight;
    }
    /**
     * Container for the adjusted height.  Required if AdjustedHeightIndicator is present.
     *
     * @param FreightDensityInfoAdjustedHeight|null $adjustedHeight
     *
     * @return self
     */
    public function setAdjustedHeight(?FreightDensityInfoAdjustedHeight $adjustedHeight) : self
    {
        $this->initialized['adjustedHeight'] = true;
        $this->adjustedHeight = $adjustedHeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightDensityInfoHandlingUnits>|null
     */
    public function getHandlingUnits() : ?array
    {
        return $this->handlingUnits;
    }
    /**
     * 
     *
     * @param list<FreightDensityInfoHandlingUnits>|null $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(?array $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
}