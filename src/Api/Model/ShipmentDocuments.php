<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentDocuments extends \ArrayObject
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
     * @var list<DocumentsImage>
     */
    protected $image;
    /**
     * PackingList Container.
     *
     * @var DocumentsPackingList
     */
    protected $packingList;
    /**
     * 
     *
     * @return list<DocumentsImage>
     */
    public function getImage() : array
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param list<DocumentsImage> $image
     *
     * @return self
     */
    public function setImage(array $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * PackingList Container.
     *
     * @return DocumentsPackingList
     */
    public function getPackingList() : DocumentsPackingList
    {
        return $this->packingList;
    }
    /**
     * PackingList Container.
     *
     * @param DocumentsPackingList $packingList
     *
     * @return self
     */
    public function setPackingList(DocumentsPackingList $packingList) : self
    {
        $this->initialized['packingList'] = true;
        $this->packingList = $packingList;
        return $this;
    }
}