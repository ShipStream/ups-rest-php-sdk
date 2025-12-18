<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SearchResultsDropLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\SearchResultsDropLocation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\SearchResultsDropLocation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\SearchResultsDropLocation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LocationID', $data)) {
            $object->setLocationID($data['LocationID']);
            unset($data['LocationID']);
        }
        if (\array_key_exists('OriginOrDestination', $data)) {
            $object->setOriginOrDestination($data['OriginOrDestination']);
            unset($data['OriginOrDestination']);
        }
        if (\array_key_exists('IVR', $data)) {
            $object->setIVR($this->denormalizer->denormalize($data['IVR'], \ShipStream\Ups\Api\Model\DropLocationIVR::class, 'json', $context));
            unset($data['IVR']);
        }
        if (\array_key_exists('Geocode', $data)) {
            $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], \ShipStream\Ups\Api\Model\DropLocationGeocode::class, 'json', $context));
            unset($data['Geocode']);
        }
        if (\array_key_exists('AddressKeyFormat', $data)) {
            $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], \ShipStream\Ups\Api\Model\DropLocationAddressKeyFormat::class, 'json', $context));
            unset($data['AddressKeyFormat']);
        }
        if (\array_key_exists('PhoneNumber', $data)) {
            $values = [];
            foreach ($data['PhoneNumber'] as $value) {
                $values[] = $value;
            }
            $object->setPhoneNumber($values);
            unset($data['PhoneNumber']);
        }
        if (\array_key_exists('FaxNumber', $data)) {
            $object->setFaxNumber($data['FaxNumber']);
            unset($data['FaxNumber']);
        }
        if (\array_key_exists('EMailAddress', $data)) {
            $object->setEMailAddress($data['EMailAddress']);
            unset($data['EMailAddress']);
        }
        if (\array_key_exists('LocationAttribute', $data)) {
            $values_1 = [];
            foreach ($data['LocationAttribute'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\DropLocationLocationAttribute::class, 'json', $context);
            }
            $object->setLocationAttribute($values_1);
            unset($data['LocationAttribute']);
        }
        if (\array_key_exists('Distance', $data)) {
            $object->setDistance($this->denormalizer->denormalize($data['Distance'], \ShipStream\Ups\Api\Model\DropLocationDistance::class, 'json', $context));
            unset($data['Distance']);
        }
        if (\array_key_exists('SpecialInstructions', $data)) {
            $values_2 = [];
            foreach ($data['SpecialInstructions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\DropLocationSpecialInstructions::class, 'json', $context);
            }
            $object->setSpecialInstructions($values_2);
            unset($data['SpecialInstructions']);
        }
        if (\array_key_exists('LatestGroundDropOffTime', $data)) {
            $values_3 = [];
            foreach ($data['LatestGroundDropOffTime'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLatestGroundDropOffTime($values_3);
            unset($data['LatestGroundDropOffTime']);
        }
        if (\array_key_exists('LatestAirDropOffTime', $data)) {
            $values_4 = [];
            foreach ($data['LatestAirDropOffTime'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setLatestAirDropOffTime($values_4);
            unset($data['LatestAirDropOffTime']);
        }
        if (\array_key_exists('AdditionalChargeIndicator', $data)) {
            $object->setAdditionalChargeIndicator($data['AdditionalChargeIndicator']);
            unset($data['AdditionalChargeIndicator']);
        }
        if (\array_key_exists('StandardHoursOfOperation', $data)) {
            $object->setStandardHoursOfOperation($data['StandardHoursOfOperation']);
            unset($data['StandardHoursOfOperation']);
        }
        if (\array_key_exists('NonStandardHoursOfOperation', $data)) {
            $object->setNonStandardHoursOfOperation($data['NonStandardHoursOfOperation']);
            unset($data['NonStandardHoursOfOperation']);
        }
        if (\array_key_exists('WillCallHoursOfOperation', $data)) {
            $object->setWillCallHoursOfOperation($data['WillCallHoursOfOperation']);
            unset($data['WillCallHoursOfOperation']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
            unset($data['Number']);
        }
        if (\array_key_exists('HomePageURL', $data)) {
            $object->setHomePageURL($data['HomePageURL']);
            unset($data['HomePageURL']);
        }
        if (\array_key_exists('Comments', $data)) {
            $object->setComments($data['Comments']);
            unset($data['Comments']);
        }
        if (\array_key_exists('AdditionalComments', $data)) {
            $object->setAdditionalComments($this->denormalizer->denormalize($data['AdditionalComments'], \ShipStream\Ups\Api\Model\DropLocationAdditionalComments::class, 'json', $context));
            unset($data['AdditionalComments']);
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $values_5 = [];
            foreach ($data['Disclaimer'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setDisclaimer($values_5);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('SLIC', $data)) {
            $object->setSLIC($data['SLIC']);
            unset($data['SLIC']);
        }
        if (\array_key_exists('Timezone', $data)) {
            $object->setTimezone($data['Timezone']);
            unset($data['Timezone']);
        }
        if (\array_key_exists('FacilityType', $data)) {
            $object->setFacilityType($data['FacilityType']);
            unset($data['FacilityType']);
        }
        if (\array_key_exists('OperatingHours', $data)) {
            $object->setOperatingHours($this->denormalizer->denormalize($data['OperatingHours'], \ShipStream\Ups\Api\Model\DropLocationOperatingHours::class, 'json', $context));
            unset($data['OperatingHours']);
        }
        if (\array_key_exists('LocalizedInstruction', $data)) {
            $values_6 = [];
            foreach ($data['LocalizedInstruction'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \ShipStream\Ups\Api\Model\DropLocationLocalizedInstruction::class, 'json', $context);
            }
            $object->setLocalizedInstruction($values_6);
            unset($data['LocalizedInstruction']);
        }
        if (\array_key_exists('PromotionInformation', $data)) {
            $values_7 = [];
            foreach ($data['PromotionInformation'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \ShipStream\Ups\Api\Model\DropLocationPromotionInformation::class, 'json', $context);
            }
            $object->setPromotionInformation($values_7);
            unset($data['PromotionInformation']);
        }
        if (\array_key_exists('SortCode', $data)) {
            $object->setSortCode($this->denormalizer->denormalize($data['SortCode'], \ShipStream\Ups\Api\Model\DropLocationSortCode::class, 'json', $context));
            unset($data['SortCode']);
        }
        if (\array_key_exists('ServiceOfferingList', $data)) {
            $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], \ShipStream\Ups\Api\Model\DropLocationServiceOfferingList::class, 'json', $context));
            unset($data['ServiceOfferingList']);
        }
        if (\array_key_exists('DisplayPhoneNumberIndicator', $data)) {
            $object->setDisplayPhoneNumberIndicator($data['DisplayPhoneNumberIndicator']);
            unset($data['DisplayPhoneNumberIndicator']);
        }
        if (\array_key_exists('AccessPointInformation', $data)) {
            $object->setAccessPointInformation($this->denormalizer->denormalize($data['AccessPointInformation'], \ShipStream\Ups\Api\Model\DropLocationAccessPointInformation::class, 'json', $context));
            unset($data['AccessPointInformation']);
        }
        if (\array_key_exists('LocationImage', $data)) {
            $object->setLocationImage($this->denormalizer->denormalize($data['LocationImage'], \ShipStream\Ups\Api\Model\DropLocationLocationImage::class, 'json', $context));
            unset($data['LocationImage']);
        }
        if (\array_key_exists('LocationNewIndicator', $data)) {
            $object->setLocationNewIndicator($data['LocationNewIndicator']);
            unset($data['LocationNewIndicator']);
        }
        if (\array_key_exists('PromotionalLinkURL', $data)) {
            $object->setPromotionalLinkURL($data['PromotionalLinkURL']);
            unset($data['PromotionalLinkURL']);
        }
        if (\array_key_exists('FeaturedRank', $data)) {
            $object->setFeaturedRank($data['FeaturedRank']);
            unset($data['FeaturedRank']);
        }
        if (\array_key_exists('WillCallLocationIndicator', $data)) {
            $object->setWillCallLocationIndicator($data['WillCallLocationIndicator']);
            unset($data['WillCallLocationIndicator']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['LocationID'] = $data->getLocationID();
        $dataArray['OriginOrDestination'] = $data->getOriginOrDestination();
        $dataArray['IVR'] = $this->normalizer->normalize($data->getIVR(), 'json', $context);
        $dataArray['Geocode'] = $this->normalizer->normalize($data->getGeocode(), 'json', $context);
        $dataArray['AddressKeyFormat'] = $this->normalizer->normalize($data->getAddressKeyFormat(), 'json', $context);
        $values = [];
        foreach ($data->getPhoneNumber() as $value) {
            $values[] = $value;
        }
        $dataArray['PhoneNumber'] = $values;
        if ($data->isInitialized('faxNumber') && null !== $data->getFaxNumber()) {
            $dataArray['FaxNumber'] = $data->getFaxNumber();
        }
        if ($data->isInitialized('eMailAddress') && null !== $data->getEMailAddress()) {
            $dataArray['EMailAddress'] = $data->getEMailAddress();
        }
        $values_1 = [];
        foreach ($data->getLocationAttribute() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['LocationAttribute'] = $values_1;
        $dataArray['Distance'] = $this->normalizer->normalize($data->getDistance(), 'json', $context);
        if ($data->isInitialized('specialInstructions') && null !== $data->getSpecialInstructions()) {
            $values_2 = [];
            foreach ($data->getSpecialInstructions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['SpecialInstructions'] = $values_2;
        }
        if ($data->isInitialized('latestGroundDropOffTime') && null !== $data->getLatestGroundDropOffTime()) {
            $values_3 = [];
            foreach ($data->getLatestGroundDropOffTime() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['LatestGroundDropOffTime'] = $values_3;
        }
        if ($data->isInitialized('latestAirDropOffTime') && null !== $data->getLatestAirDropOffTime()) {
            $values_4 = [];
            foreach ($data->getLatestAirDropOffTime() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['LatestAirDropOffTime'] = $values_4;
        }
        if ($data->isInitialized('additionalChargeIndicator') && null !== $data->getAdditionalChargeIndicator()) {
            $dataArray['AdditionalChargeIndicator'] = $data->getAdditionalChargeIndicator();
        }
        if ($data->isInitialized('standardHoursOfOperation') && null !== $data->getStandardHoursOfOperation()) {
            $dataArray['StandardHoursOfOperation'] = $data->getStandardHoursOfOperation();
        }
        if ($data->isInitialized('nonStandardHoursOfOperation') && null !== $data->getNonStandardHoursOfOperation()) {
            $dataArray['NonStandardHoursOfOperation'] = $data->getNonStandardHoursOfOperation();
        }
        if ($data->isInitialized('willCallHoursOfOperation') && null !== $data->getWillCallHoursOfOperation()) {
            $dataArray['WillCallHoursOfOperation'] = $data->getWillCallHoursOfOperation();
        }
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['Number'] = $data->getNumber();
        }
        if ($data->isInitialized('homePageURL') && null !== $data->getHomePageURL()) {
            $dataArray['HomePageURL'] = $data->getHomePageURL();
        }
        if ($data->isInitialized('comments') && null !== $data->getComments()) {
            $dataArray['Comments'] = $data->getComments();
        }
        if ($data->isInitialized('additionalComments') && null !== $data->getAdditionalComments()) {
            $dataArray['AdditionalComments'] = $this->normalizer->normalize($data->getAdditionalComments(), 'json', $context);
        }
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $values_5 = [];
            foreach ($data->getDisclaimer() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['Disclaimer'] = $values_5;
        }
        if ($data->isInitialized('sLIC') && null !== $data->getSLIC()) {
            $dataArray['SLIC'] = $data->getSLIC();
        }
        $dataArray['Timezone'] = $data->getTimezone();
        if ($data->isInitialized('facilityType') && null !== $data->getFacilityType()) {
            $dataArray['FacilityType'] = $data->getFacilityType();
        }
        if ($data->isInitialized('operatingHours') && null !== $data->getOperatingHours()) {
            $dataArray['OperatingHours'] = $this->normalizer->normalize($data->getOperatingHours(), 'json', $context);
        }
        if ($data->isInitialized('localizedInstruction') && null !== $data->getLocalizedInstruction()) {
            $values_6 = [];
            foreach ($data->getLocalizedInstruction() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['LocalizedInstruction'] = $values_6;
        }
        if ($data->isInitialized('promotionInformation') && null !== $data->getPromotionInformation()) {
            $values_7 = [];
            foreach ($data->getPromotionInformation() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['PromotionInformation'] = $values_7;
        }
        if ($data->isInitialized('sortCode') && null !== $data->getSortCode()) {
            $dataArray['SortCode'] = $this->normalizer->normalize($data->getSortCode(), 'json', $context);
        }
        if ($data->isInitialized('serviceOfferingList') && null !== $data->getServiceOfferingList()) {
            $dataArray['ServiceOfferingList'] = $this->normalizer->normalize($data->getServiceOfferingList(), 'json', $context);
        }
        if ($data->isInitialized('displayPhoneNumberIndicator') && null !== $data->getDisplayPhoneNumberIndicator()) {
            $dataArray['DisplayPhoneNumberIndicator'] = $data->getDisplayPhoneNumberIndicator();
        }
        if ($data->isInitialized('accessPointInformation') && null !== $data->getAccessPointInformation()) {
            $dataArray['AccessPointInformation'] = $this->normalizer->normalize($data->getAccessPointInformation(), 'json', $context);
        }
        if ($data->isInitialized('locationImage') && null !== $data->getLocationImage()) {
            $dataArray['LocationImage'] = $this->normalizer->normalize($data->getLocationImage(), 'json', $context);
        }
        if ($data->isInitialized('locationNewIndicator') && null !== $data->getLocationNewIndicator()) {
            $dataArray['LocationNewIndicator'] = $data->getLocationNewIndicator();
        }
        if ($data->isInitialized('promotionalLinkURL') && null !== $data->getPromotionalLinkURL()) {
            $dataArray['PromotionalLinkURL'] = $data->getPromotionalLinkURL();
        }
        if ($data->isInitialized('featuredRank') && null !== $data->getFeaturedRank()) {
            $dataArray['FeaturedRank'] = $data->getFeaturedRank();
        }
        if ($data->isInitialized('willCallLocationIndicator') && null !== $data->getWillCallLocationIndicator()) {
            $dataArray['WillCallLocationIndicator'] = $data->getWillCallLocationIndicator();
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\SearchResultsDropLocation::class => false];
    }
}