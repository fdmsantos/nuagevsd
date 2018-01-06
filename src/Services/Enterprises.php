<?php declare(strict_types=1);

namespace Vsd\Services;

use Vsd\Common\AbstractClasses\AbstractService;
use Vsd\Api\Enterprises as ApiEnterprises;
use Vsd\Models\Enterprise;

class Enterprises extends AbstractService
{
	public function __construct($client) 
	{
		parent::__construct($client);
		$this->api = new ApiEnterprises();
	}

    public function list(array $filter = null): \Vsd\Common\Resources\VsdIterator
    {
        if (isSet($filter)) {
            $options['filter'] = $filter;
        }
        else {
            $options = null;
        }
    	return $this->model(Enterprise::class)->enumerate($this->api->all(), $options);
    }

    public function get($id): Enterprise
    {
    	return $this->model(Enterprise::class, ['id' => $id])->retrieve();
    }

    public function create(array $options = null): Enterprise
    {
        return $this->model(Enterprise::class, $options)->create();
    }

    public function delete($id): Enterprise
    {
        return $this->model(Enterprise::class, ['id' => $id])->delete();
    }
}