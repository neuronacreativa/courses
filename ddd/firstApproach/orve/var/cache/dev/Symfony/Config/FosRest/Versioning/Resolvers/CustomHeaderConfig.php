<?php

namespace Symfony\Config\FosRest\Versioning\Resolvers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CustomHeaderConfig 
{
    private $enabled;
    private $headerName;
    
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
     * @default 'X-Accept-Version'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headerName($value): self
    {
        $this->headerName = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['header_name'])) {
            $this->headerName = $value['header_name'];
            unset($value['header_name']);
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
        if (null !== $this->headerName) {
            $output['header_name'] = $this->headerName;
        }
    
        return $output;
    }
    

}
