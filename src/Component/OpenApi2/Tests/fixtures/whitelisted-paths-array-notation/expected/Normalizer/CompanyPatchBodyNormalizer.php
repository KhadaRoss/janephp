<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CompanyPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('wants_timestamp_timers', $data)) {
                $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
            }
            if (\array_key_exists('weekly_capacity', $data)) {
                $object->setWeeklyCapacity($data['weekly_capacity']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
                $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
            }
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody::class => false];
        }
    }
} else {
    class CompanyPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody::class;
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
            $object = new \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('wants_timestamp_timers', $data)) {
                $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
            }
            if (\array_key_exists('weekly_capacity', $data)) {
                $object->setWeeklyCapacity($data['weekly_capacity']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
                $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
            }
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody::class => false];
        }
    }
}