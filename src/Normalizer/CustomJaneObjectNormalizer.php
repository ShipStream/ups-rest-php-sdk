<?php

namespace ShipStream\Ups\Normalizer;

use ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse;
use ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults;
use ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseResponse;
use ShipStream\Ups\Api\Model\AccessPointInformationBusinessClassificationList;
use ShipStream\Ups\Api\Model\AccessPointInformationPrivateNetworkList;
use ShipStream\Ups\Api\Model\AlertDetailElementLevelInformation;
use ShipStream\Ups\Api\Model\CandidateAddressKeyFormat;
use ShipStream\Ups\Api\Model\ChemicalReferenceDataResponse;
use ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData;
use ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseResponse;
use ShipStream\Ups\Api\Model\DeleteResponseResponse;
use ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat;
use ShipStream\Ups\Api\Model\DropLocationAdditionalComments;
use ShipStream\Ups\Api\Model\DropLocationLocationAttribute;
use ShipStream\Ups\Api\Model\DropLocationOperatingHours;
use ShipStream\Ups\Api\Model\DropLocationServiceOfferingList;
use ShipStream\Ups\Api\Model\DropOffFacilitiesAddress;
use ShipStream\Ups\Api\Model\ExceptionUpdatedAddress;
use ShipStream\Ups\Api\Model\FreightRateResponse;
use ShipStream\Ups\Api\Model\FreightRateResponseResponse;
use ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults;
use ShipStream\Ups\Api\Model\LabelRecoveryResponse;
use ShipStream\Ups\Api\Model\LandedCostResponseShipment;
use ShipStream\Ups\Api\Model\LocatorResponseSearchResults;
use ShipStream\Ups\Api\Model\ManifestPackage;
use ShipStream\Ups\Api\Model\OperatingHoursStandardHours;
use ShipStream\Ups\Api\Model\OptionCodeTransportationPickUpSchedule;
use ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListResponse;
use ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation;
use ShipStream\Ups\Api\Model\PickupPendingStatusResponse;
use ShipStream\Ups\Api\Model\PickupRateResponseRateResult;
use ShipStream\Ups\Api\Model\PickupRateResponseResponse;
use ShipStream\Ups\Api\Model\PreNotificationResponseResponse;
use ShipStream\Ups\Api\Model\PushToImageRepositoryResponseResponse;
use ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents;
use ShipStream\Ups\Api\Model\QuantumViewResponseQuantumViewEvents;
use ShipStream\Ups\Api\Model\QuantumViewResponseResponse;
use ShipStream\Ups\Api\Model\RatedPackageNegotiatedCharges;
use ShipStream\Ups\Api\Model\RatedShipmentNegotiatedRateCharges;
use ShipStream\Ups\Api\Model\RatedShipmentRatedPackage;
use ShipStream\Ups\Api\Model\RateResponse;
use ShipStream\Ups\Api\Model\RateResponseRatedShipment;
use ShipStream\Ups\Api\Model\RateResponseResponse;
use ShipStream\Ups\Api\Model\ResponseError;
use ShipStream\Ups\Api\Model\SearchResultsDropLocation;
use ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities;
use ShipStream\Ups\Api\Model\ShipmentResponseResponse;
use ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults;
use ShipStream\Ups\Api\Model\ShipmentResultsDocuments;
use ShipStream\Ups\Api\Model\StandardHoursDayOfWeek;
use ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile;
use ShipStream\Ups\Api\Model\SubscriptionFileDelivery;
use ShipStream\Ups\Api\Model\SubscriptionFileException;
use ShipStream\Ups\Api\Model\SubscriptionFileGeneric;
use ShipStream\Ups\Api\Model\SubscriptionFileManifest;
use ShipStream\Ups\Api\Model\SubscriptionFileOrigin;
use ShipStream\Ups\Api\Model\UploadResponseFormsHistoryDocumentID;
use ShipStream\Ups\Api\Model\UploadResponseResponse;
use ShipStream\Ups\Api\Model\XAVResponse;
use ShipStream\Ups\Api\Model\XAVResponseCandidate;
use ShipStream\Ups\Api\Normalizer\JaneObjectNormalizer;

