<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class Zones extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'zones';
    
	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'zones',
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'zones/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => 'domains/{parentID}/zones',
            'params'  => [
                'parentID'    => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'zones/{ID}',
            'params'  => [
                'ID' => $this->params->stringPath(),
            ],
            'responseChoice' => 1
        ];
    }

    public function update(): array
    {
        return [
            'method'  => 'PUT',
            'path'    => 'zones/{ID}',
            'params'  => [
                'ID'          => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
            ],
        ];
    }
}