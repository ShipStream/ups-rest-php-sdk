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
class ShipmentChargeBillShipperNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillShipper';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillShipper';
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
        $object = new \ShipStream\Ups\Api\Model\ShipmentChargeBillShipper();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AccountNumber', $data)) {
            $object->setAccountNumber($data['AccountNumber']);
            unset($data['AccountNumber']);
        }
        if (\array_key_exists('CreditCard', $data)) {
            $object->setCreditCard($this->denormalizer->denormalize($data['CreditCard'], 'ShipStream\\Ups\\Api\\Model\\BillShipperCreditCard', 'json', $context));
            unset($data['CreditCard']);
        }
        if (\array_key_exists('AlternatePaymentMethod', $data)) {
            $object->setAlternatePaymentMethod($data['AlternatePaymentMethod']);
            unset($data['AlternatePaymentMethod']);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
            $data['AccountNumber'] = $object->getAccountNumber();
        }
        if ($object->isInitialized('creditCard') && null !== $object->getCreditCard()) {
            $data['CreditCard'] = $this->normalizer->normalize($object->getCreditCard(), 'json', $context);
        }
        if ($object->isInitialized('alternatePaymentMethod') && null !== $object->getAlternatePaymentMethod()) {
            $data['AlternatePaymentMethod'] = $object->getAlternatePaymentMethod();
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
        return array('ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillShipper' => false);
    }
}