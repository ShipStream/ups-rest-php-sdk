<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentReference extends \ArrayObject
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
     * Reference Number Container.
     *
     * @var ReferenceNumber|null
     */
    protected $number;
    /**
     * The presence of the tag BarCodeIndicator indicates that the reference at index 1 is bar-coded.
     *
     * @var string|null
     */
    protected $barCodeIndicator;
    /**
    * Number of cartons attached to this reference.
    Strongly recommended for ground services.
    *
    * @var string|null
    */
    protected $numberOfCartons;
    /**
    * Reference Weight Container.
    Strongly recommended for ground services.Ignored for air services.
    *
    * @var ReferenceWeight|null
    */
    protected $weight;
    /**
     * Reference Number Container.
     *
     * @return ReferenceNumber|null
     */
    public function getNumber() : ?ReferenceNumber
    {
        return $this->number;
    }
    /**
     * Reference Number Container.
     *
     * @param ReferenceNumber|null $number
     *
     * @return self
     */
    public function setNumber(?ReferenceNumber $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The presence of the tag BarCodeIndicator indicates that the reference at index 1 is bar-coded.
     *
     * @return string|null
     */
    public function getBarCodeIndicator() : ?string
    {
        return $this->barCodeIndicator;
    }
    /**
     * The presence of the tag BarCodeIndicator indicates that the reference at index 1 is bar-coded.
     *
     * @param string|null $barCodeIndicator
     *
     * @return self
     */
    public function setBarCodeIndicator(?string $barCodeIndicator) : self
    {
        $this->initialized['barCodeIndicator'] = true;
        $this->barCodeIndicator = $barCodeIndicator;
        return $this;
    }
    /**
    * Number of cartons attached to this reference.
    Strongly recommended for ground services.
    *
    * @return string|null
    */
    public function getNumberOfCartons() : ?string
    {
        return $this->numberOfCartons;
    }
    /**
    * Number of cartons attached to this reference.
    Strongly recommended for ground services.
    *
    * @param string|null $numberOfCartons
    *
    * @return self
    */
    public function setNumberOfCartons(?string $numberOfCartons) : self
    {
        $this->initialized['numberOfCartons'] = true;
        $this->numberOfCartons = $numberOfCartons;
        return $this;
    }
    /**
    * Reference Weight Container.
    Strongly recommended for ground services.Ignored for air services.
    *
    * @return ReferenceWeight|null
    */
    public function getWeight() : ?ReferenceWeight
    {
        return $this->weight;
    }
    /**
    * Reference Weight Container.
    Strongly recommended for ground services.Ignored for air services.
    *
    * @param ReferenceWeight|null $weight
    *
    * @return self
    */
    public function setWeight(?ReferenceWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}