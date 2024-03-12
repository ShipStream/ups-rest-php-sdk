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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RatedShipmentTimeInTransitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            if (\array_key_exists('PackageBillType', $data)) {
                $object->setPackageBillType($data['PackageBillType']);
                unset($data['PackageBillType']);
            }
            if (\array_key_exists('ServiceSummary', $data)) {
                $object->setServiceSummary($this->denormalizer->denormalize($data['ServiceSummary'], 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary', 'json', $context));
                unset($data['ServiceSummary']);
            }
            if (\array_key_exists('AutoDutyCode', $data)) {
                $object->setAutoDutyCode($data['AutoDutyCode']);
                unset($data['AutoDutyCode']);
            }
            if (\array_key_exists('Disclaimer', $data)) {
                $object->setDisclaimer($data['Disclaimer']);
                unset($data['Disclaimer']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['PickupDate'] = $object->getPickupDate();
            if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
                $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
            }
            if ($object->isInitialized('packageBillType') && null !== $object->getPackageBillType()) {
                $data['PackageBillType'] = $object->getPackageBillType();
            }
            $data['ServiceSummary'] = $this->normalizer->normalize($object->getServiceSummary(), 'json', $context);
            if ($object->isInitialized('autoDutyCode') && null !== $object->getAutoDutyCode()) {
                $data['AutoDutyCode'] = $object->getAutoDutyCode();
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $object->getDisclaimer();
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
            return ['ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit' => false];
        }
    }
} else {
    class RatedShipmentTimeInTransitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            if (\array_key_exists('PackageBillType', $data)) {
                $object->setPackageBillType($data['PackageBillType']);
                unset($data['PackageBillType']);
            }
            if (\array_key_exists('ServiceSummary', $data)) {
                $object->setServiceSummary($this->denormalizer->denormalize($data['ServiceSummary'], 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary', 'json', $context));
                unset($data['ServiceSummary']);
            }
            if (\array_key_exists('AutoDutyCode', $data)) {
                $object->setAutoDutyCode($data['AutoDutyCode']);
                unset($data['AutoDutyCode']);
            }
            if (\array_key_exists('Disclaimer', $data)) {
                $object->setDisclaimer($data['Disclaimer']);
                unset($data['Disclaimer']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['PickupDate'] = $object->getPickupDate();
            if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
                $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
            }
            if ($object->isInitialized('packageBillType') && null !== $object->getPackageBillType()) {
                $data['PackageBillType'] = $object->getPackageBillType();
            }
            $data['ServiceSummary'] = $this->normalizer->normalize($object->getServiceSummary(), 'json', $context);
            if ($object->isInitialized('autoDutyCode') && null !== $object->getAutoDutyCode()) {
                $data['AutoDutyCode'] = $object->getAutoDutyCode();
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $object->getDisclaimer();
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
            return ['ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit' => false];
        }
    }
}