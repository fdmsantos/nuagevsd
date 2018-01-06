<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;

abstract class AbstractService
{
    protected $client;
    protected $api;

    public function __construct(\Vsd\Common\Resources\Connection $client)
    {
        $this->client = $client;
    }

    protected function model(string $class, array $data = null) 
    {
    	$model = new $class($this->client,$this->api);
    	if (isSet($data)) {
    		$model->populateFromArray($data);
    	}
    	return $model;
    }

}