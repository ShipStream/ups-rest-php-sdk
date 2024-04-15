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
    class RatePackageServiceOptionsDryIceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDryIce();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] !== null) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            elseif (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] === null) {
                $object->setRegulationSet(null);
            }
            if (\array_key_exists('DryIceWeight', $data) && $data['DryIceWeight'] !== null) {
                $object->setDryIceWeight($this->denormalizer->denormalize($data['DryIceWeight'], 'ShipStream\\Ups\\Api\\Model\\DryIceDryIceWeight', 'json', $context));
                unset($data['DryIceWeight']);
            }
            elseif (\array_key_exists('DryIceWeight', $data) && $data['DryIceWeight'] === null) {
                $object->setDryIceWeight(null);
            }
            if (\array_key_exists('MedicalUseIndicator', $data) && $data['MedicalUseIndicator'] !== null) {
                $object->setMedicalUseIndicator($data['MedicalUseIndicator']);
                unset($data['MedicalUseIndicator']);
            }
            elseif (\array_key_exists('MedicalUseIndicator', $data) && $data['MedicalUseIndicator'] === null) {
                $object->setMedicalUseIndicator(null);
            }
            if (\array_key_exists('AuditRequired', $data) && $data['AuditRequired'] !== null) {
                $object->setAuditRequired($data['AuditRequired']);
                unset($data['AuditRequired']);
            }
            elseif (\array_key_exists('AuditRequired', $data) && $data['AuditRequired'] === null) {
                $object->setAuditRequired(null);
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
            $data['RegulationSet'] = $object->getRegulationSet();
            $data['DryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
            if ($object->isInitialized('medicalUseIndicator') && null !== $object->getMedicalUseIndicator()) {
                $data['MedicalUseIndicator'] = $object->getMedicalUseIndicator();
            }
            if ($object->isInitialized('auditRequired') && null !== $object->getAuditRequired()) {
                $data['AuditRequired'] = $object->getAuditRequired();
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
            return ['ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce' => false];
        }
    }
} else {
    class RatePackageServiceOptionsDryIceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce';
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
            $object = new \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDryIce();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] !== null) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            elseif (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] === null) {
                $object->setRegulationSet(null);
            }
            if (\array_key_exists('DryIceWeight', $data) && $data['DryIceWeight'] !== null) {
                $object->setDryIceWeight($this->denormalizer->denormalize($data['DryIceWeight'], 'ShipStream\\Ups\\Api\\Model\\DryIceDryIceWeight', 'json', $context));
                unset($data['DryIceWeight']);
            }
            elseif (\array_key_exists('DryIceWeight', $data) && $data['DryIceWeight'] === null) {
                $object->setDryIceWeight(null);
            }
            if (\array_key_exists('MedicalUseIndicator', $data) && $data['MedicalUseIndicator'] !== null) {
                $object->setMedicalUseIndicator($data['MedicalUseIndicator']);
                unset($data['MedicalUseIndicator']);
            }
            elseif (\array_key_exists('MedicalUseIndicator', $data) && $data['MedicalUseIndicator'] === null) {
                $object->setMedicalUseIndicator(null);
            }
            if (\array_key_exists('AuditRequired', $data) && $data['AuditRequired'] !== null) {
                $object->setAuditRequired($data['AuditRequired']);
                unset($data['AuditRequired']);
            }
            elseif (\array_key_exists('AuditRequired', $data) && $data['AuditRequired'] === null) {
                $object->setAuditRequired(null);
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
            $data['RegulationSet'] = $object->getRegulationSet();
            $data['DryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
            if ($object->isInitialized('medicalUseIndicator') && null !== $object->getMedicalUseIndicator()) {
                $data['MedicalUseIndicator'] = $object->getMedicalUseIndicator();
            }
            if ($object->isInitialized('auditRequired') && null !== $object->getAuditRequired()) {
                $data['AuditRequired'] = $object->getAuditRequired();
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
            return ['ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce' => false];
        }
    }
}