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
    class PermissionUserRoleRightsOfPermissionSetRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userRoleId', $data) && $data['userRoleId'] !== null) {
                $object->setUserRoleId($data['userRoleId']);
            }
            elseif (\array_key_exists('userRoleId', $data) && $data['userRoleId'] === null) {
                $object->setUserRoleId(null);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('rights', $data) && $data['rights'] !== null) {
                $values = [];
                foreach ($data['rights'] as $value) {
                    $values[] = $value;
                }
                $object->setRights($values);
            }
            elseif (\array_key_exists('rights', $data) && $data['rights'] === null) {
                $object->setRights(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('userRoleId') && null !== $object->getUserRoleId()) {
                $data['userRoleId'] = $object->getUserRoleId();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('rights') && null !== $object->getRights()) {
                $values = [];
                foreach ($object->getRights() as $value) {
                    $values[] = $value;
                }
                $data['rights'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class => false];
        }
    }
} else {
    class PermissionUserRoleRightsOfPermissionSetRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class;
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
            $object = new \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userRoleId', $data) && $data['userRoleId'] !== null) {
                $object->setUserRoleId($data['userRoleId']);
            }
            elseif (\array_key_exists('userRoleId', $data) && $data['userRoleId'] === null) {
                $object->setUserRoleId(null);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('rights', $data) && $data['rights'] !== null) {
                $values = [];
                foreach ($data['rights'] as $value) {
                    $values[] = $value;
                }
                $object->setRights($values);
            }
            elseif (\array_key_exists('rights', $data) && $data['rights'] === null) {
                $object->setRights(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('userRoleId') && null !== $object->getUserRoleId()) {
                $data['userRoleId'] = $object->getUserRoleId();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('rights') && null !== $object->getRights()) {
                $values = [];
                foreach ($object->getRights() as $value) {
                    $values[] = $value;
                }
                $data['rights'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class => false];
        }
    }
}