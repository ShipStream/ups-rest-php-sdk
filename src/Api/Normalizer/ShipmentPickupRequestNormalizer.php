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
class ShipmentPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentPickupRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentPickupRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentPickupRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AdditionalComments', $data)) {
            $object->setAdditionalComments($data['AdditionalComments']);
            unset($data['AdditionalComments']);
        }
        if (\array_key_exists('Requester', $data)) {
            $object->setRequester($this->denormalizer->denormalize($data['Requester'], \ShipStream\Ups\Api\Model\PickupRequestRequester::class, 'json', $context));
            unset($data['Requester']);
        }
        if (\array_key_exists('PickupDate', $data)) {
            $object->setPickupDate($data['PickupDate']);
            unset($data['PickupDate']);
        }
        if (\array_key_exists('EarliestTimeReady', $data)) {
            $object->setEarliestTimeReady($data['EarliestTimeReady']);
            unset($data['EarliestTimeReady']);
        }
        if (\array_key_exists('LatestTimeReady', $data)) {
            $object->setLatestTimeReady($data['LatestTimeReady']);
            unset($data['LatestTimeReady']);
        }
        if (\array_key_exists('POM', $data)) {
            $object->setPOM($this->denormalizer->denormalize($data['POM'], \ShipStream\Ups\Api\Model\PickupRequestPOM::class, 'json', $context));
            unset($data['POM']);
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
        if ($data->isInitialized('additionalComments') && null !== $data->getAdditionalComments()) {
            $dataArray['AdditionalComments'] = $data->getAdditionalComments();
        }
        if ($data->isInitialized('requester') && null !== $data->getRequester()) {
            $dataArray['Requester'] = $this->normalizer->normalize($data->getRequester(), 'json', $context);
        }
        $dataArray['PickupDate'] = $data->getPickupDate();
        if ($data->isInitialized('earliestTimeReady') && null !== $data->getEarliestTimeReady()) {
            $dataArray['EarliestTimeReady'] = $data->getEarliestTimeReady();
        }
        $dataArray['LatestTimeReady'] = $data->getLatestTimeReady();
        if ($data->isInitialized('pOM') && null !== $data->getPOM()) {
            $dataArray['POM'] = $this->normalizer->normalize($data->getPOM(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ShipmentPickupRequest::class => false];
    }
}