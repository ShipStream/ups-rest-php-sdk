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
class LabelRecoveryRequestLabelSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('HTTPUserAgent', $data)) {
            $object->setHTTPUserAgent($data['HTTPUserAgent']);
            unset($data['HTTPUserAgent']);
        }
        if (\array_key_exists('LabelImageFormat', $data)) {
            $object->setLabelImageFormat($this->denormalizer->denormalize($data['LabelImageFormat'], \ShipStream\Ups\Api\Model\LabelRecoveryLabelSpecificationLabelImageFormat::class, 'json', $context));
            unset($data['LabelImageFormat']);
        }
        if (\array_key_exists('LabelStockSize', $data)) {
            $object->setLabelStockSize($this->denormalizer->denormalize($data['LabelStockSize'], \ShipStream\Ups\Api\Model\LabelRecoveryLabelSpecificationLabelStockSize::class, 'json', $context));
            unset($data['LabelStockSize']);
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
        if ($data->isInitialized('hTTPUserAgent') && null !== $data->getHTTPUserAgent()) {
            $dataArray['HTTPUserAgent'] = $data->getHTTPUserAgent();
        }
        if ($data->isInitialized('labelImageFormat') && null !== $data->getLabelImageFormat()) {
            $dataArray['LabelImageFormat'] = $this->normalizer->normalize($data->getLabelImageFormat(), 'json', $context);
        }
        if ($data->isInitialized('labelStockSize') && null !== $data->getLabelStockSize()) {
            $dataArray['LabelStockSize'] = $this->normalizer->normalize($data->getLabelStockSize(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification::class => false];
    }
}