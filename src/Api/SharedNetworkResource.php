<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;

class SharedNetworkResource extends AbstractApi
{
    private $resourceKey = 'sharednetworkresources';

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
            'path'    => $this->resourceKey,
            'params'  => [
                'ID'    => $this->params->stringPath(),
                'name'         => $this->params->stringJson(),
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
                'ID'           => $this->params->stringPath(),
                'name'         => $this->params->stringJson(),
            ],
        ];
    }
}