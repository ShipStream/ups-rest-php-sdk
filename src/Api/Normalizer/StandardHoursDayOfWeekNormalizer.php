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
    class StandardHoursDayOfWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\StandardHoursDayOfWeek';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\StandardHoursDayOfWeek';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\StandardHoursDayOfWeek();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Day', $data)) {
                $object->setDay($data['Day']);
                unset($data['Day']);
            }
            if (\array_key_exists('OpenHours', $data) && $data['OpenHours'] !== null) {
                $values = [];
                foreach ($data['OpenHours'] as $value) {
                    $values[] = $value;
                }
                $object->setOpenHours($values);
                unset($data['OpenHours']);
            }
            elseif (\array_key_exists('OpenHours', $data) && $data['OpenHours'] === null) {
                $object->setOpenHours(null);
            }
            if (\array_key_exists('CloseHours', $data) && $data['CloseHours'] !== null) {
                $values_1 = [];
                foreach ($data['CloseHours'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCloseHours($values_1);
                unset($data['CloseHours']);
            }
            elseif (\array_key_exists('CloseHours', $data) && $data['CloseHours'] === null) {
                $object->setCloseHours(null);
            }
            if (\array_key_exists('LatestDropOffHours', $data)) {
                $object->setLatestDropOffHours($data['LatestDropOffHours']);
                unset($data['LatestDropOffHours']);
            }
            if (\array_key_exists('PrepHours', $data)) {
                $object->setPrepHours($data['PrepHours']);
                unset($data['PrepHours']);
            }
            if (\array_key_exists('ClosedIndicator', $data)) {
                $object->setClosedIndicator($data['ClosedIndicator']);
                unset($data['ClosedIndicator']);
            }
            if (\array_key_exists('Open24HoursIndicator', $data)) {
                $object->setOpen24HoursIndicator($data['Open24HoursIndicator']);
                unset($data['Open24HoursIndicator']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Day'] = $object->getDay();
            if ($object->isInitialized('openHours') && null !== $object->getOpenHours()) {
                $values = [];
                foreach ($object->getOpenHours() as $value) {
                    $values[] = $value;
                }
                $data['OpenHours'] = $values;
            }
            if ($object->isInitialized('closeHours') && null !== $object->getCloseHours()) {
                $values_1 = [];
                foreach ($object->getCloseHours() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['CloseHours'] = $values_1;
            }
            if ($object->isInitialized('latestDropOffHours') && null !== $object->getLatestDropOffHours()) {
                $data['LatestDropOffHours'] = $object->getLatestDropOffHours();
            }
            if ($object->isInitialized('prepHours') && null !== $object->getPrepHours()) {
                $data['PrepHours'] = $object->getPrepHours();
            }
            if ($object->isInitialized('closedIndicator') && null !== $object->getClosedIndicator()) {
                $data['ClosedIndicator'] = $object->getClosedIndicator();
            }
            if ($object->isInitialized('open24HoursIndicator') && null !== $object->getOpen24HoursIndicator()) {
                $data['Open24HoursIndicator'] = $object->getOpen24HoursIndicator();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\StandardHoursDayOfWeek' => false];
        }
    }
} else {
    class StandardHoursDayOfWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\StandardHoursDayOfWeek';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\StandardHoursDayOfWeek';
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
            $object = new \ShipStream\Ups\Api\Model\StandardHoursDayOfWeek();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Day', $data)) {
                $object->setDay($data['Day']);
                unset($data['Day']);
            }
            if (\array_key_exists('OpenHours', $data) && $data['OpenHours'] !== null) {
                $values = [];
                foreach ($data['OpenHours'] as $value) {
                    $values[] = $value;
                }
                $object->setOpenHours($values);
                unset($data['OpenHours']);
            }
            elseif (\array_key_exists('OpenHours', $data) && $data['OpenHours'] === null) {
                $object->setOpenHours(null);
            }
            if (\array_key_exists('CloseHours', $data) && $data['CloseHours'] !== null) {
                $values_1 = [];
                foreach ($data['CloseHours'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCloseHours($values_1);
                unset($data['CloseHours']);
            }
            elseif (\array_key_exists('CloseHours', $data) && $data['CloseHours'] === null) {
                $object->setCloseHours(null);
            }
            if (\array_key_exists('LatestDropOffHours', $data)) {
                $object->setLatestDropOffHours($data['LatestDropOffHours']);
                unset($data['LatestDropOffHours']);
            }
            if (\array_key_exists('PrepHours', $data)) {
                $object->setPrepHours($data['PrepHours']);
                unset($data['PrepHours']);
            }
            if (\array_key_exists('ClosedIndicator', $data)) {
                $object->setClosedIndicator($data['ClosedIndicator']);
                unset($data['ClosedIndicator']);
            }
            if (\array_key_exists('Open24HoursIndicator', $data)) {
                $object->setOpen24HoursIndicator($data['Open24HoursIndicator']);
                unset($data['Open24HoursIndicator']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['Day'] = $object->getDay();
            if ($object->isInitialized('openHours') && null !== $object->getOpenHours()) {
                $values = [];
                foreach ($object->getOpenHours() as $value) {
                    $values[] = $value;
                }
                $data['OpenHours'] = $values;
            }
            if ($object->isInitialized('closeHours') && null !== $object->getCloseHours()) {
                $values_1 = [];
                foreach ($object->getCloseHours() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['CloseHours'] = $values_1;
            }
            if ($object->isInitialized('latestDropOffHours') && null !== $object->getLatestDropOffHours()) {
                $data['LatestDropOffHours'] = $object->getLatestDropOffHours();
            }
            if ($object->isInitialized('prepHours') && null !== $object->getPrepHours()) {
                $data['PrepHours'] = $object->getPrepHours();
            }
            if ($object->isInitialized('closedIndicator') && null !== $object->getClosedIndicator()) {
                $data['ClosedIndicator'] = $object->getClosedIndicator();
            }
            if ($object->isInitialized('open24HoursIndicator') && null !== $object->getOpen24HoursIndicator()) {
                $data['Open24HoursIndicator'] = $object->getOpen24HoursIndicator();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\StandardHoursDayOfWeek' => false];
        }
    }
}