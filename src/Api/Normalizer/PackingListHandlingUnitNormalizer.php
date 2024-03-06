<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PackingListHandlingUnitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PackingListHandlingUnit';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackingListHandlingUnit';
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PackingListHandlingUnit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Commodity', $data)) {
            $values = [];
            foreach ($data['Commodity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity', 'json', $context);
            }
            $object->setCommodity($values);
            unset($data['Commodity']);
        }
        if (\array_key_exists('SpecialInstructions', $data)) {
            $object->setSpecialInstructions($data['SpecialInstructions']);
            unset($data['SpecialInstructions']);
        }
        if (\array_key_exists('TotalNumberOfPieces', $data)) {
            $object->setTotalNumberOfPieces($data['TotalNumberOfPieces']);
            unset($data['TotalNumberOfPieces']);
        }
        if (\array_key_exists('TotalWeight', $data)) {
            $object->setTotalWeight($data['TotalWeight']);
            unset($data['TotalWeight']);
        }
        if (\array_key_exists('UnitOfMeasurement', $data)) {
            $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\HandlingUnitUnitOfMeasurement', 'json', $context));
            unset($data['UnitOfMeasurement']);
        }
        if (\array_key_exists('CurrencyCode', $data)) {
            $object->setCurrencyCode($data['CurrencyCode']);
            unset($data['CurrencyCode']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        if ($object->isInitialized('commodity') && null !== $object->getCommodity()) {
            $values = [];
            foreach ($object->getCommodity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Commodity'] = $values;
        }
        if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
            $data['SpecialInstructions'] = $object->getSpecialInstructions();
        }
        if ($object->isInitialized('totalNumberOfPieces') && null !== $object->getTotalNumberOfPieces()) {
            $data['TotalNumberOfPieces'] = $object->getTotalNumberOfPieces();
        }
        if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
            $data['TotalWeight'] = $object->getTotalWeight();
        }
        if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
            $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
        }
        if ($object->isInitialized('currencyCode') && null !== $object->getCurrencyCode()) {
            $data['CurrencyCode'] = $object->getCurrencyCode();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\PackingListHandlingUnit' => false);
    }
}