<?php declare(strict_types=1);

namespace Vsd\Services;

use Vsd\Common\AbstractClasses\AbstractService;
use Vsd\Models\Enterprise;

class Enterprises extends AbstractService
{
    public function list(array $options = null): \Vsd\Common\Resources\VsdIterator
    {
    	return $this->model(Enterprise::class)->enumerate($options);
    }

    public function get($id): Enterprise
    {
    	return $this->model(Enterprise::class, ['id' => $id])->retrieve();
    }

    public function create(array $options = null): Enterprise
    {
        return $this->model(Enterprise::class)->create($options);
    }

    public function delete($id): Enterprise
    {
        return $this->model(Enterprise::class, ['id' => $id])->delete();
    }
}