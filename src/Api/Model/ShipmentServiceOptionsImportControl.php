<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsImportControl extends \ArrayObject
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
     * Code for type of Import Control shipment. Valid values are: '01' = ImportControl Print and Mail '02' = ImportControl One-Attempt                                     '03' = ImportControl Three-Attempt'04' = ImportControl Electronic Label '05' = ImportControl Print Label.
     *
     * @var string
     */
    protected $code;
    /**
     * Text description of the code representing the Import Control associated with the shipment.
     *
     * @var string
     */
    protected $description;
    /**
     * Code for type of Import Control shipment. Valid values are: '01' = ImportControl Print and Mail '02' = ImportControl One-Attempt                                     '03' = ImportControl Three-Attempt'04' = ImportControl Electronic Label '05' = ImportControl Print Label.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code for type of Import Control shipment. Valid values are: '01' = ImportControl Print and Mail '02' = ImportControl One-Attempt                                     '03' = ImportControl Three-Attempt'04' = ImportControl Electronic Label '05' = ImportControl Print Label.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Text description of the code representing the Import Control associated with the shipment.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Text description of the code representing the Import Control associated with the shipment.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}