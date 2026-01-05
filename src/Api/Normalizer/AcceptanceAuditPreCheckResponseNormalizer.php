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
class AcceptanceAuditPreCheckResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseResponse::class, 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponseService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('RegulationSet', $data)) {
            $object->setRegulationSet($data['RegulationSet']);
            unset($data['RegulationSet']);
        }
        if (\array_key_exists('PackageResults', $data)) {
            $values = [];
            foreach ($data['PackageResults'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults::class, 'json', $context);
            }
            $object->setPackageResults($values);
            unset($data['PackageResults']);
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
        $dataArray['Response'] = $this->normalizer->normalize($data->getResponse(), 'json', $context);
        if ($data->isInitialized('shipperNumber') && null !== $data->getShipperNumber()) {
            $dataArray['ShipperNumber'] = $data->getShipperNumber();
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('regulationSet') && null !== $data->getRegulationSet()) {
            $dataArray['RegulationSet'] = $data->getRegulationSet();
        }
        if ($data->isInitialized('packageResults') && null !== $data->getPackageResults()) {
            $values = [];
            foreach ($data->getPackageResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['PackageResults'] = $values;
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
        return [\ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponse::class => false];
    }
}