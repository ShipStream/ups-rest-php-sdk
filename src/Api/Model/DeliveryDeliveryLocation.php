<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryDeliveryLocation extends \ArrayObject
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
     * Information that specifies a physical location where package is delivered.
     *
     * @var DeliveryLocationAddressArtifactFormat
     */
    protected $addressArtifactFormat;
    /**
     * Location Code for delivered package.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of the location where package is delivered.
     *
     * @var string
     */
    protected $description;
    /**
     * The person who signed for the package.
     *
     * @var string
     */
    protected $signedForByName;
    /**
     * Information that specifies a physical location where package is delivered.
     *
     * @return DeliveryLocationAddressArtifactFormat
     */
    public function getAddressArtifactFormat() : DeliveryLocationAddressArtifactFormat
    {
        return $this->addressArtifactFormat;
    }
    /**
     * Information that specifies a physical location where package is delivered.
     *
     * @param DeliveryLocationAddressArtifactFormat $addressArtifactFormat
     *
     * @return self
     */
    public function setAddressArtifactFormat(DeliveryLocationAddressArtifactFormat $addressArtifactFormat) : self
    {
        $this->initialized['addressArtifactFormat'] = true;
        $this->addressArtifactFormat = $addressArtifactFormat;
        return $this;
    }
    /**
     * Location Code for delivered package.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Location Code for delivered package.
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
     * Description of the location where package is delivered.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the location where package is delivered.
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
    /**
     * The person who signed for the package.
     *
     * @return string
     */
    public function getSignedForByName() : string
    {
        return $this->signedForByName;
    }
    /**
     * The person who signed for the package.
     *
     * @param string $signedForByName
     *
     * @return self
     */
    public function setSignedForByName(string $signedForByName) : self
    {
        $this->initialized['signedForByName'] = true;
        $this->signedForByName = $signedForByName;
        return $this;
    }
}