<?php

namespace ShipStream\Ups\Api\Model;

class ContactsIntermediateConsignee extends \ArrayObject
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
     * Company Name or the Individual name of the Intermediate consignee.  Applicable for EEI form only.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Address information of the Intermediate Consignee.  Applicable for EEI form only.
     *
     * @var IntermediateConsigneeAddress
     */
    protected $address;
    /**
     * Company Name or the Individual name of the Intermediate consignee.  Applicable for EEI form only.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Company Name or the Individual name of the Intermediate consignee.  Applicable for EEI form only.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Address information of the Intermediate Consignee.  Applicable for EEI form only.
     *
     * @return IntermediateConsigneeAddress
     */
    public function getAddress() : IntermediateConsigneeAddress
    {
        return $this->address;
    }
    /**
     * Address information of the Intermediate Consignee.  Applicable for EEI form only.
     *
     * @param IntermediateConsigneeAddress $address
     *
     * @return self
     */
    public function setAddress(IntermediateConsigneeAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}