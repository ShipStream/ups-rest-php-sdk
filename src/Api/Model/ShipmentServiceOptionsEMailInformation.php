<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsEMailInformation extends \ArrayObject
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
     * @var list<EMailInformationEMailType>|null
     */
    protected $eMailType;
    /**
     * Email Container.
     *
     * @var EMailInformationEMail|null
     */
    protected $eMail;
    /**
     * 
     *
     * @return list<EMailInformationEMailType>|null
     */
    public function getEMailType() : ?array
    {
        return $this->eMailType;
    }
    /**
     * 
     *
     * @param list<EMailInformationEMailType>|null $eMailType
     *
     * @return self
     */
    public function setEMailType(?array $eMailType) : self
    {
        $this->initialized['eMailType'] = true;
        $this->eMailType = $eMailType;
        return $this;
    }
    /**
     * Email Container.
     *
     * @return EMailInformationEMail|null
     */
    public function getEMail() : ?EMailInformationEMail
    {
        return $this->eMail;
    }
    /**
     * Email Container.
     *
     * @param EMailInformationEMail|null $eMail
     *
     * @return self
     */
    public function setEMail(?EMailInformationEMail $eMail) : self
    {
        $this->initialized['eMail'] = true;
        $this->eMail = $eMail;
        return $this;
    }
}