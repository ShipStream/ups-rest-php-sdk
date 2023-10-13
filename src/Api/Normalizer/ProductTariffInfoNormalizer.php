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
class ProductTariffInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ProductTariffInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ProductTariffInfo';
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
        $object = new \ShipStream\Ups\Api\Model\ProductTariffInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TariffCode', $data)) {
            $object->setTariffCode($data['TariffCode']);
            unset($data['TariffCode']);
        }
        if (\array_key_exists('DetailID', $data)) {
            $object->setDetailID($data['DetailID']);
            unset($data['DetailID']);
        }
        if (\array_key_exists('SecondaryTariffCode', $data)) {
            $object->setSecondaryTariffCode($data['SecondaryTariffCode']);
            unset($data['SecondaryTariffCode']);
        }
        if (\array_key_exists('SecondaryDetailID', $data)) {
            $object->setSecondaryDetailID($data['SecondaryDetailID']);
            unset($data['SecondaryDetailID']);
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
        $data['TariffCode'] = $object->getTariffCode();
        if ($object->isInitialized('detailID') && null !== $object->getDetailID()) {
            $data['DetailID'] = $object->getDetailID();
        }
        if ($object->isInitialized('secondaryTariffCode') && null !== $object->getSecondaryTariffCode()) {
            $data['SecondaryTariffCode'] = $object->getSecondaryTariffCode();
        }
        if ($object->isInitialized('secondaryDetailID') && null !== $object->getSecondaryDetailID()) {
            $data['SecondaryDetailID'] = $object->getSecondaryDetailID();
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
        return array('ShipStream\\Ups\\Api\\Model\\ProductTariffInfo' => false);
    }
}