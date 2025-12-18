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
class LocationSearchCriteriaSearchOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('OptionType', $data)) {
            $object->setOptionType($this->denormalizer->denormalize($data['OptionType'], \ShipStream\Ups\Api\Model\SearchOptionOptionType::class, 'json', $context));
            unset($data['OptionType']);
        }
        if (\array_key_exists('OptionCode', $data)) {
            $values = [];
            foreach ($data['OptionCode'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\SearchOptionOptionCode::class, 'json', $context);
            }
            $object->setOptionCode($values);
            unset($data['OptionCode']);
        }
        if (\array_key_exists('Relation', $data)) {
            $object->setRelation($this->denormalizer->denormalize($data['Relation'], \ShipStream\Ups\Api\Model\SearchOptionRelation::class, 'json', $context));
            unset($data['Relation']);
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
        $dataArray['OptionType'] = $this->normalizer->normalize($data->getOptionType(), 'json', $context);
        $values = [];
        foreach ($data->getOptionCode() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['OptionCode'] = $values;
        if ($data->isInitialized('relation') && null !== $data->getRelation()) {
            $dataArray['Relation'] = $this->normalizer->normalize($data->getRelation(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption::class => false];
    }
}