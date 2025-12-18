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
class InternationalFormsCN22FormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\InternationalFormsCN22Form::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\InternationalFormsCN22Form::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\InternationalFormsCN22Form();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LabelSize', $data)) {
            $object->setLabelSize($data['LabelSize']);
            unset($data['LabelSize']);
        }
        if (\array_key_exists('PrintsPerPage', $data)) {
            $object->setPrintsPerPage($data['PrintsPerPage']);
            unset($data['PrintsPerPage']);
        }
        if (\array_key_exists('LabelPrintType', $data)) {
            $object->setLabelPrintType($data['LabelPrintType']);
            unset($data['LabelPrintType']);
        }
        if (\array_key_exists('CN22Type', $data)) {
            $object->setCN22Type($data['CN22Type']);
            unset($data['CN22Type']);
        }
        if (\array_key_exists('CN22OtherDescription', $data)) {
            $object->setCN22OtherDescription($data['CN22OtherDescription']);
            unset($data['CN22OtherDescription']);
        }
        if (\array_key_exists('FoldHereText', $data)) {
            $object->setFoldHereText($data['FoldHereText']);
            unset($data['FoldHereText']);
        }
        if (\array_key_exists('CN22Content', $data)) {
            $values = [];
            foreach ($data['CN22Content'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\CN22FormCN22Content::class, 'json', $context);
            }
            $object->setCN22Content($values);
            unset($data['CN22Content']);
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
        $dataArray['LabelSize'] = $data->getLabelSize();
        $dataArray['PrintsPerPage'] = $data->getPrintsPerPage();
        $dataArray['LabelPrintType'] = $data->getLabelPrintType();
        $dataArray['CN22Type'] = $data->getCN22Type();
        if ($data->isInitialized('cN22OtherDescription') && null !== $data->getCN22OtherDescription()) {
            $dataArray['CN22OtherDescription'] = $data->getCN22OtherDescription();
        }
        if ($data->isInitialized('foldHereText') && null !== $data->getFoldHereText()) {
            $dataArray['FoldHereText'] = $data->getFoldHereText();
        }
        $values = [];
        foreach ($data->getCN22Content() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['CN22Content'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\InternationalFormsCN22Form::class => false];
    }
}