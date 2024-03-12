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
    class PackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PackagePackageServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DeliveryConfirmation', $data)) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            if (\array_key_exists('DeclaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeclaredValue', 'json', $context));
                unset($data['DeclaredValue']);
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('AccessPointCOD', $data)) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            if (\array_key_exists('ShipperReleaseIndicator', $data)) {
                $object->setShipperReleaseIndicator($data['ShipperReleaseIndicator']);
                unset($data['ShipperReleaseIndicator']);
            }
            if (\array_key_exists('Notification', $data)) {
                $object->setNotification($this->denormalizer->denormalize($data['Notification'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsNotification', 'json', $context));
                unset($data['Notification']);
            }
            if (\array_key_exists('HazMat', $data)) {
                $values = [];
                foreach ($data['HazMat'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat', 'json', $context);
                }
                $object->setHazMat($values);
                unset($data['HazMat']);
            }
            if (\array_key_exists('DryIce', $data)) {
                $object->setDryIce($this->denormalizer->denormalize($data['DryIce'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDryIce', 'json', $context));
                unset($data['DryIce']);
            }
            if (\array_key_exists('UPSPremiumCareIndicator', $data)) {
                $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
                unset($data['UPSPremiumCareIndicator']);
            }
            if (\array_key_exists('ProactiveIndicator', $data)) {
                $object->setProactiveIndicator($data['ProactiveIndicator']);
                unset($data['ProactiveIndicator']);
            }
            if (\array_key_exists('PackageIdentifier', $data)) {
                $object->setPackageIdentifier($data['PackageIdentifier']);
                unset($data['PackageIdentifier']);
            }
            if (\array_key_exists('ClinicalTrialsID', $data)) {
                $object->setClinicalTrialsID($data['ClinicalTrialsID']);
                unset($data['ClinicalTrialsID']);
            }
            if (\array_key_exists('RefrigerationIndicator', $data)) {
                $object->setRefrigerationIndicator($data['RefrigerationIndicator']);
                unset($data['RefrigerationIndicator']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
                $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['DeclaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
                $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
            }
            if ($object->isInitialized('shipperReleaseIndicator') && null !== $object->getShipperReleaseIndicator()) {
                $data['ShipperReleaseIndicator'] = $object->getShipperReleaseIndicator();
            }
            if ($object->isInitialized('notification') && null !== $object->getNotification()) {
                $data['Notification'] = $this->normalizer->normalize($object->getNotification(), 'json', $context);
            }
            if ($object->isInitialized('hazMat') && null !== $object->getHazMat()) {
                $values = [];
                foreach ($object->getHazMat() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['HazMat'] = $values;
            }
            if ($object->isInitialized('dryIce') && null !== $object->getDryIce()) {
                $data['DryIce'] = $this->normalizer->normalize($object->getDryIce(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
                $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
            }
            if ($object->isInitialized('proactiveIndicator') && null !== $object->getProactiveIndicator()) {
                $data['ProactiveIndicator'] = $object->getProactiveIndicator();
            }
            if ($object->isInitialized('packageIdentifier') && null !== $object->getPackageIdentifier()) {
                $data['PackageIdentifier'] = $object->getPackageIdentifier();
            }
            if ($object->isInitialized('clinicalTrialsID') && null !== $object->getClinicalTrialsID()) {
                $data['ClinicalTrialsID'] = $object->getClinicalTrialsID();
            }
            if ($object->isInitialized('refrigerationIndicator') && null !== $object->getRefrigerationIndicator()) {
                $data['RefrigerationIndicator'] = $object->getRefrigerationIndicator();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions' => false];
        }
    }
} else {
    class PackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions';
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
            $object = new \ShipStream\Ups\Api\Model\PackagePackageServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DeliveryConfirmation', $data)) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            if (\array_key_exists('DeclaredValue', $data)) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeclaredValue', 'json', $context));
                unset($data['DeclaredValue']);
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('AccessPointCOD', $data)) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            if (\array_key_exists('ShipperReleaseIndicator', $data)) {
                $object->setShipperReleaseIndicator($data['ShipperReleaseIndicator']);
                unset($data['ShipperReleaseIndicator']);
            }
            if (\array_key_exists('Notification', $data)) {
                $object->setNotification($this->denormalizer->denormalize($data['Notification'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsNotification', 'json', $context));
                unset($data['Notification']);
            }
            if (\array_key_exists('HazMat', $data)) {
                $values = [];
                foreach ($data['HazMat'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat', 'json', $context);
                }
                $object->setHazMat($values);
                unset($data['HazMat']);
            }
            if (\array_key_exists('DryIce', $data)) {
                $object->setDryIce($this->denormalizer->denormalize($data['DryIce'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDryIce', 'json', $context));
                unset($data['DryIce']);
            }
            if (\array_key_exists('UPSPremiumCareIndicator', $data)) {
                $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
                unset($data['UPSPremiumCareIndicator']);
            }
            if (\array_key_exists('ProactiveIndicator', $data)) {
                $object->setProactiveIndicator($data['ProactiveIndicator']);
                unset($data['ProactiveIndicator']);
            }
            if (\array_key_exists('PackageIdentifier', $data)) {
                $object->setPackageIdentifier($data['PackageIdentifier']);
                unset($data['PackageIdentifier']);
            }
            if (\array_key_exists('ClinicalTrialsID', $data)) {
                $object->setClinicalTrialsID($data['ClinicalTrialsID']);
                unset($data['ClinicalTrialsID']);
            }
            if (\array_key_exists('RefrigerationIndicator', $data)) {
                $object->setRefrigerationIndicator($data['RefrigerationIndicator']);
                unset($data['RefrigerationIndicator']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
                $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['DeclaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
                $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
            }
            if ($object->isInitialized('shipperReleaseIndicator') && null !== $object->getShipperReleaseIndicator()) {
                $data['ShipperReleaseIndicator'] = $object->getShipperReleaseIndicator();
            }
            if ($object->isInitialized('notification') && null !== $object->getNotification()) {
                $data['Notification'] = $this->normalizer->normalize($object->getNotification(), 'json', $context);
            }
            if ($object->isInitialized('hazMat') && null !== $object->getHazMat()) {
                $values = [];
                foreach ($object->getHazMat() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['HazMat'] = $values;
            }
            if ($object->isInitialized('dryIce') && null !== $object->getDryIce()) {
                $data['DryIce'] = $this->normalizer->normalize($object->getDryIce(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
                $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
            }
            if ($object->isInitialized('proactiveIndicator') && null !== $object->getProactiveIndicator()) {
                $data['ProactiveIndicator'] = $object->getProactiveIndicator();
            }
            if ($object->isInitialized('packageIdentifier') && null !== $object->getPackageIdentifier()) {
                $data['PackageIdentifier'] = $object->getPackageIdentifier();
            }
            if ($object->isInitialized('clinicalTrialsID') && null !== $object->getClinicalTrialsID()) {
                $data['ClinicalTrialsID'] = $object->getClinicalTrialsID();
            }
            if ($object->isInitialized('refrigerationIndicator') && null !== $object->getRefrigerationIndicator()) {
                $data['RefrigerationIndicator'] = $object->getRefrigerationIndicator();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions' => false];
        }
    }
}