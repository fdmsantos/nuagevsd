<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class Subnets extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'subnets';
    
	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'subnets',
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'subnets/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => 'zones/{parentID}/subnets',
            'params'  => [
                'parentID'    => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
                'address'     => $this->params->stringJson(),
                'netmask'     => $this->params->stringJson(),
                'gateway'     => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'subnets/{ID}',
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
            'path'    => 'subnets/{ID}',
            'params'  => [
                'ID'          => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
                'address'     => $this->params->stringJson(),
                'netmask'     => $this->params->stringJson(),
                'gateway'     => $this->params->stringJson(),
            ],
        ];
    }

}