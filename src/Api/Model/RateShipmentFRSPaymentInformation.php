<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentFRSPaymentInformation extends \ArrayObject
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
     * GFP Payment Information Type container.  GFP only.
     *
     * @var FRSPaymentInformationType|null
     */
    protected $type;
    /**
     * UPS Account Number.
     *
     * @var string|null
     */
    protected $accountNumber;
    /**
     * Container to hold the information for the FreightCollect and PrepaidThirdParty Address.  Note: The Address is required only when the billing option is Freight collect or ThirdParty.
     *
     * @var FRSPaymentInformationAddress|null
     */
    protected $address;
    /**
     * GFP Payment Information Type container.  GFP only.
     *
     * @return FRSPaymentInformationType|null
     */
    public function getType() : ?FRSPaymentInformationType
    {
        return $this->type;
    }
    /**
     * GFP Payment Information Type container.  GFP only.
     *
     * @param FRSPaymentInformationType|null $type
     *
     * @return self
     */
    public function setType(?FRSPaymentInformationType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * UPS Account Number.
     *
     * @return string|null
     */
    public function getAccountNumber() : ?string
    {
        return $this->accountNumber;
    }
    /**
     * UPS Account Number.
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Container to hold the information for the FreightCollect and PrepaidThirdParty Address.  Note: The Address is required only when the billing option is Freight collect or ThirdParty.
     *
     * @return FRSPaymentInformationAddress|null
     */
    public function getAddress() : ?FRSPaymentInformationAddress
    {
        return $this->address;
    }
    /**
     * Container to hold the information for the FreightCollect and PrepaidThirdParty Address.  Note: The Address is required only when the billing option is Freight collect or ThirdParty.
     *
     * @param FRSPaymentInformationAddress|null $address
     *
     * @return self
     */
    public function setAddress(?FRSPaymentInformationAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}