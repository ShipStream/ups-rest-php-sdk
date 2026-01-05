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
class LabelResultsMailInnovationsLabelImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LabelImageFormat', $data)) {
            $object->setLabelImageFormat($this->denormalizer->denormalize($data['LabelImageFormat'], \ShipStream\Ups\Api\Model\MailInnovationsLabelImageLabelImageFormat::class, 'json', $context));
            unset($data['LabelImageFormat']);
        }
        if (\array_key_exists('GraphicImage', $data)) {
            $object->setGraphicImage($data['GraphicImage']);
            unset($data['GraphicImage']);
        }
        if (\array_key_exists('HTMLImage', $data)) {
            $object->setHTMLImage($data['HTMLImage']);
            unset($data['HTMLImage']);
        }
        if (\array_key_exists('PDF417', $data)) {
            $object->setPDF417($data['PDF417']);
            unset($data['PDF417']);
        }
        if (\array_key_exists('InternationalSignatureGraphicImage', $data)) {
            $object->setInternationalSignatureGraphicImage($data['InternationalSignatureGraphicImage']);
            unset($data['InternationalSignatureGraphicImage']);
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
        $dataArray['LabelImageFormat'] = $this->normalizer->normalize($data->getLabelImageFormat(), 'json', $context);
        $dataArray['GraphicImage'] = $data->getGraphicImage();
        if ($data->isInitialized('hTMLImage') && null !== $data->getHTMLImage()) {
            $dataArray['HTMLImage'] = $data->getHTMLImage();
        }
        if ($data->isInitialized('pDF417') && null !== $data->getPDF417()) {
            $dataArray['PDF417'] = $data->getPDF417();
        }
        if ($data->isInitialized('internationalSignatureGraphicImage') && null !== $data->getInternationalSignatureGraphicImage()) {
            $dataArray['InternationalSignatureGraphicImage'] = $data->getInternationalSignatureGraphicImage();
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
        return [\ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage::class => false];
    }
}