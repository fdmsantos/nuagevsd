<?php
namespace Vsd\Common\Traits;

trait ParentRelationTrait {

    public function ByParents(): array
    {
        return [
            'method'  => 'GET',
            'path'    => '{parentType}/{parentID}/'.$this->resourceKey,
            'params'  => [
                'parentType'  => $this->params->stringPath(),
                'parentID'    => $this->params->stringPath(),
            ]
        ];
    }
    
}