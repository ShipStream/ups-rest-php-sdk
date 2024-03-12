<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentTimeInTransit extends \ArrayObject
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
     * The date the user requests UPS to pickup the package from the origin. Format: YYYYMMDD. In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.  In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.
     *
     * @var string
     */
    protected $pickupDate;
    /**
     * If the indicator is present then the shipment was processed as Document Only.
     *
     * @var string
     */
    protected $documentsOnlyIndicator;
    /**
     * Package bill type for the shipment. Valid values:02 - Document only 03 - Non-Document04 - Pallet
     *
     * @var string
     */
    protected $packageBillType;
    /**
     * Container for all available service information.
     *
     * @var TimeInTransitServiceSummary
     */
    protected $serviceSummary;
    /**
     * Required output for International requests. If Documents indicator is set for Non-document a duty is automatically calculated. The possible values to be returned are: 01 - Dutiable02 - Non-Dutiable03 - Low-value04 - Courier Remission05 - Gift06 - Military07 - Exception08 - Line Release09 - Section 321 low value.
     *
     * @var string
     */
    protected $autoDutyCode;
    /**
     * The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @var string
     */
    protected $disclaimer;
    /**
     * The date the user requests UPS to pickup the package from the origin. Format: YYYYMMDD. In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.  In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.
     *
     * @return string
     */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
     * The date the user requests UPS to pickup the package from the origin. Format: YYYYMMDD. In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.  In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.
     *
     * @param string $pickupDate
     *
     * @return self
     */
    public function setPickupDate(string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * If the indicator is present then the shipment was processed as Document Only.
     *
     * @return string
     */
    public function getDocumentsOnlyIndicator() : string
    {
        return $this->documentsOnlyIndicator;
    }
    /**
     * If the indicator is present then the shipment was processed as Document Only.
     *
     * @param string $documentsOnlyIndicator
     *
     * @return self
     */
    public function setDocumentsOnlyIndicator(string $documentsOnlyIndicator) : self
    {
        $this->initialized['documentsOnlyIndicator'] = true;
        $this->documentsOnlyIndicator = $documentsOnlyIndicator;
        return $this;
    }
    /**
     * Package bill type for the shipment. Valid values:02 - Document only 03 - Non-Document04 - Pallet
     *
     * @return string
     */
    public function getPackageBillType() : string
    {
        return $this->packageBillType;
    }
    /**
     * Package bill type for the shipment. Valid values:02 - Document only 03 - Non-Document04 - Pallet
     *
     * @param string $packageBillType
     *
     * @return self
     */
    public function setPackageBillType(string $packageBillType) : self
    {
        $this->initialized['packageBillType'] = true;
        $this->packageBillType = $packageBillType;
        return $this;
    }
    /**
     * Container for all available service information.
     *
     * @return TimeInTransitServiceSummary
     */
    public function getServiceSummary() : TimeInTransitServiceSummary
    {
        return $this->serviceSummary;
    }
    /**
     * Container for all available service information.
     *
     * @param TimeInTransitServiceSummary $serviceSummary
     *
     * @return self
     */
    public function setServiceSummary(TimeInTransitServiceSummary $serviceSummary) : self
    {
        $this->initialized['serviceSummary'] = true;
        $this->serviceSummary = $serviceSummary;
        return $this;
    }
    /**
     * Required output for International requests. If Documents indicator is set for Non-document a duty is automatically calculated. The possible values to be returned are: 01 - Dutiable02 - Non-Dutiable03 - Low-value04 - Courier Remission05 - Gift06 - Military07 - Exception08 - Line Release09 - Section 321 low value.
     *
     * @return string
     */
    public function getAutoDutyCode() : string
    {
        return $this->autoDutyCode;
    }
    /**
     * Required output for International requests. If Documents indicator is set for Non-document a duty is automatically calculated. The possible values to be returned are: 01 - Dutiable02 - Non-Dutiable03 - Low-value04 - Courier Remission05 - Gift06 - Military07 - Exception08 - Line Release09 - Section 321 low value.
     *
     * @param string $autoDutyCode
     *
     * @return self
     */
    public function setAutoDutyCode(string $autoDutyCode) : self
    {
        $this->initialized['autoDutyCode'] = true;
        $this->autoDutyCode = $autoDutyCode;
        return $this;
    }
    /**
     * The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @return string
     */
    public function getDisclaimer() : string
    {
        return $this->disclaimer;
    }
    /**
     * The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @param string $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(string $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
}