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
class AcceptanceAuditPreCheckRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('ShipFromAddress', $data)) {
            $object->setShipFromAddress($this->denormalizer->denormalize($data['ShipFromAddress'], \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipFromAddress::class, 'json', $context));
            unset($data['ShipFromAddress']);
        }
        if (\array_key_exists('ShipToAddress', $data)) {
            $object->setShipToAddress($this->denormalizer->denormalize($data['ShipToAddress'], \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipToAddress::class, 'json', $context));
            unset($data['ShipToAddress']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ShipmentService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('RegulationSet', $data)) {
            $object->setRegulationSet($data['RegulationSet']);
            unset($data['RegulationSet']);
        }
        if (\array_key_exists('Package', $data)) {
            $values = [];
            foreach ($data['Package'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage::class, 'json', $context);
            }
            $object->setPackage($values);
            unset($data['Package']);
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
        $dataArray['ShipperNumber'] = $data->getShipperNumber();
        $dataArray['ShipFromAddress'] = $this->normalizer->normalize($data->getShipFromAddress(), 'json', $context);
        $dataArray['ShipToAddress'] = $this->normalizer->normalize($data->getShipToAddress(), 'json', $context);
        $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        if ($data->isInitialized('regulationSet') && null !== $data->getRegulationSet()) {
            $dataArray['RegulationSet'] = $data->getRegulationSet();
        }
        $values = [];
        foreach ($data->getPackage() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['Package'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment::class => false];
    }
}