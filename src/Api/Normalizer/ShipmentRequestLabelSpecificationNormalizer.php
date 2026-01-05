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
class ShipmentRequestLabelSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LabelImageFormat', $data)) {
            $object->setLabelImageFormat($this->denormalizer->denormalize($data['LabelImageFormat'], \ShipStream\Ups\Api\Model\LabelSpecificationLabelImageFormat::class, 'json', $context));
            unset($data['LabelImageFormat']);
        }
        if (\array_key_exists('HTTPUserAgent', $data)) {
            $object->setHTTPUserAgent($data['HTTPUserAgent']);
            unset($data['HTTPUserAgent']);
        }
        if (\array_key_exists('LabelStockSize', $data)) {
            $object->setLabelStockSize($this->denormalizer->denormalize($data['LabelStockSize'], \ShipStream\Ups\Api\Model\LabelSpecificationLabelStockSize::class, 'json', $context));
            unset($data['LabelStockSize']);
        }
        if (\array_key_exists('Instruction', $data)) {
            $values = [];
            foreach ($data['Instruction'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\LabelSpecificationInstruction::class, 'json', $context);
            }
            $object->setInstruction($values);
            unset($data['Instruction']);
        }
        if (\array_key_exists('CharacterSet', $data)) {
            $object->setCharacterSet($data['CharacterSet']);
            unset($data['CharacterSet']);
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
        $dataArray['LabelImageFormat'] = $this->normalizer->normalize($data->getLabelImageFormat(), 'json', $context);
        if ($data->isInitialized('hTTPUserAgent') && null !== $data->getHTTPUserAgent()) {
            $dataArray['HTTPUserAgent'] = $data->getHTTPUserAgent();
        }
        $dataArray['LabelStockSize'] = $this->normalizer->normalize($data->getLabelStockSize(), 'json', $context);
        if ($data->isInitialized('instruction') && null !== $data->getInstruction()) {
            $values = [];
            foreach ($data->getInstruction() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Instruction'] = $values;
        }
        if ($data->isInitialized('characterSet') && null !== $data->getCharacterSet()) {
            $dataArray['CharacterSet'] = $data->getCharacterSet();
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
        return [\ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification::class => false];
    }
}