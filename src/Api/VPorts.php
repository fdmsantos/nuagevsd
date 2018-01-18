<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class VPorts extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'vports';

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
                'active'       => $this->params->stringJson(),
                'addressSpoofing' => $this->params->stringJson(),
                'description'  => $this->params->stringJson(),
                'DPI'          => $this->params->stringJson(),
                'type'         => $this->params->stringJson(),
                'VLANID'       => $this->params->stringJson(),
                'zoneID'       => $this->params->stringJson(),
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
                'active'       => $this->params->stringJson(),
                'addressSpoofing' => $this->params->stringJson(),
                'description'  => $this->params->stringJson(),
                'DPI'          => $this->params->stringJson(),
                'type'         => $this->params->stringJson(),
                'VLANID'       => $this->params->stringJson(),
                'zoneID'       => $this->params->stringJson(),
            ],
        ];
    }
}