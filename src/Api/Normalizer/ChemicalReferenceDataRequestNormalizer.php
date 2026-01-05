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
class ChemicalReferenceDataRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\ChemicalReferenceDataRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('IDNumber', $data)) {
            $object->setIDNumber($data['IDNumber']);
            unset($data['IDNumber']);
        }
        if (\array_key_exists('ProperShippingName', $data)) {
            $object->setProperShippingName($data['ProperShippingName']);
            unset($data['ProperShippingName']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        if ($data->isInitialized('iDNumber') && null !== $data->getIDNumber()) {
            $dataArray['IDNumber'] = $data->getIDNumber();
        }
        if ($data->isInitialized('properShippingName') && null !== $data->getProperShippingName()) {
            $dataArray['ProperShippingName'] = $data->getProperShippingName();
        }
        $dataArray['ShipperNumber'] = $data->getShipperNumber();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ChemicalReferenceDataRequest::class => false];
    }
}