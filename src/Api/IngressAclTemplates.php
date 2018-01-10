<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class IngressAclTemplates extends AbstractApi
{
    use ParentRelationTrait;
    
    private $resourceKey = 'ingressacltemplates';

	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'ingressacltemplates',
            'params'  => [
                'parentID' => $this->params->stringFilter(),
            ]
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'ingressacltemplates/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => '{parentType}/{parentID}/ingressacltemplates',
            'params'  => [
                'parentType'        => $this->params->stringPath(),
                'parentID'          => $this->params->stringPath(),
                'name'              => $this->params->stringJson(),
                'defaultAllowIP'    => $this->params->booleanJson(),
                'defaultAllowNonIP' => $this->params->booleanJson(),
                'active'            => $this->params->booleanJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'ingressacltemplates/{ID}',
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
            'path'    => 'ingressacltemplates/{ID}',
            'params'  => [
                'ID'   => $this->params->stringPath(),
                'name' => $this->params->stringJson(),
                'defaultAllowIP' => $this->params->booleanJson(),
                'defaultAllowNonIP' => $this->params->booleanJson(),
                'active' => $this->params->booleanJson(),
            ],
        ];
    }

}