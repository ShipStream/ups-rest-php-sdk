<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipmentRatingOptions extends \ArrayObject
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
    * Negotiated Rates option indicator. If the indicator is present and the Shipper is authorized then Negotiated Rates should be returned in the response.  Negotiated Rates are of two types Account Based Rates (ABR) and Web Discount Rates. Negotiated Rates are only returned for qualified Shipper Account Numbers. 
    
    Eligibility is determined using the combination of UserId and the Shipper's Shipper Account Number. If the user is qualified, both Published rates and Negotiated rates are returned to the user. If the UserId and Shipper Account 
    
    Number are not qualified for Negotiated rates, a warning message is returned that indicates ineligibility and only the Published rates are returned in the response. As per discount eligibility of user, negotiated rates in the response may contain ABR or Web discount rates.
    *
    * @var string
    */
    protected $negotiatedRatesIndicator;
    /**
     * Ground Freight Pricing Rates option indicator. If the Ground Freight Pricing Shipment indicator is enabled and Shipper number is authorized then Ground Freight Pricing rates should be returned in the response.  The Shipper account number must be qualified to receive Ground Freight Pricing Density Based Shipment rates. Only the Shipper account number taken from /ShipmentRequest/Shipment/FRSPaymentInformation/AccountNumber is used when checking qualification for Ground Freight Pricing Density Based rates.
     *
     * @var string
     */
    protected $fRSShipmentIndicator;
    /**
     * RateChartIndicator, if present in request, response will contain RateChart element.
     *
     * @var string
     */
    protected $rateChartIndicator;
    /**
    * This indicator applies for a third party (3P) / Freight collect (FC) shipment only. 
    
    For 3P/FC shipment if the shipper wishes to request for the negotiated rates of the third party then this indicator should be included in the request. 
    
    If authorized the 3P/FC negotiated rates will be applied to the shipment and rates will be returned in response.
    *
    * @var string
    */
    protected $tPFCNegotiatedRatesIndicator;
    /**
    * If this indicator is present user level discount will be applied to rates if applicable  Conditions checked:
    This indicator should be present
    Shipper number should not be present
    User should be eligible for user level discount
    *
    * @var string
    */
    protected $userLevelDiscountIndicator;
    /**
    * Negotiated Rates option indicator. If the indicator is present and the Shipper is authorized then Negotiated Rates should be returned in the response.  Negotiated Rates are of two types Account Based Rates (ABR) and Web Discount Rates. Negotiated Rates are only returned for qualified Shipper Account Numbers. 
    
    Eligibility is determined using the combination of UserId and the Shipper's Shipper Account Number. If the user is qualified, both Published rates and Negotiated rates are returned to the user. If the UserId and Shipper Account 
    
    Number are not qualified for Negotiated rates, a warning message is returned that indicates ineligibility and only the Published rates are returned in the response. As per discount eligibility of user, negotiated rates in the response may contain ABR or Web discount rates.
    *
    * @return string
    */
    public function getNegotiatedRatesIndicator() : string
    {
        return $this->negotiatedRatesIndicator;
    }
    /**
    * Negotiated Rates option indicator. If the indicator is present and the Shipper is authorized then Negotiated Rates should be returned in the response.  Negotiated Rates are of two types Account Based Rates (ABR) and Web Discount Rates. Negotiated Rates are only returned for qualified Shipper Account Numbers. 
    
    Eligibility is determined using the combination of UserId and the Shipper's Shipper Account Number. If the user is qualified, both Published rates and Negotiated rates are returned to the user. If the UserId and Shipper Account 
    
    Number are not qualified for Negotiated rates, a warning message is returned that indicates ineligibility and only the Published rates are returned in the response. As per discount eligibility of user, negotiated rates in the response may contain ABR or Web discount rates.
    *
    * @param string $negotiatedRatesIndicator
    *
    * @return self
    */
    public function setNegotiatedRatesIndicator(string $negotiatedRatesIndicator) : self
    {
        $this->initialized['negotiatedRatesIndicator'] = true;
        $this->negotiatedRatesIndicator = $negotiatedRatesIndicator;
        return $this;
    }
    /**
     * Ground Freight Pricing Rates option indicator. If the Ground Freight Pricing Shipment indicator is enabled and Shipper number is authorized then Ground Freight Pricing rates should be returned in the response.  The Shipper account number must be qualified to receive Ground Freight Pricing Density Based Shipment rates. Only the Shipper account number taken from /ShipmentRequest/Shipment/FRSPaymentInformation/AccountNumber is used when checking qualification for Ground Freight Pricing Density Based rates.
     *
     * @return string
     */
    public function getFRSShipmentIndicator() : string
    {
        return $this->fRSShipmentIndicator;
    }
    /**
     * Ground Freight Pricing Rates option indicator. If the Ground Freight Pricing Shipment indicator is enabled and Shipper number is authorized then Ground Freight Pricing rates should be returned in the response.  The Shipper account number must be qualified to receive Ground Freight Pricing Density Based Shipment rates. Only the Shipper account number taken from /ShipmentRequest/Shipment/FRSPaymentInformation/AccountNumber is used when checking qualification for Ground Freight Pricing Density Based rates.
     *
     * @param string $fRSShipmentIndicator
     *
     * @return self
     */
    public function setFRSShipmentIndicator(string $fRSShipmentIndicator) : self
    {
        $this->initialized['fRSShipmentIndicator'] = true;
        $this->fRSShipmentIndicator = $fRSShipmentIndicator;
        return $this;
    }
    /**
     * RateChartIndicator, if present in request, response will contain RateChart element.
     *
     * @return string
     */
    public function getRateChartIndicator() : string
    {
        return $this->rateChartIndicator;
    }
    /**
     * RateChartIndicator, if present in request, response will contain RateChart element.
     *
     * @param string $rateChartIndicator
     *
     * @return self
     */
    public function setRateChartIndicator(string $rateChartIndicator) : self
    {
        $this->initialized['rateChartIndicator'] = true;
        $this->rateChartIndicator = $rateChartIndicator;
        return $this;
    }
    /**
    * This indicator applies for a third party (3P) / Freight collect (FC) shipment only. 
    
    For 3P/FC shipment if the shipper wishes to request for the negotiated rates of the third party then this indicator should be included in the request. 
    
    If authorized the 3P/FC negotiated rates will be applied to the shipment and rates will be returned in response.
    *
    * @return string
    */
    public function getTPFCNegotiatedRatesIndicator() : string
    {
        return $this->tPFCNegotiatedRatesIndicator;
    }
    /**
    * This indicator applies for a third party (3P) / Freight collect (FC) shipment only. 
    
    For 3P/FC shipment if the shipper wishes to request for the negotiated rates of the third party then this indicator should be included in the request. 
    
    If authorized the 3P/FC negotiated rates will be applied to the shipment and rates will be returned in response.
    *
    * @param string $tPFCNegotiatedRatesIndicator
    *
    * @return self
    */
    public function setTPFCNegotiatedRatesIndicator(string $tPFCNegotiatedRatesIndicator) : self
    {
        $this->initialized['tPFCNegotiatedRatesIndicator'] = true;
        $this->tPFCNegotiatedRatesIndicator = $tPFCNegotiatedRatesIndicator;
        return $this;
    }
    /**
    * If this indicator is present user level discount will be applied to rates if applicable  Conditions checked:
    This indicator should be present
    Shipper number should not be present
    User should be eligible for user level discount
    *
    * @return string
    */
    public function getUserLevelDiscountIndicator() : string
    {
        return $this->userLevelDiscountIndicator;
    }
    /**
    * If this indicator is present user level discount will be applied to rates if applicable  Conditions checked:
    This indicator should be present
    Shipper number should not be present
    User should be eligible for user level discount
    *
    * @param string $userLevelDiscountIndicator
    *
    * @return self
    */
    public function setUserLevelDiscountIndicator(string $userLevelDiscountIndicator) : self
    {
        $this->initialized['userLevelDiscountIndicator'] = true;
        $this->userLevelDiscountIndicator = $userLevelDiscountIndicator;
        return $this;
    }
}