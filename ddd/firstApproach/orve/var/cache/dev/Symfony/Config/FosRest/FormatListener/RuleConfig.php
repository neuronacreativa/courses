<?php

namespace Symfony\Config\FosRest\FormatListener;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RuleConfig 
{
    private $path;
    private $host;
    private $methods;
    private $attributes;
    private $stop;
    private $preferExtension;
    private $fallbackFormat;
    private $priorities;
    
    /**
     * URL path info
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * URL host name
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * Method for URL
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function methods($value = NULL): self
    {
        $this->methods = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function attribute(string $name, $value): self
    {
        $this->attributes[$name] = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function stop($value): self
    {
        $this->stop = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function preferExtension($value): self
    {
        $this->preferExtension = $value;
    
        return $this;
    }
    
    /**
     * @default 'html'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fallbackFormat($value): self
    {
        $this->fallbackFormat = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function priorities($value): self
    {
        $this->priorities = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['methods'])) {
            $this->methods = $value['methods'];
            unset($value['methods']);
        }
    
        if (isset($value['attributes'])) {
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }
    
        if (isset($value['stop'])) {
            $this->stop = $value['stop'];
            unset($value['stop']);
        }
    
        if (isset($value['prefer_extension'])) {
            $this->preferExtension = $value['prefer_extension'];
            unset($value['prefer_extension']);
        }
    
        if (isset($value['fallback_format'])) {
            $this->fallbackFormat = $value['fallback_format'];
            unset($value['fallback_format']);
        }
    
        if (isset($value['priorities'])) {
            $this->priorities = $value['priorities'];
            unset($value['priorities']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->methods) {
            $output['methods'] = $this->methods;
        }
        if (null !== $this->attributes) {
            $output['attributes'] = $this->attributes;
        }
        if (null !== $this->stop) {
            $output['stop'] = $this->stop;
        }
        if (null !== $this->preferExtension) {
            $output['prefer_extension'] = $this->preferExtension;
        }
        if (null !== $this->fallbackFormat) {
            $output['fallback_format'] = $this->fallbackFormat;
        }
        if (null !== $this->priorities) {
            $output['priorities'] = $this->priorities;
        }
    
        return $output;
    }
    

}
