<?php

namespace ShipStream\Ups\Api\Model;

class BusinessClassificationListBusinessClassification extends \ArrayObject
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
     * Business Classification code of UPS Access Point. Please refer to appendix D for a list of business classification.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of business classification.
     *
     * @var string
     */
    protected $description;
    /**
     * Business Classification code of UPS Access Point. Please refer to appendix D for a list of business classification.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Business Classification code of UPS Access Point. Please refer to appendix D for a list of business classification.
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
     * Description of business classification.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of business classification.
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