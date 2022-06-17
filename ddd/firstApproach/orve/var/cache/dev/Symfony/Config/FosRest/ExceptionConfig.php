<?php

namespace Symfony\Config\FosRest;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ExceptionConfig 
{
    private $enabled;
    private $mapExceptionCodes;
    private $exceptionListener;
    private $serializeExceptions;
    private $flattenExceptionFormat;
    private $serializerErrorRenderer;
    private $codes;
    private $messages;
    private $debug;
    
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
     * Enables an event listener that maps exception codes to response status codes based on the map configured with the "fos_rest.exception.codes" option.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function mapExceptionCodes($value): self
    {
        $this->mapExceptionCodes = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function exceptionListener($value): self
    {
        $this->exceptionListener = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function serializeExceptions($value): self
    {
        $this->serializeExceptions = $value;
    
        return $this;
    }
    
    /**
     * @default 'legacy'
     * @param ParamConfigurator|'legacy'|'rfc7807' $value
     * @return $this
     */
    public function flattenExceptionFormat($value): self
    {
        $this->flattenExceptionFormat = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function serializerErrorRenderer($value): self
    {
        $this->serializerErrorRenderer = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function code(string $name, $value): self
    {
        $this->codes[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function message(string $name, $value): self
    {
        $this->messages[$name] = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->debug = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['map_exception_codes'])) {
            $this->mapExceptionCodes = $value['map_exception_codes'];
            unset($value['map_exception_codes']);
        }
    
        if (isset($value['exception_listener'])) {
            $this->exceptionListener = $value['exception_listener'];
            unset($value['exception_listener']);
        }
    
        if (isset($value['serialize_exceptions'])) {
            $this->serializeExceptions = $value['serialize_exceptions'];
            unset($value['serialize_exceptions']);
        }
    
        if (isset($value['flatten_exception_format'])) {
            $this->flattenExceptionFormat = $value['flatten_exception_format'];
            unset($value['flatten_exception_format']);
        }
    
        if (isset($value['serializer_error_renderer'])) {
            $this->serializerErrorRenderer = $value['serializer_error_renderer'];
            unset($value['serializer_error_renderer']);
        }
    
        if (isset($value['codes'])) {
            $this->codes = $value['codes'];
            unset($value['codes']);
        }
    
        if (isset($value['messages'])) {
            $this->messages = $value['messages'];
            unset($value['messages']);
        }
    
        if (isset($value['debug'])) {
            $this->debug = $value['debug'];
            unset($value['debug']);
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
        if (null !== $this->mapExceptionCodes) {
            $output['map_exception_codes'] = $this->mapExceptionCodes;
        }
        if (null !== $this->exceptionListener) {
            $output['exception_listener'] = $this->exceptionListener;
        }
        if (null !== $this->serializeExceptions) {
            $output['serialize_exceptions'] = $this->serializeExceptions;
        }
        if (null !== $this->flattenExceptionFormat) {
            $output['flatten_exception_format'] = $this->flattenExceptionFormat;
        }
        if (null !== $this->serializerErrorRenderer) {
            $output['serializer_error_renderer'] = $this->serializerErrorRenderer;
        }
        if (null !== $this->codes) {
            $output['codes'] = $this->codes;
        }
        if (null !== $this->messages) {
            $output['messages'] = $this->messages;
        }
        if (null !== $this->debug) {
            $output['debug'] = $this->debug;
        }
    
        return $output;
    }
    

}
