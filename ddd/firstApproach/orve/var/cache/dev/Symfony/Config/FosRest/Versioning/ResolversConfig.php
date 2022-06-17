<?php

namespace Symfony\Config\FosRest\Versioning;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'Resolvers' . \DIRECTORY_SEPARATOR . 'QueryConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'Resolvers' . \DIRECTORY_SEPARATOR . 'CustomHeaderConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'Resolvers' . \DIRECTORY_SEPARATOR . 'MediaTypeConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ResolversConfig 
{
    private $query;
    private $customHeader;
    private $mediaType;
    
    public function query(array $value = []): \Symfony\Config\FosRest\Versioning\Resolvers\QueryConfig
    {
        if (null === $this->query) {
            $this->query = new \Symfony\Config\FosRest\Versioning\Resolvers\QueryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "query()" has already been initialized. You cannot pass values the second time you call query().');
        }
    
        return $this->query;
    }
    
    public function customHeader(array $value = []): \Symfony\Config\FosRest\Versioning\Resolvers\CustomHeaderConfig
    {
        if (null === $this->customHeader) {
            $this->customHeader = new \Symfony\Config\FosRest\Versioning\Resolvers\CustomHeaderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "customHeader()" has already been initialized. You cannot pass values the second time you call customHeader().');
        }
    
        return $this->customHeader;
    }
    
    public function mediaType(array $value = []): \Symfony\Config\FosRest\Versioning\Resolvers\MediaTypeConfig
    {
        if (null === $this->mediaType) {
            $this->mediaType = new \Symfony\Config\FosRest\Versioning\Resolvers\MediaTypeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mediaType()" has already been initialized. You cannot pass values the second time you call mediaType().');
        }
    
        return $this->mediaType;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['query'])) {
            $this->query = new \Symfony\Config\FosRest\Versioning\Resolvers\QueryConfig($value['query']);
            unset($value['query']);
        }
    
        if (isset($value['custom_header'])) {
            $this->customHeader = new \Symfony\Config\FosRest\Versioning\Resolvers\CustomHeaderConfig($value['custom_header']);
            unset($value['custom_header']);
        }
    
        if (isset($value['media_type'])) {
            $this->mediaType = new \Symfony\Config\FosRest\Versioning\Resolvers\MediaTypeConfig($value['media_type']);
            unset($value['media_type']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->query) {
            $output['query'] = $this->query->toArray();
        }
        if (null !== $this->customHeader) {
            $output['custom_header'] = $this->customHeader->toArray();
        }
        if (null !== $this->mediaType) {
            $output['media_type'] = $this->mediaType->toArray();
        }
    
        return $output;
    }
    

}
