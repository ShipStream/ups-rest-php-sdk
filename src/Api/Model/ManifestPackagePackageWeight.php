<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackagePackageWeight extends \ArrayObject
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
     * Package weight. Set to 0 for package type of letters or envelops.
     *
     * @var string
     */
    protected $weight;
    /**
     * Package weight. Set to 0 for package type of letters or envelops.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Package weight. Set to 0 for package type of letters or envelops.
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}