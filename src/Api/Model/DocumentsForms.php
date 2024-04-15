<?php

namespace ShipStream\Ups\Api\Model;

class DocumentsForms extends \ArrayObject
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
     * Forms Type Container.
     *
     * @var FormsType|null
     */
    protected $type;
    /**
     * Base 64 encoded graphic image.
     *
     * @var string|null
     */
    protected $graphicImage;
    /**
     * Forms Format Container.
     *
     * @var FormsFormat|null
     */
    protected $format;
    /**
     * Forms Type Container.
     *
     * @return FormsType|null
     */
    public function getType() : ?FormsType
    {
        return $this->type;
    }
    /**
     * Forms Type Container.
     *
     * @param FormsType|null $type
     *
     * @return self
     */
    public function setType(?FormsType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @return string|null
     */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @param string|null $graphicImage
     *
     * @return self
     */
    public function setGraphicImage(?string $graphicImage) : self
    {
        $this->initialized['graphicImage'] = true;
        $this->graphicImage = $graphicImage;
        return $this;
    }
    /**
     * Forms Format Container.
     *
     * @return FormsFormat|null
     */
    public function getFormat() : ?FormsFormat
    {
        return $this->format;
    }
    /**
     * Forms Format Container.
     *
     * @param FormsFormat|null $format
     *
     * @return self
     */
    public function setFormat(?FormsFormat $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}