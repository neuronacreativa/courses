<?php

namespace Symfony\Config\FosRest;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ZoneConfig 
{
    private $path;
    private $host;
    private $methods;
    private $ips;
    
    /**
     * use the urldecoded format
     * @example ^/path to resource/
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
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function methods($value): self
    {
        $this->methods = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function ips($value): self
    {
        $this->ips = $value;
    
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
    
        if (isset($value['ips'])) {
            $this->ips = $value['ips'];
            unset($value['ips']);
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
        if (null !== $this->ips) {
            $output['ips'] = $this->ips;
        }
    
        return $output;
    }
    

}
