<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;

class Domains extends AbstractApi
{

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
                'parentID'    => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'templateID'  => $this->params->stringJson()
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
                'ID'   => $this->params->stringPath(),
                'name' => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
            ],
        ];
    }

    public function domainsByEnterprise(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'enterprises/{parentID}/domains',
            'params'  => [
                'parentID'    => $this->params->stringPath(),
            ]
        ];
    }

}