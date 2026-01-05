<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShipmentServiceOptionsRestrictedArticlesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        if (\array_key_exists('DiagnosticSpecimensIndicator', $data)) {
            $object->setDiagnosticSpecimensIndicator($data['DiagnosticSpecimensIndicator']);
            unset($data['DiagnosticSpecimensIndicator']);
        }
        if (\array_key_exists('AlcoholicBeveragesIndicator', $data)) {
            $object->setAlcoholicBeveragesIndicator($data['AlcoholicBeveragesIndicator']);
            unset($data['AlcoholicBeveragesIndicator']);
        }
        if (\array_key_exists('PerishablesIndicator', $data)) {
            $object->setPerishablesIndicator($data['PerishablesIndicator']);
            unset($data['PerishablesIndicator']);
        }
        if (\array_key_exists('PlantsIndicator', $data)) {
            $object->setPlantsIndicator($data['PlantsIndicator']);
            unset($data['PlantsIndicator']);
        }
        if (\array_key_exists('SeedsIndicator', $data)) {
            $object->setSeedsIndicator($data['SeedsIndicator']);
            unset($data['SeedsIndicator']);
        }
        if (\array_key_exists('SpecialExceptionsIndicator', $data)) {
            $object->setSpecialExceptionsIndicator($data['SpecialExceptionsIndicator']);
            unset($data['SpecialExceptionsIndicator']);
        }
        if (\array_key_exists('TobaccoIndicator', $data)) {
            $object->setTobaccoIndicator($data['TobaccoIndicator']);
            unset($data['TobaccoIndicator']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('diagnosticSpecimensIndicator') && null !== $data->getDiagnosticSpecimensIndicator()) {
            $dataArray['DiagnosticSpecimensIndicator'] = $data->getDiagnosticSpecimensIndicator();
        }
        if ($data->isInitialized('alcoholicBeveragesIndicator') && null !== $data->getAlcoholicBeveragesIndicator()) {
            $dataArray['AlcoholicBeveragesIndicator'] = $data->getAlcoholicBeveragesIndicator();
        }
        if ($data->isInitialized('perishablesIndicator') && null !== $data->getPerishablesIndicator()) {
            $dataArray['PerishablesIndicator'] = $data->getPerishablesIndicator();
        }
        if ($data->isInitialized('plantsIndicator') && null !== $data->getPlantsIndicator()) {
            $dataArray['PlantsIndicator'] = $data->getPlantsIndicator();
        }
        if ($data->isInitialized('seedsIndicator') && null !== $data->getSeedsIndicator()) {
            $dataArray['SeedsIndicator'] = $data->getSeedsIndicator();
        }
        if ($data->isInitialized('specialExceptionsIndicator') && null !== $data->getSpecialExceptionsIndicator()) {
            $dataArray['SpecialExceptionsIndicator'] = $data->getSpecialExceptionsIndicator();
        }
        if ($data->isInitialized('tobaccoIndicator') && null !== $data->getTobaccoIndicator()) {
            $dataArray['TobaccoIndicator'] = $data->getTobaccoIndicator();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles::class => false];
    }
}