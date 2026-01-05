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
class GenericShipToNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\GenericShipTo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\GenericShipTo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\GenericShipTo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LocationID', $data)) {
            $object->setLocationID($data['LocationID']);
            unset($data['LocationID']);
        }
        if (\array_key_exists('ReceivingAddressName', $data)) {
            $object->setReceivingAddressName($data['ReceivingAddressName']);
            unset($data['ReceivingAddressName']);
        }
        if (\array_key_exists('Bookmark', $data)) {
            $object->setBookmark($data['Bookmark']);
            unset($data['Bookmark']);
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
        if ($data->isInitialized('locationID') && null !== $data->getLocationID()) {
            $dataArray['LocationID'] = $data->getLocationID();
        }
        if ($data->isInitialized('receivingAddressName') && null !== $data->getReceivingAddressName()) {
            $dataArray['ReceivingAddressName'] = $data->getReceivingAddressName();
        }
        if ($data->isInitialized('bookmark') && null !== $data->getBookmark()) {
            $dataArray['Bookmark'] = $data->getBookmark();
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
        return [\ShipStream\Ups\Api\Model\GenericShipTo::class => false];
    }
}