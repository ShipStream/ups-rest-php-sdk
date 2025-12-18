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
class UploadRequestUserCreatedFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\UploadRequestUserCreatedForm::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\UploadRequestUserCreatedForm::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\UploadRequestUserCreatedForm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('UserCreatedFormFileName', $data)) {
            $object->setUserCreatedFormFileName($data['UserCreatedFormFileName']);
            unset($data['UserCreatedFormFileName']);
        }
        if (\array_key_exists('UserCreatedFormFile', $data)) {
            $object->setUserCreatedFormFile($data['UserCreatedFormFile']);
            unset($data['UserCreatedFormFile']);
        }
        if (\array_key_exists('UserCreatedFormFileFormat', $data)) {
            $object->setUserCreatedFormFileFormat($data['UserCreatedFormFileFormat']);
            unset($data['UserCreatedFormFileFormat']);
        }
        if (\array_key_exists('UserCreatedFormDocumentType', $data)) {
            $object->setUserCreatedFormDocumentType($data['UserCreatedFormDocumentType']);
            unset($data['UserCreatedFormDocumentType']);
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
        $dataArray['UserCreatedFormFileName'] = $data->getUserCreatedFormFileName();
        $dataArray['UserCreatedFormFile'] = $data->getUserCreatedFormFile();
        $dataArray['UserCreatedFormFileFormat'] = $data->getUserCreatedFormFileFormat();
        $dataArray['UserCreatedFormDocumentType'] = $data->getUserCreatedFormDocumentType();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\UploadRequestUserCreatedForm::class => false];
    }
}