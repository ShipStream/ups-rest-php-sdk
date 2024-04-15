<?php

namespace ShipStream\Ups\Api\Model;

class ContactsUltimateConsignee extends \ArrayObject
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
     * Company Name or the Individual name of the Ultimate consignee.  Applicable for EEI form only.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Address information of the Ultimate consignee.  Applicable for EEI form only.
     *
     * @var UltimateConsigneeAddress|null
     */
    protected $address;
    /**
     * Container for providing UltimateConsignee Type.  Applicable for EEI form only.
     *
     * @var UltimateConsigneeUltimateConsigneeType|null
     */
    protected $ultimateConsigneeType;
    /**
     * Company Name or the Individual name of the Ultimate consignee.  Applicable for EEI form only.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Company Name or the Individual name of the Ultimate consignee.  Applicable for EEI form only.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Address information of the Ultimate consignee.  Applicable for EEI form only.
     *
     * @return UltimateConsigneeAddress|null
     */
    public function getAddress() : ?UltimateConsigneeAddress
    {
        return $this->address;
    }
    /**
     * Address information of the Ultimate consignee.  Applicable for EEI form only.
     *
     * @param UltimateConsigneeAddress|null $address
     *
     * @return self
     */
    public function setAddress(?UltimateConsigneeAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Container for providing UltimateConsignee Type.  Applicable for EEI form only.
     *
     * @return UltimateConsigneeUltimateConsigneeType|null
     */
    public function getUltimateConsigneeType() : ?UltimateConsigneeUltimateConsigneeType
    {
        return $this->ultimateConsigneeType;
    }
    /**
     * Container for providing UltimateConsignee Type.  Applicable for EEI form only.
     *
     * @param UltimateConsigneeUltimateConsigneeType|null $ultimateConsigneeType
     *
     * @return self
     */
    public function setUltimateConsigneeType(?UltimateConsigneeUltimateConsigneeType $ultimateConsigneeType) : self
    {
        $this->initialized['ultimateConsigneeType'] = true;
        $this->ultimateConsigneeType = $ultimateConsigneeType;
        return $this;
    }
}