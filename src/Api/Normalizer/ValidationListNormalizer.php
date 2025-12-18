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
class ValidationListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ValidationList::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ValidationList::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ValidationList();
        if (\array_key_exists('destinationAmbiguous', $data) && \is_int($data['destinationAmbiguous'])) {
            $data['destinationAmbiguous'] = (bool) $data['destinationAmbiguous'];
        }
        if (\array_key_exists('originAmbiguous', $data) && \is_int($data['originAmbiguous'])) {
            $data['originAmbiguous'] = (bool) $data['originAmbiguous'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('invalidFieldList', $data)) {
            $values = [];
            foreach ($data['invalidFieldList'] as $value) {
                $values[] = $value;
            }
            $object->setInvalidFieldList($values);
            unset($data['invalidFieldList']);
        }
        if (\array_key_exists('invalidFieldListCodes', $data)) {
            $values_1 = [];
            foreach ($data['invalidFieldListCodes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInvalidFieldListCodes($values_1);
            unset($data['invalidFieldListCodes']);
        }
        if (\array_key_exists('destinationAmbiguous', $data)) {
            $object->setDestinationAmbiguous($data['destinationAmbiguous']);
            unset($data['destinationAmbiguous']);
        }
        if (\array_key_exists('originAmbiguous', $data)) {
            $object->setOriginAmbiguous($data['originAmbiguous']);
            unset($data['originAmbiguous']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('invalidFieldList') && null !== $data->getInvalidFieldList()) {
            $values = [];
            foreach ($data->getInvalidFieldList() as $value) {
                $values[] = $value;
            }
            $dataArray['invalidFieldList'] = $values;
        }
        if ($data->isInitialized('invalidFieldListCodes') && null !== $data->getInvalidFieldListCodes()) {
            $values_1 = [];
            foreach ($data->getInvalidFieldListCodes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['invalidFieldListCodes'] = $values_1;
        }
        if ($data->isInitialized('destinationAmbiguous') && null !== $data->getDestinationAmbiguous()) {
            $dataArray['destinationAmbiguous'] = $data->getDestinationAmbiguous();
        }
        if ($data->isInitialized('originAmbiguous') && null !== $data->getOriginAmbiguous()) {
            $dataArray['originAmbiguous'] = $data->getOriginAmbiguous();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ValidationList::class => false];
    }
}