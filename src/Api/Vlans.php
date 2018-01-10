<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class Vlans extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'vlans';

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
                'gatewayID'    => $this->params->stringJson(),
                'description'  => $this->params->stringJson(),
                'status'       => $this->params->integerJson(),
                'templateID'   => $this->params->stringJson(),
                'type'         => $this->params->stringJson(),
                'value'        => $this->params->stringJson(),
                'vportID'      => $this->params->stringJson(),
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
                'gatewayID'    => $this->params->stringJson(),
                'description'  => $this->params->stringJson(),
                'status'       => $this->params->integerJson(),
                'templateID'   => $this->params->stringJson(),
                'type'         => $this->params->stringJson(),
                'value'        => $this->params->stringJson(),
                'vportID'      => $this->params->stringJson(),
            ],
        ];
    }
}