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
class ProductChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ProductCharges';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ProductCharges';
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
        $object = new \ShipStream\Ups\Api\Model\ProductCharges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Duties', $data)) {
            $object->setDuties($data['Duties']);
            unset($data['Duties']);
        }
        if (\array_key_exists('TaxesAndFees', $data)) {
            $object->setTaxesAndFees($data['TaxesAndFees']);
            unset($data['TaxesAndFees']);
        }
        if (\array_key_exists('VAT', $data)) {
            $object->setVAT($data['VAT']);
            unset($data['VAT']);
        }
        if (\array_key_exists('CostOfGoods', $data)) {
            $object->setCostOfGoods($data['CostOfGoods']);
            unset($data['CostOfGoods']);
        }
        if (\array_key_exists('SubTotal', $data)) {
            $object->setSubTotal($data['SubTotal']);
            unset($data['SubTotal']);
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
        if ($object->isInitialized('duties') && null !== $object->getDuties()) {
            $data['Duties'] = $object->getDuties();
        }
        if ($object->isInitialized('taxesAndFees') && null !== $object->getTaxesAndFees()) {
            $data['TaxesAndFees'] = $object->getTaxesAndFees();
        }
        if ($object->isInitialized('vAT') && null !== $object->getVAT()) {
            $data['VAT'] = $object->getVAT();
        }
        $data['CostOfGoods'] = $object->getCostOfGoods();
        $data['SubTotal'] = $object->getSubTotal();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\ProductCharges' => false);
    }
}