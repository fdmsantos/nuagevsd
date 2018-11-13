<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class StaticRoutes extends AbstractApi
{
    use ParentRelationTrait;
    private $resourceKey = 'staticroutes';

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
                'parentType'         => $this->params->stringPath(),
                'parentID'           => $this->params->stringPath(),
                'address'            => $this->params->stringPath(),
                'associatedSubnetID' => $this->params->stringPath(),
                'BFDEnabled'         => $this->params->booleanJson(),
                'IPType'             => $this->params->stringJson(),
                'IPv6Address'        => $this->params->stringJson(),
                'netmask'            => $this->params->stringJson(),
                'nextHopIp'          => $this->params->stringJson(),
                'routeDistinguisher' => $this->params->stringJson(),
                'type'               => $this->params->stringJson(),
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
                'ID'                 => $this->params->stringPath(),
                'address'            => $this->params->stringPath(),
                'associatedSubnetID' => $this->params->stringPath(),
                'BFDEnabled'         => $this->params->booleanJson(),
                'IPType'             => $this->params->stringJson(),
                'IPv6Address'        => $this->params->stringJson(),
                'netmask'            => $this->params->stringJson(),
                'nextHopIp'          => $this->params->stringJson(),
                'routeDistinguisher' => $this->params->stringJson(),
                'type'               => $this->params->stringJson(),
            ],
        ];
    }
}

