<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;

class Enterprises extends AbstractApi
{
	
	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'enterprises',
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'enterprises/{id}',
            'params'  => [
            	'id' => $this->params->idPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => 'enterprises',
            'params'  => [
                'name'        => $this->params->name(),
                'description' => $this->params->description()
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'enterprises/{id}',
            'params'  => [
                'id' => $this->params->idPath(),
            ],
            'responseChoice' => 1
        ];
    }

    public function update(): array
    {
        return [
            'method'  => 'PUT',
            'path'    => 'enterprises/{id}',
            'params'  => [
                'id'   => $this->params->idPath(),
                'name' => $this->params->name(),
                'description' => $this->params->description(),
            ],
        ];
    }


}