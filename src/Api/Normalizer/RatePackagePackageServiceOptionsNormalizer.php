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
    class RatePackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatePackagePackageServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatePackagePackageServiceOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] !== null) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            elseif (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] === null) {
                $object->setDeliveryConfirmation(null);
            }
            if (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] !== null) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            elseif (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] === null) {
                $object->setAccessPointCOD(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
            }
            if (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] !== null) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDeclaredValue', 'json', $context));
                unset($data['DeclaredValue']);
            }
            elseif (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] === null) {
                $object->setDeclaredValue(null);
            }
            if (\array_key_exists('ShipperDeclaredValue', $data) && $data['ShipperDeclaredValue'] !== null) {
                $object->setShipperDeclaredValue($this->denormalizer->denormalize($data['ShipperDeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsShipperDeclaredValue', 'json', $context));
                unset($data['ShipperDeclaredValue']);
            }
            elseif (\array_key_exists('ShipperDeclaredValue', $data) && $data['ShipperDeclaredValue'] === null) {
                $object->setShipperDeclaredValue(null);
            }
            if (\array_key_exists('ShipperReleaseIndicator', $data) && $data['ShipperReleaseIndicator'] !== null) {
                $object->setShipperReleaseIndicator($data['ShipperReleaseIndicator']);
                unset($data['ShipperReleaseIndicator']);
            }
            elseif (\array_key_exists('ShipperReleaseIndicator', $data) && $data['ShipperReleaseIndicator'] === null) {
                $object->setShipperReleaseIndicator(null);
            }
            if (\array_key_exists('ProactiveIndicator', $data) && $data['ProactiveIndicator'] !== null) {
                $object->setProactiveIndicator($data['ProactiveIndicator']);
                unset($data['ProactiveIndicator']);
            }
            elseif (\array_key_exists('ProactiveIndicator', $data) && $data['ProactiveIndicator'] === null) {
                $object->setProactiveIndicator(null);
            }
            if (\array_key_exists('RefrigerationIndicator', $data) && $data['RefrigerationIndicator'] !== null) {
                $object->setRefrigerationIndicator($data['RefrigerationIndicator']);
                unset($data['RefrigerationIndicator']);
            }
            elseif (\array_key_exists('RefrigerationIndicator', $data) && $data['RefrigerationIndicator'] === null) {
                $object->setRefrigerationIndicator(null);
            }
            if (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] !== null) {
                $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
                unset($data['UPSPremiumCareIndicator']);
            }
            elseif (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] === null) {
                $object->setUPSPremiumCareIndicator(null);
            }
            if (\array_key_exists('HazMat', $data) && $data['HazMat'] !== null) {
                $object->setHazMat($this->denormalizer->denormalize($data['HazMat'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsHazMat', 'json', $context));
                unset($data['HazMat']);
            }
            elseif (\array_key_exists('HazMat', $data) && $data['HazMat'] === null) {
                $object->setHazMat(null);
            }
            if (\array_key_exists('DryIce', $data) && $data['DryIce'] !== null) {
                $object->setDryIce($this->denormalizer->denormalize($data['DryIce'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce', 'json', $context));
                unset($data['DryIce']);
            }
            elseif (\array_key_exists('DryIce', $data) && $data['DryIce'] === null) {
                $object->setDryIce(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
                $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['DeclaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('shipperDeclaredValue') && null !== $object->getShipperDeclaredValue()) {
                $data['ShipperDeclaredValue'] = $this->normalizer->normalize($object->getShipperDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('shipperReleaseIndicator') && null !== $object->getShipperReleaseIndicator()) {
                $data['ShipperReleaseIndicator'] = $object->getShipperReleaseIndicator();
            }
            if ($object->isInitialized('proactiveIndicator') && null !== $object->getProactiveIndicator()) {
                $data['ProactiveIndicator'] = $object->getProactiveIndicator();
            }
            if ($object->isInitialized('refrigerationIndicator') && null !== $object->getRefrigerationIndicator()) {
                $data['RefrigerationIndicator'] = $object->getRefrigerationIndicator();
            }
            if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
                $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
            }
            if ($object->isInitialized('hazMat') && null !== $object->getHazMat()) {
                $data['HazMat'] = $this->normalizer->normalize($object->getHazMat(), 'json', $context);
            }
            if ($object->isInitialized('dryIce') && null !== $object->getDryIce()) {
                $data['DryIce'] = $this->normalizer->normalize($object->getDryIce(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RatePackagePackageServiceOptions' => false];
        }
    }
} else {
    class RatePackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatePackagePackageServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatePackagePackageServiceOptions';
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
            $object = new \ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] !== null) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            elseif (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] === null) {
                $object->setDeliveryConfirmation(null);
            }
            if (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] !== null) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            elseif (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] === null) {
                $object->setAccessPointCOD(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
            }
            if (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] !== null) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDeclaredValue', 'json', $context));
                unset($data['DeclaredValue']);
            }
            elseif (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] === null) {
                $object->setDeclaredValue(null);
            }
            if (\array_key_exists('ShipperDeclaredValue', $data) && $data['ShipperDeclaredValue'] !== null) {
                $object->setShipperDeclaredValue($this->denormalizer->denormalize($data['ShipperDeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsShipperDeclaredValue', 'json', $context));
                unset($data['ShipperDeclaredValue']);
            }
            elseif (\array_key_exists('ShipperDeclaredValue', $data) && $data['ShipperDeclaredValue'] === null) {
                $object->setShipperDeclaredValue(null);
            }
            if (\array_key_exists('ShipperReleaseIndicator', $data) && $data['ShipperReleaseIndicator'] !== null) {
                $object->setShipperReleaseIndicator($data['ShipperReleaseIndicator']);
                unset($data['ShipperReleaseIndicator']);
            }
            elseif (\array_key_exists('ShipperReleaseIndicator', $data) && $data['ShipperReleaseIndicator'] === null) {
                $object->setShipperReleaseIndicator(null);
            }
            if (\array_key_exists('ProactiveIndicator', $data) && $data['ProactiveIndicator'] !== null) {
                $object->setProactiveIndicator($data['ProactiveIndicator']);
                unset($data['ProactiveIndicator']);
            }
            elseif (\array_key_exists('ProactiveIndicator', $data) && $data['ProactiveIndicator'] === null) {
                $object->setProactiveIndicator(null);
            }
            if (\array_key_exists('RefrigerationIndicator', $data) && $data['RefrigerationIndicator'] !== null) {
                $object->setRefrigerationIndicator($data['RefrigerationIndicator']);
                unset($data['RefrigerationIndicator']);
            }
            elseif (\array_key_exists('RefrigerationIndicator', $data) && $data['RefrigerationIndicator'] === null) {
                $object->setRefrigerationIndicator(null);
            }
            if (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] !== null) {
                $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
                unset($data['UPSPremiumCareIndicator']);
            }
            elseif (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] === null) {
                $object->setUPSPremiumCareIndicator(null);
            }
            if (\array_key_exists('HazMat', $data) && $data['HazMat'] !== null) {
                $object->setHazMat($this->denormalizer->denormalize($data['HazMat'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsHazMat', 'json', $context));
                unset($data['HazMat']);
            }
            elseif (\array_key_exists('HazMat', $data) && $data['HazMat'] === null) {
                $object->setHazMat(null);
            }
            if (\array_key_exists('DryIce', $data) && $data['DryIce'] !== null) {
                $object->setDryIce($this->denormalizer->denormalize($data['DryIce'], 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce', 'json', $context));
                unset($data['DryIce']);
            }
            elseif (\array_key_exists('DryIce', $data) && $data['DryIce'] === null) {
                $object->setDryIce(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
                $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['DeclaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('shipperDeclaredValue') && null !== $object->getShipperDeclaredValue()) {
                $data['ShipperDeclaredValue'] = $this->normalizer->normalize($object->getShipperDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('shipperReleaseIndicator') && null !== $object->getShipperReleaseIndicator()) {
                $data['ShipperReleaseIndicator'] = $object->getShipperReleaseIndicator();
            }
            if ($object->isInitialized('proactiveIndicator') && null !== $object->getProactiveIndicator()) {
                $data['ProactiveIndicator'] = $object->getProactiveIndicator();
            }
            if ($object->isInitialized('refrigerationIndicator') && null !== $object->getRefrigerationIndicator()) {
                $data['RefrigerationIndicator'] = $object->getRefrigerationIndicator();
            }
            if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
                $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
            }
            if ($object->isInitialized('hazMat') && null !== $object->getHazMat()) {
                $data['HazMat'] = $this->normalizer->normalize($object->getHazMat(), 'json', $context);
            }
            if ($object->isInitialized('dryIce') && null !== $object->getDryIce()) {
                $data['DryIce'] = $this->normalizer->normalize($object->getDryIce(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RatePackagePackageServiceOptions' => false];
        }
    }
}