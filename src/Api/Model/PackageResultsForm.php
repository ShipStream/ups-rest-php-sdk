<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsForm extends \ArrayObject
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
    * Code that indicates the type of form. Applicable only for ShipmentResponse and ShipAcceptResponse.
    
    Valid values: 01 - All Requested International Forms.
    *
    * @var string|null
    */
    protected $code;
    /**
    * Description that indicates the type of form. Possible Values. All Requested International Forms. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var string|null
    */
    protected $description;
    /**
    * Container tag for the International forms image. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var FormImage|null
    */
    protected $image;
    /**
    * Unique Id for later retrieval of saved version of the completed international forms. Always returned when code = 01. 01 represents international forms. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var string|null
    */
    protected $formGroupId;
    /**
     * Contains description text which identifies the group of International forms. This element is part of both request and response. This element does not appear on the forms.    Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var string|null
     */
    protected $formGroupIdName;
    /**
    * Code that indicates the type of form. Applicable only for ShipmentResponse and ShipAcceptResponse.
    
    Valid values: 01 - All Requested International Forms.
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Code that indicates the type of form. Applicable only for ShipmentResponse and ShipAcceptResponse.
    
    Valid values: 01 - All Requested International Forms.
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
    * Description that indicates the type of form. Possible Values. All Requested International Forms. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return string|null
    */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
    * Description that indicates the type of form. Possible Values. All Requested International Forms. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param string|null $description
    *
    * @return self
    */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
    * Container tag for the International forms image. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return FormImage|null
    */
    public function getImage() : ?FormImage
    {
        return $this->image;
    }
    /**
    * Container tag for the International forms image. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param FormImage|null $image
    *
    * @return self
    */
    public function setImage(?FormImage $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
    * Unique Id for later retrieval of saved version of the completed international forms. Always returned when code = 01. 01 represents international forms. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return string|null
    */
    public function getFormGroupId() : ?string
    {
        return $this->formGroupId;
    }
    /**
    * Unique Id for later retrieval of saved version of the completed international forms. Always returned when code = 01. 01 represents international forms. 
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param string|null $formGroupId
    *
    * @return self
    */
    public function setFormGroupId(?string $formGroupId) : self
    {
        $this->initialized['formGroupId'] = true;
        $this->formGroupId = $formGroupId;
        return $this;
    }
    /**
     * Contains description text which identifies the group of International forms. This element is part of both request and response. This element does not appear on the forms.    Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return string|null
     */
    public function getFormGroupIdName() : ?string
    {
        return $this->formGroupIdName;
    }
    /**
     * Contains description text which identifies the group of International forms. This element is part of both request and response. This element does not appear on the forms.    Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @param string|null $formGroupIdName
     *
     * @return self
     */
    public function setFormGroupIdName(?string $formGroupIdName) : self
    {
        $this->initialized['formGroupIdName'] = true;
        $this->formGroupIdName = $formGroupIdName;
        return $this;
    }
}