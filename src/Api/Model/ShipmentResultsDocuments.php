<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsDocuments extends \ArrayObject
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
     * 
     *
     * @var list<DocumentsImage>|null
     */
    protected $image;
    /**
     * 
     *
     * @var list<DocumentsForms>|null
     */
    protected $forms;
    /**
     * 
     *
     * @return list<DocumentsImage>|null
     */
    public function getImage() : ?array
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param list<DocumentsImage>|null $image
     *
     * @return self
     */
    public function setImage(?array $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return list<DocumentsForms>|null
     */
    public function getForms() : ?array
    {
        return $this->forms;
    }
    /**
     * 
     *
     * @param list<DocumentsForms>|null $forms
     *
     * @return self
     */
    public function setForms(?array $forms) : self
    {
        $this->initialized['forms'] = true;
        $this->forms = $forms;
        return $this;
    }
}