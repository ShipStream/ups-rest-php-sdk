<?php

namespace ShipStream\Ups\Api\Model;

class AlternateRatesResponseRate extends \ArrayObject
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
     * Rate Type Container.
     *
     * @var RateType|null
     */
    protected $type;
    /**
     * The subtype of itemized charges rate type. Please look at Appendix 1 Adding for 1800o_RFC8654
     *
     * @var string|null
     */
    protected $subTypeCode;
    /**
     * Factor Container.
     *
     * @var RateFactor|null
     */
    protected $factor;
    /**
     * Rate Type Container.
     *
     * @return RateType|null
     */
    public function getType() : ?RateType
    {
        return $this->type;
    }
    /**
     * Rate Type Container.
     *
     * @param RateType|null $type
     *
     * @return self
     */
    public function setType(?RateType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The subtype of itemized charges rate type. Please look at Appendix 1 Adding for 1800o_RFC8654
     *
     * @return string|null
     */
    public function getSubTypeCode() : ?string
    {
        return $this->subTypeCode;
    }
    /**
     * The subtype of itemized charges rate type. Please look at Appendix 1 Adding for 1800o_RFC8654
     *
     * @param string|null $subTypeCode
     *
     * @return self
     */
    public function setSubTypeCode(?string $subTypeCode) : self
    {
        $this->initialized['subTypeCode'] = true;
        $this->subTypeCode = $subTypeCode;
        return $this;
    }
    /**
     * Factor Container.
     *
     * @return RateFactor|null
     */
    public function getFactor() : ?RateFactor
    {
        return $this->factor;
    }
    /**
     * Factor Container.
     *
     * @param RateFactor|null $factor
     *
     * @return self
     */
    public function setFactor(?RateFactor $factor) : self
    {
        $this->initialized['factor'] = true;
        $this->factor = $factor;
        return $this;
    }
}