<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsContacts extends \ArrayObject
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
     * The forwarding agent is the company or person acting as agent in the trans-shipping of freight to the destination country or territory.  Applicable for EEI form only.
     *
     * @var ContactsForwardAgent|null
     */
    protected $forwardAgent;
    /**
     * The ultimate consignee is the person or company who receives the goods for end-use or the person or company listed on the export license. This is the end-user of the goods.  Applicable for EEI form only.
     *
     * @var ContactsUltimateConsignee|null
     */
    protected $ultimateConsignee;
    /**
     * The intermediate consignee is the person or company in the importing country or territory that makes final delivery to the ultimate consignee.  Applicable for EEI form only.
     *
     * @var ContactsIntermediateConsignee|null
     */
    protected $intermediateConsignee;
    /**
    * Information of the producer. The NAFTA Certificate of Origin must be completed, signed, and dated by the exporter. 
    When the Certificate is completed by the producer for use by the exporter, it must be completed, signed, and dated by the producer. The date must be the date the Certificate was completed and signed.  Applies to NAFTA CO.  Required for NAFTA CO forms.
    *
    * @var ContactsProducer|null
    */
    protected $producer;
    /**
     * SoldTo Container. The Sold To party's country code must be the same as the Ship To party's country code with the exception of Canada and satellite countries.  Applies to Invoice and NAFTA CO Forms. Required if Invoice or NAFTA CO (International Form) is requested.
     *
     * @var ContactsSoldTo|null
     */
    protected $soldTo;
    /**
     * The forwarding agent is the company or person acting as agent in the trans-shipping of freight to the destination country or territory.  Applicable for EEI form only.
     *
     * @return ContactsForwardAgent|null
     */
    public function getForwardAgent() : ?ContactsForwardAgent
    {
        return $this->forwardAgent;
    }
    /**
     * The forwarding agent is the company or person acting as agent in the trans-shipping of freight to the destination country or territory.  Applicable for EEI form only.
     *
     * @param ContactsForwardAgent|null $forwardAgent
     *
     * @return self
     */
    public function setForwardAgent(?ContactsForwardAgent $forwardAgent) : self
    {
        $this->initialized['forwardAgent'] = true;
        $this->forwardAgent = $forwardAgent;
        return $this;
    }
    /**
     * The ultimate consignee is the person or company who receives the goods for end-use or the person or company listed on the export license. This is the end-user of the goods.  Applicable for EEI form only.
     *
     * @return ContactsUltimateConsignee|null
     */
    public function getUltimateConsignee() : ?ContactsUltimateConsignee
    {
        return $this->ultimateConsignee;
    }
    /**
     * The ultimate consignee is the person or company who receives the goods for end-use or the person or company listed on the export license. This is the end-user of the goods.  Applicable for EEI form only.
     *
     * @param ContactsUltimateConsignee|null $ultimateConsignee
     *
     * @return self
     */
    public function setUltimateConsignee(?ContactsUltimateConsignee $ultimateConsignee) : self
    {
        $this->initialized['ultimateConsignee'] = true;
        $this->ultimateConsignee = $ultimateConsignee;
        return $this;
    }
    /**
     * The intermediate consignee is the person or company in the importing country or territory that makes final delivery to the ultimate consignee.  Applicable for EEI form only.
     *
     * @return ContactsIntermediateConsignee|null
     */
    public function getIntermediateConsignee() : ?ContactsIntermediateConsignee
    {
        return $this->intermediateConsignee;
    }
    /**
     * The intermediate consignee is the person or company in the importing country or territory that makes final delivery to the ultimate consignee.  Applicable for EEI form only.
     *
     * @param ContactsIntermediateConsignee|null $intermediateConsignee
     *
     * @return self
     */
    public function setIntermediateConsignee(?ContactsIntermediateConsignee $intermediateConsignee) : self
    {
        $this->initialized['intermediateConsignee'] = true;
        $this->intermediateConsignee = $intermediateConsignee;
        return $this;
    }
    /**
    * Information of the producer. The NAFTA Certificate of Origin must be completed, signed, and dated by the exporter. 
    When the Certificate is completed by the producer for use by the exporter, it must be completed, signed, and dated by the producer. The date must be the date the Certificate was completed and signed.  Applies to NAFTA CO.  Required for NAFTA CO forms.
    *
    * @return ContactsProducer|null
    */
    public function getProducer() : ?ContactsProducer
    {
        return $this->producer;
    }
    /**
    * Information of the producer. The NAFTA Certificate of Origin must be completed, signed, and dated by the exporter. 
    When the Certificate is completed by the producer for use by the exporter, it must be completed, signed, and dated by the producer. The date must be the date the Certificate was completed and signed.  Applies to NAFTA CO.  Required for NAFTA CO forms.
    *
    * @param ContactsProducer|null $producer
    *
    * @return self
    */
    public function setProducer(?ContactsProducer $producer) : self
    {
        $this->initialized['producer'] = true;
        $this->producer = $producer;
        return $this;
    }
    /**
     * SoldTo Container. The Sold To party's country code must be the same as the Ship To party's country code with the exception of Canada and satellite countries.  Applies to Invoice and NAFTA CO Forms. Required if Invoice or NAFTA CO (International Form) is requested.
     *
     * @return ContactsSoldTo|null
     */
    public function getSoldTo() : ?ContactsSoldTo
    {
        return $this->soldTo;
    }
    /**
     * SoldTo Container. The Sold To party's country code must be the same as the Ship To party's country code with the exception of Canada and satellite countries.  Applies to Invoice and NAFTA CO Forms. Required if Invoice or NAFTA CO (International Form) is requested.
     *
     * @param ContactsSoldTo|null $soldTo
     *
     * @return self
     */
    public function setSoldTo(?ContactsSoldTo $soldTo) : self
    {
        $this->initialized['soldTo'] = true;
        $this->soldTo = $soldTo;
        return $this;
    }
}