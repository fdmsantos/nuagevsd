<?php
namespace Vsd\Common\Traits;

trait OperatorTrait {

    protected function model(string $class, array $data = null) 
    {
        $model = new $class($this->client);
        if (isSet($data)) {
            $model->populateFromArray($data);
        }
        return $model;
    }
    
}