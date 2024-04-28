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
    class OutputDataVideoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \PicturePark\API\Model\OutputDataVideo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\OutputDataVideo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\OutputDataVideo();
            if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
                $data['durationInSeconds'] = (double) $data['durationInSeconds'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
                $object->setFileExtension($data['fileExtension']);
                unset($data['fileExtension']);
            }
            elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
                $object->setFileExtension(null);
            }
            if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
                $object->setFilePath($data['filePath']);
                unset($data['filePath']);
            }
            elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
                $object->setFilePath(null);
            }
            if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
                $object->setFileSizeInBytes($data['fileSizeInBytes']);
                unset($data['fileSizeInBytes']);
            }
            elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
                $object->setFileSizeInBytes(null);
            }
            if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
                $object->setSha1Hash($data['sha1Hash']);
                unset($data['sha1Hash']);
            }
            elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
                $object->setSha1Hash(null);
            }
            if (\array_key_exists('originalFileName', $data) && $data['originalFileName'] !== null) {
                $object->setOriginalFileName($data['originalFileName']);
                unset($data['originalFileName']);
            }
            elseif (\array_key_exists('originalFileName', $data) && $data['originalFileName'] === null) {
                $object->setOriginalFileName(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('durationInSeconds', $data)) {
                $object->setDurationInSeconds($data['durationInSeconds']);
                unset($data['durationInSeconds']);
            }
            if (\array_key_exists('width', $data)) {
                $object->setWidth($data['width']);
                unset($data['width']);
            }
            if (\array_key_exists('height', $data)) {
                $object->setHeight($data['height']);
                unset($data['height']);
            }
            if (\array_key_exists('sprites', $data) && $data['sprites'] !== null) {
                $values = [];
                foreach ($data['sprites'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\Sprite::class, 'json', $context);
                }
                $object->setSprites($values);
                unset($data['sprites']);
            }
            elseif (\array_key_exists('sprites', $data) && $data['sprites'] === null) {
                $object->setSprites(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fileExtension') && null !== $object->getFileExtension()) {
                $data['fileExtension'] = $object->getFileExtension();
            }
            if ($object->isInitialized('filePath') && null !== $object->getFilePath()) {
                $data['filePath'] = $object->getFilePath();
            }
            if ($object->isInitialized('fileSizeInBytes') && null !== $object->getFileSizeInBytes()) {
                $data['fileSizeInBytes'] = $object->getFileSizeInBytes();
            }
            if ($object->isInitialized('sha1Hash') && null !== $object->getSha1Hash()) {
                $data['sha1Hash'] = $object->getSha1Hash();
            }
            if ($object->isInitialized('originalFileName') && null !== $object->getOriginalFileName()) {
                $data['originalFileName'] = $object->getOriginalFileName();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('durationInSeconds') && null !== $object->getDurationInSeconds()) {
                $data['durationInSeconds'] = $object->getDurationInSeconds();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            if ($object->isInitialized('sprites') && null !== $object->getSprites()) {
                $values = [];
                foreach ($object->getSprites() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sprites'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\PicturePark\API\Model\OutputDataVideo::class => false];
        }
    }
} else {
    class OutputDataVideoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \PicturePark\API\Model\OutputDataVideo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\OutputDataVideo::class;
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
            $object = new \PicturePark\API\Model\OutputDataVideo();
            if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
                $data['durationInSeconds'] = (double) $data['durationInSeconds'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
                $object->setFileExtension($data['fileExtension']);
                unset($data['fileExtension']);
            }
            elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
                $object->setFileExtension(null);
            }
            if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
                $object->setFilePath($data['filePath']);
                unset($data['filePath']);
            }
            elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
                $object->setFilePath(null);
            }
            if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
                $object->setFileSizeInBytes($data['fileSizeInBytes']);
                unset($data['fileSizeInBytes']);
            }
            elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
                $object->setFileSizeInBytes(null);
            }
            if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
                $object->setSha1Hash($data['sha1Hash']);
                unset($data['sha1Hash']);
            }
            elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
                $object->setSha1Hash(null);
            }
            if (\array_key_exists('originalFileName', $data) && $data['originalFileName'] !== null) {
                $object->setOriginalFileName($data['originalFileName']);
                unset($data['originalFileName']);
            }
            elseif (\array_key_exists('originalFileName', $data) && $data['originalFileName'] === null) {
                $object->setOriginalFileName(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('durationInSeconds', $data)) {
                $object->setDurationInSeconds($data['durationInSeconds']);
                unset($data['durationInSeconds']);
            }
            if (\array_key_exists('width', $data)) {
                $object->setWidth($data['width']);
                unset($data['width']);
            }
            if (\array_key_exists('height', $data)) {
                $object->setHeight($data['height']);
                unset($data['height']);
            }
            if (\array_key_exists('sprites', $data) && $data['sprites'] !== null) {
                $values = [];
                foreach ($data['sprites'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\Sprite::class, 'json', $context);
                }
                $object->setSprites($values);
                unset($data['sprites']);
            }
            elseif (\array_key_exists('sprites', $data) && $data['sprites'] === null) {
                $object->setSprites(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('fileExtension') && null !== $object->getFileExtension()) {
                $data['fileExtension'] = $object->getFileExtension();
            }
            if ($object->isInitialized('filePath') && null !== $object->getFilePath()) {
                $data['filePath'] = $object->getFilePath();
            }
            if ($object->isInitialized('fileSizeInBytes') && null !== $object->getFileSizeInBytes()) {
                $data['fileSizeInBytes'] = $object->getFileSizeInBytes();
            }
            if ($object->isInitialized('sha1Hash') && null !== $object->getSha1Hash()) {
                $data['sha1Hash'] = $object->getSha1Hash();
            }
            if ($object->isInitialized('originalFileName') && null !== $object->getOriginalFileName()) {
                $data['originalFileName'] = $object->getOriginalFileName();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('durationInSeconds') && null !== $object->getDurationInSeconds()) {
                $data['durationInSeconds'] = $object->getDurationInSeconds();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            if ($object->isInitialized('sprites') && null !== $object->getSprites()) {
                $values = [];
                foreach ($object->getSprites() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sprites'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\PicturePark\API\Model\OutputDataVideo::class => false];
        }
    }
}