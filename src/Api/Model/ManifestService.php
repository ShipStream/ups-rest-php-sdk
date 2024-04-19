<?php

namespace ShipStream\Ups\Api\Model;

class ManifestService extends \ArrayObject
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
     * @var string
     */
    protected $code;
    /**
     * Description of the service code. Examples are Next Day Air, Worldwide Express, and Ground.
     *
     * @var string
     */
    protected $description;
    /**
     * For addition information, refer to the Service Codes table in the Appendix.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * For addition information, refer to the Service Codes table in the Appendix.
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
     * Description of the service code. Examples are Next Day Air, Worldwide Express, and Ground.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the service code. Examples are Next Day Air, Worldwide Express, and Ground.
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