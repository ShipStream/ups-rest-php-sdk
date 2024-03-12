<?php

namespace ShipStream\Ups\Api\Model;

class ServiceOfferingListServiceOffering extends \ArrayObject
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
    * The valid values are: 
    001-Direct To Retail
    002-Not In One ADL
    003-Click and Collect
    004-Retail to Retail
    005-Pickup
    006-Drop Off
    007-PUDO
    008-Early Pickup Delivery Time
    009-Accept prepaid drop offs
    010-DCO DCR intercept accepted 
    011-Accepts Payments 
    012-Pay At Store
    013-Accepts Restricted Articles
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the service offering. Text will be displayed in the locale requested.
     *
     * @var string
     */
    protected $description;
    /**
    * The valid values are: 
    001-Direct To Retail
    002-Not In One ADL
    003-Click and Collect
    004-Retail to Retail
    005-Pickup
    006-Drop Off
    007-PUDO
    008-Early Pickup Delivery Time
    009-Accept prepaid drop offs
    010-DCO DCR intercept accepted 
    011-Accepts Payments 
    012-Pay At Store
    013-Accepts Restricted Articles
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The valid values are: 
    001-Direct To Retail
    002-Not In One ADL
    003-Click and Collect
    004-Retail to Retail
    005-Pickup
    006-Drop Off
    007-PUDO
    008-Early Pickup Delivery Time
    009-Accept prepaid drop offs
    010-DCO DCR intercept accepted 
    011-Accepts Payments 
    012-Pay At Store
    013-Accepts Restricted Articles
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
     * Description of the service offering. Text will be displayed in the locale requested.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the service offering. Text will be displayed in the locale requested.
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
}