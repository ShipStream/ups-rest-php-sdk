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
    class ShipmentServiceOptionsRestrictedArticlesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DiagnosticSpecimensIndicator', $data) && $data['DiagnosticSpecimensIndicator'] !== null) {
                $object->setDiagnosticSpecimensIndicator($data['DiagnosticSpecimensIndicator']);
                unset($data['DiagnosticSpecimensIndicator']);
            }
            elseif (\array_key_exists('DiagnosticSpecimensIndicator', $data) && $data['DiagnosticSpecimensIndicator'] === null) {
                $object->setDiagnosticSpecimensIndicator(null);
            }
            if (\array_key_exists('AlcoholicBeveragesIndicator', $data) && $data['AlcoholicBeveragesIndicator'] !== null) {
                $object->setAlcoholicBeveragesIndicator($data['AlcoholicBeveragesIndicator']);
                unset($data['AlcoholicBeveragesIndicator']);
            }
            elseif (\array_key_exists('AlcoholicBeveragesIndicator', $data) && $data['AlcoholicBeveragesIndicator'] === null) {
                $object->setAlcoholicBeveragesIndicator(null);
            }
            if (\array_key_exists('PerishablesIndicator', $data) && $data['PerishablesIndicator'] !== null) {
                $object->setPerishablesIndicator($data['PerishablesIndicator']);
                unset($data['PerishablesIndicator']);
            }
            elseif (\array_key_exists('PerishablesIndicator', $data) && $data['PerishablesIndicator'] === null) {
                $object->setPerishablesIndicator(null);
            }
            if (\array_key_exists('PlantsIndicator', $data) && $data['PlantsIndicator'] !== null) {
                $object->setPlantsIndicator($data['PlantsIndicator']);
                unset($data['PlantsIndicator']);
            }
            elseif (\array_key_exists('PlantsIndicator', $data) && $data['PlantsIndicator'] === null) {
                $object->setPlantsIndicator(null);
            }
            if (\array_key_exists('SeedsIndicator', $data) && $data['SeedsIndicator'] !== null) {
                $object->setSeedsIndicator($data['SeedsIndicator']);
                unset($data['SeedsIndicator']);
            }
            elseif (\array_key_exists('SeedsIndicator', $data) && $data['SeedsIndicator'] === null) {
                $object->setSeedsIndicator(null);
            }
            if (\array_key_exists('SpecialExceptionsIndicator', $data) && $data['SpecialExceptionsIndicator'] !== null) {
                $object->setSpecialExceptionsIndicator($data['SpecialExceptionsIndicator']);
                unset($data['SpecialExceptionsIndicator']);
            }
            elseif (\array_key_exists('SpecialExceptionsIndicator', $data) && $data['SpecialExceptionsIndicator'] === null) {
                $object->setSpecialExceptionsIndicator(null);
            }
            if (\array_key_exists('TobaccoIndicator', $data) && $data['TobaccoIndicator'] !== null) {
                $object->setTobaccoIndicator($data['TobaccoIndicator']);
                unset($data['TobaccoIndicator']);
            }
            elseif (\array_key_exists('TobaccoIndicator', $data) && $data['TobaccoIndicator'] === null) {
                $object->setTobaccoIndicator(null);
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
            if ($object->isInitialized('diagnosticSpecimensIndicator') && null !== $object->getDiagnosticSpecimensIndicator()) {
                $data['DiagnosticSpecimensIndicator'] = $object->getDiagnosticSpecimensIndicator();
            }
            if ($object->isInitialized('alcoholicBeveragesIndicator') && null !== $object->getAlcoholicBeveragesIndicator()) {
                $data['AlcoholicBeveragesIndicator'] = $object->getAlcoholicBeveragesIndicator();
            }
            if ($object->isInitialized('perishablesIndicator') && null !== $object->getPerishablesIndicator()) {
                $data['PerishablesIndicator'] = $object->getPerishablesIndicator();
            }
            if ($object->isInitialized('plantsIndicator') && null !== $object->getPlantsIndicator()) {
                $data['PlantsIndicator'] = $object->getPlantsIndicator();
            }
            if ($object->isInitialized('seedsIndicator') && null !== $object->getSeedsIndicator()) {
                $data['SeedsIndicator'] = $object->getSeedsIndicator();
            }
            if ($object->isInitialized('specialExceptionsIndicator') && null !== $object->getSpecialExceptionsIndicator()) {
                $data['SpecialExceptionsIndicator'] = $object->getSpecialExceptionsIndicator();
            }
            if ($object->isInitialized('tobaccoIndicator') && null !== $object->getTobaccoIndicator()) {
                $data['TobaccoIndicator'] = $object->getTobaccoIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles' => false];
        }
    }
} else {
    class ShipmentServiceOptionsRestrictedArticlesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DiagnosticSpecimensIndicator', $data) && $data['DiagnosticSpecimensIndicator'] !== null) {
                $object->setDiagnosticSpecimensIndicator($data['DiagnosticSpecimensIndicator']);
                unset($data['DiagnosticSpecimensIndicator']);
            }
            elseif (\array_key_exists('DiagnosticSpecimensIndicator', $data) && $data['DiagnosticSpecimensIndicator'] === null) {
                $object->setDiagnosticSpecimensIndicator(null);
            }
            if (\array_key_exists('AlcoholicBeveragesIndicator', $data) && $data['AlcoholicBeveragesIndicator'] !== null) {
                $object->setAlcoholicBeveragesIndicator($data['AlcoholicBeveragesIndicator']);
                unset($data['AlcoholicBeveragesIndicator']);
            }
            elseif (\array_key_exists('AlcoholicBeveragesIndicator', $data) && $data['AlcoholicBeveragesIndicator'] === null) {
                $object->setAlcoholicBeveragesIndicator(null);
            }
            if (\array_key_exists('PerishablesIndicator', $data) && $data['PerishablesIndicator'] !== null) {
                $object->setPerishablesIndicator($data['PerishablesIndicator']);
                unset($data['PerishablesIndicator']);
            }
            elseif (\array_key_exists('PerishablesIndicator', $data) && $data['PerishablesIndicator'] === null) {
                $object->setPerishablesIndicator(null);
            }
            if (\array_key_exists('PlantsIndicator', $data) && $data['PlantsIndicator'] !== null) {
                $object->setPlantsIndicator($data['PlantsIndicator']);
                unset($data['PlantsIndicator']);
            }
            elseif (\array_key_exists('PlantsIndicator', $data) && $data['PlantsIndicator'] === null) {
                $object->setPlantsIndicator(null);
            }
            if (\array_key_exists('SeedsIndicator', $data) && $data['SeedsIndicator'] !== null) {
                $object->setSeedsIndicator($data['SeedsIndicator']);
                unset($data['SeedsIndicator']);
            }
            elseif (\array_key_exists('SeedsIndicator', $data) && $data['SeedsIndicator'] === null) {
                $object->setSeedsIndicator(null);
            }
            if (\array_key_exists('SpecialExceptionsIndicator', $data) && $data['SpecialExceptionsIndicator'] !== null) {
                $object->setSpecialExceptionsIndicator($data['SpecialExceptionsIndicator']);
                unset($data['SpecialExceptionsIndicator']);
            }
            elseif (\array_key_exists('SpecialExceptionsIndicator', $data) && $data['SpecialExceptionsIndicator'] === null) {
                $object->setSpecialExceptionsIndicator(null);
            }
            if (\array_key_exists('TobaccoIndicator', $data) && $data['TobaccoIndicator'] !== null) {
                $object->setTobaccoIndicator($data['TobaccoIndicator']);
                unset($data['TobaccoIndicator']);
            }
            elseif (\array_key_exists('TobaccoIndicator', $data) && $data['TobaccoIndicator'] === null) {
                $object->setTobaccoIndicator(null);
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
            if ($object->isInitialized('diagnosticSpecimensIndicator') && null !== $object->getDiagnosticSpecimensIndicator()) {
                $data['DiagnosticSpecimensIndicator'] = $object->getDiagnosticSpecimensIndicator();
            }
            if ($object->isInitialized('alcoholicBeveragesIndicator') && null !== $object->getAlcoholicBeveragesIndicator()) {
                $data['AlcoholicBeveragesIndicator'] = $object->getAlcoholicBeveragesIndicator();
            }
            if ($object->isInitialized('perishablesIndicator') && null !== $object->getPerishablesIndicator()) {
                $data['PerishablesIndicator'] = $object->getPerishablesIndicator();
            }
            if ($object->isInitialized('plantsIndicator') && null !== $object->getPlantsIndicator()) {
                $data['PlantsIndicator'] = $object->getPlantsIndicator();
            }
            if ($object->isInitialized('seedsIndicator') && null !== $object->getSeedsIndicator()) {
                $data['SeedsIndicator'] = $object->getSeedsIndicator();
            }
            if ($object->isInitialized('specialExceptionsIndicator') && null !== $object->getSpecialExceptionsIndicator()) {
                $data['SpecialExceptionsIndicator'] = $object->getSpecialExceptionsIndicator();
            }
            if ($object->isInitialized('tobaccoIndicator') && null !== $object->getTobaccoIndicator()) {
                $data['TobaccoIndicator'] = $object->getTobaccoIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles' => false];
        }
    }
}