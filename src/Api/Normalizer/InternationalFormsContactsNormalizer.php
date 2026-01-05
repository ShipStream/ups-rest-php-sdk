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
class InternationalFormsContactsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\InternationalFormsContacts::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\InternationalFormsContacts::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\InternationalFormsContacts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ForwardAgent', $data)) {
            $object->setForwardAgent($this->denormalizer->denormalize($data['ForwardAgent'], \ShipStream\Ups\Api\Model\ContactsForwardAgent::class, 'json', $context));
            unset($data['ForwardAgent']);
        }
        if (\array_key_exists('UltimateConsignee', $data)) {
            $object->setUltimateConsignee($this->denormalizer->denormalize($data['UltimateConsignee'], \ShipStream\Ups\Api\Model\ContactsUltimateConsignee::class, 'json', $context));
            unset($data['UltimateConsignee']);
        }
        if (\array_key_exists('IntermediateConsignee', $data)) {
            $object->setIntermediateConsignee($this->denormalizer->denormalize($data['IntermediateConsignee'], \ShipStream\Ups\Api\Model\ContactsIntermediateConsignee::class, 'json', $context));
            unset($data['IntermediateConsignee']);
        }
        if (\array_key_exists('Producer', $data)) {
            $object->setProducer($this->denormalizer->denormalize($data['Producer'], \ShipStream\Ups\Api\Model\ContactsProducer::class, 'json', $context));
            unset($data['Producer']);
        }
        if (\array_key_exists('SoldTo', $data)) {
            $object->setSoldTo($this->denormalizer->denormalize($data['SoldTo'], \ShipStream\Ups\Api\Model\ContactsSoldTo::class, 'json', $context));
            unset($data['SoldTo']);
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
        if ($data->isInitialized('forwardAgent') && null !== $data->getForwardAgent()) {
            $dataArray['ForwardAgent'] = $this->normalizer->normalize($data->getForwardAgent(), 'json', $context);
        }
        if ($data->isInitialized('ultimateConsignee') && null !== $data->getUltimateConsignee()) {
            $dataArray['UltimateConsignee'] = $this->normalizer->normalize($data->getUltimateConsignee(), 'json', $context);
        }
        if ($data->isInitialized('intermediateConsignee') && null !== $data->getIntermediateConsignee()) {
            $dataArray['IntermediateConsignee'] = $this->normalizer->normalize($data->getIntermediateConsignee(), 'json', $context);
        }
        if ($data->isInitialized('producer') && null !== $data->getProducer()) {
            $dataArray['Producer'] = $this->normalizer->normalize($data->getProducer(), 'json', $context);
        }
        if ($data->isInitialized('soldTo') && null !== $data->getSoldTo()) {
            $dataArray['SoldTo'] = $this->normalizer->normalize($data->getSoldTo(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\InternationalFormsContacts::class => false];
    }
}