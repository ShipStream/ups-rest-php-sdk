<?php

namespace ShipStream\Ups\Api\Model;

class LabelResultsReceipt extends \ArrayObject
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
     * Base 64 encoded html browser image.
     *
     * @var string
     */
    protected $hTMLImage;
    /**
     * Container for the receipt in the format other than HTML.
     *
     * @var ReceiptImage
     */
    protected $image;
    /**
    * Receipt's url  Applicable for following types of shipments:
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    *
    * @var string
    */
    protected $uRL;
    /**
     * Base 64 encoded html browser image.
     *
     * @return string
     */
    public function getHTMLImage() : string
    {
        return $this->hTMLImage;
    }
    /**
     * Base 64 encoded html browser image.
     *
     * @param string $hTMLImage
     *
     * @return self
     */
    public function setHTMLImage(string $hTMLImage) : self
    {
        $this->initialized['hTMLImage'] = true;
        $this->hTMLImage = $hTMLImage;
        return $this;
    }
    /**
     * Container for the receipt in the format other than HTML.
     *
     * @return ReceiptImage
     */
    public function getImage() : ReceiptImage
    {
        return $this->image;
    }
    /**
     * Container for the receipt in the format other than HTML.
     *
     * @param ReceiptImage $image
     *
     * @return self
     */
    public function setImage(ReceiptImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
    * Receipt's url  Applicable for following types of shipments:
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    *
    * @return string
    */
    public function getURL() : string
    {
        return $this->uRL;
    }
    /**
    * Receipt's url  Applicable for following types of shipments:
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    *
    * @param string $uRL
    *
    * @return self
    */
    public function setURL(string $uRL) : self
    {
        $this->initialized['uRL'] = true;
        $this->uRL = $uRL;
        return $this;
    }
}