<?php declare(strict_types=1);

namespace Vsd\Services;

use Vsd\Common\AbstractClasses\AbstractService;
use Vsd\Models\DomainTemplate;

class DomainTemplates extends AbstractService
{

    public function list(array $options = null): \Vsd\Common\Resources\VsdIterator
    {
    	return $this->model(DomainTemplate::class)->enumerate($options);
    }

    public function get($id): DomainTemplate
    {
    	return $this->model(DomainTemplate::class, ['id' => $id])->retrieve();
    }

    public function create(array $options = null): DomainTemplate
    {
        return $this->model(DomainTemplate::class)->create($options);
    }

    public function delete($id): DomainTemplate
    {
        return $this->model(DomainTemplate::class, ['id' => $id])->delete();
    }
}