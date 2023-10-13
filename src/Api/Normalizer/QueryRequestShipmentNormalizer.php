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
class QueryRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\QueryRequestShipment';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\QueryRequestShipment';
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
        $object = new \ShipStream\Ups\Api\Model\QueryRequestShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('OriginCountryCode', $data)) {
            $object->setOriginCountryCode($data['OriginCountryCode']);
            unset($data['OriginCountryCode']);
        }
        if (\array_key_exists('OriginStateProvinceCode', $data)) {
            $object->setOriginStateProvinceCode($data['OriginStateProvinceCode']);
            unset($data['OriginStateProvinceCode']);
        }
        if (\array_key_exists('DestinationCountryCode', $data)) {
            $object->setDestinationCountryCode($data['DestinationCountryCode']);
            unset($data['DestinationCountryCode']);
        }
        if (\array_key_exists('DestinationStateProvinceCode', $data)) {
            $object->setDestinationStateProvinceCode($data['DestinationStateProvinceCode']);
            unset($data['DestinationStateProvinceCode']);
        }
        if (\array_key_exists('TransportationMode', $data)) {
            $object->setTransportationMode($data['TransportationMode']);
            unset($data['TransportationMode']);
        }
        if (\array_key_exists('FreightCharges', $data)) {
            $object->setFreightCharges($this->denormalizer->denormalize($data['FreightCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightCharges', 'json', $context));
            unset($data['FreightCharges']);
        }
        if (\array_key_exists('AdditionalInsurance', $data)) {
            $object->setAdditionalInsurance($this->denormalizer->denormalize($data['AdditionalInsurance'], 'ShipStream\\Ups\\Api\\Model\\ShipmentAdditionalInsurance', 'json', $context));
            unset($data['AdditionalInsurance']);
        }
        if (\array_key_exists('TariffCodeAlert', $data)) {
            $object->setTariffCodeAlert($data['TariffCodeAlert']);
            unset($data['TariffCodeAlert']);
        }
        if (\array_key_exists('Product', $data)) {
            $values = array();
            foreach ($data['Product'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentProduct', 'json', $context);
            }
            $object->setProduct($values);
            unset($data['Product']);
        }
        if (\array_key_exists('ResultCurrencyCode', $data)) {
            $object->setResultCurrencyCode($data['ResultCurrencyCode']);
            unset($data['ResultCurrencyCode']);
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
        $data['OriginCountryCode'] = $object->getOriginCountryCode();
        if ($object->isInitialized('originStateProvinceCode') && null !== $object->getOriginStateProvinceCode()) {
            $data['OriginStateProvinceCode'] = $object->getOriginStateProvinceCode();
        }
        $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
        if ($object->isInitialized('destinationStateProvinceCode') && null !== $object->getDestinationStateProvinceCode()) {
            $data['DestinationStateProvinceCode'] = $object->getDestinationStateProvinceCode();
        }
        if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
            $data['TransportationMode'] = $object->getTransportationMode();
        }
        if ($object->isInitialized('freightCharges') && null !== $object->getFreightCharges()) {
            $data['FreightCharges'] = $this->normalizer->normalize($object->getFreightCharges(), 'json', $context);
        }
        if ($object->isInitialized('additionalInsurance') && null !== $object->getAdditionalInsurance()) {
            $data['AdditionalInsurance'] = $this->normalizer->normalize($object->getAdditionalInsurance(), 'json', $context);
        }
        if ($object->isInitialized('tariffCodeAlert') && null !== $object->getTariffCodeAlert()) {
            $data['TariffCodeAlert'] = $object->getTariffCodeAlert();
        }
        $values = array();
        foreach ($object->getProduct() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['Product'] = $values;
        if ($object->isInitialized('resultCurrencyCode') && null !== $object->getResultCurrencyCode()) {
            $data['ResultCurrencyCode'] = $object->getResultCurrencyCode();
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
        return array('ShipStream\\Ups\\Api\\Model\\QueryRequestShipment' => false);
    }
}