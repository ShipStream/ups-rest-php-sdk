<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentFRSPaymentInformation extends \ArrayObject
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
     * Container to hold the Ground Freight Pricing payment type information.  It is required if the request has Ground Freight Pricing shipment indicator.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The UPS account number.  If the Ground Freight Pricing indicator and FreightShipmentInformation/DensityEligibleIndicator is present in the request, this account number must be validated to check if it is Ground Freight Pricing Density Based Rating enabled.
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
     * Container to hold the Ground Freight Pricing payment type information.  It is required if the request has Ground Freight Pricing shipment indicator.
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Container to hold the Ground Freight Pricing payment type information.  It is required if the request has Ground Freight Pricing shipment indicator.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The UPS account number.  If the Ground Freight Pricing indicator and FreightShipmentInformation/DensityEligibleIndicator is present in the request, this account number must be validated to check if it is Ground Freight Pricing Density Based Rating enabled.
     *
     * @return string|null
     */
    public function getAccountNumber() : ?string
    {
        return $this->accountNumber;
    }
    /**
     * The UPS account number.  If the Ground Freight Pricing indicator and FreightShipmentInformation/DensityEligibleIndicator is present in the request, this account number must be validated to check if it is Ground Freight Pricing Density Based Rating enabled.
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