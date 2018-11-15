<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class EgressAclTemplates extends AbstractApi
{
    use ParentRelationTrait;

    private $resourceKey = 'egressacltemplates';

	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'egressacltemplates',
            'params'  => [
                'parentID' => $this->params->stringFilter(),
            ]
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'egressacltemplates/{ID}',
            'params'  => [
            	'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => '{parentType}/{parentID}/egressacltemplates',
            'params'  => [
                'parentType'        => $this->params->stringPath(),
                'parentID'          => $this->params->stringPath(),
                'name'              => $this->params->stringJson(),
                'defaultAllowIP'    => $this->params->booleanJson(),
                'defaultAllowNonIP' => $this->params->booleanJson(),
                'active'            => $this->params->booleanJson(),
                'allowAddressSpoof' => $this->params->booleanJson(),
                'priorityType'      => $this->params->stringJson(),
                'description'       => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => 'egressacltemplates/{ID}',
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
            'path'    => 'egressacltemplates/{ID}',
            'params'  => [
                'ID'                => $this->params->stringPath(),
                'name'              => $this->params->stringJson(),
                'defaultAllowIP'    => $this->params->booleanJson(),
                'defaultAllowNonIP' => $this->params->booleanJson(),
                'active'            => $this->params->booleanJson(),
                'allowAddressSpoof' => $this->params->booleanJson(),
                'priorityType'      => $this->params->stringJson(),
                'description'       => $this->params->stringJson(),
            ],
        ];
    }    

}