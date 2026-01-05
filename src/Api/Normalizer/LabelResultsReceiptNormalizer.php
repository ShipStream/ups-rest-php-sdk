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
class LabelResultsReceiptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelResultsReceipt::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelResultsReceipt::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LabelResultsReceipt();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('HTMLImage', $data)) {
            $object->setHTMLImage($data['HTMLImage']);
            unset($data['HTMLImage']);
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($this->denormalizer->denormalize($data['Image'], \ShipStream\Ups\Api\Model\ReceiptImage::class, 'json', $context));
            unset($data['Image']);
        }
        if (\array_key_exists('URL', $data)) {
            $object->setURL($data['URL']);
            unset($data['URL']);
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
        if ($data->isInitialized('hTMLImage') && null !== $data->getHTMLImage()) {
            $dataArray['HTMLImage'] = $data->getHTMLImage();
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $this->normalizer->normalize($data->getImage(), 'json', $context);
        }
        if ($data->isInitialized('uRL') && null !== $data->getURL()) {
            $dataArray['URL'] = $data->getURL();
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
        return [\ShipStream\Ups\Api\Model\LabelResultsReceipt::class => false];
    }
}