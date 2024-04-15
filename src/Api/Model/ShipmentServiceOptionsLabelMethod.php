<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsLabelMethod extends \ArrayObject
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
    * Valid LabelMethod types are:
    01 = ImportControl Print and Mail
    02 = ImportControl One-Attempt
    03 = ImportControl Three-Attempt
    04 = ImportControl Electronic Label
    05 = ImportControl Print Label
    *
    * @var string|null
    */
    protected $code;
    /**
     * LabelMethod description.
     *
     * @var string|null
     */
    protected $description;
    /**
    * Valid LabelMethod types are:
    01 = ImportControl Print and Mail
    02 = ImportControl One-Attempt
    03 = ImportControl Three-Attempt
    04 = ImportControl Electronic Label
    05 = ImportControl Print Label
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Valid LabelMethod types are:
    01 = ImportControl Print and Mail
    02 = ImportControl One-Attempt
    03 = ImportControl Three-Attempt
    04 = ImportControl Electronic Label
    05 = ImportControl Print Label
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * LabelMethod description.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * LabelMethod description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}