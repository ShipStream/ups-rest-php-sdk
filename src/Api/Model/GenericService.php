<?php

namespace ShipStream\Ups\Api\Model;

class GenericService extends \ArrayObject
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
     * For addition information, refer to the Service Codes table in the Appendix.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Not used.
     *
     * @var string|null
     */
    protected $description;
    /**
     * For addition information, refer to the Service Codes table in the Appendix.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * For addition information, refer to the Service Codes table in the Appendix.
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
     * Not used.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Not used.
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