<?php

namespace ShipStream\Ups\Api\Model;

class ContactsProducer extends \ArrayObject
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
    * The text associated with the code will be printed in the producer section instead of producer contact information. 
    Use attached List if more than one producer's good is included on the Certificate, attach a list of additional producers, including the legal name, address (including country or territory), and legal tax identification number, cross-referenced to the goods described in the Description of Goods field.  Applies to NAFTA CO.  
    Valid values: 
    01 - AVAILABLE TO CUSTOMS UPON REQUEST
    02 - SAME AS EXPORTER
    03 - ATTACHED LIST
    04 - UNKNOWN
    *
    * @var string|null
    */
    protected $option;
    /**
     * Company Name or the Individual name of the Producer.  Applies to NAFTA CO.  Only applicable when producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Tax ID of the Producer.  Applies to NAFTA CO. Only applicable when producer option is empty or not present
     *
     * @var string|null
     */
    protected $taxIdentificationNumber;
    /**
     * Address information of the Producer.  Applies to NAFTA CO. Only applicable if producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
     *
     * @var ProducerAddress|null
     */
    protected $address;
    /**
     * Contact name at the Producer location.  Applies to NAFTA CO.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Phone number information of Producer.  Applies to NAFTA CO.
     *
     * @var ProducerPhone|null
     */
    protected $phone;
    /**
     * Producer email address.  Applies to NAFTA CO.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
    * The text associated with the code will be printed in the producer section instead of producer contact information. 
    Use attached List if more than one producer's good is included on the Certificate, attach a list of additional producers, including the legal name, address (including country or territory), and legal tax identification number, cross-referenced to the goods described in the Description of Goods field.  Applies to NAFTA CO.  
    Valid values: 
    01 - AVAILABLE TO CUSTOMS UPON REQUEST
    02 - SAME AS EXPORTER
    03 - ATTACHED LIST
    04 - UNKNOWN
    *
    * @return string|null
    */
    public function getOption() : ?string
    {
        return $this->option;
    }
    /**
    * The text associated with the code will be printed in the producer section instead of producer contact information. 
    Use attached List if more than one producer's good is included on the Certificate, attach a list of additional producers, including the legal name, address (including country or territory), and legal tax identification number, cross-referenced to the goods described in the Description of Goods field.  Applies to NAFTA CO.  
    Valid values: 
    01 - AVAILABLE TO CUSTOMS UPON REQUEST
    02 - SAME AS EXPORTER
    03 - ATTACHED LIST
    04 - UNKNOWN
    *
    * @param string|null $option
    *
    * @return self
    */
    public function setOption(?string $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
    /**
     * Company Name or the Individual name of the Producer.  Applies to NAFTA CO.  Only applicable when producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Company Name or the Individual name of the Producer.  Applies to NAFTA CO.  Only applicable when producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
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
     * Tax ID of the Producer.  Applies to NAFTA CO. Only applicable when producer option is empty or not present
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Tax ID of the Producer.  Applies to NAFTA CO. Only applicable when producer option is empty or not present
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
     * Address information of the Producer.  Applies to NAFTA CO. Only applicable if producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
     *
     * @return ProducerAddress|null
     */
    public function getAddress() : ?ProducerAddress
    {
        return $this->address;
    }
    /**
     * Address information of the Producer.  Applies to NAFTA CO. Only applicable if producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
     *
     * @param ProducerAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ProducerAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact name at the Producer location.  Applies to NAFTA CO.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the Producer location.  Applies to NAFTA CO.
     *
     * @param string|null $attentionName
     *
     * @return self
     */
    public function setAttentionName(?string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * Phone number information of Producer.  Applies to NAFTA CO.
     *
     * @return ProducerPhone|null
     */
    public function getPhone() : ?ProducerPhone
    {
        return $this->phone;
    }
    /**
     * Phone number information of Producer.  Applies to NAFTA CO.
     *
     * @param ProducerPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ProducerPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Producer email address.  Applies to NAFTA CO.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Producer email address.  Applies to NAFTA CO.
     *
     * @param string|null $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(?string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
}