<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class NsPorts extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'nsports';
    
	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => $this->resourceKey
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => $this->resourceKey.'/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => '{parentType}/{parentID}/'.$this->resourceKey,
            'params'  => [
                'parentType'   => $this->params->stringPath(),
                'parentID'     => $this->params->stringPath(),
                'name'         => $this->params->stringJson(),
                'templateID'   => $this->params->stringJson(),
                'description'  => $this->params->stringJson(),
                'mtu'          => $this->params->integerJson(),
                'NATTraversal' => $this->params->stringJson(),
                'physicalName' => $this->params->stringJson(),
                'portType'     => $this->params->stringJson(),
                'speed'        => $this->params->stringJson(),
                'status'       => $this->params->stringJson(),
                'VLANRange'    => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => $this->resourceKey.'/{ID}',
            'params'  => [
                'ID'    => $this->params->stringPath(),
                'type'  => $this->params->stringJson(),
                'value' => $this->params->stringJson(),
            ],
            'responseChoice' => 1
        ];
    }

    public function update(): array
    {
        return [
            'method'  => 'PUT',
            'path'    => $this->resourceKey.'/{ID}',
            'params'  => [
                'ID'           => $this->params->stringPath(),
                'name'         => $this->params->stringJson(),
                'templateID'   => $this->params->stringJson(),
                'description'  => $this->params->stringJson(),
                'mtu'          => $this->params->integerJson(),
                'NATTraversal' => $this->params->stringJson(),
                'physicalName' => $this->params->stringJson(),
                'portType'     => $this->params->stringJson(),
                'speed'        => $this->params->stringJson(),
                'status'       => $this->params->stringJson(),
                'VLANRange'    => $this->params->stringJson(),
            ],
        ];
    }
}