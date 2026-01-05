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
class POMPickupNotificationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\POMPickupNotifications::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\POMPickupNotifications::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\POMPickupNotifications();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CompanyName', $data)) {
            $object->setCompanyName($data['CompanyName']);
            unset($data['CompanyName']);
        }
        if (\array_key_exists('EMailNotification', $data)) {
            $values = [];
            foreach ($data['EMailNotification'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PickupNotificationsEMailNotification::class, 'json', $context);
            }
            $object->setEMailNotification($values);
            unset($data['EMailNotification']);
        }
        if (\array_key_exists('FailedEMail', $data)) {
            $object->setFailedEMail($data['FailedEMail']);
            unset($data['FailedEMail']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('companyName') && null !== $data->getCompanyName()) {
            $dataArray['CompanyName'] = $data->getCompanyName();
        }
        if ($data->isInitialized('eMailNotification') && null !== $data->getEMailNotification()) {
            $values = [];
            foreach ($data->getEMailNotification() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['EMailNotification'] = $values;
        }
        if ($data->isInitialized('failedEMail') && null !== $data->getFailedEMail()) {
            $dataArray['FailedEMail'] = $data->getFailedEMail();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\POMPickupNotifications::class => false];
    }
}