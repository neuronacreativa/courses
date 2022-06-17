<?php

namespace Symfony\Config\FosRest\Versioning\Resolvers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class QueryConfig 
{
    private $enabled;
    private $parameterName;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'version'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parameterName($value): self
    {
        $this->parameterName = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['parameter_name'])) {
            $this->parameterName = $value['parameter_name'];
            unset($value['parameter_name']);
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
        if (null !== $this->parameterName) {
            $output['parameter_name'] = $this->parameterName;
        }
    
        return $output;
    }
    

}
