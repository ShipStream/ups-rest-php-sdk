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
class ShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\Shipment';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Shipment';
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
        $object = new \ShipStream\Ups\Api\Model\Shipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inquiryNumber', $data)) {
            $object->setInquiryNumber($data['inquiryNumber']);
            unset($data['inquiryNumber']);
        }
        if (\array_key_exists('package', $data)) {
            $values = array();
            foreach ($data['package'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Package', 'json', $context);
            }
            $object->setPackage($values);
            unset($data['package']);
        }
        if (\array_key_exists('userRelation', $data)) {
            $values_1 = array();
            foreach ($data['userRelation'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUserRelation($values_1);
            unset($data['userRelation']);
        }
        if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
            $values_2 = array();
            foreach ($data['warnings'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\Warning', 'json', $context);
            }
            $object->setWarnings($values_2);
            unset($data['warnings']);
        }
        elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
            $object->setWarnings(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('inquiryNumber') && null !== $object->getInquiryNumber()) {
            $data['inquiryNumber'] = $object->getInquiryNumber();
        }
        if ($object->isInitialized('package') && null !== $object->getPackage()) {
            $values = array();
            foreach ($object->getPackage() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['package'] = $values;
        }
        if ($object->isInitialized('userRelation') && null !== $object->getUserRelation()) {
            $values_1 = array();
            foreach ($object->getUserRelation() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['userRelation'] = $values_1;
        }
        if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
            $values_2 = array();
            foreach ($object->getWarnings() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['warnings'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\Shipment' => false);
    }
}