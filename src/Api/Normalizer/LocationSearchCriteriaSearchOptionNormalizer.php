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
class LocationSearchCriteriaSearchOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaSearchOption';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaSearchOption';
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
        $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('OptionType', $data)) {
            $object->setOptionType($this->denormalizer->denormalize($data['OptionType'], 'ShipStream\\Ups\\Api\\Model\\SearchOptionOptionType', 'json', $context));
            unset($data['OptionType']);
        }
        if (\array_key_exists('OptionCode', $data)) {
            $values = array();
            foreach ($data['OptionCode'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SearchOptionOptionCode', 'json', $context);
            }
            $object->setOptionCode($values);
            unset($data['OptionCode']);
        }
        if (\array_key_exists('Relation', $data)) {
            $object->setRelation($this->denormalizer->denormalize($data['Relation'], 'ShipStream\\Ups\\Api\\Model\\SearchOptionRelation', 'json', $context));
            unset($data['Relation']);
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
        $data['OptionType'] = $this->normalizer->normalize($object->getOptionType(), 'json', $context);
        $values = array();
        foreach ($object->getOptionCode() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['OptionCode'] = $values;
        if ($object->isInitialized('relation') && null !== $object->getRelation()) {
            $data['Relation'] = $this->normalizer->normalize($object->getRelation(), 'json', $context);
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
        return array('ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaSearchOption' => false);
    }
}