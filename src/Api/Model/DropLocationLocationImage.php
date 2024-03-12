<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationLocationImage extends \ArrayObject
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
     * Secure URL for Location Image.
     *
     * @var string
     */
    protected $secureURL;
    /**
     * Non Secure URL for Location Image.
     *
     * @var string
     */
    protected $nonSecureURL;
    /**
     * Secure URL for Location Image.
     *
     * @return string
     */
    public function getSecureURL() : string
    {
        return $this->secureURL;
    }
    /**
     * Secure URL for Location Image.
     *
     * @param string $secureURL
     *
     * @return self
     */
    public function setSecureURL(string $secureURL) : self
    {
        $this->initialized['secureURL'] = true;
        $this->secureURL = $secureURL;
        return $this;
    }
    /**
     * Non Secure URL for Location Image.
     *
     * @return string
     */
    public function getNonSecureURL() : string
    {
        return $this->nonSecureURL;
    }
    /**
     * Non Secure URL for Location Image.
     *
     * @param string $nonSecureURL
     *
     * @return self
     */
    public function setNonSecureURL(string $nonSecureURL) : self
    {
        $this->initialized['nonSecureURL'] = true;
        $this->nonSecureURL = $nonSecureURL;
        return $this;
    }
}