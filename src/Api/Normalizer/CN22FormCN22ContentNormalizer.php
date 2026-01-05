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
class CN22FormCN22ContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\CN22FormCN22Content::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\CN22FormCN22Content::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\CN22FormCN22Content();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CN22ContentQuantity', $data)) {
            $object->setCN22ContentQuantity($data['CN22ContentQuantity']);
            unset($data['CN22ContentQuantity']);
        }
        if (\array_key_exists('CN22ContentDescription', $data)) {
            $object->setCN22ContentDescription($data['CN22ContentDescription']);
            unset($data['CN22ContentDescription']);
        }
        if (\array_key_exists('CN22ContentWeight', $data)) {
            $object->setCN22ContentWeight($this->denormalizer->denormalize($data['CN22ContentWeight'], \ShipStream\Ups\Api\Model\CN22ContentCN22ContentWeight::class, 'json', $context));
            unset($data['CN22ContentWeight']);
        }
        if (\array_key_exists('CN22ContentTotalValue', $data)) {
            $object->setCN22ContentTotalValue($data['CN22ContentTotalValue']);
            unset($data['CN22ContentTotalValue']);
        }
        if (\array_key_exists('CN22ContentCurrencyCode', $data)) {
            $object->setCN22ContentCurrencyCode($data['CN22ContentCurrencyCode']);
            unset($data['CN22ContentCurrencyCode']);
        }
        if (\array_key_exists('CN22ContentCountryOfOrigin', $data)) {
            $object->setCN22ContentCountryOfOrigin($data['CN22ContentCountryOfOrigin']);
            unset($data['CN22ContentCountryOfOrigin']);
        }
        if (\array_key_exists('CN22ContentTariffNumber', $data)) {
            $object->setCN22ContentTariffNumber($data['CN22ContentTariffNumber']);
            unset($data['CN22ContentTariffNumber']);
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
        $dataArray['CN22ContentQuantity'] = $data->getCN22ContentQuantity();
        $dataArray['CN22ContentDescription'] = $data->getCN22ContentDescription();
        $dataArray['CN22ContentWeight'] = $this->normalizer->normalize($data->getCN22ContentWeight(), 'json', $context);
        $dataArray['CN22ContentTotalValue'] = $data->getCN22ContentTotalValue();
        $dataArray['CN22ContentCurrencyCode'] = $data->getCN22ContentCurrencyCode();
        if ($data->isInitialized('cN22ContentCountryOfOrigin') && null !== $data->getCN22ContentCountryOfOrigin()) {
            $dataArray['CN22ContentCountryOfOrigin'] = $data->getCN22ContentCountryOfOrigin();
        }
        if ($data->isInitialized('cN22ContentTariffNumber') && null !== $data->getCN22ContentTariffNumber()) {
            $dataArray['CN22ContentTariffNumber'] = $data->getCN22ContentTariffNumber();
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
        return [\ShipStream\Ups\Api\Model\CN22FormCN22Content::class => false];
    }
}