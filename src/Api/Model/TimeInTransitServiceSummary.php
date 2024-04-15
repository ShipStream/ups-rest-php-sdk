<?php

namespace ShipStream\Ups\Api\Model;

class TimeInTransitServiceSummary extends \ArrayObject
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
     * Container for the the UPS service selected for a shipment.
     *
     * @var ServiceSummaryService|null
     */
    protected $service;
    /**
     * Empty Tag. Indicates whether the service will be guaranteed or not.  Required for International Requests.
     *
     * @var string|null
     */
    protected $guaranteedIndicator;
    /**
     * The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The disclaimer is returned as a conditional statement to the validity of the service being guaranteed. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @var string|null
     */
    protected $disclaimer;
    /**
     * Container for the Time-In-Transit arrival information by service
     *
     * @var ServiceSummaryEstimatedArrival|null
     */
    protected $estimatedArrival;
    /**
     * Saturday delivery information for a service. Values are1 - Saturday Delivery Available with additional charges 0 - Saturday Delivery not available or no additional charge, please check Delivery Date to confirm if the Delivery will be SaturdayPlease see Saturday Delivery business rules section for more information.
     *
     * @var string|null
     */
    protected $saturdayDelivery;
    /**
     * Saturday delivery disclaimer message.
     *
     * @var string|null
     */
    protected $saturdayDeliveryDisclaimer;
    /**
     * Sunday delivery information for a service. Values are1 - Sunday Delivery Available with additional charges 0 - Sunday Delivery not available or no additional charge, please check Delivery Date to confirm if the Delivery will be SundayPlease see Saturday Delivery business rules section for more information.  Applies only if SubVersion is greater than or equal to 2007
     *
     * @var string|null
     */
    protected $sundayDelivery;
    /**
     * Sunday delivery disclaimer message.  Applies only if SubVersion is greater than or equal to 2007
     *
     * @var string|null
     */
    protected $sundayDeliveryDisclaimer;
    /**
     * Container for the the UPS service selected for a shipment.
     *
     * @return ServiceSummaryService|null
     */
    public function getService() : ?ServiceSummaryService
    {
        return $this->service;
    }
    /**
     * Container for the the UPS service selected for a shipment.
     *
     * @param ServiceSummaryService|null $service
     *
     * @return self
     */
    public function setService(?ServiceSummaryService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Empty Tag. Indicates whether the service will be guaranteed or not.  Required for International Requests.
     *
     * @return string|null
     */
    public function getGuaranteedIndicator() : ?string
    {
        return $this->guaranteedIndicator;
    }
    /**
     * Empty Tag. Indicates whether the service will be guaranteed or not.  Required for International Requests.
     *
     * @param string|null $guaranteedIndicator
     *
     * @return self
     */
    public function setGuaranteedIndicator(?string $guaranteedIndicator) : self
    {
        $this->initialized['guaranteedIndicator'] = true;
        $this->guaranteedIndicator = $guaranteedIndicator;
        return $this;
    }
    /**
     * The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The disclaimer is returned as a conditional statement to the validity of the service being guaranteed. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @return string|null
     */
    public function getDisclaimer() : ?string
    {
        return $this->disclaimer;
    }
    /**
     * The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The disclaimer is returned as a conditional statement to the validity of the service being guaranteed. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @param string|null $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(?string $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * Container for the Time-In-Transit arrival information by service
     *
     * @return ServiceSummaryEstimatedArrival|null
     */
    public function getEstimatedArrival() : ?ServiceSummaryEstimatedArrival
    {
        return $this->estimatedArrival;
    }
    /**
     * Container for the Time-In-Transit arrival information by service
     *
     * @param ServiceSummaryEstimatedArrival|null $estimatedArrival
     *
     * @return self
     */
    public function setEstimatedArrival(?ServiceSummaryEstimatedArrival $estimatedArrival) : self
    {
        $this->initialized['estimatedArrival'] = true;
        $this->estimatedArrival = $estimatedArrival;
        return $this;
    }
    /**
     * Saturday delivery information for a service. Values are1 - Saturday Delivery Available with additional charges 0 - Saturday Delivery not available or no additional charge, please check Delivery Date to confirm if the Delivery will be SaturdayPlease see Saturday Delivery business rules section for more information.
     *
     * @return string|null
     */
    public function getSaturdayDelivery() : ?string
    {
        return $this->saturdayDelivery;
    }
    /**
     * Saturday delivery information for a service. Values are1 - Saturday Delivery Available with additional charges 0 - Saturday Delivery not available or no additional charge, please check Delivery Date to confirm if the Delivery will be SaturdayPlease see Saturday Delivery business rules section for more information.
     *
     * @param string|null $saturdayDelivery
     *
     * @return self
     */
    public function setSaturdayDelivery(?string $saturdayDelivery) : self
    {
        $this->initialized['saturdayDelivery'] = true;
        $this->saturdayDelivery = $saturdayDelivery;
        return $this;
    }
    /**
     * Saturday delivery disclaimer message.
     *
     * @return string|null
     */
    public function getSaturdayDeliveryDisclaimer() : ?string
    {
        return $this->saturdayDeliveryDisclaimer;
    }
    /**
     * Saturday delivery disclaimer message.
     *
     * @param string|null $saturdayDeliveryDisclaimer
     *
     * @return self
     */
    public function setSaturdayDeliveryDisclaimer(?string $saturdayDeliveryDisclaimer) : self
    {
        $this->initialized['saturdayDeliveryDisclaimer'] = true;
        $this->saturdayDeliveryDisclaimer = $saturdayDeliveryDisclaimer;
        return $this;
    }
    /**
     * Sunday delivery information for a service. Values are1 - Sunday Delivery Available with additional charges 0 - Sunday Delivery not available or no additional charge, please check Delivery Date to confirm if the Delivery will be SundayPlease see Saturday Delivery business rules section for more information.  Applies only if SubVersion is greater than or equal to 2007
     *
     * @return string|null
     */
    public function getSundayDelivery() : ?string
    {
        return $this->sundayDelivery;
    }
    /**
     * Sunday delivery information for a service. Values are1 - Sunday Delivery Available with additional charges 0 - Sunday Delivery not available or no additional charge, please check Delivery Date to confirm if the Delivery will be SundayPlease see Saturday Delivery business rules section for more information.  Applies only if SubVersion is greater than or equal to 2007
     *
     * @param string|null $sundayDelivery
     *
     * @return self
     */
    public function setSundayDelivery(?string $sundayDelivery) : self
    {
        $this->initialized['sundayDelivery'] = true;
        $this->sundayDelivery = $sundayDelivery;
        return $this;
    }
    /**
     * Sunday delivery disclaimer message.  Applies only if SubVersion is greater than or equal to 2007
     *
     * @return string|null
     */
    public function getSundayDeliveryDisclaimer() : ?string
    {
        return $this->sundayDeliveryDisclaimer;
    }
    /**
     * Sunday delivery disclaimer message.  Applies only if SubVersion is greater than or equal to 2007
     *
     * @param string|null $sundayDeliveryDisclaimer
     *
     * @return self
     */
    public function setSundayDeliveryDisclaimer(?string $sundayDeliveryDisclaimer) : self
    {
        $this->initialized['sundayDeliveryDisclaimer'] = true;
        $this->sundayDeliveryDisclaimer = $sundayDeliveryDisclaimer;
        return $this;
    }
}