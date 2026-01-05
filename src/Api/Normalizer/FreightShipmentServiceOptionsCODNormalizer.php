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
class FreightShipmentServiceOptionsCODNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CODValue', $data)) {
            $object->setCODValue($this->denormalizer->denormalize($data['CODValue'], \ShipStream\Ups\Api\Model\CODCODValue::class, 'json', $context));
            unset($data['CODValue']);
        }
        if (\array_key_exists('CODPaymentMethod', $data)) {
            $object->setCODPaymentMethod($this->denormalizer->denormalize($data['CODPaymentMethod'], \ShipStream\Ups\Api\Model\CODCODPaymentMethod::class, 'json', $context));
            unset($data['CODPaymentMethod']);
        }
        if (\array_key_exists('CODBillingOption', $data)) {
            $object->setCODBillingOption($this->denormalizer->denormalize($data['CODBillingOption'], \ShipStream\Ups\Api\Model\CODCODBillingOption::class, 'json', $context));
            unset($data['CODBillingOption']);
        }
        if (\array_key_exists('RemitTo', $data)) {
            $object->setRemitTo($this->denormalizer->denormalize($data['RemitTo'], \ShipStream\Ups\Api\Model\CODRemitTo::class, 'json', $context));
            unset($data['RemitTo']);
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
        $dataArray['CODValue'] = $this->normalizer->normalize($data->getCODValue(), 'json', $context);
        $dataArray['CODPaymentMethod'] = $this->normalizer->normalize($data->getCODPaymentMethod(), 'json', $context);
        $dataArray['CODBillingOption'] = $this->normalizer->normalize($data->getCODBillingOption(), 'json', $context);
        $dataArray['RemitTo'] = $this->normalizer->normalize($data->getRemitTo(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD::class => false];
    }
}