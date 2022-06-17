<?php

namespace Symfony\Config\FosRest;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SerializerConfig 
{
    private $version;
    private $groups;
    private $serializeNull;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): self
    {
        $this->version = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function groups($value): self
    {
        $this->groups = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function serializeNull($value): self
    {
        $this->serializeNull = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['version'])) {
            $this->version = $value['version'];
            unset($value['version']);
        }
    
        if (isset($value['groups'])) {
            $this->groups = $value['groups'];
            unset($value['groups']);
        }
    
        if (isset($value['serialize_null'])) {
            $this->serializeNull = $value['serialize_null'];
            unset($value['serialize_null']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->version) {
            $output['version'] = $this->version;
        }
        if (null !== $this->groups) {
            $output['groups'] = $this->groups;
        }
        if (null !== $this->serializeNull) {
            $output['serialize_null'] = $this->serializeNull;
        }
    
        return $output;
    }
    

}
