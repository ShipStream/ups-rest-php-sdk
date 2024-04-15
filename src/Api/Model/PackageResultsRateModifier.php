<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsRateModifier extends \ArrayObject
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
     * Rate Modifier Type. Example: "ORM". Applies only if SubVersion is 2205 or greater.
     *
     * @var string|null
     */
    protected $modifierType;
    /**
     * Rate Modifier Description. Example: "Origin Modifier". Applies only if SubVersion is 2205 or greater.
     *
     * @var string|null
     */
    protected $modifierDesc;
    /**
     * Amount. Example: "-1.00","0.25". It contains positive or negative values. Applies only if SubVersion is 2205 or greater.
     *
     * @var string|null
     */
    protected $amount;
    /**
     * Rate Modifier Type. Example: "ORM". Applies only if SubVersion is 2205 or greater.
     *
     * @return string|null
     */
    public function getModifierType() : ?string
    {
        return $this->modifierType;
    }
    /**
     * Rate Modifier Type. Example: "ORM". Applies only if SubVersion is 2205 or greater.
     *
     * @param string|null $modifierType
     *
     * @return self
     */
    public function setModifierType(?string $modifierType) : self
    {
        $this->initialized['modifierType'] = true;
        $this->modifierType = $modifierType;
        return $this;
    }
    /**
     * Rate Modifier Description. Example: "Origin Modifier". Applies only if SubVersion is 2205 or greater.
     *
     * @return string|null
     */
    public function getModifierDesc() : ?string
    {
        return $this->modifierDesc;
    }
    /**
     * Rate Modifier Description. Example: "Origin Modifier". Applies only if SubVersion is 2205 or greater.
     *
     * @param string|null $modifierDesc
     *
     * @return self
     */
    public function setModifierDesc(?string $modifierDesc) : self
    {
        $this->initialized['modifierDesc'] = true;
        $this->modifierDesc = $modifierDesc;
        return $this;
    }
    /**
     * Amount. Example: "-1.00","0.25". It contains positive or negative values. Applies only if SubVersion is 2205 or greater.
     *
     * @return string|null
     */
    public function getAmount() : ?string
    {
        return $this->amount;
    }
    /**
     * Amount. Example: "-1.00","0.25". It contains positive or negative values. Applies only if SubVersion is 2205 or greater.
     *
     * @param string|null $amount
     *
     * @return self
     */
    public function setAmount(?string $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}