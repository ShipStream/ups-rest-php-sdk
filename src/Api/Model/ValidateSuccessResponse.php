<?php

namespace ShipStream\Ups\Api\Model;

class ValidateSuccessResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Status of request.
     *
     * @var string
     */
    protected $result;
    /**
     * Type of requested validation.
     *
     * @var string
     */
    protected $type;
    /**
     * Redirect URL for UPS Login.
     *
     * @var string
     */
    protected $lassoRedirectURL;
    /**
     * Status of request.
     *
     * @return string
     */
    public function getResult() : string
    {
        return $this->result;
    }
    /**
     * Status of request.
     *
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result) : self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
    /**
     * Type of requested validation.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of requested validation.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Redirect URL for UPS Login.
     *
     * @return string
     */
    public function getLassoRedirectURL() : string
    {
        return $this->lassoRedirectURL;
    }
    /**
     * Redirect URL for UPS Login.
     *
     * @param string $lassoRedirectURL
     *
     * @return self
     */
    public function setLassoRedirectURL(string $lassoRedirectURL) : self
    {
        $this->initialized['lassoRedirectURL'] = true;
        $this->lassoRedirectURL = $lassoRedirectURL;
        return $this;
    }
}