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
class LandedCostRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment';
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
        $object = new \ShipStream\Ups\Api\Model\LandedCostRequestShipment();
        if (\array_key_exists('transportCost', $data) && \is_int($data['transportCost'])) {
            $data['transportCost'] = (double) $data['transportCost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('importCountryCode', $data)) {
            $object->setImportCountryCode($data['importCountryCode']);
            unset($data['importCountryCode']);
        }
        if (\array_key_exists('importProvince', $data)) {
            $object->setImportProvince($data['importProvince']);
            unset($data['importProvince']);
        }
        if (\array_key_exists('shipDate', $data)) {
            $object->setShipDate($data['shipDate']);
            unset($data['shipDate']);
        }
        if (\array_key_exists('incoterms', $data)) {
            $object->setIncoterms($data['incoterms']);
            unset($data['incoterms']);
        }
        if (\array_key_exists('exportCountryCode', $data)) {
            $object->setExportCountryCode($data['exportCountryCode']);
            unset($data['exportCountryCode']);
        }
        if (\array_key_exists('transModes', $data)) {
            $object->setTransModes($data['transModes']);
            unset($data['transModes']);
        }
        if (\array_key_exists('transportCost', $data)) {
            $object->setTransportCost($data['transportCost']);
            unset($data['transportCost']);
        }
        if (\array_key_exists('shipmentType', $data)) {
            $object->setShipmentType($data['shipmentType']);
            unset($data['shipmentType']);
        }
        if (\array_key_exists('shipmentItems', $data)) {
            $values = array();
            foreach ($data['shipmentItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems', 'json', $context);
            }
            $object->setShipmentItems($values);
            unset($data['shipmentItems']);
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
        $data['id'] = $object->getId();
        $data['importCountryCode'] = $object->getImportCountryCode();
        if ($object->isInitialized('importProvince') && null !== $object->getImportProvince()) {
            $data['importProvince'] = $object->getImportProvince();
        }
        if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
            $data['shipDate'] = $object->getShipDate();
        }
        if ($object->isInitialized('incoterms') && null !== $object->getIncoterms()) {
            $data['incoterms'] = $object->getIncoterms();
        }
        $data['exportCountryCode'] = $object->getExportCountryCode();
        if ($object->isInitialized('transModes') && null !== $object->getTransModes()) {
            $data['transModes'] = $object->getTransModes();
        }
        if ($object->isInitialized('transportCost') && null !== $object->getTransportCost()) {
            $data['transportCost'] = $object->getTransportCost();
        }
        if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
            $data['shipmentType'] = $object->getShipmentType();
        }
        $values = array();
        foreach ($object->getShipmentItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['shipmentItems'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment' => false);
    }
}