class CustomJaneObjectNormalizer extends JaneObjectNormalizer
{
    public function __construct()
    {
        $this->normalizers[ResponseError::class] = ResponseErrorNormalizer::class;
        // AddressValidation
        $this->normalizers[CandidateAddressKeyFormat::class] = AddressValidation\CandidateAddressKeyFormatNormalizer::class;
        $this->normalizers[XAVResponse::class] = AddressValidation\XAVResponseNormalizer::class;
        $this->normalizers[XAVResponseCandidate::class] = AddressValidation\XAVResponseCandidateNormalizer::class;
        // DangerousGoods
        $this->normalizers[AcceptanceAuditPreCheckResponse::class] = DangerousGoods\AcceptanceAuditPreCheckResponseNormalizer::class;
        $this->normalizers[AcceptanceAuditPreCheckResponsePackageResults::class] = DangerousGoods\AcceptanceAuditPreCheckResponsePackageResultsNormalizer::class;
        $this->normalizers[AcceptanceAuditPreCheckResponseResponse::class] = DangerousGoods\AcceptanceAuditPreCheckResponseResponseNormalizer::class;
        $this->normalizers[ChemicalReferenceDataResponse::class] = DangerousGoods\ChemicalReferenceDataResponseNormalizer::class;
        $this->normalizers[ChemicalReferenceDataResponseChemicalData::class] = DangerousGoods\ChemicalReferenceDataResponseChemicalDataNormalizer::class;
        $this->normalizers[ChemicalReferenceDataResponseResponse::class] = DangerousGoods\ChemicalReferenceDataResponseResponseNormalizer::class;
        // LandedCost
        $this->normalizers[LandedCostResponseShipment::class] = LandedCost\LandedCostResponseShipmentNormalizer::class;
        // Locator
        $this->normalizers[AccessPointInformationBusinessClassificationList::class] = Locator\AccessPointInformationBusinessClassificationListNormalizer::class;
        $this->normalizers[AccessPointInformationPrivateNetworkList::class] = Locator\AccessPointInformationPrivateNetworkListNormalizer::class;
        $this->normalizers[DropLocationAdditionalComments::class] = Locator\DropLocationAdditionalCommentsNormalizer::class;
        $this->normalizers[DropLocationLocationAttribute::class] = Locator\DropLocationLocationAttributeNormalizer::class;
        $this->normalizers[DropLocationOperatingHours::class] = Locator\DropLocationOperatingHoursNormalizer::class;
        $this->normalizers[DropLocationServiceOfferingList::class] = Locator\DropLocationServiceOfferingListNormalizer::class;
        $this->normalizers[LocatorResponseSearchResults::class] = Locator\LocatorResponseSearchResultsNormalizer::class;
        $this->normalizers[OptionCodeTransportationPickUpSchedule::class] = Locator\OptionCodeTransportationPickUpScheduleNormalizer::class;
        $this->normalizers[OperatingHoursStandardHours::class] = Locator\OperatingHoursStandardHoursNormalizer::class;
        $this->normalizers[SearchResultsDropLocation::class] = Locator\SearchResultsDropLocationNormalizer::class;
        $this->normalizers[StandardHoursDayOfWeek::class] = Locator\StandardHoursDayOfWeekNormalizer::class;
        // Paperless
        $this->normalizers[DeleteResponseResponse::class] = Paperless\DeleteResponseResponseNormalizer::class;
        $this->normalizers[PushToImageRepositoryResponseResponse::class] = Paperless\PushToImageRepositoryResponseResponseNormalizer::class;
        $this->normalizers[UploadResponseResponse::class] = Paperless\UploadResponseResponseNormalizer::class;
        $this->normalizers[UploadResponseFormsHistoryDocumentID::class] = Paperless\UploadResponseFormsHistoryDocumentIDNormalizer::class;
        // Pickup
        $this->normalizers[DropOffFacilitiesAddress::class] = Pickup\DropOffFacilitiesAddressNormalizer::class;
        $this->normalizers[PickupGetPoliticalDivision1ListResponse::class] = Pickup\PickupGetPoliticalDivision1ListResponseNormalizer::class;
        $this->normalizers[PickupGetServiceCenterFacilitiesResponseServiceCenterLocation::class] = Pickup\PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer::class;
        $this->normalizers[PickupPendingStatusResponse::class] = Pickup\PickupPendingStatusResponseNormalizer::class;
        $this->normalizers[PickupRateResponseRateResult::class] = Pickup\PickupRateResponseRateResultNormalizer::class;
        $this->normalizers[ServiceCenterLocationDropOffFacilities::class] = Pickup\ServiceCenterLocationDropOffFacilitiesNormalizer::class;
        $this->normalizers[PickupRateResponseResponse::class] = Pickup\PickupRateResponseResponseNormalizer::class;
        // PreNotification
        $this->normalizers[PreNotificationResponseResponse::class] = PreNotification\PreNotificationResponseResponseNormalizer::class;
        // QuantumView
        $this->normalizers[DeliveryLocationAddressArtifactFormat::class] = QuantumView\DeliveryLocationAddressArtifactFormatNormalizer::class;
        $this->normalizers[ExceptionUpdatedAddress::class] = QuantumView\ExceptionUpdatedAddressNormalizer::class;
        $this->normalizers[ManifestPackage::class] = QuantumView\ManifestPackageNormalizer::class;
        $this->normalizers[QuantumViewEventsSubscriptionEvents::class] = QuantumView\QuantumViewEventsSubscriptionEventsNormalizer::class;
        $this->normalizers[QuantumViewResponseResponse::class] = QuantumView\QuantumViewResponseResponseNormalizer::class;
        $this->normalizers[QuantumViewResponseQuantumViewEvents::class] = QuantumView\QuantumViewResponseQuantumViewEventsNormalizer::class;
        $this->normalizers[SubscriptionEventsSubscriptionFile::class] = QuantumView\SubscriptionEventsSubscriptionFileNormalizer::class;
        $this->normalizers[SubscriptionFileDelivery::class] = QuantumView\SubscriptionFileDeliveryNormalizer::class;
        $this->normalizers[SubscriptionFileException::class] = QuantumView\SubscriptionFileExceptionNormalizer::class;
        $this->normalizers[SubscriptionFileGeneric::class] = QuantumView\SubscriptionFileGenericNormalizer::class;
        $this->normalizers[SubscriptionFileManifest::class] = QuantumView\SubscriptionFileManifestNormalizer::class;
        $this->normalizers[SubscriptionFileOrigin::class] = QuantumView\SubscriptionFileOriginNormalizer::class;
        // Rating
        $this->normalizers[AlertDetailElementLevelInformation::class] = Rating\AlertDetailElementLevelInformationNormalizer::class;
        $this->normalizers[RatedPackageNegotiatedCharges::class] = Rating\RatedPackageNegotiatedChargesNormalizer::class;
        $this->normalizers[RatedShipmentNegotiatedRateCharges::class] = Rating\RatedShipmentNegotiatedRateChargesNormalizer::class;
        $this->normalizers[RatedShipmentRatedPackage::class] = Rating\RatedShipmentRatedPackageNormalizer::class;
        $this->normalizers[RateResponse::class] = Rating\RateResponseNormalizer::class;
        $this->normalizers[RateResponseRatedShipment::class] = Rating\RateResponseRatedShipmentNormalizer::class;
        $this->normalizers[RateResponseResponse::class] = Rating\RateResponseResponseNormalizer::class;
        // Shipping
        $this->normalizers[LabelRecoveryResponse::class] = Shipping\LabelRecoveryResponseNormalizer::class;
        $this->normalizers[ShipmentResponseResponse::class] = Shipping\ShipmentResponseResponseNormalizer::class;
        $this->normalizers[ShipmentResponseShipmentResults::class] = Shipping\ShipmentResponseShipmentResultsNormalizer::class;
        // TForceFreightRating
        $this->normalizers[FreightRateResponse::class] = TForceFreightRating\FreightRateResponseNormalizer::class;
        $this->normalizers[FreightRateResponseResponse::class] = TForceFreightRating\FreightRateResponseResponseNormalizer::class;
        // TForceFreightShipping
        $this->normalizers[FreightShipResponseShipmentResults::class] = TForceFreightShipping\FreightShipResponseShipmentResultsNormalizer::class;
        $this->normalizers[ShipmentResultsDocuments::class] = TForceFreightShipping\ShipmentResultsDocumentsNormalizer::class;
    }
}
