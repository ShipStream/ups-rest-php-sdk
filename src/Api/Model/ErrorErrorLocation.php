<?php

namespace ShipStream\Ups\Api\Model;

class ErrorErrorLocation extends \ArrayObject
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
     * The Xpath name of the element in error. This is a valid Xpath pointing to an element in the request document.
     *
     * @var string
     */
    protected $errorLocationElementName;
    /**
     * The name of the attribute in error. This is the name of the attribute contained by the Error Location element.
     *
     * @var string
     */
    protected $errorLocationAttributeName;
    /**
     * The Xpath name of the element in error. This is a valid Xpath pointing to an element in the request document.
     *
     * @return string
     */
    public function getErrorLocationElementName() : string
    {
        return $this->errorLocationElementName;
    }
    /**
     * The Xpath name of the element in error. This is a valid Xpath pointing to an element in the request document.
     *
     * @param string $errorLocationElementName
     *
     * @return self
     */
    public function setErrorLocationElementName(string $errorLocationElementName) : self
    {
        $this->initialized['errorLocationElementName'] = true;
        $this->errorLocationElementName = $errorLocationElementName;
        return $this;
    }
    /**
     * The name of the attribute in error. This is the name of the attribute contained by the Error Location element.
     *
     * @return string
     */
    public function getErrorLocationAttributeName() : string
    {
        return $this->errorLocationAttributeName;
    }
    /**
     * The name of the attribute in error. This is the name of the attribute contained by the Error Location element.
     *
     * @param string $errorLocationAttributeName
     *
     * @return self
     */
    public function setErrorLocationAttributeName(string $errorLocationAttributeName) : self
    {
        $this->initialized['errorLocationAttributeName'] = true;
        $this->errorLocationAttributeName = $errorLocationAttributeName;
        return $this;
    }
}