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
class RatePackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        if (\array_key_exists('DeliveryConfirmation', $data)) {
            $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDeliveryConfirmation::class, 'json', $context));
            unset($data['DeliveryConfirmation']);
        }
        if (\array_key_exists('AccessPointCOD', $data)) {
            $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], \ShipStream\Ups\Api\Model\PackageServiceOptionsAccessPointCOD::class, 'json', $context));
            unset($data['AccessPointCOD']);
        }
        if (\array_key_exists('COD', $data)) {
            $object->setCOD($this->denormalizer->denormalize($data['COD'], \ShipStream\Ups\Api\Model\PackageServiceOptionsCOD::class, 'json', $context));
            unset($data['COD']);
        }
        if (\array_key_exists('DeclaredValue', $data)) {
            $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDeclaredValue::class, 'json', $context));
            unset($data['DeclaredValue']);
        }
        if (\array_key_exists('ShipperDeclaredValue', $data)) {
            $object->setShipperDeclaredValue($this->denormalizer->denormalize($data['ShipperDeclaredValue'], \ShipStream\Ups\Api\Model\PackageServiceOptionsShipperDeclaredValue::class, 'json', $context));
            unset($data['ShipperDeclaredValue']);
        }
        if (\array_key_exists('ShipperReleaseIndicator', $data)) {
            $object->setShipperReleaseIndicator($data['ShipperReleaseIndicator']);
            unset($data['ShipperReleaseIndicator']);
        }
        if (\array_key_exists('ProactiveIndicator', $data)) {
            $object->setProactiveIndicator($data['ProactiveIndicator']);
            unset($data['ProactiveIndicator']);
        }
        if (\array_key_exists('RefrigerationIndicator', $data)) {
            $object->setRefrigerationIndicator($data['RefrigerationIndicator']);
            unset($data['RefrigerationIndicator']);
        }
        if (\array_key_exists('Insurance', $data)) {
            $object->setInsurance($this->denormalizer->denormalize($data['Insurance'], \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance::class, 'json', $context));
            unset($data['Insurance']);
        }
        if (\array_key_exists('UPSPremiumCareIndicator', $data)) {
            $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
            unset($data['UPSPremiumCareIndicator']);
        }
        if (\array_key_exists('HazMat', $data)) {
            $object->setHazMat($this->denormalizer->denormalize($data['HazMat'], \ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat::class, 'json', $context));
            unset($data['HazMat']);
        }
        if (\array_key_exists('DryIce', $data)) {
            $object->setDryIce($this->denormalizer->denormalize($data['DryIce'], \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDryIce::class, 'json', $context));
            unset($data['DryIce']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('deliveryConfirmation') && null !== $data->getDeliveryConfirmation()) {
            $dataArray['DeliveryConfirmation'] = $this->normalizer->normalize($data->getDeliveryConfirmation(), 'json', $context);
        }
        if ($data->isInitialized('accessPointCOD') && null !== $data->getAccessPointCOD()) {
            $dataArray['AccessPointCOD'] = $this->normalizer->normalize($data->getAccessPointCOD(), 'json', $context);
        }
        if ($data->isInitialized('cOD') && null !== $data->getCOD()) {
            $dataArray['COD'] = $this->normalizer->normalize($data->getCOD(), 'json', $context);
        }
        if ($data->isInitialized('declaredValue') && null !== $data->getDeclaredValue()) {
            $dataArray['DeclaredValue'] = $this->normalizer->normalize($data->getDeclaredValue(), 'json', $context);
        }
        if ($data->isInitialized('shipperDeclaredValue') && null !== $data->getShipperDeclaredValue()) {
            $dataArray['ShipperDeclaredValue'] = $this->normalizer->normalize($data->getShipperDeclaredValue(), 'json', $context);
        }
        if ($data->isInitialized('shipperReleaseIndicator') && null !== $data->getShipperReleaseIndicator()) {
            $dataArray['ShipperReleaseIndicator'] = $data->getShipperReleaseIndicator();
        }
        if ($data->isInitialized('proactiveIndicator') && null !== $data->getProactiveIndicator()) {
            $dataArray['ProactiveIndicator'] = $data->getProactiveIndicator();
        }
        if ($data->isInitialized('refrigerationIndicator') && null !== $data->getRefrigerationIndicator()) {
            $dataArray['RefrigerationIndicator'] = $data->getRefrigerationIndicator();
        }
        if ($data->isInitialized('insurance') && null !== $data->getInsurance()) {
            $dataArray['Insurance'] = $this->normalizer->normalize($data->getInsurance(), 'json', $context);
        }
        if ($data->isInitialized('uPSPremiumCareIndicator') && null !== $data->getUPSPremiumCareIndicator()) {
            $dataArray['UPSPremiumCareIndicator'] = $data->getUPSPremiumCareIndicator();
        }
        if ($data->isInitialized('hazMat') && null !== $data->getHazMat()) {
            $dataArray['HazMat'] = $this->normalizer->normalize($data->getHazMat(), 'json', $context);
        }
        if ($data->isInitialized('dryIce') && null !== $data->getDryIce()) {
            $dataArray['DryIce'] = $this->normalizer->normalize($data->getDryIce(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RatePackagePackageServiceOptions::class => false];
    }
}