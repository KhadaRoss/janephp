<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('exact', $data)) {
                $values = [];
                foreach ($data['exact'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class, 'json', $context);
                }
                $object->setExact($values);
                unset($data['exact']);
            }
            if (\array_key_exists('possible', $data)) {
                $values_1 = [];
                foreach ($data['possible'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class, 'json', $context);
                }
                $object->setPossible($values_1);
                unset($data['possible']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('exact') && null !== $object->getExact()) {
                $values = [];
                foreach ($object->getExact() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['exact'] = $values;
            }
            if ($object->isInitialized('possible') && null !== $object->getPossible()) {
                $values_1 = [];
                foreach ($object->getPossible() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['possible'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class;
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('exact', $data)) {
                $values = [];
                foreach ($data['exact'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class, 'json', $context);
                }
                $object->setExact($values);
                unset($data['exact']);
            }
            if (\array_key_exists('possible', $data)) {
                $values_1 = [];
                foreach ($data['possible'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class, 'json', $context);
                }
                $object->setPossible($values_1);
                unset($data['possible']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('exact') && null !== $object->getExact()) {
                $values = [];
                foreach ($object->getExact() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['exact'] = $values;
            }
            if ($object->isInitialized('possible') && null !== $object->getPossible()) {
                $values_1 = [];
                foreach ($object->getPossible() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['possible'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class => false];
        }
    }
}