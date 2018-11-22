<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class DomainTemplates extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'domaintemplates';
	
	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'domaintemplates',
            'params'  => [
                'parentID' => $this->params->stringPath(),
                'name'     => $this->params->stringFilter()
            ]
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'domaintemplates/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => 'enterprises/{parentID}/domaintemplates',
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
            'path'    => 'domaintemplates/{ID}',
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
            'path'    => 'domaintemplates/{ID}',
            'params'  => [
                'ID'          => $this->params->stringPath(),
                'name'        => $this->params->stringJson(),
                'description' => $this->params->stringJson(),
            ],
        ];
    }


}