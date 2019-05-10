<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class Domains extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'domains';

	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'domains',
            'params'  => [
                'parentID' => $this->params->stringFilter(),
            ]
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'domains/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => 'enterprises/{parentID}/domains',
            'params'  => [
                'parentID'        => $this->params->stringPath(),
                'name'            => $this->params->stringJson(),
                'templateID'      => $this->params->stringJson(),
                'description'     => $this->params->stringJson(),
                'DHCPBehavior'    => $this->params->stringJson(),
                'underlayEnabled' => $this->params->stringJson(),
                'PATEnabled'      => $this->params->stringJson(),
                'encryption'      => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'domains/{ID}',
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
            'path'    => 'domains/{ID}',
            'params'  => [
                'ID'          => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
            ],
        ];
    }
}