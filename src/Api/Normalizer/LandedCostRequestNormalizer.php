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
class LandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LandedCostRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LandedCostRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LandedCostRequest();
        if (\array_key_exists('allowPartialLandedCostResult', $data) && \is_int($data['allowPartialLandedCostResult'])) {
            $data['allowPartialLandedCostResult'] = (bool) $data['allowPartialLandedCostResult'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->setCurrencyCode($data['currencyCode']);
            unset($data['currencyCode']);
        }
        if (\array_key_exists('transID', $data)) {
            $object->setTransID($data['transID']);
            unset($data['transID']);
        }
        if (\array_key_exists('allowPartialLandedCostResult', $data)) {
            $object->setAllowPartialLandedCostResult($data['allowPartialLandedCostResult']);
            unset($data['allowPartialLandedCostResult']);
        }
        if (\array_key_exists('alversion', $data)) {
            $object->setAlversion($data['alversion']);
            unset($data['alversion']);
        }
        if (\array_key_exists('shipment', $data)) {
            $object->setShipment($this->denormalizer->denormalize($data['shipment'], \ShipStream\Ups\Api\Model\LandedCostRequestShipment::class, 'json', $context));
            unset($data['shipment']);
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
        $dataArray['currencyCode'] = $data->getCurrencyCode();
        $dataArray['transID'] = $data->getTransID();
        if ($data->isInitialized('allowPartialLandedCostResult') && null !== $data->getAllowPartialLandedCostResult()) {
            $dataArray['allowPartialLandedCostResult'] = $data->getAllowPartialLandedCostResult();
        }
        $dataArray['alversion'] = $data->getAlversion();
        $dataArray['shipment'] = $this->normalizer->normalize($data->getShipment(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LandedCostRequest::class => false];
    }
}