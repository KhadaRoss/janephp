<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContentManyReferencesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\ContentManyReferencesRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentManyReferencesRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ContentManyReferencesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentIds', $data)) {
                $values = [];
                foreach ($data['contentIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentIds($values);
            }
            if (\array_key_exists('references', $data) && $data['references'] !== null) {
                $object->setReferences($data['references']);
            }
            elseif (\array_key_exists('references', $data) && $data['references'] === null) {
                $object->setReferences(null);
            }
            if (\array_key_exists('shares', $data) && $data['shares'] !== null) {
                $object->setShares($data['shares']);
            }
            elseif (\array_key_exists('shares', $data) && $data['shares'] === null) {
                $object->setShares(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getContentIds() as $value) {
                $values[] = $value;
            }
            $data['contentIds'] = $values;
            if ($object->isInitialized('references') && null !== $object->getReferences()) {
                $data['references'] = $object->getReferences();
            }
            if ($object->isInitialized('shares') && null !== $object->getShares()) {
                $data['shares'] = $object->getShares();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\ContentManyReferencesRequest::class => false];
        }
    }
} else {
    class ContentManyReferencesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\ContentManyReferencesRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentManyReferencesRequest::class;
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
            $object = new \PicturePark\API\Model\ContentManyReferencesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentIds', $data)) {
                $values = [];
                foreach ($data['contentIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentIds($values);
            }
            if (\array_key_exists('references', $data) && $data['references'] !== null) {
                $object->setReferences($data['references']);
            }
            elseif (\array_key_exists('references', $data) && $data['references'] === null) {
                $object->setReferences(null);
            }
            if (\array_key_exists('shares', $data) && $data['shares'] !== null) {
                $object->setShares($data['shares']);
            }
            elseif (\array_key_exists('shares', $data) && $data['shares'] === null) {
                $object->setShares(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getContentIds() as $value) {
                $values[] = $value;
            }
            $data['contentIds'] = $values;
            if ($object->isInitialized('references') && null !== $object->getReferences()) {
                $data['references'] = $object->getReferences();
            }
            if ($object->isInitialized('shares') && null !== $object->getShares()) {
                $data['shares'] = $object->getShares();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\ContentManyReferencesRequest::class => false];
        }
    }
}