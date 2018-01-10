<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;

use Vsd\Common\Traits\OperatorTrait;

abstract class AbstractBuilder
{
	use OperatorTrait;

	protected $client;
    protected $api;
    protected $model;

    public function __construct(
    	\Vsd\Common\Resources\Connection $client,
    	\Vsd\Common\AbstractClasses\AbstractApi $api,
    	string $model)
    {
    	$this->client = $client;
        $this->api = $api;
        $this->model = $model;
    }

    public function create(array $options): \Vsd\Common\AbstractClasses\AbstractModel
    {
    	return $this->model($this->model)->populateFromArray($this->execute($this->api->create(), $options)[0]);
    }

    public function get(string $id): \Vsd\Common\AbstractClasses\AbstractModel
    {
        return $this->model($this->model)->populateFromArray($this->execute($this->api->get(), ['ID' => $id])[0]);
    }

    public function list(array $options = null): \Vsd\Common\Resources\VsdIterator
    {
        return $this->model($this->model)->enumerate($this->api->all(), $options);
    }

	public function delete(string $id): \Vsd\Common\AbstractClasses\AbstractModel
    {
        return $this->model($this->model, ['ID' => $id])->delete();
    }

    public function update(array $options): \Vsd\Common\AbstractClasses\AbstractModel
    {
        return $this->model($this->model, $options)->update();
    }

    public function listByParent(array $options): \Vsd\Common\Resources\VsdIterator
    {
        return $this->model($this->model)->enumerate($this->api->listByParent(), $options);
    }

    protected function model(string $class, array $data = null) 
    {
        $model = new $class($this->client);
        if (isSet($data)) {
            $model->populateFromArray($data);
        }
        return $model;
    }
}