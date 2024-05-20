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
     * @var list<EMailInformationEMailType>
     */
    protected $eMailType;
    /**
     * Email Container.
     *
     * @var EMailInformationEMail
     */
    protected $eMail;
    /**
     * 
     *
     * @return list<EMailInformationEMailType>
     */
    public function getEMailType() : array
    {
        return $this->eMailType;
    }
    /**
     * 
     *
     * @param list<EMailInformationEMailType> $eMailType
     *
     * @return self
     */
    public function setEMailType(array $eMailType) : self
    {
        $this->initialized['eMailType'] = true;
        $this->eMailType = $eMailType;
        return $this;
    }
    /**
     * Email Container.
     *
     * @return EMailInformationEMail
     */
    public function getEMail() : EMailInformationEMail
    {
        return $this->eMail;
    }
    /**
     * Email Container.
     *
     * @param EMailInformationEMail $eMail
     *
     * @return self
     */
    public function setEMail(EMailInformationEMail $eMail) : self
    {
        $this->initialized['eMail'] = true;
        $this->eMail = $eMail;
        return $this;
    }
}