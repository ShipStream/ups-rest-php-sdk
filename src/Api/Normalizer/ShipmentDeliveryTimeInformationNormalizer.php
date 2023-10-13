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
class ShipmentDeliveryTimeInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation';
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
        $object = new \ShipStream\Ups\Api\Model\ShipmentDeliveryTimeInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageBillType', $data)) {
            $object->setPackageBillType($data['PackageBillType']);
            unset($data['PackageBillType']);
        }
        if (\array_key_exists('Pickup', $data)) {
            $object->setPickup($this->denormalizer->denormalize($data['Pickup'], 'ShipStream\\Ups\\Api\\Model\\DeliveryTimeInformationPickup', 'json', $context));
            unset($data['Pickup']);
        }
        if (\array_key_exists('ReturnContractServices', $data)) {
            $values = array();
            foreach ($data['ReturnContractServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\DeliveryTimeInformationReturnContractServices', 'json', $context);
            }
            $object->setReturnContractServices($values);
            unset($data['ReturnContractServices']);
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
        $data['PackageBillType'] = $object->getPackageBillType();
        if ($object->isInitialized('pickup') && null !== $object->getPickup()) {
            $data['Pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
        }
        if ($object->isInitialized('returnContractServices') && null !== $object->getReturnContractServices()) {
            $values = array();
            foreach ($object->getReturnContractServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ReturnContractServices'] = $values;
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
        return array('ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation' => false);
    }
}