<?php

namespace Symfony\Config\FosRest;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'BodyListener' . \DIRECTORY_SEPARATOR . 'ArrayNormalizerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class BodyListenerConfig 
{
    private $enabled;
    private $service;
    private $defaultFormat;
    private $throwExceptionOnUnsupportedContentType;
    private $decoders;
    private $arrayNormalizer;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultFormat($value): self
    {
        $this->defaultFormat = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function throwExceptionOnUnsupportedContentType($value): self
    {
        $this->throwExceptionOnUnsupportedContentType = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function decoder(string $name, $value): self
    {
        $this->decoders[$name] = $value;
    
        return $this;
    }
    
    public function arrayNormalizer(array $value = []): \Symfony\Config\FosRest\BodyListener\ArrayNormalizerConfig
    {
        if (null === $this->arrayNormalizer) {
            $this->arrayNormalizer = new \Symfony\Config\FosRest\BodyListener\ArrayNormalizerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "arrayNormalizer()" has already been initialized. You cannot pass values the second time you call arrayNormalizer().');
        }
    
        return $this->arrayNormalizer;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['service'])) {
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if (isset($value['default_format'])) {
            $this->defaultFormat = $value['default_format'];
            unset($value['default_format']);
        }
    
        if (isset($value['throw_exception_on_unsupported_content_type'])) {
            $this->throwExceptionOnUnsupportedContentType = $value['throw_exception_on_unsupported_content_type'];
            unset($value['throw_exception_on_unsupported_content_type']);
        }
    
        if (isset($value['decoders'])) {
            $this->decoders = $value['decoders'];
            unset($value['decoders']);
        }
    
        if (isset($value['array_normalizer'])) {
            $this->arrayNormalizer = new \Symfony\Config\FosRest\BodyListener\ArrayNormalizerConfig($value['array_normalizer']);
            unset($value['array_normalizer']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->service) {
            $output['service'] = $this->service;
        }
        if (null !== $this->defaultFormat) {
            $output['default_format'] = $this->defaultFormat;
        }
        if (null !== $this->throwExceptionOnUnsupportedContentType) {
            $output['throw_exception_on_unsupported_content_type'] = $this->throwExceptionOnUnsupportedContentType;
        }
        if (null !== $this->decoders) {
            $output['decoders'] = $this->decoders;
        }
        if (null !== $this->arrayNormalizer) {
            $output['array_normalizer'] = $this->arrayNormalizer->toArray();
        }
    
        return $output;
    }
    

}
