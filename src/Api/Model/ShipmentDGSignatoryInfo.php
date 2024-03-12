<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentDGSignatoryInfo extends \ArrayObject
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
    * Name of the person signing the declaration. 
    
    Note: The name of person or department he/she is employed with, are both acceptable.
    *
    * @var string
    */
    protected $name;
    /**
    * Title of the person signing the declaration.
    Note: The title of the person or department he/she is employed with, are both acceptable.
    *
    * @var string
    */
    protected $title;
    /**
     * The city of the Signatory.
     *
     * @var string
     */
    protected $place;
    /**
     * Date of signing the declaration form.  Valid format is YYYYMMDD.
     *
     * @var string
     */
    protected $date;
    /**
    * Valid values:
    01 = Shipment level
    02 = Package level                                           
     Valid only for the Shipper Declaration paper. If missing or invalid DGPaperImage will be returned at package level.
    *
    * @var string
    */
    protected $shipperDeclaration;
    /**
     * Dangerous Goods Paper Upload Only Indicator. DG Paper will not be returned in response if UploadOnlyIndicator present.
     *
     * @var string
     */
    protected $uploadOnlyIndicator;
    /**
    * Name of the person signing the declaration. 
    
    Note: The name of person or department he/she is employed with, are both acceptable.
    *
    * @return string
    */
    public function getName() : string
    {
        return $this->name;
    }
    /**
    * Name of the person signing the declaration. 
    
    Note: The name of person or department he/she is employed with, are both acceptable.
    *
    * @param string $name
    *
    * @return self
    */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
    * Title of the person signing the declaration.
    Note: The title of the person or department he/she is employed with, are both acceptable.
    *
    * @return string
    */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
    * Title of the person signing the declaration.
    Note: The title of the person or department he/she is employed with, are both acceptable.
    *
    * @param string $title
    *
    * @return self
    */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The city of the Signatory.
     *
     * @return string
     */
    public function getPlace() : string
    {
        return $this->place;
    }
    /**
     * The city of the Signatory.
     *
     * @param string $place
     *
     * @return self
     */
    public function setPlace(string $place) : self
    {
        $this->initialized['place'] = true;
        $this->place = $place;
        return $this;
    }
    /**
     * Date of signing the declaration form.  Valid format is YYYYMMDD.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Date of signing the declaration form.  Valid format is YYYYMMDD.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
    * Valid values:
    01 = Shipment level
    02 = Package level                                           
     Valid only for the Shipper Declaration paper. If missing or invalid DGPaperImage will be returned at package level.
    *
    * @return string
    */
    public function getShipperDeclaration() : string
    {
        return $this->shipperDeclaration;
    }
    /**
    * Valid values:
    01 = Shipment level
    02 = Package level                                           
     Valid only for the Shipper Declaration paper. If missing or invalid DGPaperImage will be returned at package level.
    *
    * @param string $shipperDeclaration
    *
    * @return self
    */
    public function setShipperDeclaration(string $shipperDeclaration) : self
    {
        $this->initialized['shipperDeclaration'] = true;
        $this->shipperDeclaration = $shipperDeclaration;
        return $this;
    }
    /**
     * Dangerous Goods Paper Upload Only Indicator. DG Paper will not be returned in response if UploadOnlyIndicator present.
     *
     * @return string
     */
    public function getUploadOnlyIndicator() : string
    {
        return $this->uploadOnlyIndicator;
    }
    /**
     * Dangerous Goods Paper Upload Only Indicator. DG Paper will not be returned in response if UploadOnlyIndicator present.
     *
     * @param string $uploadOnlyIndicator
     *
     * @return self
     */
    public function setUploadOnlyIndicator(string $uploadOnlyIndicator) : self
    {
        $this->initialized['uploadOnlyIndicator'] = true;
        $this->uploadOnlyIndicator = $uploadOnlyIndicator;
        return $this;
    }
}