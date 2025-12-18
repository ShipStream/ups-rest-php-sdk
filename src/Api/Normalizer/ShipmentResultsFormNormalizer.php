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
class ShipmentResultsFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentResultsForm::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentResultsForm::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentResultsForm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Code', $data)) {
            $object->setCode($data['Code']);
            unset($data['Code']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($this->denormalizer->denormalize($data['Image'], \ShipStream\Ups\Api\Model\ShipmentResultsFormImage::class, 'json', $context));
            unset($data['Image']);
        }
        if (\array_key_exists('FormGroupId', $data)) {
            $object->setFormGroupId($data['FormGroupId']);
            unset($data['FormGroupId']);
        }
        if (\array_key_exists('FormGroupIdName', $data)) {
            $object->setFormGroupIdName($data['FormGroupIdName']);
            unset($data['FormGroupIdName']);
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
        $dataArray['Code'] = $data->getCode();
        $dataArray['Description'] = $data->getDescription();
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $this->normalizer->normalize($data->getImage(), 'json', $context);
        }
        if ($data->isInitialized('formGroupId') && null !== $data->getFormGroupId()) {
            $dataArray['FormGroupId'] = $data->getFormGroupId();
        }
        if ($data->isInitialized('formGroupIdName') && null !== $data->getFormGroupIdName()) {
            $dataArray['FormGroupIdName'] = $data->getFormGroupIdName();
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
        return [\ShipStream\Ups\Api\Model\ShipmentResultsForm::class => false];
    }
}