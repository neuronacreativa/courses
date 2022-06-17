<?php

namespace Symfony\Config\FosRest\Versioning\Resolvers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MediaTypeConfig 
{
    private $enabled;
    private $regex;
    
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
     * @default '/(v|version)=(?P<version>[0-9\\.]+)/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function regex($value): self
    {
        $this->regex = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['regex'])) {
            $this->regex = $value['regex'];
            unset($value['regex']);
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
        if (null !== $this->regex) {
            $output['regex'] = $this->regex;
        }
    
        return $output;
    }
    

}
