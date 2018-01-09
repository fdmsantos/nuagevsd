<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;

class AddressRange extends AbstractApi
{

	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'addressranges',
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'addressranges/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => '{parentType}/{parentID}/addressranges',
            'params'  => [
                'parentType'   => $this->params->stringPath(),
                'parentID'     => $this->params->stringPath(),
                'name'         => $this->params->stringJson(),
                'DHCPPoolType' => $this->params->stringJson(),
                'entityScope'  => $this->params->stringJson(),
                'IpType'       => $this->params->stringJson(),
                'maxAddress'   => $this->params->stringJson(),
                'minAddress'   => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'addressranges/{ID}',
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
            'path'    => 'addressranges/{ID}',
            'params'  => [
                'ID'           => $this->params->stringPath(),
                'DHCPPoolType' => $this->params->stringJson(),
                'entityScope'  => $this->params->stringJson(),
                'IpType'       => $this->params->stringJson(),
                'maxAddress'   => $this->params->stringJson(),
                'minAddress'   => $this->params->stringJson(),
            ],
        ];
    }

    public function listByParent(): array
    {
        return [
            'method'  => 'GET',
            'path'    => '{parentType}/{parentID}/addressranges',
            'params'  => [
                'parentType'        => $this->params->stringPath(),
                'parentID'          => $this->params->stringPath(),
            ]
        ];
    }
}