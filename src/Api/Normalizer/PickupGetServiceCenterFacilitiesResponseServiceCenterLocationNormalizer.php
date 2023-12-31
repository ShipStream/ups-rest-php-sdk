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
class PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation';
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
        $object = new \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('DropOffFacilities', $data)) {
            $values = array();
            foreach ($data['DropOffFacilities'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities', 'json', $context);
            }
            $object->setDropOffFacilities($values);
            unset($data['DropOffFacilities']);
        }
        if (\array_key_exists('PickupFacilities', $data)) {
            $object->setPickupFacilities($this->denormalizer->denormalize($data['PickupFacilities'], 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities', 'json', $context));
            unset($data['PickupFacilities']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('dropOffFacilities') && null !== $object->getDropOffFacilities()) {
            $values = array();
            foreach ($object->getDropOffFacilities() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['DropOffFacilities'] = $values;
        }
        if ($object->isInitialized('pickupFacilities') && null !== $object->getPickupFacilities()) {
            $data['PickupFacilities'] = $this->normalizer->normalize($object->getPickupFacilities(), 'json', $context);
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
        return array('ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation' => false);
    }
}