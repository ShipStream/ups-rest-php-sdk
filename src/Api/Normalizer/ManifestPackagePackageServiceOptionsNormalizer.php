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
class ManifestPackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('COD', $data)) {
            $object->setCOD($this->denormalizer->denormalize($data['COD'], \ShipStream\Ups\Api\Model\ManifestPackageServiceOptionsCOD::class, 'json', $context));
            unset($data['COD']);
        }
        if (\array_key_exists('InsuredValue', $data)) {
            $object->setInsuredValue($this->denormalizer->denormalize($data['InsuredValue'], \ShipStream\Ups\Api\Model\PackageServiceOptionsInsuredValue::class, 'json', $context));
            unset($data['InsuredValue']);
        }
        if (\array_key_exists('EarliestDeliveryTime', $data)) {
            $object->setEarliestDeliveryTime($data['EarliestDeliveryTime']);
            unset($data['EarliestDeliveryTime']);
        }
        if (\array_key_exists('HazardousMaterialsCode', $data)) {
            $object->setHazardousMaterialsCode($data['HazardousMaterialsCode']);
            unset($data['HazardousMaterialsCode']);
        }
        if (\array_key_exists('HoldForPickup', $data)) {
            $object->setHoldForPickup($data['HoldForPickup']);
            unset($data['HoldForPickup']);
        }
        if (\array_key_exists('AddShippingChargesToCODIndicator', $data)) {
            $object->setAddShippingChargesToCODIndicator($data['AddShippingChargesToCODIndicator']);
            unset($data['AddShippingChargesToCODIndicator']);
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
        if ($data->isInitialized('cOD') && null !== $data->getCOD()) {
            $dataArray['COD'] = $this->normalizer->normalize($data->getCOD(), 'json', $context);
        }
        if ($data->isInitialized('insuredValue') && null !== $data->getInsuredValue()) {
            $dataArray['InsuredValue'] = $this->normalizer->normalize($data->getInsuredValue(), 'json', $context);
        }
        if ($data->isInitialized('earliestDeliveryTime') && null !== $data->getEarliestDeliveryTime()) {
            $dataArray['EarliestDeliveryTime'] = $data->getEarliestDeliveryTime();
        }
        if ($data->isInitialized('hazardousMaterialsCode') && null !== $data->getHazardousMaterialsCode()) {
            $dataArray['HazardousMaterialsCode'] = $data->getHazardousMaterialsCode();
        }
        $dataArray['HoldForPickup'] = $data->getHoldForPickup();
        if ($data->isInitialized('addShippingChargesToCODIndicator') && null !== $data->getAddShippingChargesToCODIndicator()) {
            $dataArray['AddShippingChargesToCODIndicator'] = $data->getAddShippingChargesToCODIndicator();
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
        return [\ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions::class => false];
    }
}