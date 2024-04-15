<?php

namespace ShipStream\Ups\Api\Model;

class ContactsForwardAgent extends \ArrayObject
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
     * Company Name or the Individual name of the Forwarding agent.  Applicable for EEI form only.
     *
     * @var string|null
     */
    protected $companyName;
    /**
    * Tax ID of the Forwarding agent.
    Valid Values: (Below values are applicable for EEIFilingOption Code =3)
    94-308351500 
    13-168669100  
     Applicable for EEI form only.
    *
    * @var string|null
    */
    protected $taxIdentificationNumber;
    /**
     * Address information of the Forwarding agent.  Applicable for EEI form only.
     *
     * @var ForwardAgentAddress|null
     */
    protected $address;
    /**
     * Company Name or the Individual name of the Forwarding agent.  Applicable for EEI form only.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Company Name or the Individual name of the Forwarding agent.  Applicable for EEI form only.
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
    * Tax ID of the Forwarding agent.
    Valid Values: (Below values are applicable for EEIFilingOption Code =3)
    94-308351500 
    13-168669100  
     Applicable for EEI form only.
    *
    * @return string|null
    */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
    * Tax ID of the Forwarding agent.
    Valid Values: (Below values are applicable for EEIFilingOption Code =3)
    94-308351500 
    13-168669100  
     Applicable for EEI form only.
    *
    * @param string|null $taxIdentificationNumber
    *
    * @return self
    */
    public function setTaxIdentificationNumber(?string $taxIdentificationNumber) : self
    {
        $this->initialized['taxIdentificationNumber'] = true;
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        return $this;
    }
    /**
     * Address information of the Forwarding agent.  Applicable for EEI form only.
     *
     * @return ForwardAgentAddress|null
     */
    public function getAddress() : ?ForwardAgentAddress
    {
        return $this->address;
    }
    /**
     * Address information of the Forwarding agent.  Applicable for EEI form only.
     *
     * @param ForwardAgentAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ForwardAgentAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}