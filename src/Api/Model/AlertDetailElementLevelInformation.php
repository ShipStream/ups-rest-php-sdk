<?php

namespace ShipStream\Ups\Api\Model;

class AlertDetailElementLevelInformation extends \ArrayObject
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
     * Define type of element in request. Possible values are - 'H" for the header details level,  "S" for the shipment level, "P" for the package level, "C" for the commodity level.
     *
     * @var string|null
     */
    protected $level;
    /**
     * 
     *
     * @var list<ElementLevelInformationElementIdentifier>|null
     */
    protected $elementIdentifier;
    /**
     * Define type of element in request. Possible values are - 'H" for the header details level,  "S" for the shipment level, "P" for the package level, "C" for the commodity level.
     *
     * @return string|null
     */
    public function getLevel() : ?string
    {
        return $this->level;
    }
    /**
     * Define type of element in request. Possible values are - 'H" for the header details level,  "S" for the shipment level, "P" for the package level, "C" for the commodity level.
     *
     * @param string|null $level
     *
     * @return self
     */
    public function setLevel(?string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return list<ElementLevelInformationElementIdentifier>|null
     */
    public function getElementIdentifier() : ?array
    {
        return $this->elementIdentifier;
    }
    /**
     * 
     *
     * @param list<ElementLevelInformationElementIdentifier>|null $elementIdentifier
     *
     * @return self
     */
    public function setElementIdentifier(?array $elementIdentifier) : self
    {
        $this->initialized['elementIdentifier'] = true;
        $this->elementIdentifier = $elementIdentifier;
        return $this;
    }
}