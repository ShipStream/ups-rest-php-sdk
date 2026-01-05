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
class ShipmentDGSignatoryInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (\array_key_exists('Title', $data)) {
            $object->setTitle($data['Title']);
            unset($data['Title']);
        }
        if (\array_key_exists('Place', $data)) {
            $object->setPlace($data['Place']);
            unset($data['Place']);
        }
        if (\array_key_exists('Date', $data)) {
            $object->setDate($data['Date']);
            unset($data['Date']);
        }
        if (\array_key_exists('ShipperDeclaration', $data)) {
            $object->setShipperDeclaration($data['ShipperDeclaration']);
            unset($data['ShipperDeclaration']);
        }
        if (\array_key_exists('UploadOnlyIndicator', $data)) {
            $object->setUploadOnlyIndicator($data['UploadOnlyIndicator']);
            unset($data['UploadOnlyIndicator']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['Title'] = $data->getTitle();
        }
        if ($data->isInitialized('place') && null !== $data->getPlace()) {
            $dataArray['Place'] = $data->getPlace();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['Date'] = $data->getDate();
        }
        if ($data->isInitialized('shipperDeclaration') && null !== $data->getShipperDeclaration()) {
            $dataArray['ShipperDeclaration'] = $data->getShipperDeclaration();
        }
        if ($data->isInitialized('uploadOnlyIndicator') && null !== $data->getUploadOnlyIndicator()) {
            $dataArray['UploadOnlyIndicator'] = $data->getUploadOnlyIndicator();
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
        return [\ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo::class => false];
    }
}