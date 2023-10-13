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
class OriginAddressOriginSearchCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\OriginAddressOriginSearchCriteria';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\OriginAddressOriginSearchCriteria';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\OriginAddressOriginSearchCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SearchRadius', $data)) {
            $object->setSearchRadius($data['SearchRadius']);
            unset($data['SearchRadius']);
        }
        if (\array_key_exists('DistanceUnitOfMeasure', $data)) {
            $object->setDistanceUnitOfMeasure($data['DistanceUnitOfMeasure']);
            unset($data['DistanceUnitOfMeasure']);
        }
        if (\array_key_exists('MaximumLocation', $data)) {
            $object->setMaximumLocation($data['MaximumLocation']);
            unset($data['MaximumLocation']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('searchRadius') && null !== $object->getSearchRadius()) {
            $data['SearchRadius'] = $object->getSearchRadius();
        }
        $data['DistanceUnitOfMeasure'] = $object->getDistanceUnitOfMeasure();
        if ($object->isInitialized('maximumLocation') && null !== $object->getMaximumLocation()) {
            $data['MaximumLocation'] = $object->getMaximumLocation();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\OriginAddressOriginSearchCriteria' => false);
    }
}