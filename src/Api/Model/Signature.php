<?php

namespace ShipStream\Ups\Api\Model;

class Signature extends \ArrayObject
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
     * The base64 encoded string representation of the signature image. Note: This is considered sensitive data and may only be returned for a user that has rights to the package.
     *
     * @var string
     */
    protected $image;
    /**
     * The base64 encoded string representation of the signature image. Note: This is considered sensitive data and may only be returned for a user that has rights to the package.
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * The base64 encoded string representation of the signature image. Note: This is considered sensitive data and may only be returned for a user that has rights to the package.
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}