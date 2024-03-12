<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SearchResultsDropLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                $object->setIVR($this->denormalizer->denormalize($data['IVR'], 'ShipStream\\Ups\\Api\\Model\\DropLocationIVR', 'json', $context));
                unset($data['IVR']);
            }
            if (\array_key_exists('Geocode', $data)) {
                $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], 'ShipStream\\Ups\\Api\\Model\\DropLocationGeocode', 'json', $context));
                unset($data['Geocode']);
            }
            if (\array_key_exists('AddressKeyFormat', $data)) {
                $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], 'ShipStream\\Ups\\Api\\Model\\DropLocationAddressKeyFormat', 'json', $context));
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
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\DropLocationLocationAttribute', 'json', $context);
                }
                $object->setLocationAttribute($values_1);
                unset($data['LocationAttribute']);
            }
            if (\array_key_exists('Distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['Distance'], 'ShipStream\\Ups\\Api\\Model\\DropLocationDistance', 'json', $context));
                unset($data['Distance']);
            }
            if (\array_key_exists('SpecialInstructions', $data)) {
                $values_2 = [];
                foreach ($data['SpecialInstructions'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\DropLocationSpecialInstructions', 'json', $context);
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
                $object->setAdditionalComments($this->denormalizer->denormalize($data['AdditionalComments'], 'ShipStream\\Ups\\Api\\Model\\DropLocationAdditionalComments', 'json', $context));
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
                $object->setOperatingHours($this->denormalizer->denormalize($data['OperatingHours'], 'ShipStream\\Ups\\Api\\Model\\DropLocationOperatingHours', 'json', $context));
                unset($data['OperatingHours']);
            }
            if (\array_key_exists('LocalizedInstruction', $data)) {
                $values_6 = [];
                foreach ($data['LocalizedInstruction'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'ShipStream\\Ups\\Api\\Model\\DropLocationLocalizedInstruction', 'json', $context);
                }
                $object->setLocalizedInstruction($values_6);
                unset($data['LocalizedInstruction']);
            }
            if (\array_key_exists('PromotionInformation', $data)) {
                $values_7 = [];
                foreach ($data['PromotionInformation'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, 'ShipStream\\Ups\\Api\\Model\\DropLocationPromotionInformation', 'json', $context);
                }
                $object->setPromotionInformation($values_7);
                unset($data['PromotionInformation']);
            }
            if (\array_key_exists('SortCode', $data)) {
                $object->setSortCode($this->denormalizer->denormalize($data['SortCode'], 'ShipStream\\Ups\\Api\\Model\\DropLocationSortCode', 'json', $context));
                unset($data['SortCode']);
            }
            if (\array_key_exists('ServiceOfferingList', $data)) {
                $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], 'ShipStream\\Ups\\Api\\Model\\DropLocationServiceOfferingList', 'json', $context));
                unset($data['ServiceOfferingList']);
            }
            if (\array_key_exists('DisplayPhoneNumberIndicator', $data)) {
                $object->setDisplayPhoneNumberIndicator($data['DisplayPhoneNumberIndicator']);
                unset($data['DisplayPhoneNumberIndicator']);
            }
            if (\array_key_exists('AccessPointInformation', $data)) {
                $object->setAccessPointInformation($this->denormalizer->denormalize($data['AccessPointInformation'], 'ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation', 'json', $context));
                unset($data['AccessPointInformation']);
            }
            if (\array_key_exists('LocationImage', $data)) {
                $object->setLocationImage($this->denormalizer->denormalize($data['LocationImage'], 'ShipStream\\Ups\\Api\\Model\\DropLocationLocationImage', 'json', $context));
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['LocationID'] = $object->getLocationID();
            $data['OriginOrDestination'] = $object->getOriginOrDestination();
            $data['IVR'] = $this->normalizer->normalize($object->getIVR(), 'json', $context);
            $data['Geocode'] = $this->normalizer->normalize($object->getGeocode(), 'json', $context);
            $data['AddressKeyFormat'] = $this->normalizer->normalize($object->getAddressKeyFormat(), 'json', $context);
            $values = [];
            foreach ($object->getPhoneNumber() as $value) {
                $values[] = $value;
            }
            $data['PhoneNumber'] = $values;
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            $values_1 = [];
            foreach ($object->getLocationAttribute() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['LocationAttribute'] = $values_1;
            $data['Distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $values_2 = [];
                foreach ($object->getSpecialInstructions() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['SpecialInstructions'] = $values_2;
            }
            if ($object->isInitialized('latestGroundDropOffTime') && null !== $object->getLatestGroundDropOffTime()) {
                $values_3 = [];
                foreach ($object->getLatestGroundDropOffTime() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['LatestGroundDropOffTime'] = $values_3;
            }
            if ($object->isInitialized('latestAirDropOffTime') && null !== $object->getLatestAirDropOffTime()) {
                $values_4 = [];
                foreach ($object->getLatestAirDropOffTime() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['LatestAirDropOffTime'] = $values_4;
            }
            if ($object->isInitialized('additionalChargeIndicator') && null !== $object->getAdditionalChargeIndicator()) {
                $data['AdditionalChargeIndicator'] = $object->getAdditionalChargeIndicator();
            }
            if ($object->isInitialized('standardHoursOfOperation') && null !== $object->getStandardHoursOfOperation()) {
                $data['StandardHoursOfOperation'] = $object->getStandardHoursOfOperation();
            }
            if ($object->isInitialized('nonStandardHoursOfOperation') && null !== $object->getNonStandardHoursOfOperation()) {
                $data['NonStandardHoursOfOperation'] = $object->getNonStandardHoursOfOperation();
            }
            if ($object->isInitialized('willCallHoursOfOperation') && null !== $object->getWillCallHoursOfOperation()) {
                $data['WillCallHoursOfOperation'] = $object->getWillCallHoursOfOperation();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('homePageURL') && null !== $object->getHomePageURL()) {
                $data['HomePageURL'] = $object->getHomePageURL();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['Comments'] = $object->getComments();
            }
            if ($object->isInitialized('additionalComments') && null !== $object->getAdditionalComments()) {
                $data['AdditionalComments'] = $this->normalizer->normalize($object->getAdditionalComments(), 'json', $context);
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values_5 = [];
                foreach ($object->getDisclaimer() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['Disclaimer'] = $values_5;
            }
            if ($object->isInitialized('sLIC') && null !== $object->getSLIC()) {
                $data['SLIC'] = $object->getSLIC();
            }
            $data['Timezone'] = $object->getTimezone();
            if ($object->isInitialized('facilityType') && null !== $object->getFacilityType()) {
                $data['FacilityType'] = $object->getFacilityType();
            }
            if ($object->isInitialized('operatingHours') && null !== $object->getOperatingHours()) {
                $data['OperatingHours'] = $this->normalizer->normalize($object->getOperatingHours(), 'json', $context);
            }
            if ($object->isInitialized('localizedInstruction') && null !== $object->getLocalizedInstruction()) {
                $values_6 = [];
                foreach ($object->getLocalizedInstruction() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['LocalizedInstruction'] = $values_6;
            }
            if ($object->isInitialized('promotionInformation') && null !== $object->getPromotionInformation()) {
                $values_7 = [];
                foreach ($object->getPromotionInformation() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['PromotionInformation'] = $values_7;
            }
            if ($object->isInitialized('sortCode') && null !== $object->getSortCode()) {
                $data['SortCode'] = $this->normalizer->normalize($object->getSortCode(), 'json', $context);
            }
            if ($object->isInitialized('serviceOfferingList') && null !== $object->getServiceOfferingList()) {
                $data['ServiceOfferingList'] = $this->normalizer->normalize($object->getServiceOfferingList(), 'json', $context);
            }
            if ($object->isInitialized('displayPhoneNumberIndicator') && null !== $object->getDisplayPhoneNumberIndicator()) {
                $data['DisplayPhoneNumberIndicator'] = $object->getDisplayPhoneNumberIndicator();
            }
            if ($object->isInitialized('accessPointInformation') && null !== $object->getAccessPointInformation()) {
                $data['AccessPointInformation'] = $this->normalizer->normalize($object->getAccessPointInformation(), 'json', $context);
            }
            if ($object->isInitialized('locationImage') && null !== $object->getLocationImage()) {
                $data['LocationImage'] = $this->normalizer->normalize($object->getLocationImage(), 'json', $context);
            }
            if ($object->isInitialized('locationNewIndicator') && null !== $object->getLocationNewIndicator()) {
                $data['LocationNewIndicator'] = $object->getLocationNewIndicator();
            }
            if ($object->isInitialized('promotionalLinkURL') && null !== $object->getPromotionalLinkURL()) {
                $data['PromotionalLinkURL'] = $object->getPromotionalLinkURL();
            }
            if ($object->isInitialized('featuredRank') && null !== $object->getFeaturedRank()) {
                $data['FeaturedRank'] = $object->getFeaturedRank();
            }
            if ($object->isInitialized('willCallLocationIndicator') && null !== $object->getWillCallLocationIndicator()) {
                $data['WillCallLocationIndicator'] = $object->getWillCallLocationIndicator();
            }
            foreach ($object as $key => $value_8) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_8;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation' => false];
        }
    }
} else {
    class SearchResultsDropLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
                $object->setIVR($this->denormalizer->denormalize($data['IVR'], 'ShipStream\\Ups\\Api\\Model\\DropLocationIVR', 'json', $context));
                unset($data['IVR']);
            }
            if (\array_key_exists('Geocode', $data)) {
                $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], 'ShipStream\\Ups\\Api\\Model\\DropLocationGeocode', 'json', $context));
                unset($data['Geocode']);
            }
            if (\array_key_exists('AddressKeyFormat', $data)) {
                $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], 'ShipStream\\Ups\\Api\\Model\\DropLocationAddressKeyFormat', 'json', $context));
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
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\DropLocationLocationAttribute', 'json', $context);
                }
                $object->setLocationAttribute($values_1);
                unset($data['LocationAttribute']);
            }
            if (\array_key_exists('Distance', $data)) {
                $object->setDistance($this->denormalizer->denormalize($data['Distance'], 'ShipStream\\Ups\\Api\\Model\\DropLocationDistance', 'json', $context));
                unset($data['Distance']);
            }
            if (\array_key_exists('SpecialInstructions', $data)) {
                $values_2 = [];
                foreach ($data['SpecialInstructions'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\DropLocationSpecialInstructions', 'json', $context);
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
                $object->setAdditionalComments($this->denormalizer->denormalize($data['AdditionalComments'], 'ShipStream\\Ups\\Api\\Model\\DropLocationAdditionalComments', 'json', $context));
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
                $object->setOperatingHours($this->denormalizer->denormalize($data['OperatingHours'], 'ShipStream\\Ups\\Api\\Model\\DropLocationOperatingHours', 'json', $context));
                unset($data['OperatingHours']);
            }
            if (\array_key_exists('LocalizedInstruction', $data)) {
                $values_6 = [];
                foreach ($data['LocalizedInstruction'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'ShipStream\\Ups\\Api\\Model\\DropLocationLocalizedInstruction', 'json', $context);
                }
                $object->setLocalizedInstruction($values_6);
                unset($data['LocalizedInstruction']);
            }
            if (\array_key_exists('PromotionInformation', $data)) {
                $values_7 = [];
                foreach ($data['PromotionInformation'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, 'ShipStream\\Ups\\Api\\Model\\DropLocationPromotionInformation', 'json', $context);
                }
                $object->setPromotionInformation($values_7);
                unset($data['PromotionInformation']);
            }
            if (\array_key_exists('SortCode', $data)) {
                $object->setSortCode($this->denormalizer->denormalize($data['SortCode'], 'ShipStream\\Ups\\Api\\Model\\DropLocationSortCode', 'json', $context));
                unset($data['SortCode']);
            }
            if (\array_key_exists('ServiceOfferingList', $data)) {
                $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], 'ShipStream\\Ups\\Api\\Model\\DropLocationServiceOfferingList', 'json', $context));
                unset($data['ServiceOfferingList']);
            }
            if (\array_key_exists('DisplayPhoneNumberIndicator', $data)) {
                $object->setDisplayPhoneNumberIndicator($data['DisplayPhoneNumberIndicator']);
                unset($data['DisplayPhoneNumberIndicator']);
            }
            if (\array_key_exists('AccessPointInformation', $data)) {
                $object->setAccessPointInformation($this->denormalizer->denormalize($data['AccessPointInformation'], 'ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation', 'json', $context));
                unset($data['AccessPointInformation']);
            }
            if (\array_key_exists('LocationImage', $data)) {
                $object->setLocationImage($this->denormalizer->denormalize($data['LocationImage'], 'ShipStream\\Ups\\Api\\Model\\DropLocationLocationImage', 'json', $context));
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['LocationID'] = $object->getLocationID();
            $data['OriginOrDestination'] = $object->getOriginOrDestination();
            $data['IVR'] = $this->normalizer->normalize($object->getIVR(), 'json', $context);
            $data['Geocode'] = $this->normalizer->normalize($object->getGeocode(), 'json', $context);
            $data['AddressKeyFormat'] = $this->normalizer->normalize($object->getAddressKeyFormat(), 'json', $context);
            $values = [];
            foreach ($object->getPhoneNumber() as $value) {
                $values[] = $value;
            }
            $data['PhoneNumber'] = $values;
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            $values_1 = [];
            foreach ($object->getLocationAttribute() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['LocationAttribute'] = $values_1;
            $data['Distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $values_2 = [];
                foreach ($object->getSpecialInstructions() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['SpecialInstructions'] = $values_2;
            }
            if ($object->isInitialized('latestGroundDropOffTime') && null !== $object->getLatestGroundDropOffTime()) {
                $values_3 = [];
                foreach ($object->getLatestGroundDropOffTime() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['LatestGroundDropOffTime'] = $values_3;
            }
            if ($object->isInitialized('latestAirDropOffTime') && null !== $object->getLatestAirDropOffTime()) {
                $values_4 = [];
                foreach ($object->getLatestAirDropOffTime() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['LatestAirDropOffTime'] = $values_4;
            }
            if ($object->isInitialized('additionalChargeIndicator') && null !== $object->getAdditionalChargeIndicator()) {
                $data['AdditionalChargeIndicator'] = $object->getAdditionalChargeIndicator();
            }
            if ($object->isInitialized('standardHoursOfOperation') && null !== $object->getStandardHoursOfOperation()) {
                $data['StandardHoursOfOperation'] = $object->getStandardHoursOfOperation();
            }
            if ($object->isInitialized('nonStandardHoursOfOperation') && null !== $object->getNonStandardHoursOfOperation()) {
                $data['NonStandardHoursOfOperation'] = $object->getNonStandardHoursOfOperation();
            }
            if ($object->isInitialized('willCallHoursOfOperation') && null !== $object->getWillCallHoursOfOperation()) {
                $data['WillCallHoursOfOperation'] = $object->getWillCallHoursOfOperation();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('homePageURL') && null !== $object->getHomePageURL()) {
                $data['HomePageURL'] = $object->getHomePageURL();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['Comments'] = $object->getComments();
            }
            if ($object->isInitialized('additionalComments') && null !== $object->getAdditionalComments()) {
                $data['AdditionalComments'] = $this->normalizer->normalize($object->getAdditionalComments(), 'json', $context);
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values_5 = [];
                foreach ($object->getDisclaimer() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['Disclaimer'] = $values_5;
            }
            if ($object->isInitialized('sLIC') && null !== $object->getSLIC()) {
                $data['SLIC'] = $object->getSLIC();
            }
            $data['Timezone'] = $object->getTimezone();
            if ($object->isInitialized('facilityType') && null !== $object->getFacilityType()) {
                $data['FacilityType'] = $object->getFacilityType();
            }
            if ($object->isInitialized('operatingHours') && null !== $object->getOperatingHours()) {
                $data['OperatingHours'] = $this->normalizer->normalize($object->getOperatingHours(), 'json', $context);
            }
            if ($object->isInitialized('localizedInstruction') && null !== $object->getLocalizedInstruction()) {
                $values_6 = [];
                foreach ($object->getLocalizedInstruction() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['LocalizedInstruction'] = $values_6;
            }
            if ($object->isInitialized('promotionInformation') && null !== $object->getPromotionInformation()) {
                $values_7 = [];
                foreach ($object->getPromotionInformation() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['PromotionInformation'] = $values_7;
            }
            if ($object->isInitialized('sortCode') && null !== $object->getSortCode()) {
                $data['SortCode'] = $this->normalizer->normalize($object->getSortCode(), 'json', $context);
            }
            if ($object->isInitialized('serviceOfferingList') && null !== $object->getServiceOfferingList()) {
                $data['ServiceOfferingList'] = $this->normalizer->normalize($object->getServiceOfferingList(), 'json', $context);
            }
            if ($object->isInitialized('displayPhoneNumberIndicator') && null !== $object->getDisplayPhoneNumberIndicator()) {
                $data['DisplayPhoneNumberIndicator'] = $object->getDisplayPhoneNumberIndicator();
            }
            if ($object->isInitialized('accessPointInformation') && null !== $object->getAccessPointInformation()) {
                $data['AccessPointInformation'] = $this->normalizer->normalize($object->getAccessPointInformation(), 'json', $context);
            }
            if ($object->isInitialized('locationImage') && null !== $object->getLocationImage()) {
                $data['LocationImage'] = $this->normalizer->normalize($object->getLocationImage(), 'json', $context);
            }
            if ($object->isInitialized('locationNewIndicator') && null !== $object->getLocationNewIndicator()) {
                $data['LocationNewIndicator'] = $object->getLocationNewIndicator();
            }
            if ($object->isInitialized('promotionalLinkURL') && null !== $object->getPromotionalLinkURL()) {
                $data['PromotionalLinkURL'] = $object->getPromotionalLinkURL();
            }
            if ($object->isInitialized('featuredRank') && null !== $object->getFeaturedRank()) {
                $data['FeaturedRank'] = $object->getFeaturedRank();
            }
            if ($object->isInitialized('willCallLocationIndicator') && null !== $object->getWillCallLocationIndicator()) {
                $data['WillCallLocationIndicator'] = $object->getWillCallLocationIndicator();
            }
            foreach ($object as $key => $value_8) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_8;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation' => false];
        }
    }
}