<?php

namespace ShipStream\Ups\Api\Normalizer;

use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \ShipStream\Ups\Api\Model\XAVRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\XAVRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\XAVResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVRequest::class => \ShipStream\Ups\Api\Normalizer\XAVRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVRequestRequest::class => \ShipStream\Ups\Api\Normalizer\XAVRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RequestTransactionReference::class => \ShipStream\Ups\Api\Normalizer\RequestTransactionReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat::class => \ShipStream\Ups\Api\Normalizer\XAVRequestAddressKeyFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVResponse::class => \ShipStream\Ups\Api\Normalizer\XAVResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVResponseResponse::class => \ShipStream\Ups\Api\Normalizer\XAVResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ResponseResponseStatus::class => \ShipStream\Ups\Api\Normalizer\ResponseResponseStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ResponseAlert::class => \ShipStream\Ups\Api\Normalizer\ResponseAlertNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ResponseTransactionReference::class => \ShipStream\Ups\Api\Normalizer\ResponseTransactionReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVResponseAddressClassification::class => \ShipStream\Ups\Api\Normalizer\XAVResponseAddressClassificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\XAVResponseCandidate::class => \ShipStream\Ups\Api\Normalizer\XAVResponseCandidateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CandidateAddressClassification::class => \ShipStream\Ups\Api\Normalizer\CandidateAddressClassificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat::class => \ShipStream\Ups\Api\Normalizer\CandidateAddressKeyFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ErrorResponse::class => \ShipStream\Ups\Api\Normalizer\ErrorResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ErrorResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\ErrorResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Error::class => \ShipStream\Ups\Api\Normalizer\ErrorNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\DANGEROUSGOODSUTILITYRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\DANGEROUSGOODSUTILITYResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequest::class => \ShipStream\Ups\Api\Normalizer\ChemicalReferenceDataRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequestRequest::class => \ShipStream\Ups\Api\Normalizer\ChemicalReferenceDataRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponse::class => \ShipStream\Ups\Api\Normalizer\ChemicalReferenceDataResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseResponse::class => \ShipStream\Ups\Api\Normalizer\ChemicalReferenceDataResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData::class => \ShipStream\Ups\Api\Normalizer\ChemicalReferenceDataResponseChemicalDataNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail::class => \ShipStream\Ups\Api\Normalizer\ChemicalDataChemicalDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalDataProperShippingNameDetail::class => \ShipStream\Ups\Api\Normalizer\ChemicalDataProperShippingNameDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail::class => \ShipStream\Ups\Api\Normalizer\ChemicalDataPackageQuantityLimitDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\DANGEROUSGOODSUTILITYAPCRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\DANGEROUSGOODSUTILITYAPCResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequest::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckRequestShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipFromAddress::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckShipmentShipFromAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipToAddress::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckShipmentShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentService::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckShipmentPackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackagePackageWeight::class => \ShipStream\Ups\Api\Normalizer\PackagePackageWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\PackageWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageChemicalRecord::class => \ShipStream\Ups\Api\Normalizer\PackageChemicalRecordNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseResponse::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ResponseAlertDetail::class => \ShipStream\Ups\Api\Normalizer\ResponseAlertDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlertDetailElementLevelInformation::class => \ShipStream\Ups\Api\Normalizer\AlertDetailElementLevelInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ElementLevelInformationElementIdentifier::class => \ShipStream\Ups\Api\Normalizer\ElementLevelInformationElementIdentifierNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseService::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckResponseServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults::class => \ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckResponsePackageResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults::class => \ShipStream\Ups\Api\Normalizer\PackageResultsChemicalRecordResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LandedCostRequest::class => \ShipStream\Ups\Api\Normalizer\LandedCostRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LandedCostRequestShipment::class => \ShipStream\Ups\Api\Normalizer\LandedCostRequestShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RequestShipmentItems::class => \ShipStream\Ups\Api\Normalizer\RequestShipmentItemsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LandedCostResponse::class => \ShipStream\Ups\Api\Normalizer\LandedCostResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LandedCostResponseShipment::class => \ShipStream\Ups\Api\Normalizer\LandedCostResponseShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LandedCostResponseShipmentPerfStats::class => \ShipStream\Ups\Api\Normalizer\LandedCostResponseShipmentPerfStatsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BrokerageFeeItems::class => \ShipStream\Ups\Api\Normalizer\BrokerageFeeItemsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ResponseShipmentItems::class => \ShipStream\Ups\Api\Normalizer\ResponseShipmentItemsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Errors::class => \ShipStream\Ups\Api\Normalizer\ErrorsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LOCATORRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\LOCATORRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LOCATORResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\LOCATORResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequest::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestRequest::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestOriginAddress::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestOriginAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginAddressGeocode::class => \ShipStream\Ups\Api\Normalizer\OriginAddressGeocodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat::class => \ShipStream\Ups\Api\Normalizer\OriginAddressAddressKeyFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestTranslate::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestTranslateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestLocationSearchCriteriaNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption::class => \ShipStream\Ups\Api\Normalizer\LocationSearchCriteriaSearchOptionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SearchOptionOptionType::class => \ShipStream\Ups\Api\Normalizer\SearchOptionOptionTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SearchOptionOptionCode::class => \ShipStream\Ups\Api\Normalizer\SearchOptionOptionCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SearchOptionRelation::class => \ShipStream\Ups\Api\Normalizer\SearchOptionRelationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch::class => \ShipStream\Ups\Api\Normalizer\LocationSearchCriteriaServiceSearchNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceSearchServiceCode::class => \ShipStream\Ups\Api\Normalizer\ServiceSearchServiceCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceSearchServiceOptionCode::class => \ShipStream\Ups\Api\Normalizer\ServiceSearchServiceOptionCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch::class => \ShipStream\Ups\Api\Normalizer\LocationSearchCriteriaFreightWillCallSearchNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress::class => \ShipStream\Ups\Api\Normalizer\FreightWillCallSearchFacilityAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch::class => \ShipStream\Ups\Api\Normalizer\LocationSearchCriteriaAccessPointSearchNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria::class => \ShipStream\Ups\Api\Normalizer\AccessPointSearchIncludeCriteriaNormalizer::class,
        
        \ShipStream\Ups\Api\Model\IncludeCriteriaMerchantAccountNumberList::class => \ShipStream\Ups\Api\Normalizer\IncludeCriteriaMerchantAccountNumberListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter::class => \ShipStream\Ups\Api\Normalizer\IncludeCriteriaSearchFilterNormalizer::class,
        
        \ShipStream\Ups\Api\Model\IncludeCriteriaServiceOfferingList::class => \ShipStream\Ups\Api\Normalizer\IncludeCriteriaServiceOfferingListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceOfferingListServiceOffering::class => \ShipStream\Ups\Api\Normalizer\ServiceOfferingListServiceOfferingNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult::class => \ShipStream\Ups\Api\Normalizer\AccessPointSearchExcludeFromResultNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExcludeFromResultPostalCodeList::class => \ShipStream\Ups\Api\Normalizer\ExcludeFromResultPostalCodeListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PostalCodeListPostalCode::class => \ShipStream\Ups\Api\Normalizer\PostalCodeListPostalCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria::class => \ShipStream\Ups\Api\Normalizer\LocationSearchCriteriaOpenTimeCriteriaNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestSortCriteria::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestSortCriteriaNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorRequestServiceGeoUnit::class => \ShipStream\Ups\Api\Normalizer\LocatorRequestServiceGeoUnitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorResponse::class => \ShipStream\Ups\Api\Normalizer\LocatorResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorResponseResponse::class => \ShipStream\Ups\Api\Normalizer\LocatorResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ResponseError::class => \ShipStream\Ups\Api\Normalizer\ResponseErrorNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ErrorErrorLocation::class => \ShipStream\Ups\Api\Normalizer\ErrorErrorLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorResponseGeocode::class => \ShipStream\Ups\Api\Normalizer\LocatorResponseGeocodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocatorResponseSearchResults::class => \ShipStream\Ups\Api\Normalizer\LocatorResponseSearchResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SearchResultsGeocodeCandidate::class => \ShipStream\Ups\Api\Normalizer\SearchResultsGeocodeCandidateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GeocodeCandidateAddressKeyFormat::class => \ShipStream\Ups\Api\Normalizer\GeocodeCandidateAddressKeyFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GeocodeCandidateGeocode::class => \ShipStream\Ups\Api\Normalizer\GeocodeCandidateGeocodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SearchResultsDropLocation::class => \ShipStream\Ups\Api\Normalizer\SearchResultsDropLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationIVR::class => \ShipStream\Ups\Api\Normalizer\DropLocationIVRNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationGeocode::class => \ShipStream\Ups\Api\Normalizer\DropLocationGeocodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationAddressKeyFormat::class => \ShipStream\Ups\Api\Normalizer\DropLocationAddressKeyFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationLocationAttribute::class => \ShipStream\Ups\Api\Normalizer\DropLocationLocationAttributeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationAttributeOptionType::class => \ShipStream\Ups\Api\Normalizer\LocationAttributeOptionTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LocationAttributeOptionCode::class => \ShipStream\Ups\Api\Normalizer\LocationAttributeOptionCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OptionCodeTransportationPickUpSchedule::class => \ShipStream\Ups\Api\Normalizer\OptionCodeTransportationPickUpScheduleNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TransportationPickUpSchedulePickUp::class => \ShipStream\Ups\Api\Normalizer\TransportationPickUpSchedulePickUpNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickUpPickUpDetails::class => \ShipStream\Ups\Api\Normalizer\PickUpPickUpDetailsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationDistance::class => \ShipStream\Ups\Api\Normalizer\DropLocationDistanceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DistanceUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\DistanceUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationSpecialInstructions::class => \ShipStream\Ups\Api\Normalizer\DropLocationSpecialInstructionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationAdditionalComments::class => \ShipStream\Ups\Api\Normalizer\DropLocationAdditionalCommentsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AdditionalCommentsCommentType::class => \ShipStream\Ups\Api\Normalizer\AdditionalCommentsCommentTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationOperatingHours::class => \ShipStream\Ups\Api\Normalizer\DropLocationOperatingHoursNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OperatingHoursStandardHours::class => \ShipStream\Ups\Api\Normalizer\OperatingHoursStandardHoursNormalizer::class,
        
        \ShipStream\Ups\Api\Model\StandardHoursDayOfWeek::class => \ShipStream\Ups\Api\Normalizer\StandardHoursDayOfWeekNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationLocalizedInstruction::class => \ShipStream\Ups\Api\Normalizer\DropLocationLocalizedInstructionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationPromotionInformation::class => \ShipStream\Ups\Api\Normalizer\DropLocationPromotionInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationSortCode::class => \ShipStream\Ups\Api\Normalizer\DropLocationSortCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationServiceOfferingList::class => \ShipStream\Ups\Api\Normalizer\DropLocationServiceOfferingListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationAccessPointInformation::class => \ShipStream\Ups\Api\Normalizer\DropLocationAccessPointInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointInformationBusinessClassificationList::class => \ShipStream\Ups\Api\Normalizer\AccessPointInformationBusinessClassificationListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BusinessClassificationListBusinessClassification::class => \ShipStream\Ups\Api\Normalizer\BusinessClassificationListBusinessClassificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointInformationAccessPointStatus::class => \ShipStream\Ups\Api\Normalizer\AccessPointInformationAccessPointStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointInformationPrivateNetworkList::class => \ShipStream\Ups\Api\Normalizer\AccessPointInformationPrivateNetworkListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PrivateNetworkListPrivateNetwork::class => \ShipStream\Ups\Api\Normalizer\PrivateNetworkListPrivateNetworkNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointInformationAvailability::class => \ShipStream\Ups\Api\Normalizer\AccessPointInformationAvailabilityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailabilityShippingAvailability::class => \ShipStream\Ups\Api\Normalizer\AvailabilityShippingAvailabilityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShippingAvailabilityUnavailableReason::class => \ShipStream\Ups\Api\Normalizer\ShippingAvailabilityUnavailableReasonNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailabilityDCRAvailability::class => \ShipStream\Ups\Api\Normalizer\AvailabilityDCRAvailabilityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DCRAvailabilityUnavailableReason::class => \ShipStream\Ups\Api\Normalizer\DCRAvailabilityUnavailableReasonNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropLocationLocationImage::class => \ShipStream\Ups\Api\Normalizer\DropLocationLocationImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SearchResultsAvailableLocationAttributes::class => \ShipStream\Ups\Api\Normalizer\SearchResultsAvailableLocationAttributesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailableLocationAttributesOptionType::class => \ShipStream\Ups\Api\Normalizer\AvailableLocationAttributesOptionTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailableLocationAttributesOptionCode::class => \ShipStream\Ups\Api\Normalizer\AvailableLocationAttributesOptionCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailableLocationAttributesOptionCodeTransportationPickUpSchedule::class => \ShipStream\Ups\Api\Normalizer\AvailableLocationAttributesOptionCodeTransportationPickUpScheduleNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailableLocationAttributesTransportationPickUpSchedulePickUp::class => \ShipStream\Ups\Api\Normalizer\AvailableLocationAttributesTransportationPickUpSchedulePickUpNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AvailableLocationAttributesPickUpPickUpDetails::class => \ShipStream\Ups\Api\Normalizer\AvailableLocationAttributesPickUpPickUpDetailsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenerateTokenSuccessResponse::class => \ShipStream\Ups\Api\Normalizer\GenerateTokenSuccessResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse::class => \ShipStream\Ups\Api\Normalizer\RefreshTokenSuccessResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PAPERLESSDOCUMENTDeleteRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PAPERLESSDOCUMENTDeleteResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeleteRequest::class => \ShipStream\Ups\Api\Normalizer\DeleteRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeleteRequestRequest::class => \ShipStream\Ups\Api\Normalizer\DeleteRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeleteResponse::class => \ShipStream\Ups\Api\Normalizer\DeleteResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeleteResponseResponse::class => \ShipStream\Ups\Api\Normalizer\DeleteResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PAPERLESSDOCUMENTRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PAPERLESSDOCUMENTResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest::class => \ShipStream\Ups\Api\Normalizer\PushToImageRepositoryRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PushToImageRepositoryRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PushToImageRepositoryRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PushToImageRepositoryRequestFormsHistoryDocumentID::class => \ShipStream\Ups\Api\Normalizer\PushToImageRepositoryRequestFormsHistoryDocumentIDNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PushToImageRepositoryResponse::class => \ShipStream\Ups\Api\Normalizer\PushToImageRepositoryResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PushToImageRepositoryResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PushToImageRepositoryResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PAPERLESSDOCUMENTUploadRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PAPERLESSDOCUMENTUploadResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UploadRequest::class => \ShipStream\Ups\Api\Normalizer\UploadRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UploadRequestRequest::class => \ShipStream\Ups\Api\Normalizer\UploadRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UploadRequestUserCreatedForm::class => \ShipStream\Ups\Api\Normalizer\UploadRequestUserCreatedFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UploadResponse::class => \ShipStream\Ups\Api\Normalizer\UploadResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UploadResponseResponse::class => \ShipStream\Ups\Api\Normalizer\UploadResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UploadResponseFormsHistoryDocumentID::class => \ShipStream\Ups\Api\Normalizer\UploadResponseFormsHistoryDocumentIDNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateRequest::class => \ShipStream\Ups\Api\Normalizer\PickupRateRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PickupRateRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateRequestShipperAccount::class => \ShipStream\Ups\Api\Normalizer\PickupRateRequestShipperAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateRequestPickupAddress::class => \ShipStream\Ups\Api\Normalizer\PickupRateRequestPickupAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateRequestPickupDateInfo::class => \ShipStream\Ups\Api\Normalizer\PickupRateRequestPickupDateInfoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateResponse::class => \ShipStream\Ups\Api\Normalizer\PickupRateResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PickupRateResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateResponseRateResult::class => \ShipStream\Ups\Api\Normalizer\PickupRateResponseRateResultNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateResultChargeDetail::class => \ShipStream\Ups\Api\Normalizer\RateResultChargeDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateResultTaxCharges::class => \ShipStream\Ups\Api\Normalizer\RateResultTaxChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRateResponseWeekendServiceTerritory::class => \ShipStream\Ups\Api\Normalizer\PickupRateResponseWeekendServiceTerritoryNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPCancelRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPCancelRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPCancelResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPCancelResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCancelRequest::class => \ShipStream\Ups\Api\Normalizer\PickupCancelRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCancelRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PickupCancelRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCancelResponse::class => \ShipStream\Ups\Api\Normalizer\PickupCancelResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCancelResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PickupCancelResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCancelResponseGWNStatus::class => \ShipStream\Ups\Api\Normalizer\PickupCancelResponseGWNStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPCreationRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPCreationResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPCreationResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequest::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestShipper::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestShipperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipperAccount::class => \ShipStream\Ups\Api\Normalizer\ShipperAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipperChargeCard::class => \ShipStream\Ups\Api\Normalizer\ShipperChargeCardNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ChargeCardCardAddress::class => \ShipStream\Ups\Api\Normalizer\ChargeCardCardAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestPickupDateInfo::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestPickupDateInfoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestPickupAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupAddressPhone::class => \ShipStream\Ups\Api\Normalizer\PickupAddressPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestPickupPiece::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestPickupPieceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestTotalWeight::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestTotalWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestTrackingData::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestTrackingDataNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestTrackingDataWithReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestTrackingDataWithReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions::class => \ShipStream\Ups\Api\Normalizer\PickupCreationRequestFreightOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\FreightOptionsShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightOptionsDestinationAddress::class => \ShipStream\Ups\Api\Normalizer\FreightOptionsDestinationAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightOptionsShipmentDetail::class => \ShipStream\Ups\Api\Normalizer\FreightOptionsShipmentDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentDetailPalletInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentDetailPalletInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PalletInformationDimensions::class => \ShipStream\Ups\Api\Normalizer\PalletInformationDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DimensionsUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\DimensionsUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationResponse::class => \ShipStream\Ups\Api\Normalizer\PickupCreationResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PickupCreationResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationResponseWeekendServiceTerritory::class => \ShipStream\Ups\Api\Normalizer\PickupCreationResponseWeekendServiceTerritoryNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationResponseRateStatus::class => \ShipStream\Ups\Api\Normalizer\PickupCreationResponseRateStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupCreationResponseRateResult::class => \ShipStream\Ups\Api\Normalizer\PickupCreationResponseRateResultNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateResultDisclaimer::class => \ShipStream\Ups\Api\Normalizer\RateResultDisclaimerNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPPolDivRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPPolDivRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPPolDivResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPPolDivResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListRequest::class => \ShipStream\Ups\Api\Normalizer\PickupGetPoliticalDivision1ListRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PickupGetPoliticalDivision1ListRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListResponse::class => \ShipStream\Ups\Api\Normalizer\PickupGetPoliticalDivision1ListResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PickupGetPoliticalDivision1ListResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPServCenterRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPServCenterRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPServCenterResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPServCenterResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestPickupPiece::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesRequestPickupPieceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestOriginAddress::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesRequestOriginAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginAddressOriginSearchCriteria::class => \ShipStream\Ups\Api\Normalizer\OriginAddressOriginSearchCriteriaNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestDestinationAddress::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesRequestDestinationAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponse::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation::class => \ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities::class => \ShipStream\Ups\Api\Normalizer\ServiceCenterLocationDropOffFacilitiesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropOffFacilitiesAddress::class => \ShipStream\Ups\Api\Normalizer\DropOffFacilitiesAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropOffFacilitiesFacilityTime::class => \ShipStream\Ups\Api\Normalizer\DropOffFacilitiesFacilityTimeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FacilityTimeDayOfWeek::class => \ShipStream\Ups\Api\Normalizer\FacilityTimeDayOfWeekNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropOffFacilitiesLocalizedInstruction::class => \ShipStream\Ups\Api\Normalizer\DropOffFacilitiesLocalizedInstructionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DropOffFacilitiesDistance::class => \ShipStream\Ups\Api\Normalizer\DropOffFacilitiesDistanceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities::class => \ShipStream\Ups\Api\Normalizer\ServiceCenterLocationPickupFacilitiesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupFacilitiesAddress::class => \ShipStream\Ups\Api\Normalizer\PickupFacilitiesAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTime::class => \ShipStream\Ups\Api\Normalizer\PickupFacilitiesFacilityTimeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek::class => \ShipStream\Ups\Api\Normalizer\PickupFacilitiesFacilityTimeDayOfWeekNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPPendingRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPPendingRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PICKUPPendingResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PICKUPPendingResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupPendingStatusRequest::class => \ShipStream\Ups\Api\Normalizer\PickupPendingStatusRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupPendingStatusRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PickupPendingStatusRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupPendingStatusResponse::class => \ShipStream\Ups\Api\Normalizer\PickupPendingStatusResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupPendingStatusResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PickupPendingStatusResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus::class => \ShipStream\Ups\Api\Normalizer\PickupPendingStatusResponsePendingStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\PRENOTIFICATIONRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PRENOTIFICATIONResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\PRENOTIFICATIONResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationRequest::class => \ShipStream\Ups\Api\Normalizer\PreNotificationRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationRequestRequest::class => \ShipStream\Ups\Api\Normalizer\PreNotificationRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationRequestShipment::class => \ShipStream\Ups\Api\Normalizer\PreNotificationRequestShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationShipmentShipToAddress::class => \ShipStream\Ups\Api\Normalizer\PreNotificationShipmentShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationShipmentShipFromAddress::class => \ShipStream\Ups\Api\Normalizer\PreNotificationShipmentShipFromAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage::class => \ShipStream\Ups\Api\Normalizer\PreNotificationShipmentPackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationPackageChemicalRecord::class => \ShipStream\Ups\Api\Normalizer\PreNotificationPackageChemicalRecordNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationResponse::class => \ShipStream\Ups\Api\Normalizer\PreNotificationResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreNotificationResponseResponse::class => \ShipStream\Ups\Api\Normalizer\PreNotificationResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\QUANTUMVIEWRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QUANTUMVIEWResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\QUANTUMVIEWResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewRequest::class => \ShipStream\Ups\Api\Normalizer\QuantumViewRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewRequestRequest::class => \ShipStream\Ups\Api\Normalizer\QuantumViewRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewRequestSubscriptionRequest::class => \ShipStream\Ups\Api\Normalizer\QuantumViewRequestSubscriptionRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionRequestDateTimeRange::class => \ShipStream\Ups\Api\Normalizer\SubscriptionRequestDateTimeRangeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewResponse::class => \ShipStream\Ups\Api\Normalizer\QuantumViewResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewResponseResponse::class => \ShipStream\Ups\Api\Normalizer\QuantumViewResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewResponseQuantumViewEvents::class => \ShipStream\Ups\Api\Normalizer\QuantumViewResponseQuantumViewEventsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents::class => \ShipStream\Ups\Api\Normalizer\QuantumViewEventsSubscriptionEventsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionStatus::class => \ShipStream\Ups\Api\Normalizer\SubscriptionEventsSubscriptionStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionEventsDateRange::class => \ShipStream\Ups\Api\Normalizer\SubscriptionEventsDateRangeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile::class => \ShipStream\Ups\Api\Normalizer\SubscriptionEventsSubscriptionFileNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionFileStatusType::class => \ShipStream\Ups\Api\Normalizer\SubscriptionFileStatusTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionFileManifest::class => \ShipStream\Ups\Api\Normalizer\SubscriptionFileManifestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestShipper::class => \ShipStream\Ups\Api\Normalizer\ManifestShipperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestShipperAddress::class => \ShipStream\Ups\Api\Normalizer\ManifestShipperAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestShipTo::class => \ShipStream\Ups\Api\Normalizer\ManifestShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestShipToAddress::class => \ShipStream\Ups\Api\Normalizer\ManifestShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ManifestReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestService::class => \ShipStream\Ups\Api\Normalizer\ManifestServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestPackage::class => \ShipStream\Ups\Api\Normalizer\ManifestPackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageActivity::class => \ShipStream\Ups\Api\Normalizer\PackageActivityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestPackageDimensions::class => \ShipStream\Ups\Api\Normalizer\ManifestPackageDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageDimensionalWeight::class => \ShipStream\Ups\Api\Normalizer\PackageDimensionalWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DimensionalWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\DimensionalWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestPackagePackageWeight::class => \ShipStream\Ups\Api\Normalizer\ManifestPackagePackageWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestPackageReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ManifestPackageReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions::class => \ShipStream\Ups\Api\Normalizer\ManifestPackagePackageServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestPackageServiceOptionsCOD::class => \ShipStream\Ups\Api\Normalizer\ManifestPackageServiceOptionsCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODCODAmount::class => \ShipStream\Ups\Api\Normalizer\CODCODAmountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsInsuredValue::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsInsuredValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\ManifestShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCallTagARS::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsCallTagARSNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestCustomsValue::class => \ShipStream\Ups\Api\Normalizer\ManifestCustomsValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestBillToAccount::class => \ShipStream\Ups\Api\Normalizer\ManifestBillToAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ManifestUAPAddress::class => \ShipStream\Ups\Api\Normalizer\ManifestUAPAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UAPAddressAddress::class => \ShipStream\Ups\Api\Normalizer\UAPAddressAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionFileOrigin::class => \ShipStream\Ups\Api\Normalizer\SubscriptionFileOriginNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginPackageReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\OriginPackageReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginShipmentReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\OriginShipmentReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginActivityLocation::class => \ShipStream\Ups\Api\Normalizer\OriginActivityLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ActivityLocationAddressArtifactFormat::class => \ShipStream\Ups\Api\Normalizer\ActivityLocationAddressArtifactFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OriginBillToAccount::class => \ShipStream\Ups\Api\Normalizer\OriginBillToAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionFileException::class => \ShipStream\Ups\Api\Normalizer\SubscriptionFileExceptionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExceptionPackageReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ExceptionPackageReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExceptionShipmentReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ExceptionShipmentReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExceptionUpdatedAddress::class => \ShipStream\Ups\Api\Normalizer\ExceptionUpdatedAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UpdatedAddressAddressExtendedInformation::class => \ShipStream\Ups\Api\Normalizer\UpdatedAddressAddressExtendedInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExceptionResolution::class => \ShipStream\Ups\Api\Normalizer\ExceptionResolutionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExceptionActivityLocation::class => \ShipStream\Ups\Api\Normalizer\ExceptionActivityLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExceptionBillToAccount::class => \ShipStream\Ups\Api\Normalizer\ExceptionBillToAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionFileDelivery::class => \ShipStream\Ups\Api\Normalizer\SubscriptionFileDeliveryNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryPackageReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\DeliveryPackageReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryShipmentReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\DeliveryShipmentReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryActivityLocation::class => \ShipStream\Ups\Api\Normalizer\DeliveryActivityLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryDeliveryLocation::class => \ShipStream\Ups\Api\Normalizer\DeliveryDeliveryLocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat::class => \ShipStream\Ups\Api\Normalizer\DeliveryLocationAddressArtifactFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AddressArtifactFormatAddressExtendedInformation::class => \ShipStream\Ups\Api\Normalizer\AddressArtifactFormatAddressExtendedInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryCOD::class => \ShipStream\Ups\Api\Normalizer\DeliveryCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryBillToAccount::class => \ShipStream\Ups\Api\Normalizer\DeliveryBillToAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubscriptionFileGeneric::class => \ShipStream\Ups\Api\Normalizer\SubscriptionFileGenericNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericShipmentReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\GenericShipmentReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericPackageReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\GenericPackageReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericService::class => \ShipStream\Ups\Api\Normalizer\GenericServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericActivity::class => \ShipStream\Ups\Api\Normalizer\GenericActivityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericBillToAccount::class => \ShipStream\Ups\Api\Normalizer\GenericBillToAccountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericShipTo::class => \ShipStream\Ups\Api\Normalizer\GenericShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GenericFailureNotification::class => \ShipStream\Ups\Api\Normalizer\GenericFailureNotificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FailureNotificationFailureNotificationCode::class => \ShipStream\Ups\Api\Normalizer\FailureNotificationFailureNotificationCodeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RATERequestWrapper::class => \ShipStream\Ups\Api\Normalizer\RATERequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RATEResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\RATEResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateRequest::class => \ShipStream\Ups\Api\Normalizer\RateRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateRequestRequest::class => \ShipStream\Ups\Api\Normalizer\RateRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateRequestPickupType::class => \ShipStream\Ups\Api\Normalizer\RateRequestPickupTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateRequestCustomerClassification::class => \ShipStream\Ups\Api\Normalizer\RateRequestCustomerClassificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateRequestShipment::class => \ShipStream\Ups\Api\Normalizer\RateRequestShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentShipper::class => \ShipStream\Ups\Api\Normalizer\RateShipmentShipperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipperAddress::class => \ShipStream\Ups\Api\Normalizer\ShipperAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentShipTo::class => \ShipStream\Ups\Api\Normalizer\RateShipmentShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipToAddress::class => \ShipStream\Ups\Api\Normalizer\ShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentShipFrom::class => \ShipStream\Ups\Api\Normalizer\RateShipmentShipFromNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipFromAddress::class => \ShipStream\Ups\Api\Normalizer\ShipFromAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentAlternateDeliveryAddress::class => \ShipStream\Ups\Api\Normalizer\RateShipmentAlternateDeliveryAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateAlternateDeliveryAddressAddress::class => \ShipStream\Ups\Api\Normalizer\RateAlternateDeliveryAddressAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipmentIndicationType::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipmentIndicationTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentPaymentDetails::class => \ShipStream\Ups\Api\Normalizer\ShipmentPaymentDetailsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PaymentDetailsShipmentCharge::class => \ShipStream\Ups\Api\Normalizer\PaymentDetailsShipmentChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentChargeBillShipper::class => \ShipStream\Ups\Api\Normalizer\RateShipmentChargeBillShipperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargeBillReceiver::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargeBillReceiverNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BillReceiverAddress::class => \ShipStream\Ups\Api\Normalizer\BillReceiverAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentChargeBillThirdParty::class => \ShipStream\Ups\Api\Normalizer\RateShipmentChargeBillThirdPartyNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateBillThirdPartyAddress::class => \ShipStream\Ups\Api\Normalizer\RateBillThirdPartyAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentFRSPaymentInformation::class => \ShipStream\Ups\Api\Normalizer\RateShipmentFRSPaymentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FRSPaymentInformationType::class => \ShipStream\Ups\Api\Normalizer\FRSPaymentInformationTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FRSPaymentInformationAddress::class => \ShipStream\Ups\Api\Normalizer\FRSPaymentInformationAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentFreightShipmentInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentFreightShipmentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo::class => \ShipStream\Ups\Api\Normalizer\FreightShipmentInformationFreightDensityInfoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightDensityInfoAdjustedHeight::class => \ShipStream\Ups\Api\Normalizer\FreightDensityInfoAdjustedHeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AdjustedHeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\AdjustedHeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightDensityInfoHandlingUnits::class => \ShipStream\Ups\Api\Normalizer\FreightDensityInfoHandlingUnitsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitsType::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitsTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitsDimensions::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitsDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitsUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitsUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipmentTotalWeight::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipmentTotalWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentTotalWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\ShipmentTotalWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentPackage::class => \ShipStream\Ups\Api\Normalizer\RateShipmentPackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackagePackagingType::class => \ShipStream\Ups\Api\Normalizer\PackagePackagingTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageDimensions::class => \ShipStream\Ups\Api\Normalizer\PackageDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageDimWeight::class => \ShipStream\Ups\Api\Normalizer\PackageDimWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DimWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\DimWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageCommodity::class => \ShipStream\Ups\Api\Normalizer\PackageCommodityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityNMFC::class => \ShipStream\Ups\Api\Normalizer\CommodityNMFCNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions::class => \ShipStream\Ups\Api\Normalizer\RatePackagePackageServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDeliveryConfirmation::class => \ShipStream\Ups\Api\Normalizer\RatePackageServiceOptionsDeliveryConfirmationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsAccessPointCOD::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsAccessPointCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsCOD::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDeclaredValue::class => \ShipStream\Ups\Api\Normalizer\RatePackageServiceOptionsDeclaredValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsShipperDeclaredValue::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsShipperDeclaredValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsInsuranceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InsuranceBasicFlexibleParcelIndicator::class => \ShipStream\Ups\Api\Normalizer\InsuranceBasicFlexibleParcelIndicatorNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InsuranceExtendedFlexibleParcelIndicator::class => \ShipStream\Ups\Api\Normalizer\InsuranceExtendedFlexibleParcelIndicatorNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InsuranceTimeInTransitFlexibleParcelIndicator::class => \ShipStream\Ups\Api\Normalizer\InsuranceTimeInTransitFlexibleParcelIndicatorNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat::class => \ShipStream\Ups\Api\Normalizer\RatePackageServiceOptionsHazMatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HazMatHazMatChemicalRecord::class => \ShipStream\Ups\Api\Normalizer\HazMatHazMatChemicalRecordNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDryIce::class => \ShipStream\Ups\Api\Normalizer\RatePackageServiceOptionsDryIceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DryIceDryIceWeight::class => \ShipStream\Ups\Api\Normalizer\DryIceDryIceWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DryIceWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\DryIceWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageSimpleRate::class => \ShipStream\Ups\Api\Normalizer\PackageSimpleRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatePackageUPSPremier::class => \ShipStream\Ups\Api\Normalizer\RatePackageUPSPremierNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\RateShipmentShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsAccessPointCOD::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsAccessPointCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCOD::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCODCODAmount::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsCODCODAmountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentServiceOptionsDeliveryConfirmation::class => \ShipStream\Ups\Api\Normalizer\RateShipmentServiceOptionsDeliveryConfirmationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPickupOptions::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsPickupOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeliveryOptions::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsDeliveryOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateShipmentServiceOptionsRestrictedArticles::class => \ShipStream\Ups\Api\Normalizer\RateShipmentServiceOptionsRestrictedArticlesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsImportControl::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsImportControlNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsReturnService::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsReturnServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipmentRatingOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentInvoiceLineTotal::class => \ShipStream\Ups\Api\Normalizer\ShipmentInvoiceLineTotalNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentPromotionalDiscountInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentPromotionalDiscountInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentDeliveryTimeInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentDeliveryTimeInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryTimeInformationPickup::class => \ShipStream\Ups\Api\Normalizer\DeliveryTimeInformationPickupNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryTimeInformationReturnContractServices::class => \ShipStream\Ups\Api\Normalizer\DeliveryTimeInformationReturnContractServicesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateResponse::class => \ShipStream\Ups\Api\Normalizer\RateResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateResponseResponse::class => \ShipStream\Ups\Api\Normalizer\RateResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateResponseRatedShipment::class => \ShipStream\Ups\Api\Normalizer\RateResponseRatedShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentDisclaimer::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentDisclaimerNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentService::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentRatedShipmentAlert::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentRatedShipmentAlertNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentBillingWeight::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentBillingWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BillingWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\BillingWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentTransportationCharges::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentTransportationChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentBaseServiceCharge::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentBaseServiceChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentItemizedCharges::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentItemizedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentFRSShipmentData::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentFRSShipmentDataNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges::class => \ShipStream\Ups\Api\Normalizer\FRSShipmentDataTransportationChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TransportationChargesGrossCharge::class => \ShipStream\Ups\Api\Normalizer\TransportationChargesGrossChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TransportationChargesDiscountAmount::class => \ShipStream\Ups\Api\Normalizer\TransportationChargesDiscountAmountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TransportationChargesNetCharge::class => \ShipStream\Ups\Api\Normalizer\TransportationChargesNetChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FRSShipmentDataFreightDensityRate::class => \ShipStream\Ups\Api\Normalizer\FRSShipmentDataFreightDensityRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FRSShipmentDataHandlingUnits::class => \ShipStream\Ups\Api\Normalizer\FRSShipmentDataHandlingUnitsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitsAdjustedHeight::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitsAdjustedHeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageBaseServiceCharge::class => \ShipStream\Ups\Api\Normalizer\RatedPackageBaseServiceChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentServiceOptionsCharges::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentServiceOptionsChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentTaxCharges::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentTaxChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentTotalCharges::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentTotalChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentTotalChargesWithTaxes::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentTotalChargesWithTaxesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentNegotiatedRateCharges::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentNegotiatedRateChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NegotiatedRateChargesItemizedCharges::class => \ShipStream\Ups\Api\Normalizer\NegotiatedRateChargesItemizedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NegotiatedRateChargesTaxCharges::class => \ShipStream\Ups\Api\Normalizer\NegotiatedRateChargesTaxChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NegotiatedRateChargesTotalCharge::class => \ShipStream\Ups\Api\Normalizer\NegotiatedRateChargesTotalChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NegotiatedRateChargesTotalChargesWithTaxes::class => \ShipStream\Ups\Api\Normalizer\NegotiatedRateChargesTotalChargesWithTaxesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentRatedPackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageTransportationCharges::class => \ShipStream\Ups\Api\Normalizer\RatedPackageTransportationChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageServiceOptionsCharges::class => \ShipStream\Ups\Api\Normalizer\RatedPackageServiceOptionsChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageTotalCharges::class => \ShipStream\Ups\Api\Normalizer\RatedPackageTotalChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageBillingWeight::class => \ShipStream\Ups\Api\Normalizer\RatedPackageBillingWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageBillingWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\RatedPackageBillingWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageAccessorial::class => \ShipStream\Ups\Api\Normalizer\RatedPackageAccessorialNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageItemizedCharges::class => \ShipStream\Ups\Api\Normalizer\RatedPackageItemizedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageRateModifier::class => \ShipStream\Ups\Api\Normalizer\RatedPackageRateModifierNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageNegotiatedCharges::class => \ShipStream\Ups\Api\Normalizer\RatedPackageNegotiatedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NegotiatedChargesItemizedCharges::class => \ShipStream\Ups\Api\Normalizer\NegotiatedChargesItemizedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedPackageSimpleRate::class => \ShipStream\Ups\Api\Normalizer\RatedPackageSimpleRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit::class => \ShipStream\Ups\Api\Normalizer\RatedShipmentTimeInTransitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary::class => \ShipStream\Ups\Api\Normalizer\TimeInTransitServiceSummaryNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceSummaryService::class => \ShipStream\Ups\Api\Normalizer\ServiceSummaryServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival::class => \ShipStream\Ups\Api\Normalizer\ServiceSummaryEstimatedArrivalNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EstimatedArrivalArrival::class => \ShipStream\Ups\Api\Normalizer\EstimatedArrivalArrivalNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EstimatedArrivalPickup::class => \ShipStream\Ups\Api\Normalizer\EstimatedArrivalPickupNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SHIPRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\SHIPRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SHIPResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\SHIPResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentRequest::class => \ShipStream\Ups\Api\Normalizer\ShipmentRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentRequestRequest::class => \ShipStream\Ups\Api\Normalizer\ShipmentRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentRequestShipment::class => \ShipStream\Ups\Api\Normalizer\ShipmentRequestShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentReturnService::class => \ShipStream\Ups\Api\Normalizer\ShipmentReturnServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipper::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipperPhone::class => \ShipStream\Ups\Api\Normalizer\ShipperPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipTo::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipToPhone::class => \ShipStream\Ups\Api\Normalizer\ShipToPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentAlternateDeliveryAddress::class => \ShipStream\Ups\Api\Normalizer\ShipmentAlternateDeliveryAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateDeliveryAddressAddress::class => \ShipStream\Ups\Api\Normalizer\AlternateDeliveryAddressAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipFrom::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipFromNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipFromTaxIDType::class => \ShipStream\Ups\Api\Normalizer\ShipFromTaxIDTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipFromPhone::class => \ShipStream\Ups\Api\Normalizer\ShipFromPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipFromVendorInfo::class => \ShipStream\Ups\Api\Normalizer\ShipFromVendorInfoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentPaymentInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentPaymentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge::class => \ShipStream\Ups\Api\Normalizer\PaymentInformationShipmentChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargeBillShipper::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargeBillShipperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BillShipperCreditCard::class => \ShipStream\Ups\Api\Normalizer\BillShipperCreditCardNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CreditCardAddress::class => \ShipStream\Ups\Api\Normalizer\CreditCardAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargeBillThirdPartyNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BillThirdPartyAddress::class => \ShipStream\Ups\Api\Normalizer\BillThirdPartyAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentFRSPaymentInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentFRSPaymentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo::class => \ShipStream\Ups\Api\Normalizer\ShipmentDGSignatoryInfoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ShipmentReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\ShipmentShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsNotificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NotificationEMail::class => \ShipStream\Ups\Api\Normalizer\NotificationEMailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NotificationVoiceMessage::class => \ShipStream\Ups\Api\Normalizer\NotificationVoiceMessageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NotificationTextMessage::class => \ShipStream\Ups\Api\Normalizer\NotificationTextMessageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\NotificationLocale::class => \ShipStream\Ups\Api\Normalizer\NotificationLocaleNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsLabelDelivery::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsLabelDeliveryNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelDeliveryEMail::class => \ShipStream\Ups\Api\Normalizer\LabelDeliveryEMailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsInternationalFormsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsUserCreatedForm::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsUserCreatedFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsUPSPremiumCareForm::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsUPSPremiumCareFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UPSPremiumCareFormLanguageForUPSPremiumCare::class => \ShipStream\Ups\Api\Normalizer\UPSPremiumCareFormLanguageForUPSPremiumCareNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsCN22Form::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsCN22FormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CN22FormCN22Content::class => \ShipStream\Ups\Api\Normalizer\CN22FormCN22ContentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CN22ContentCN22ContentWeight::class => \ShipStream\Ups\Api\Normalizer\CN22ContentCN22ContentWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CN22ContentWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\CN22ContentWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsEEIFilingOption::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsEEIFilingOptionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EEIFilingOptionUPSFiled::class => \ShipStream\Ups\Api\Normalizer\EEIFilingOptionUPSFiledNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UPSFiledPOA::class => \ShipStream\Ups\Api\Normalizer\UPSFiledPOANormalizer::class,
        
        \ShipStream\Ups\Api\Model\EEIFilingOptionShipperFiled::class => \ShipStream\Ups\Api\Normalizer\EEIFilingOptionShipperFiledNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsContacts::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsContactsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ContactsForwardAgent::class => \ShipStream\Ups\Api\Normalizer\ContactsForwardAgentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ForwardAgentAddress::class => \ShipStream\Ups\Api\Normalizer\ForwardAgentAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ContactsUltimateConsignee::class => \ShipStream\Ups\Api\Normalizer\ContactsUltimateConsigneeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UltimateConsigneeAddress::class => \ShipStream\Ups\Api\Normalizer\UltimateConsigneeAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UltimateConsigneeUltimateConsigneeType::class => \ShipStream\Ups\Api\Normalizer\UltimateConsigneeUltimateConsigneeTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ContactsIntermediateConsignee::class => \ShipStream\Ups\Api\Normalizer\ContactsIntermediateConsigneeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\IntermediateConsigneeAddress::class => \ShipStream\Ups\Api\Normalizer\IntermediateConsigneeAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ContactsProducer::class => \ShipStream\Ups\Api\Normalizer\ContactsProducerNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProducerAddress::class => \ShipStream\Ups\Api\Normalizer\ProducerAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProducerPhone::class => \ShipStream\Ups\Api\Normalizer\ProducerPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ContactsSoldTo::class => \ShipStream\Ups\Api\Normalizer\ContactsSoldToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SoldToPhone::class => \ShipStream\Ups\Api\Normalizer\SoldToPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SoldToAddress::class => \ShipStream\Ups\Api\Normalizer\SoldToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsProduct::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsProductNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductUnit::class => \ShipStream\Ups\Api\Normalizer\ProductUnitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UnitUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\UnitUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductNetCostDateRange::class => \ShipStream\Ups\Api\Normalizer\ProductNetCostDateRangeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductProductWeight::class => \ShipStream\Ups\Api\Normalizer\ProductProductWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\ProductWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductScheduleB::class => \ShipStream\Ups\Api\Normalizer\ProductScheduleBNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ScheduleBUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\ScheduleBUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductExcludeFromForm::class => \ShipStream\Ups\Api\Normalizer\ProductExcludeFromFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductPackingListInfo::class => \ShipStream\Ups\Api\Normalizer\ProductPackingListInfoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackingListInfoPackageAssociated::class => \ShipStream\Ups\Api\Normalizer\PackingListInfoPackageAssociatedNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ProductEEIInformation::class => \ShipStream\Ups\Api\Normalizer\ProductEEIInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EEIInformationLicense::class => \ShipStream\Ups\Api\Normalizer\EEIInformationLicenseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation::class => \ShipStream\Ups\Api\Normalizer\EEIInformationDDTCInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DDTCInformationUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\DDTCInformationUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsDiscount::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsDiscountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsFreightCharges::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsFreightChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsInsuranceCharges::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsInsuranceChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsOtherCharges::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsOtherChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InternationalFormsBlanketPeriod::class => \ShipStream\Ups\Api\Normalizer\InternationalFormsBlanketPeriodNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeliveryConfirmation::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsDeliveryConfirmationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsLabelMethod::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsLabelMethodNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsPreAlertNotificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreAlertNotificationEMailMessage::class => \ShipStream\Ups\Api\Normalizer\PreAlertNotificationEMailMessageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreAlertNotificationVoiceMessage::class => \ShipStream\Ups\Api\Normalizer\PreAlertNotificationVoiceMessageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreAlertNotificationTextMessage::class => \ShipStream\Ups\Api\Normalizer\PreAlertNotificationTextMessageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PreAlertNotificationLocale::class => \ShipStream\Ups\Api\Normalizer\PreAlertNotificationLocaleNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsRestrictedArticlesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentPackage::class => \ShipStream\Ups\Api\Normalizer\ShipmentPackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackagePackaging::class => \ShipStream\Ups\Api\Normalizer\PackagePackagingNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\PackageReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageUPSPremier::class => \ShipStream\Ups\Api\Normalizer\PackageUPSPremierNormalizer::class,
        
        \ShipStream\Ups\Api\Model\UPSPremierHandlingInstructions::class => \ShipStream\Ups\Api\Normalizer\UPSPremierHandlingInstructionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackagePackageServiceOptions::class => \ShipStream\Ups\Api\Normalizer\PackagePackageServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsDeliveryConfirmation::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsDeliveryConfirmationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsDeclaredValue::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsDeclaredValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeclaredValueType::class => \ShipStream\Ups\Api\Normalizer\DeclaredValueTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsCODCODAmount::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsCODCODAmountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsNotification::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsNotificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsNotificationEMail::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsNotificationEMailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsHazMatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageServiceOptionsDryIce::class => \ShipStream\Ups\Api\Normalizer\PackageServiceOptionsDryIceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageHazMatPackageInformation::class => \ShipStream\Ups\Api\Normalizer\PackageHazMatPackageInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification::class => \ShipStream\Ups\Api\Normalizer\ShipmentRequestLabelSpecificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelSpecificationLabelImageFormat::class => \ShipStream\Ups\Api\Normalizer\LabelSpecificationLabelImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelSpecificationLabelStockSize::class => \ShipStream\Ups\Api\Normalizer\LabelSpecificationLabelStockSizeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelSpecificationInstruction::class => \ShipStream\Ups\Api\Normalizer\LabelSpecificationInstructionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentRequestReceiptSpecification::class => \ShipStream\Ups\Api\Normalizer\ShipmentRequestReceiptSpecificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ReceiptSpecificationImageFormat::class => \ShipStream\Ups\Api\Normalizer\ReceiptSpecificationImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResponse::class => \ShipStream\Ups\Api\Normalizer\ShipmentResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResponseResponse::class => \ShipStream\Ups\Api\Normalizer\ShipmentResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults::class => \ShipStream\Ups\Api\Normalizer\ShipmentResponseShipmentResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsDisclaimer::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsDisclaimerNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsShipmentChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesBaseServiceCharge::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesBaseServiceChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesTransportationCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesTransportationChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesItemizedCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesItemizedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesServiceOptionsCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesServiceOptionsChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesTaxCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesTaxChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesTotalCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesTotalChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentChargesTotalChargesWithTaxes::class => \ShipStream\Ups\Api\Normalizer\ShipmentChargesTotalChargesWithTaxesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsNegotiatedRateCharges::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsNegotiatedRateChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsFRSShipmentDataNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsBillingWeight::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsBillingWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsPackageResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsBaseServiceCharge::class => \ShipStream\Ups\Api\Normalizer\PackageResultsBaseServiceChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsServiceOptionsCharges::class => \ShipStream\Ups\Api\Normalizer\PackageResultsServiceOptionsChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsShippingLabel::class => \ShipStream\Ups\Api\Normalizer\PackageResultsShippingLabelNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShippingLabelImageFormat::class => \ShipStream\Ups\Api\Normalizer\ShippingLabelImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsShippingReceipt::class => \ShipStream\Ups\Api\Normalizer\PackageResultsShippingReceiptNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShippingReceiptImageFormat::class => \ShipStream\Ups\Api\Normalizer\ShippingReceiptImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsAccessorial::class => \ShipStream\Ups\Api\Normalizer\PackageResultsAccessorialNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsSimpleRate::class => \ShipStream\Ups\Api\Normalizer\PackageResultsSimpleRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsForm::class => \ShipStream\Ups\Api\Normalizer\PackageResultsFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsFormImage::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsFormImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FormImage::class => \ShipStream\Ups\Api\Normalizer\FormImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HighValueReportImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\HighValueReportImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODTurnInPageImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\CODTurnInPageImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\ImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsItemizedCharges::class => \ShipStream\Ups\Api\Normalizer\PackageResultsItemizedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsNegotiatedCharges::class => \ShipStream\Ups\Api\Normalizer\PackageResultsNegotiatedChargesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageResultsRateModifier::class => \ShipStream\Ups\Api\Normalizer\PackageResultsRateModifierNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsControlLogReceipt::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsControlLogReceiptNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ControlLogReceiptImageFormat::class => \ShipStream\Ups\Api\Normalizer\ControlLogReceiptImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsForm::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsCODTurnInPage::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsCODTurnInPageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODTurnInPageImage::class => \ShipStream\Ups\Api\Normalizer\CODTurnInPageImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsHighValueReport::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsHighValueReportNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HighValueReportImage::class => \ShipStream\Ups\Api\Normalizer\HighValueReportImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VOIDSHIPMENTRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\VOIDSHIPMENTRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VOIDSHIPMENTResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\VOIDSHIPMENTResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentRequest::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentRequestRequest::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidRequestTransactionReference::class => \ShipStream\Ups\Api\Normalizer\VoidRequestTransactionReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentRequestVoidShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentResponse::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentResponseResponse::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidResponseResponseStatus::class => \ShipStream\Ups\Api\Normalizer\VoidResponseResponseStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidResponseTransactionReference::class => \ShipStream\Ups\Api\Normalizer\VoidResponseTransactionReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentResponseSummaryResult::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentResponseSummaryResultNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SummaryResultStatus::class => \ShipStream\Ups\Api\Normalizer\SummaryResultStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\VoidShipmentResponsePackageLevelResult::class => \ShipStream\Ups\Api\Normalizer\VoidShipmentResponsePackageLevelResultNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageLevelResultStatus::class => \ShipStream\Ups\Api\Normalizer\PackageLevelResultStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LABELRECOVERYRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\LABELRECOVERYRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LABELRECOVERYResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\LABELRECOVERYResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequest::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequestRequest::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LRRequestTransactionReference::class => \ShipStream\Ups\Api\Normalizer\LRRequestTransactionReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestLabelSpecificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryLabelSpecificationLabelImageFormat::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryLabelSpecificationLabelImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryLabelSpecificationLabelStockSize::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryLabelSpecificationLabelStockSizeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequestTranslate::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestTranslateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelDelivery::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestLabelDeliveryNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequestReferenceValues::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestReferenceValuesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ReferenceValuesReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ReferenceValuesReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryRequestUPSPremiumCareForm::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryRequestUPSPremiumCareFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponse::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponseResponse::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LRResponseResponseStatus::class => \ShipStream\Ups\Api\Normalizer\LRResponseResponseStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LRResponseTransactionReference::class => \ShipStream\Ups\Api\Normalizer\LRResponseTransactionReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseLabelResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelResultsLabelImage::class => \ShipStream\Ups\Api\Normalizer\LabelResultsLabelImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelImageLabelImageFormat::class => \ShipStream\Ups\Api\Normalizer\LabelImageLabelImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage::class => \ShipStream\Ups\Api\Normalizer\LabelResultsMailInnovationsLabelImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\MailInnovationsLabelImageLabelImageFormat::class => \ShipStream\Ups\Api\Normalizer\MailInnovationsLabelImageLabelImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelResultsReceipt::class => \ShipStream\Ups\Api\Normalizer\LabelResultsReceiptNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ReceiptImage::class => \ShipStream\Ups\Api\Normalizer\ReceiptImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ReceiptImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\ReceiptImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelResultsForm::class => \ShipStream\Ups\Api\Normalizer\LabelResultsFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LRFormImage::class => \ShipStream\Ups\Api\Normalizer\LRFormImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponseCODTurnInPage::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseCODTurnInPageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LRCODTurnInPageImage::class => \ShipStream\Ups\Api\Normalizer\LRCODTurnInPageImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LRCODTurnInPageImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\LRCODTurnInPageImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponseForm::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseFormNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryFormImage::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryFormImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryImageImageFormat::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryImageImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponseHighValueReport::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseHighValueReportNormalizer::class,
        
        \ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate::class => \ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseTrackingCandidateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TrackingCandidatePickupDateRange::class => \ShipStream\Ups\Api\Normalizer\TrackingCandidatePickupDateRangeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTPICKUPRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTPICKUPRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTPICKUPResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTPICKUPResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequest::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestRequest::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestRequester::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestRequesterNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RequesterPhone::class => \ShipStream\Ups\Api\Normalizer\RequesterPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestShipFrom::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestShipFromNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestShipTo::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupShipToAddress::class => \ShipStream\Ups\Api\Normalizer\FreightPickupShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestShipmentDetailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentDetailPackagingType::class => \ShipStream\Ups\Api\Normalizer\ShipmentDetailPackagingTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentDetailWeight::class => \ShipStream\Ups\Api\Normalizer\ShipmentDetailWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\WeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\WeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestExistingShipmentID::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestExistingShipmentIDNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupRequestPOM::class => \ShipStream\Ups\Api\Normalizer\FreightPickupRequestPOMNormalizer::class,
        
        \ShipStream\Ups\Api\Model\POMPickupNotifications::class => \ShipStream\Ups\Api\Normalizer\POMPickupNotificationsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupNotificationsEMailNotification::class => \ShipStream\Ups\Api\Normalizer\PickupNotificationsEMailNotificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupResponse::class => \ShipStream\Ups\Api\Normalizer\FreightPickupResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightPickupResponseResponse::class => \ShipStream\Ups\Api\Normalizer\FreightPickupResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTPICKUPCANCELRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTPICKUPCANCELRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTPICKUPCANCELResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTPICKUPCANCELResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightCancelPickupRequest::class => \ShipStream\Ups\Api\Normalizer\FreightCancelPickupRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightCancelPickupRequestRequest::class => \ShipStream\Ups\Api\Normalizer\FreightCancelPickupRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightCancelPickupResponse::class => \ShipStream\Ups\Api\Normalizer\FreightCancelPickupResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightCancelPickupResponseResponse::class => \ShipStream\Ups\Api\Normalizer\FreightCancelPickupResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightCancelStatus::class => \ShipStream\Ups\Api\Normalizer\FreightCancelStatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTRATERequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTRATEResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTRATEResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequest::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestRequest::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestShipFrom::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestShipFromNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateShipFromAddress::class => \ShipStream\Ups\Api\Normalizer\FreightRateShipFromAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestShipTo::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateShipToAddress::class => \ShipStream\Ups\Api\Normalizer\FreightRateShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestPaymentInformation::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestPaymentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRatePaymentInformationPayer::class => \ShipStream\Ups\Api\Normalizer\FreightRatePaymentInformationPayerNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PayerAddress::class => \ShipStream\Ups\Api\Normalizer\PayerAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PaymentInformationShipmentBillingOption::class => \ShipStream\Ups\Api\Normalizer\PaymentInformationShipmentBillingOptionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestService::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitOne::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestHandlingUnitOneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitOneType::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitOneTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitTwo::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestHandlingUnitTwoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitTwoType::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitTwoTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestCommodity::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestCommodityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityWeight::class => \ShipStream\Ups\Api\Normalizer\CommodityWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityAdjustedWeight::class => \ShipStream\Ups\Api\Normalizer\CommodityAdjustedWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AdjustedWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\AdjustedWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityDimensions::class => \ShipStream\Ups\Api\Normalizer\CommodityDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityPackagingType::class => \ShipStream\Ups\Api\Normalizer\CommodityPackagingTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityCommodityValue::class => \ShipStream\Ups\Api\Normalizer\CommodityCommodityValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CommodityNMFCCommodity::class => \ShipStream\Ups\Api\Normalizer\CommodityNMFCCommodityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions::class => \ShipStream\Ups\Api\Normalizer\FreightShipmentServiceOptionsPickupOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions::class => \ShipStream\Ups\Api\Normalizer\FreightShipmentServiceOptionsDeliveryOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsOverSeasLeg::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsOverSeasLegNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OverSeasLegDimensions::class => \ShipStream\Ups\Api\Normalizer\OverSeasLegDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\OverSeasLegValue::class => \ShipStream\Ups\Api\Normalizer\OverSeasLegValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ValueCube::class => \ShipStream\Ups\Api\Normalizer\ValueCubeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ValueCWT::class => \ShipStream\Ups\Api\Normalizer\ValueCWTNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD::class => \ShipStream\Ups\Api\Normalizer\FreightShipmentServiceOptionsCODNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODCODValue::class => \ShipStream\Ups\Api\Normalizer\CODCODValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODCODPaymentMethod::class => \ShipStream\Ups\Api\Normalizer\CODCODPaymentMethodNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODCODBillingOption::class => \ShipStream\Ups\Api\Normalizer\CODCODBillingOptionNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateCODRemitTo::class => \ShipStream\Ups\Api\Normalizer\FreightRateCODRemitToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RemitToAddress::class => \ShipStream\Ups\Api\Normalizer\RemitToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDangerousGoods::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsDangerousGoodsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DangerousGoodsPhone::class => \ShipStream\Ups\Api\Normalizer\DangerousGoodsPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DangerousGoodsTransportationMode::class => \ShipStream\Ups\Api\Normalizer\DangerousGoodsTransportationModeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsSortingAndSegregating::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsSortingAndSegregatingNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsExcessDeclaredValue::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsExcessDeclaredValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsHandlingCharge::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsHandlingChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingChargeAmount::class => \ShipStream\Ups\Api\Normalizer\HandlingChargeAmountNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsAdjustedHeight::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsAdjustedHeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestPickupRequest::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestPickupRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestAlternateRateOptions::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestAlternateRateOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestGFPOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\GFPOptionsOnCallInformation::class => \ShipStream\Ups\Api\Normalizer\GFPOptionsOnCallInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitWeight::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestHandlingUnitWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnits::class => \ShipStream\Ups\Api\Normalizer\FreightRateRequestHandlingUnitsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponse::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseResponse::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseRate::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateType::class => \ShipStream\Ups\Api\Normalizer\RateTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RateFactor::class => \ShipStream\Ups\Api\Normalizer\RateFactorNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FactorUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\FactorUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseFreightDensityRate::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseFreightDensityRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseCommodity::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseCommodityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseTotalShipmentCharge::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseTotalShipmentChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseBillableShipmentWeight::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseBillableShipmentWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\BillableShipmentWeightUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\BillableShipmentWeightUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseDimensionalWeight::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseDimensionalWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseService::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseAlternateRatesResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateRatesResponseAlternateRateType::class => \ShipStream\Ups\Api\Normalizer\AlternateRatesResponseAlternateRateTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateRatesResponseRate::class => \ShipStream\Ups\Api\Normalizer\AlternateRatesResponseRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateRatesResponseFreightDensityRate::class => \ShipStream\Ups\Api\Normalizer\AlternateRatesResponseFreightDensityRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateRatesResponseBillableShipmentWeight::class => \ShipStream\Ups\Api\Normalizer\AlternateRatesResponseBillableShipmentWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateRatesResponseTimeInTransit::class => \ShipStream\Ups\Api\Normalizer\AlternateRatesResponseTimeInTransitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseTimeInTransit::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseTimeInTransitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits::class => \ShipStream\Ups\Api\Normalizer\FreightRateResponseHandlingUnitsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTSHIPRequestWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTSHIPRequestWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FREIGHTSHIPResponseWrapper::class => \ShipStream\Ups\Api\Normalizer\FREIGHTSHIPResponseWrapperNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipRequest::class => \ShipStream\Ups\Api\Normalizer\FreightShipRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipRequestRequest::class => \ShipStream\Ups\Api\Normalizer\FreightShipRequestRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipRequestShipment::class => \ShipStream\Ups\Api\Normalizer\FreightShipRequestShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipmentShipFrom::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipmentShipFromNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipFromAddress::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipFromAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipmentShipTo::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipmentShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipToAddress::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipmentPaymentInformation::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipmentPaymentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PaymentInformationPayer::class => \ShipStream\Ups\Api\Normalizer\PaymentInformationPayerNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipPayerAddress::class => \ShipStream\Ups\Api\Normalizer\FreightShipPayerAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PayerPhone::class => \ShipStream\Ups\Api\Normalizer\PayerPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentHandlingUnitOne::class => \ShipStream\Ups\Api\Normalizer\ShipmentHandlingUnitOneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentHandlingUnitTwo::class => \ShipStream\Ups\Api\Normalizer\ShipmentHandlingUnitTwoNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentExistingShipmentID::class => \ShipStream\Ups\Api\Normalizer\ShipmentExistingShipmentIDNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ExistingShipmentIDConfirmationNumber::class => \ShipStream\Ups\Api\Normalizer\ExistingShipmentIDConfirmationNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ConfirmationNumberType::class => \ShipStream\Ups\Api\Normalizer\ConfirmationNumberTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentCommodity::class => \ShipStream\Ups\Api\Normalizer\ShipmentCommodityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipCommodityDimensions::class => \ShipStream\Ups\Api\Normalizer\FreightShipCommodityDimensionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentReference::class => \ShipStream\Ups\Api\Normalizer\ShipmentReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ReferenceNumber::class => \ShipStream\Ups\Api\Normalizer\ReferenceNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ReferenceWeight::class => \ShipStream\Ups\Api\Normalizer\ReferenceWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipmentShipmentServiceOptionsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsEMailInformation::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsEMailInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EMailInformationEMailType::class => \ShipStream\Ups\Api\Normalizer\EMailInformationEMailTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EMailInformationEMail::class => \ShipStream\Ups\Api\Normalizer\EMailInformationEMailNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CODRemitTo::class => \ShipStream\Ups\Api\Normalizer\CODRemitToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipRemitToAddress::class => \ShipStream\Ups\Api\Normalizer\FreightShipRemitToAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\RemitToPhone::class => \ShipStream\Ups\Api\Normalizer\RemitToPhoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipShipmentServiceOptionsDangerousGoods::class => \ShipStream\Ups\Api\Normalizer\FreightShipShipmentServiceOptionsDangerousGoodsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeclaredValue::class => \ShipStream\Ups\Api\Normalizer\ShipmentServiceOptionsDeclaredValueNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentPickupRequest::class => \ShipStream\Ups\Api\Normalizer\ShipmentPickupRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRequestRequester::class => \ShipStream\Ups\Api\Normalizer\PickupRequestRequesterNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PickupRequestPOM::class => \ShipStream\Ups\Api\Normalizer\PickupRequestPOMNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipPOMPickupNotifications::class => \ShipStream\Ups\Api\Normalizer\FreightShipPOMPickupNotificationsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipPickupNotificationsEMailNotification::class => \ShipStream\Ups\Api\Normalizer\FreightShipPickupNotificationsEMailNotificationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentDocuments::class => \ShipStream\Ups\Api\Normalizer\ShipmentDocumentsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DocumentsImage::class => \ShipStream\Ups\Api\Normalizer\DocumentsImageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ImageType::class => \ShipStream\Ups\Api\Normalizer\ImageTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ImageFormat::class => \ShipStream\Ups\Api\Normalizer\ImageFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ImagePrintFormat::class => \ShipStream\Ups\Api\Normalizer\ImagePrintFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ImagePrintSize::class => \ShipStream\Ups\Api\Normalizer\ImagePrintSizeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DocumentsPackingList::class => \ShipStream\Ups\Api\Normalizer\DocumentsPackingListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackingListShipFrom::class => \ShipStream\Ups\Api\Normalizer\PackingListShipFromNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackingListShipTo::class => \ShipStream\Ups\Api\Normalizer\PackingListShipToNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackingListReference::class => \ShipStream\Ups\Api\Normalizer\PackingListReferenceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackingListHandlingUnit::class => \ShipStream\Ups\Api\Normalizer\PackingListHandlingUnitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitCommodity::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitCommodityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\HandlingUnitUnitOfMeasurement::class => \ShipStream\Ups\Api\Normalizer\HandlingUnitUnitOfMeasurementNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentHandlingUnits::class => \ShipStream\Ups\Api\Normalizer\ShipmentHandlingUnitsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipResponse::class => \ShipStream\Ups\Api\Normalizer\FreightShipResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipResponseResponse::class => \ShipStream\Ups\Api\Normalizer\FreightShipResponseResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults::class => \ShipStream\Ups\Api\Normalizer\FreightShipResponseShipmentResultsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsRate::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsFreightDensityRate::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsFreightDensityRateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsTotalShipmentCharge::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsTotalShipmentChargeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsBillableShipmentWeight::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsBillableShipmentWeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsService::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsDocuments::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsDocumentsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DocumentsForms::class => \ShipStream\Ups\Api\Normalizer\DocumentsFormsNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FormsType::class => \ShipStream\Ups\Api\Normalizer\FormsTypeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\FormsFormat::class => \ShipStream\Ups\Api\Normalizer\FormsFormatNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ShipmentResultsTimeInTransit::class => \ShipStream\Ups\Api\Normalizer\ShipmentResultsTimeInTransitNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TimeInTransitRequest::class => \ShipStream\Ups\Api\Normalizer\TimeInTransitRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TimeInTransitResponse::class => \ShipStream\Ups\Api\Normalizer\TimeInTransitResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\ValidationList::class => \ShipStream\Ups\Api\Normalizer\ValidationListNormalizer::class,
        
        \ShipStream\Ups\Api\Model\EmsResponse::class => \ShipStream\Ups\Api\Normalizer\EmsResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\CandidateAddress::class => \ShipStream\Ups\Api\Normalizer\CandidateAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Services::class => \ShipStream\Ups\Api\Normalizer\ServicesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AccessPointInformation::class => \ShipStream\Ups\Api\Normalizer\AccessPointInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Activity::class => \ShipStream\Ups\Api\Normalizer\ActivityNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Address::class => \ShipStream\Ups\Api\Normalizer\AddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\AlternateTrackingNumber::class => \ShipStream\Ups\Api\Normalizer\AlternateTrackingNumberNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryDate::class => \ShipStream\Ups\Api\Normalizer\DeliveryDateNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryInformation::class => \ShipStream\Ups\Api\Normalizer\DeliveryInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\DeliveryTime::class => \ShipStream\Ups\Api\Normalizer\DeliveryTimeNormalizer::class,
        
        \ShipStream\Ups\Api\Model\InquireNumbers::class => \ShipStream\Ups\Api\Normalizer\InquireNumbersNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Location::class => \ShipStream\Ups\Api\Normalizer\LocationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Milestones::class => \ShipStream\Ups\Api\Normalizer\MilestonesNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Package::class => \ShipStream\Ups\Api\Normalizer\PackageNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PackageAddress::class => \ShipStream\Ups\Api\Normalizer\PackageAddressNormalizer::class,
        
        \ShipStream\Ups\Api\Model\PaymentInformation::class => \ShipStream\Ups\Api\Normalizer\PaymentInformationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Service::class => \ShipStream\Ups\Api\Normalizer\ServiceNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Shipment::class => \ShipStream\Ups\Api\Normalizer\ShipmentNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Signature::class => \ShipStream\Ups\Api\Normalizer\SignatureNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Status::class => \ShipStream\Ups\Api\Normalizer\StatusNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SubMilestone::class => \ShipStream\Ups\Api\Normalizer\SubMilestoneNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TrackApiResponse::class => \ShipStream\Ups\Api\Normalizer\TrackApiResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TrackResponse::class => \ShipStream\Ups\Api\Normalizer\TrackResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Warning::class => \ShipStream\Ups\Api\Normalizer\WarningNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Weight::class => \ShipStream\Ups\Api\Normalizer\WeightNormalizer::class,
        
        \ShipStream\Ups\Api\Model\Destination::class => \ShipStream\Ups\Api\Normalizer\DestinationNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TrackSubsServiceRequest::class => \ShipStream\Ups\Api\Normalizer\TrackSubsServiceRequestNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TrackSubsServiceResponse::class => \ShipStream\Ups\Api\Normalizer\TrackSubsServiceResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse::class => \ShipStream\Ups\Api\Normalizer\TrackSubsServiceErrorResponseNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody::class => \ShipStream\Ups\Api\Normalizer\SecurityV1OauthTokenPostBodyNormalizer::class,
        
        \ShipStream\Ups\Api\Model\SecurityV1OauthRefreshPostBody::class => \ShipStream\Ups\Api\Normalizer\SecurityV1OauthRefreshPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \ShipStream\Ups\Api\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \ShipStream\Ups\Api\Model\XAVRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\XAVResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\XAVRequest::class => false,
            \ShipStream\Ups\Api\Model\XAVRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\RequestTransactionReference::class => false,
            \ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat::class => false,
            \ShipStream\Ups\Api\Model\XAVResponse::class => false,
            \ShipStream\Ups\Api\Model\XAVResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\ResponseResponseStatus::class => false,
            \ShipStream\Ups\Api\Model\ResponseAlert::class => false,
            \ShipStream\Ups\Api\Model\ResponseTransactionReference::class => false,
            \ShipStream\Ups\Api\Model\XAVResponseAddressClassification::class => false,
            \ShipStream\Ups\Api\Model\XAVResponseCandidate::class => false,
            \ShipStream\Ups\Api\Model\CandidateAddressClassification::class => false,
            \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat::class => false,
            \ShipStream\Ups\Api\Model\ErrorResponse::class => false,
            \ShipStream\Ups\Api\Model\ErrorResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\Error::class => false,
            \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequest::class => false,
            \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponse::class => false,
            \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData::class => false,
            \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail::class => false,
            \ShipStream\Ups\Api\Model\ChemicalDataProperShippingNameDetail::class => false,
            \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail::class => false,
            \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequest::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipFromAddress::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentService::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage::class => false,
            \ShipStream\Ups\Api\Model\PackagePackageWeight::class => false,
            \ShipStream\Ups\Api\Model\PackageWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\PackageChemicalRecord::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\ResponseAlertDetail::class => false,
            \ShipStream\Ups\Api\Model\AlertDetailElementLevelInformation::class => false,
            \ShipStream\Ups\Api\Model\ElementLevelInformationElementIdentifier::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseService::class => false,
            \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults::class => false,
            \ShipStream\Ups\Api\Model\LandedCostRequest::class => false,
            \ShipStream\Ups\Api\Model\LandedCostRequestShipment::class => false,
            \ShipStream\Ups\Api\Model\RequestShipmentItems::class => false,
            \ShipStream\Ups\Api\Model\LandedCostResponse::class => false,
            \ShipStream\Ups\Api\Model\LandedCostResponseShipment::class => false,
            \ShipStream\Ups\Api\Model\LandedCostResponseShipmentPerfStats::class => false,
            \ShipStream\Ups\Api\Model\BrokerageFeeItems::class => false,
            \ShipStream\Ups\Api\Model\ResponseShipmentItems::class => false,
            \ShipStream\Ups\Api\Model\Errors::class => false,
            \ShipStream\Ups\Api\Model\LOCATORRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\LOCATORResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequest::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestOriginAddress::class => false,
            \ShipStream\Ups\Api\Model\OriginAddressGeocode::class => false,
            \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestTranslate::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria::class => false,
            \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption::class => false,
            \ShipStream\Ups\Api\Model\SearchOptionOptionType::class => false,
            \ShipStream\Ups\Api\Model\SearchOptionOptionCode::class => false,
            \ShipStream\Ups\Api\Model\SearchOptionRelation::class => false,
            \ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch::class => false,
            \ShipStream\Ups\Api\Model\ServiceSearchServiceCode::class => false,
            \ShipStream\Ups\Api\Model\ServiceSearchServiceOptionCode::class => false,
            \ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch::class => false,
            \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress::class => false,
            \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch::class => false,
            \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria::class => false,
            \ShipStream\Ups\Api\Model\IncludeCriteriaMerchantAccountNumberList::class => false,
            \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter::class => false,
            \ShipStream\Ups\Api\Model\IncludeCriteriaServiceOfferingList::class => false,
            \ShipStream\Ups\Api\Model\ServiceOfferingListServiceOffering::class => false,
            \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult::class => false,
            \ShipStream\Ups\Api\Model\ExcludeFromResultPostalCodeList::class => false,
            \ShipStream\Ups\Api\Model\PostalCodeListPostalCode::class => false,
            \ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestSortCriteria::class => false,
            \ShipStream\Ups\Api\Model\LocatorRequestServiceGeoUnit::class => false,
            \ShipStream\Ups\Api\Model\LocatorResponse::class => false,
            \ShipStream\Ups\Api\Model\LocatorResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\ResponseError::class => false,
            \ShipStream\Ups\Api\Model\ErrorErrorLocation::class => false,
            \ShipStream\Ups\Api\Model\LocatorResponseGeocode::class => false,
            \ShipStream\Ups\Api\Model\LocatorResponseSearchResults::class => false,
            \ShipStream\Ups\Api\Model\SearchResultsGeocodeCandidate::class => false,
            \ShipStream\Ups\Api\Model\GeocodeCandidateAddressKeyFormat::class => false,
            \ShipStream\Ups\Api\Model\GeocodeCandidateGeocode::class => false,
            \ShipStream\Ups\Api\Model\SearchResultsDropLocation::class => false,
            \ShipStream\Ups\Api\Model\DropLocationIVR::class => false,
            \ShipStream\Ups\Api\Model\DropLocationGeocode::class => false,
            \ShipStream\Ups\Api\Model\DropLocationAddressKeyFormat::class => false,
            \ShipStream\Ups\Api\Model\DropLocationLocationAttribute::class => false,
            \ShipStream\Ups\Api\Model\LocationAttributeOptionType::class => false,
            \ShipStream\Ups\Api\Model\LocationAttributeOptionCode::class => false,
            \ShipStream\Ups\Api\Model\OptionCodeTransportationPickUpSchedule::class => false,
            \ShipStream\Ups\Api\Model\TransportationPickUpSchedulePickUp::class => false,
            \ShipStream\Ups\Api\Model\PickUpPickUpDetails::class => false,
            \ShipStream\Ups\Api\Model\DropLocationDistance::class => false,
            \ShipStream\Ups\Api\Model\DistanceUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\DropLocationSpecialInstructions::class => false,
            \ShipStream\Ups\Api\Model\DropLocationAdditionalComments::class => false,
            \ShipStream\Ups\Api\Model\AdditionalCommentsCommentType::class => false,
            \ShipStream\Ups\Api\Model\DropLocationOperatingHours::class => false,
            \ShipStream\Ups\Api\Model\OperatingHoursStandardHours::class => false,
            \ShipStream\Ups\Api\Model\StandardHoursDayOfWeek::class => false,
            \ShipStream\Ups\Api\Model\DropLocationLocalizedInstruction::class => false,
            \ShipStream\Ups\Api\Model\DropLocationPromotionInformation::class => false,
            \ShipStream\Ups\Api\Model\DropLocationSortCode::class => false,
            \ShipStream\Ups\Api\Model\DropLocationServiceOfferingList::class => false,
            \ShipStream\Ups\Api\Model\DropLocationAccessPointInformation::class => false,
            \ShipStream\Ups\Api\Model\AccessPointInformationBusinessClassificationList::class => false,
            \ShipStream\Ups\Api\Model\BusinessClassificationListBusinessClassification::class => false,
            \ShipStream\Ups\Api\Model\AccessPointInformationAccessPointStatus::class => false,
            \ShipStream\Ups\Api\Model\AccessPointInformationPrivateNetworkList::class => false,
            \ShipStream\Ups\Api\Model\PrivateNetworkListPrivateNetwork::class => false,
            \ShipStream\Ups\Api\Model\AccessPointInformationAvailability::class => false,
            \ShipStream\Ups\Api\Model\AvailabilityShippingAvailability::class => false,
            \ShipStream\Ups\Api\Model\ShippingAvailabilityUnavailableReason::class => false,
            \ShipStream\Ups\Api\Model\AvailabilityDCRAvailability::class => false,
            \ShipStream\Ups\Api\Model\DCRAvailabilityUnavailableReason::class => false,
            \ShipStream\Ups\Api\Model\DropLocationLocationImage::class => false,
            \ShipStream\Ups\Api\Model\SearchResultsAvailableLocationAttributes::class => false,
            \ShipStream\Ups\Api\Model\AvailableLocationAttributesOptionType::class => false,
            \ShipStream\Ups\Api\Model\AvailableLocationAttributesOptionCode::class => false,
            \ShipStream\Ups\Api\Model\AvailableLocationAttributesOptionCodeTransportationPickUpSchedule::class => false,
            \ShipStream\Ups\Api\Model\AvailableLocationAttributesTransportationPickUpSchedulePickUp::class => false,
            \ShipStream\Ups\Api\Model\AvailableLocationAttributesPickUpPickUpDetails::class => false,
            \ShipStream\Ups\Api\Model\GenerateTokenSuccessResponse::class => false,
            \ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse::class => false,
            \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\DeleteRequest::class => false,
            \ShipStream\Ups\Api\Model\DeleteRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\DeleteResponse::class => false,
            \ShipStream\Ups\Api\Model\DeleteResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest::class => false,
            \ShipStream\Ups\Api\Model\PushToImageRepositoryRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PushToImageRepositoryRequestFormsHistoryDocumentID::class => false,
            \ShipStream\Ups\Api\Model\PushToImageRepositoryResponse::class => false,
            \ShipStream\Ups\Api\Model\PushToImageRepositoryResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\UploadRequest::class => false,
            \ShipStream\Ups\Api\Model\UploadRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\UploadRequestUserCreatedForm::class => false,
            \ShipStream\Ups\Api\Model\UploadResponse::class => false,
            \ShipStream\Ups\Api\Model\UploadResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\UploadResponseFormsHistoryDocumentID::class => false,
            \ShipStream\Ups\Api\Model\PICKUPRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PICKUPResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PickupRateRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupRateRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupRateRequestShipperAccount::class => false,
            \ShipStream\Ups\Api\Model\PickupRateRequestPickupAddress::class => false,
            \ShipStream\Ups\Api\Model\PickupRateRequestPickupDateInfo::class => false,
            \ShipStream\Ups\Api\Model\PickupRateResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupRateResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupRateResponseRateResult::class => false,
            \ShipStream\Ups\Api\Model\RateResultChargeDetail::class => false,
            \ShipStream\Ups\Api\Model\RateResultTaxCharges::class => false,
            \ShipStream\Ups\Api\Model\PickupRateResponseWeekendServiceTerritory::class => false,
            \ShipStream\Ups\Api\Model\PICKUPCancelRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PICKUPCancelResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PickupCancelRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupCancelRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupCancelResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupCancelResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupCancelResponseGWNStatus::class => false,
            \ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PICKUPCreationResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestShipper::class => false,
            \ShipStream\Ups\Api\Model\ShipperAccount::class => false,
            \ShipStream\Ups\Api\Model\ShipperChargeCard::class => false,
            \ShipStream\Ups\Api\Model\ChargeCardCardAddress::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestPickupDateInfo::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress::class => false,
            \ShipStream\Ups\Api\Model\PickupAddressPhone::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestPickupPiece::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestTotalWeight::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestTrackingData::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestTrackingDataWithReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions::class => false,
            \ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\FreightOptionsDestinationAddress::class => false,
            \ShipStream\Ups\Api\Model\FreightOptionsShipmentDetail::class => false,
            \ShipStream\Ups\Api\Model\ShipmentDetailPalletInformation::class => false,
            \ShipStream\Ups\Api\Model\PalletInformationDimensions::class => false,
            \ShipStream\Ups\Api\Model\DimensionsUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationResponseWeekendServiceTerritory::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationResponseRateStatus::class => false,
            \ShipStream\Ups\Api\Model\PickupCreationResponseRateResult::class => false,
            \ShipStream\Ups\Api\Model\RateResultDisclaimer::class => false,
            \ShipStream\Ups\Api\Model\PICKUPPolDivRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PICKUPPolDivResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupGetPoliticalDivision1ListResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PICKUPServCenterRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PICKUPServCenterResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestPickupPiece::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestOriginAddress::class => false,
            \ShipStream\Ups\Api\Model\OriginAddressOriginSearchCriteria::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestDestinationAddress::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation::class => false,
            \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities::class => false,
            \ShipStream\Ups\Api\Model\DropOffFacilitiesAddress::class => false,
            \ShipStream\Ups\Api\Model\DropOffFacilitiesFacilityTime::class => false,
            \ShipStream\Ups\Api\Model\FacilityTimeDayOfWeek::class => false,
            \ShipStream\Ups\Api\Model\DropOffFacilitiesLocalizedInstruction::class => false,
            \ShipStream\Ups\Api\Model\DropOffFacilitiesDistance::class => false,
            \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities::class => false,
            \ShipStream\Ups\Api\Model\PickupFacilitiesAddress::class => false,
            \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTime::class => false,
            \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek::class => false,
            \ShipStream\Ups\Api\Model\PICKUPPendingRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PICKUPPendingResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PickupPendingStatusRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupPendingStatusRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupPendingStatusResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupPendingStatusResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus::class => false,
            \ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\PRENOTIFICATIONResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationRequest::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationRequestShipment::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationShipmentShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationShipmentShipFromAddress::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationPackageChemicalRecord::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationResponse::class => false,
            \ShipStream\Ups\Api\Model\PreNotificationResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\QUANTUMVIEWResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewRequest::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewRequestSubscriptionRequest::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionRequestDateTimeRange::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewResponse::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewResponseQuantumViewEvents::class => false,
            \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionStatus::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionEventsDateRange::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionFileStatusType::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionFileManifest::class => false,
            \ShipStream\Ups\Api\Model\ManifestShipper::class => false,
            \ShipStream\Ups\Api\Model\ManifestShipperAddress::class => false,
            \ShipStream\Ups\Api\Model\ManifestShipTo::class => false,
            \ShipStream\Ups\Api\Model\ManifestShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\ManifestReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\ManifestService::class => false,
            \ShipStream\Ups\Api\Model\ManifestPackage::class => false,
            \ShipStream\Ups\Api\Model\PackageActivity::class => false,
            \ShipStream\Ups\Api\Model\ManifestPackageDimensions::class => false,
            \ShipStream\Ups\Api\Model\PackageDimensionalWeight::class => false,
            \ShipStream\Ups\Api\Model\DimensionalWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\ManifestPackagePackageWeight::class => false,
            \ShipStream\Ups\Api\Model\ManifestPackageReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\ManifestPackageServiceOptionsCOD::class => false,
            \ShipStream\Ups\Api\Model\CODCODAmount::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsInsuredValue::class => false,
            \ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCallTagARS::class => false,
            \ShipStream\Ups\Api\Model\ManifestCustomsValue::class => false,
            \ShipStream\Ups\Api\Model\ManifestBillToAccount::class => false,
            \ShipStream\Ups\Api\Model\ManifestUAPAddress::class => false,
            \ShipStream\Ups\Api\Model\UAPAddressAddress::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionFileOrigin::class => false,
            \ShipStream\Ups\Api\Model\OriginPackageReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\OriginShipmentReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\OriginActivityLocation::class => false,
            \ShipStream\Ups\Api\Model\ActivityLocationAddressArtifactFormat::class => false,
            \ShipStream\Ups\Api\Model\OriginBillToAccount::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionFileException::class => false,
            \ShipStream\Ups\Api\Model\ExceptionPackageReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\ExceptionShipmentReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\ExceptionUpdatedAddress::class => false,
            \ShipStream\Ups\Api\Model\UpdatedAddressAddressExtendedInformation::class => false,
            \ShipStream\Ups\Api\Model\ExceptionResolution::class => false,
            \ShipStream\Ups\Api\Model\ExceptionActivityLocation::class => false,
            \ShipStream\Ups\Api\Model\ExceptionBillToAccount::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionFileDelivery::class => false,
            \ShipStream\Ups\Api\Model\DeliveryPackageReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\DeliveryShipmentReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\DeliveryActivityLocation::class => false,
            \ShipStream\Ups\Api\Model\DeliveryDeliveryLocation::class => false,
            \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat::class => false,
            \ShipStream\Ups\Api\Model\AddressArtifactFormatAddressExtendedInformation::class => false,
            \ShipStream\Ups\Api\Model\DeliveryCOD::class => false,
            \ShipStream\Ups\Api\Model\DeliveryBillToAccount::class => false,
            \ShipStream\Ups\Api\Model\SubscriptionFileGeneric::class => false,
            \ShipStream\Ups\Api\Model\GenericShipmentReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\GenericPackageReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\GenericService::class => false,
            \ShipStream\Ups\Api\Model\GenericActivity::class => false,
            \ShipStream\Ups\Api\Model\GenericBillToAccount::class => false,
            \ShipStream\Ups\Api\Model\GenericShipTo::class => false,
            \ShipStream\Ups\Api\Model\GenericFailureNotification::class => false,
            \ShipStream\Ups\Api\Model\FailureNotificationFailureNotificationCode::class => false,
            \ShipStream\Ups\Api\Model\RATERequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\RATEResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\RateRequest::class => false,
            \ShipStream\Ups\Api\Model\RateRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\RateRequestPickupType::class => false,
            \ShipStream\Ups\Api\Model\RateRequestCustomerClassification::class => false,
            \ShipStream\Ups\Api\Model\RateRequestShipment::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentShipper::class => false,
            \ShipStream\Ups\Api\Model\ShipperAddress::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentShipTo::class => false,
            \ShipStream\Ups\Api\Model\ShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentShipFrom::class => false,
            \ShipStream\Ups\Api\Model\ShipFromAddress::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentAlternateDeliveryAddress::class => false,
            \ShipStream\Ups\Api\Model\RateAlternateDeliveryAddressAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipmentIndicationType::class => false,
            \ShipStream\Ups\Api\Model\ShipmentPaymentDetails::class => false,
            \ShipStream\Ups\Api\Model\PaymentDetailsShipmentCharge::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentChargeBillShipper::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargeBillReceiver::class => false,
            \ShipStream\Ups\Api\Model\BillReceiverAddress::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentChargeBillThirdParty::class => false,
            \ShipStream\Ups\Api\Model\RateBillThirdPartyAddress::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentFRSPaymentInformation::class => false,
            \ShipStream\Ups\Api\Model\FRSPaymentInformationType::class => false,
            \ShipStream\Ups\Api\Model\FRSPaymentInformationAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentFreightShipmentInformation::class => false,
            \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo::class => false,
            \ShipStream\Ups\Api\Model\FreightDensityInfoAdjustedHeight::class => false,
            \ShipStream\Ups\Api\Model\AdjustedHeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\FreightDensityInfoHandlingUnits::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitsType::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitsDimensions::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitsUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipmentTotalWeight::class => false,
            \ShipStream\Ups\Api\Model\ShipmentTotalWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentPackage::class => false,
            \ShipStream\Ups\Api\Model\PackagePackagingType::class => false,
            \ShipStream\Ups\Api\Model\PackageDimensions::class => false,
            \ShipStream\Ups\Api\Model\PackageDimWeight::class => false,
            \ShipStream\Ups\Api\Model\DimWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\PackageCommodity::class => false,
            \ShipStream\Ups\Api\Model\CommodityNMFC::class => false,
            \ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDeliveryConfirmation::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsAccessPointCOD::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsCOD::class => false,
            \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDeclaredValue::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsShipperDeclaredValue::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance::class => false,
            \ShipStream\Ups\Api\Model\InsuranceBasicFlexibleParcelIndicator::class => false,
            \ShipStream\Ups\Api\Model\InsuranceExtendedFlexibleParcelIndicator::class => false,
            \ShipStream\Ups\Api\Model\InsuranceTimeInTransitFlexibleParcelIndicator::class => false,
            \ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat::class => false,
            \ShipStream\Ups\Api\Model\HazMatHazMatChemicalRecord::class => false,
            \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDryIce::class => false,
            \ShipStream\Ups\Api\Model\DryIceDryIceWeight::class => false,
            \ShipStream\Ups\Api\Model\DryIceWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\PackageSimpleRate::class => false,
            \ShipStream\Ups\Api\Model\RatePackageUPSPremier::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsAccessPointCOD::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCOD::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCODCODAmount::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentServiceOptionsDeliveryConfirmation::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPickupOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeliveryOptions::class => false,
            \ShipStream\Ups\Api\Model\RateShipmentServiceOptionsRestrictedArticles::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsImportControl::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsReturnService::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentInvoiceLineTotal::class => false,
            \ShipStream\Ups\Api\Model\ShipmentPromotionalDiscountInformation::class => false,
            \ShipStream\Ups\Api\Model\ShipmentDeliveryTimeInformation::class => false,
            \ShipStream\Ups\Api\Model\DeliveryTimeInformationPickup::class => false,
            \ShipStream\Ups\Api\Model\DeliveryTimeInformationReturnContractServices::class => false,
            \ShipStream\Ups\Api\Model\RateResponse::class => false,
            \ShipStream\Ups\Api\Model\RateResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\RateResponseRatedShipment::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentDisclaimer::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentService::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentRatedShipmentAlert::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentBillingWeight::class => false,
            \ShipStream\Ups\Api\Model\BillingWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentTransportationCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentBaseServiceCharge::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentItemizedCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentFRSShipmentData::class => false,
            \ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges::class => false,
            \ShipStream\Ups\Api\Model\TransportationChargesGrossCharge::class => false,
            \ShipStream\Ups\Api\Model\TransportationChargesDiscountAmount::class => false,
            \ShipStream\Ups\Api\Model\TransportationChargesNetCharge::class => false,
            \ShipStream\Ups\Api\Model\FRSShipmentDataFreightDensityRate::class => false,
            \ShipStream\Ups\Api\Model\FRSShipmentDataHandlingUnits::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitsAdjustedHeight::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageBaseServiceCharge::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentServiceOptionsCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentTaxCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentTotalCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentTotalChargesWithTaxes::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentNegotiatedRateCharges::class => false,
            \ShipStream\Ups\Api\Model\NegotiatedRateChargesItemizedCharges::class => false,
            \ShipStream\Ups\Api\Model\NegotiatedRateChargesTaxCharges::class => false,
            \ShipStream\Ups\Api\Model\NegotiatedRateChargesTotalCharge::class => false,
            \ShipStream\Ups\Api\Model\NegotiatedRateChargesTotalChargesWithTaxes::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageTransportationCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageServiceOptionsCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageTotalCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageBillingWeight::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageBillingWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageAccessorial::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageItemizedCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageRateModifier::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageNegotiatedCharges::class => false,
            \ShipStream\Ups\Api\Model\NegotiatedChargesItemizedCharges::class => false,
            \ShipStream\Ups\Api\Model\RatedPackageSimpleRate::class => false,
            \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit::class => false,
            \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary::class => false,
            \ShipStream\Ups\Api\Model\ServiceSummaryService::class => false,
            \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival::class => false,
            \ShipStream\Ups\Api\Model\EstimatedArrivalArrival::class => false,
            \ShipStream\Ups\Api\Model\EstimatedArrivalPickup::class => false,
            \ShipStream\Ups\Api\Model\SHIPRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\SHIPResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\ShipmentRequest::class => false,
            \ShipStream\Ups\Api\Model\ShipmentRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\ShipmentRequestShipment::class => false,
            \ShipStream\Ups\Api\Model\ShipmentReturnService::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipper::class => false,
            \ShipStream\Ups\Api\Model\ShipperPhone::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipTo::class => false,
            \ShipStream\Ups\Api\Model\ShipToPhone::class => false,
            \ShipStream\Ups\Api\Model\ShipmentAlternateDeliveryAddress::class => false,
            \ShipStream\Ups\Api\Model\AlternateDeliveryAddressAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipFrom::class => false,
            \ShipStream\Ups\Api\Model\ShipFromTaxIDType::class => false,
            \ShipStream\Ups\Api\Model\ShipFromPhone::class => false,
            \ShipStream\Ups\Api\Model\ShipFromVendorInfo::class => false,
            \ShipStream\Ups\Api\Model\ShipmentPaymentInformation::class => false,
            \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargeBillShipper::class => false,
            \ShipStream\Ups\Api\Model\BillShipperCreditCard::class => false,
            \ShipStream\Ups\Api\Model\CreditCardAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty::class => false,
            \ShipStream\Ups\Api\Model\BillThirdPartyAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentFRSPaymentInformation::class => false,
            \ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo::class => false,
            \ShipStream\Ups\Api\Model\ShipmentReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification::class => false,
            \ShipStream\Ups\Api\Model\NotificationEMail::class => false,
            \ShipStream\Ups\Api\Model\NotificationVoiceMessage::class => false,
            \ShipStream\Ups\Api\Model\NotificationTextMessage::class => false,
            \ShipStream\Ups\Api\Model\NotificationLocale::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsLabelDelivery::class => false,
            \ShipStream\Ups\Api\Model\LabelDeliveryEMail::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsUserCreatedForm::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsUPSPremiumCareForm::class => false,
            \ShipStream\Ups\Api\Model\UPSPremiumCareFormLanguageForUPSPremiumCare::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsCN22Form::class => false,
            \ShipStream\Ups\Api\Model\CN22FormCN22Content::class => false,
            \ShipStream\Ups\Api\Model\CN22ContentCN22ContentWeight::class => false,
            \ShipStream\Ups\Api\Model\CN22ContentWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsEEIFilingOption::class => false,
            \ShipStream\Ups\Api\Model\EEIFilingOptionUPSFiled::class => false,
            \ShipStream\Ups\Api\Model\UPSFiledPOA::class => false,
            \ShipStream\Ups\Api\Model\EEIFilingOptionShipperFiled::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsContacts::class => false,
            \ShipStream\Ups\Api\Model\ContactsForwardAgent::class => false,
            \ShipStream\Ups\Api\Model\ForwardAgentAddress::class => false,
            \ShipStream\Ups\Api\Model\ContactsUltimateConsignee::class => false,
            \ShipStream\Ups\Api\Model\UltimateConsigneeAddress::class => false,
            \ShipStream\Ups\Api\Model\UltimateConsigneeUltimateConsigneeType::class => false,
            \ShipStream\Ups\Api\Model\ContactsIntermediateConsignee::class => false,
            \ShipStream\Ups\Api\Model\IntermediateConsigneeAddress::class => false,
            \ShipStream\Ups\Api\Model\ContactsProducer::class => false,
            \ShipStream\Ups\Api\Model\ProducerAddress::class => false,
            \ShipStream\Ups\Api\Model\ProducerPhone::class => false,
            \ShipStream\Ups\Api\Model\ContactsSoldTo::class => false,
            \ShipStream\Ups\Api\Model\SoldToPhone::class => false,
            \ShipStream\Ups\Api\Model\SoldToAddress::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsProduct::class => false,
            \ShipStream\Ups\Api\Model\ProductUnit::class => false,
            \ShipStream\Ups\Api\Model\UnitUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\ProductNetCostDateRange::class => false,
            \ShipStream\Ups\Api\Model\ProductProductWeight::class => false,
            \ShipStream\Ups\Api\Model\ProductWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\ProductScheduleB::class => false,
            \ShipStream\Ups\Api\Model\ScheduleBUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\ProductExcludeFromForm::class => false,
            \ShipStream\Ups\Api\Model\ProductPackingListInfo::class => false,
            \ShipStream\Ups\Api\Model\PackingListInfoPackageAssociated::class => false,
            \ShipStream\Ups\Api\Model\ProductEEIInformation::class => false,
            \ShipStream\Ups\Api\Model\EEIInformationLicense::class => false,
            \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation::class => false,
            \ShipStream\Ups\Api\Model\DDTCInformationUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsDiscount::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsFreightCharges::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsInsuranceCharges::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsOtherCharges::class => false,
            \ShipStream\Ups\Api\Model\InternationalFormsBlanketPeriod::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeliveryConfirmation::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsLabelMethod::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification::class => false,
            \ShipStream\Ups\Api\Model\PreAlertNotificationEMailMessage::class => false,
            \ShipStream\Ups\Api\Model\PreAlertNotificationVoiceMessage::class => false,
            \ShipStream\Ups\Api\Model\PreAlertNotificationTextMessage::class => false,
            \ShipStream\Ups\Api\Model\PreAlertNotificationLocale::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles::class => false,
            \ShipStream\Ups\Api\Model\ShipmentPackage::class => false,
            \ShipStream\Ups\Api\Model\PackagePackaging::class => false,
            \ShipStream\Ups\Api\Model\PackageReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\PackageUPSPremier::class => false,
            \ShipStream\Ups\Api\Model\UPSPremierHandlingInstructions::class => false,
            \ShipStream\Ups\Api\Model\PackagePackageServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsDeliveryConfirmation::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsDeclaredValue::class => false,
            \ShipStream\Ups\Api\Model\DeclaredValueType::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsCODCODAmount::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsNotification::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsNotificationEMail::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat::class => false,
            \ShipStream\Ups\Api\Model\PackageServiceOptionsDryIce::class => false,
            \ShipStream\Ups\Api\Model\PackageHazMatPackageInformation::class => false,
            \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification::class => false,
            \ShipStream\Ups\Api\Model\LabelSpecificationLabelImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelSpecificationLabelStockSize::class => false,
            \ShipStream\Ups\Api\Model\LabelSpecificationInstruction::class => false,
            \ShipStream\Ups\Api\Model\ShipmentRequestReceiptSpecification::class => false,
            \ShipStream\Ups\Api\Model\ReceiptSpecificationImageFormat::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResponse::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsDisclaimer::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesBaseServiceCharge::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesTransportationCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesItemizedCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesServiceOptionsCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesTaxCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesTotalCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentChargesTotalChargesWithTaxes::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsNegotiatedRateCharges::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsBillingWeight::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsBaseServiceCharge::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsServiceOptionsCharges::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsShippingLabel::class => false,
            \ShipStream\Ups\Api\Model\ShippingLabelImageFormat::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsShippingReceipt::class => false,
            \ShipStream\Ups\Api\Model\ShippingReceiptImageFormat::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsAccessorial::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsSimpleRate::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsForm::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsFormImage::class => false,
            \ShipStream\Ups\Api\Model\FormImage::class => false,
            \ShipStream\Ups\Api\Model\HighValueReportImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\CODTurnInPageImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\ImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsItemizedCharges::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsNegotiatedCharges::class => false,
            \ShipStream\Ups\Api\Model\PackageResultsRateModifier::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsControlLogReceipt::class => false,
            \ShipStream\Ups\Api\Model\ControlLogReceiptImageFormat::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsForm::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsCODTurnInPage::class => false,
            \ShipStream\Ups\Api\Model\CODTurnInPageImage::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsHighValueReport::class => false,
            \ShipStream\Ups\Api\Model\HighValueReportImage::class => false,
            \ShipStream\Ups\Api\Model\VOIDSHIPMENTRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\VOIDSHIPMENTResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentRequest::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\VoidRequestTransactionReference::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentResponse::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\VoidResponseResponseStatus::class => false,
            \ShipStream\Ups\Api\Model\VoidResponseTransactionReference::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentResponseSummaryResult::class => false,
            \ShipStream\Ups\Api\Model\SummaryResultStatus::class => false,
            \ShipStream\Ups\Api\Model\VoidShipmentResponsePackageLevelResult::class => false,
            \ShipStream\Ups\Api\Model\PackageLevelResultStatus::class => false,
            \ShipStream\Ups\Api\Model\LABELRECOVERYRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\LABELRECOVERYResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequest::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\LRRequestTransactionReference::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryLabelSpecificationLabelImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryLabelSpecificationLabelStockSize::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequestTranslate::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelDelivery::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequestReferenceValues::class => false,
            \ShipStream\Ups\Api\Model\ReferenceValuesReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryRequestUPSPremiumCareForm::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponse::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\LRResponseResponseStatus::class => false,
            \ShipStream\Ups\Api\Model\LRResponseTransactionReference::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults::class => false,
            \ShipStream\Ups\Api\Model\LabelResultsLabelImage::class => false,
            \ShipStream\Ups\Api\Model\LabelImageLabelImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage::class => false,
            \ShipStream\Ups\Api\Model\MailInnovationsLabelImageLabelImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelResultsReceipt::class => false,
            \ShipStream\Ups\Api\Model\ReceiptImage::class => false,
            \ShipStream\Ups\Api\Model\ReceiptImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelResultsForm::class => false,
            \ShipStream\Ups\Api\Model\LRFormImage::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponseCODTurnInPage::class => false,
            \ShipStream\Ups\Api\Model\LRCODTurnInPageImage::class => false,
            \ShipStream\Ups\Api\Model\LRCODTurnInPageImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponseForm::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryFormImage::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryImageImageFormat::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponseHighValueReport::class => false,
            \ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate::class => false,
            \ShipStream\Ups\Api\Model\TrackingCandidatePickupDateRange::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTPICKUPRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTPICKUPResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestRequester::class => false,
            \ShipStream\Ups\Api\Model\RequesterPhone::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestShipFrom::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestShipTo::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class => false,
            \ShipStream\Ups\Api\Model\ShipmentDetailPackagingType::class => false,
            \ShipStream\Ups\Api\Model\ShipmentDetailWeight::class => false,
            \ShipStream\Ups\Api\Model\WeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestExistingShipmentID::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupRequestPOM::class => false,
            \ShipStream\Ups\Api\Model\POMPickupNotifications::class => false,
            \ShipStream\Ups\Api\Model\PickupNotificationsEMailNotification::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightPickupResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTPICKUPCANCELRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTPICKUPCANCELResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\FreightCancelPickupRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightCancelPickupRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightCancelPickupResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightCancelPickupResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightCancelStatus::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTRATEResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestShipFrom::class => false,
            \ShipStream\Ups\Api\Model\FreightRateShipFromAddress::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestShipTo::class => false,
            \ShipStream\Ups\Api\Model\FreightRateShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestPaymentInformation::class => false,
            \ShipStream\Ups\Api\Model\FreightRatePaymentInformationPayer::class => false,
            \ShipStream\Ups\Api\Model\PayerAddress::class => false,
            \ShipStream\Ups\Api\Model\PaymentInformationShipmentBillingOption::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestService::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitOne::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitOneType::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitTwo::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitTwoType::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestCommodity::class => false,
            \ShipStream\Ups\Api\Model\CommodityWeight::class => false,
            \ShipStream\Ups\Api\Model\CommodityAdjustedWeight::class => false,
            \ShipStream\Ups\Api\Model\AdjustedWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\CommodityDimensions::class => false,
            \ShipStream\Ups\Api\Model\CommodityPackagingType::class => false,
            \ShipStream\Ups\Api\Model\CommodityCommodityValue::class => false,
            \ShipStream\Ups\Api\Model\CommodityNMFCCommodity::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions::class => false,
            \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsOverSeasLeg::class => false,
            \ShipStream\Ups\Api\Model\OverSeasLegDimensions::class => false,
            \ShipStream\Ups\Api\Model\OverSeasLegValue::class => false,
            \ShipStream\Ups\Api\Model\ValueCube::class => false,
            \ShipStream\Ups\Api\Model\ValueCWT::class => false,
            \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD::class => false,
            \ShipStream\Ups\Api\Model\CODCODValue::class => false,
            \ShipStream\Ups\Api\Model\CODCODPaymentMethod::class => false,
            \ShipStream\Ups\Api\Model\CODCODBillingOption::class => false,
            \ShipStream\Ups\Api\Model\FreightRateCODRemitTo::class => false,
            \ShipStream\Ups\Api\Model\RemitToAddress::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDangerousGoods::class => false,
            \ShipStream\Ups\Api\Model\DangerousGoodsPhone::class => false,
            \ShipStream\Ups\Api\Model\DangerousGoodsTransportationMode::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsSortingAndSegregating::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsExcessDeclaredValue::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsHandlingCharge::class => false,
            \ShipStream\Ups\Api\Model\HandlingChargeAmount::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsAdjustedHeight::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestPickupRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestAlternateRateOptions::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions::class => false,
            \ShipStream\Ups\Api\Model\GFPOptionsOnCallInformation::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitWeight::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnits::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseRate::class => false,
            \ShipStream\Ups\Api\Model\RateType::class => false,
            \ShipStream\Ups\Api\Model\RateFactor::class => false,
            \ShipStream\Ups\Api\Model\FactorUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseFreightDensityRate::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseCommodity::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseTotalShipmentCharge::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseBillableShipmentWeight::class => false,
            \ShipStream\Ups\Api\Model\BillableShipmentWeightUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseDimensionalWeight::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseService::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse::class => false,
            \ShipStream\Ups\Api\Model\AlternateRatesResponseAlternateRateType::class => false,
            \ShipStream\Ups\Api\Model\AlternateRatesResponseRate::class => false,
            \ShipStream\Ups\Api\Model\AlternateRatesResponseFreightDensityRate::class => false,
            \ShipStream\Ups\Api\Model\AlternateRatesResponseBillableShipmentWeight::class => false,
            \ShipStream\Ups\Api\Model\AlternateRatesResponseTimeInTransit::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseTimeInTransit::class => false,
            \ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTSHIPRequestWrapper::class => false,
            \ShipStream\Ups\Api\Model\FREIGHTSHIPResponseWrapper::class => false,
            \ShipStream\Ups\Api\Model\FreightShipRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightShipRequestRequest::class => false,
            \ShipStream\Ups\Api\Model\FreightShipRequestShipment::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipmentShipFrom::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipFromAddress::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipmentShipTo::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipToAddress::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipmentPaymentInformation::class => false,
            \ShipStream\Ups\Api\Model\PaymentInformationPayer::class => false,
            \ShipStream\Ups\Api\Model\FreightShipPayerAddress::class => false,
            \ShipStream\Ups\Api\Model\PayerPhone::class => false,
            \ShipStream\Ups\Api\Model\ShipmentHandlingUnitOne::class => false,
            \ShipStream\Ups\Api\Model\ShipmentHandlingUnitTwo::class => false,
            \ShipStream\Ups\Api\Model\ShipmentExistingShipmentID::class => false,
            \ShipStream\Ups\Api\Model\ExistingShipmentIDConfirmationNumber::class => false,
            \ShipStream\Ups\Api\Model\ConfirmationNumberType::class => false,
            \ShipStream\Ups\Api\Model\ShipmentCommodity::class => false,
            \ShipStream\Ups\Api\Model\FreightShipCommodityDimensions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentReference::class => false,
            \ShipStream\Ups\Api\Model\ReferenceNumber::class => false,
            \ShipStream\Ups\Api\Model\ReferenceWeight::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsEMailInformation::class => false,
            \ShipStream\Ups\Api\Model\EMailInformationEMailType::class => false,
            \ShipStream\Ups\Api\Model\EMailInformationEMail::class => false,
            \ShipStream\Ups\Api\Model\CODRemitTo::class => false,
            \ShipStream\Ups\Api\Model\FreightShipRemitToAddress::class => false,
            \ShipStream\Ups\Api\Model\RemitToPhone::class => false,
            \ShipStream\Ups\Api\Model\FreightShipShipmentServiceOptionsDangerousGoods::class => false,
            \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeclaredValue::class => false,
            \ShipStream\Ups\Api\Model\ShipmentPickupRequest::class => false,
            \ShipStream\Ups\Api\Model\PickupRequestRequester::class => false,
            \ShipStream\Ups\Api\Model\PickupRequestPOM::class => false,
            \ShipStream\Ups\Api\Model\FreightShipPOMPickupNotifications::class => false,
            \ShipStream\Ups\Api\Model\FreightShipPickupNotificationsEMailNotification::class => false,
            \ShipStream\Ups\Api\Model\ShipmentDocuments::class => false,
            \ShipStream\Ups\Api\Model\DocumentsImage::class => false,
            \ShipStream\Ups\Api\Model\ImageType::class => false,
            \ShipStream\Ups\Api\Model\ImageFormat::class => false,
            \ShipStream\Ups\Api\Model\ImagePrintFormat::class => false,
            \ShipStream\Ups\Api\Model\ImagePrintSize::class => false,
            \ShipStream\Ups\Api\Model\DocumentsPackingList::class => false,
            \ShipStream\Ups\Api\Model\PackingListShipFrom::class => false,
            \ShipStream\Ups\Api\Model\PackingListShipTo::class => false,
            \ShipStream\Ups\Api\Model\PackingListReference::class => false,
            \ShipStream\Ups\Api\Model\PackingListHandlingUnit::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitCommodity::class => false,
            \ShipStream\Ups\Api\Model\HandlingUnitUnitOfMeasurement::class => false,
            \ShipStream\Ups\Api\Model\ShipmentHandlingUnits::class => false,
            \ShipStream\Ups\Api\Model\FreightShipResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightShipResponseResponse::class => false,
            \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsRate::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsFreightDensityRate::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsTotalShipmentCharge::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsBillableShipmentWeight::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsService::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsDocuments::class => false,
            \ShipStream\Ups\Api\Model\DocumentsForms::class => false,
            \ShipStream\Ups\Api\Model\FormsType::class => false,
            \ShipStream\Ups\Api\Model\FormsFormat::class => false,
            \ShipStream\Ups\Api\Model\ShipmentResultsTimeInTransit::class => false,
            \ShipStream\Ups\Api\Model\TimeInTransitRequest::class => false,
            \ShipStream\Ups\Api\Model\TimeInTransitResponse::class => false,
            \ShipStream\Ups\Api\Model\ValidationList::class => false,
            \ShipStream\Ups\Api\Model\EmsResponse::class => false,
            \ShipStream\Ups\Api\Model\CandidateAddress::class => false,
            \ShipStream\Ups\Api\Model\Services::class => false,
            \ShipStream\Ups\Api\Model\AccessPointInformation::class => false,
            \ShipStream\Ups\Api\Model\Activity::class => false,
            \ShipStream\Ups\Api\Model\Address::class => false,
            \ShipStream\Ups\Api\Model\AlternateTrackingNumber::class => false,
            \ShipStream\Ups\Api\Model\DeliveryDate::class => false,
            \ShipStream\Ups\Api\Model\DeliveryInformation::class => false,
            \ShipStream\Ups\Api\Model\DeliveryTime::class => false,
            \ShipStream\Ups\Api\Model\InquireNumbers::class => false,
            \ShipStream\Ups\Api\Model\Location::class => false,
            \ShipStream\Ups\Api\Model\Milestones::class => false,
            \ShipStream\Ups\Api\Model\Package::class => false,
            \ShipStream\Ups\Api\Model\PackageAddress::class => false,
            \ShipStream\Ups\Api\Model\PaymentInformation::class => false,
            \ShipStream\Ups\Api\Model\Service::class => false,
            \ShipStream\Ups\Api\Model\Shipment::class => false,
            \ShipStream\Ups\Api\Model\Signature::class => false,
            \ShipStream\Ups\Api\Model\Status::class => false,
            \ShipStream\Ups\Api\Model\SubMilestone::class => false,
            \ShipStream\Ups\Api\Model\TrackApiResponse::class => false,
            \ShipStream\Ups\Api\Model\TrackResponse::class => false,
            \ShipStream\Ups\Api\Model\Warning::class => false,
            \ShipStream\Ups\Api\Model\Weight::class => false,
            \ShipStream\Ups\Api\Model\Destination::class => false,
            \ShipStream\Ups\Api\Model\TrackSubsServiceRequest::class => false,
            \ShipStream\Ups\Api\Model\TrackSubsServiceResponse::class => false,
            \ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse::class => false,
            \ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody::class => false,
            \ShipStream\Ups\Api\Model\SecurityV1OauthRefreshPostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}