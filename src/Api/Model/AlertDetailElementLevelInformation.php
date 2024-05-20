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
    * Define type of element in request. Possible values are -
    - 'H' for the header details level,
    - 'S' for the shipment level,
    - 'P' for the package level,
    - 'C' for the commodity level.
    
    *
    * @var string
    */
    protected $level;
    /**
     * Contains more information about the type of element. Returned if Level is 'P' or 'C'.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ElementLevelInformationElementIdentifier>
     */
    protected $elementIdentifier;
    /**
    * Define type of element in request. Possible values are -
    - 'H' for the header details level,
    - 'S' for the shipment level,
    - 'P' for the package level,
    - 'C' for the commodity level.
    
    *
    * @return string
    */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
    * Define type of element in request. Possible values are -
    - 'H' for the header details level,
    - 'S' for the shipment level,
    - 'P' for the package level,
    - 'C' for the commodity level.
    
    *
    * @param string $level
    *
    * @return self
    */
    public function setLevel(string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * Contains more information about the type of element. Returned if Level is 'P' or 'C'.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ElementLevelInformationElementIdentifier>
     */
    public function getElementIdentifier() : array
    {
        return $this->elementIdentifier;
    }
    /**
     * Contains more information about the type of element. Returned if Level is 'P' or 'C'.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ElementLevelInformationElementIdentifier> $elementIdentifier
     *
     * @return self
     */
    public function setElementIdentifier(array $elementIdentifier) : self
    {
        $this->initialized['elementIdentifier'] = true;
        $this->elementIdentifier = $elementIdentifier;
        return $this;
    }
}