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
class XAVRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\XAVRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\XAVRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\XAVRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\XAVRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('RegionalRequestIndicator', $data)) {
            $object->setRegionalRequestIndicator($data['RegionalRequestIndicator']);
            unset($data['RegionalRequestIndicator']);
        }
        if (\array_key_exists('MaximumCandidateListSize', $data)) {
            $object->setMaximumCandidateListSize($data['MaximumCandidateListSize']);
            unset($data['MaximumCandidateListSize']);
        }
        if (\array_key_exists('AddressKeyFormat', $data)) {
            $values = [];
            foreach ($data['AddressKeyFormat'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat::class, 'json', $context);
            }
            $object->setAddressKeyFormat($values);
            unset($data['AddressKeyFormat']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        if ($data->isInitialized('regionalRequestIndicator') && null !== $data->getRegionalRequestIndicator()) {
            $dataArray['RegionalRequestIndicator'] = $data->getRegionalRequestIndicator();
        }
        if ($data->isInitialized('maximumCandidateListSize') && null !== $data->getMaximumCandidateListSize()) {
            $dataArray['MaximumCandidateListSize'] = $data->getMaximumCandidateListSize();
        }
        $values = [];
        foreach ($data->getAddressKeyFormat() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['AddressKeyFormat'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\XAVRequest::class => false];
    }
}