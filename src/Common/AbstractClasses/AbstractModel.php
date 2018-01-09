<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;

use Vsd\Common\Resources\VsdIterator;
use Vsd\Common\Resources\Params;
use Vsd\Common\Traits\OperatorTrait;

abstract class AbstractModel
{
    use OperatorTrait;

	protected $client;
	protected $api;

	public function __construct(\Vsd\Common\Resources\Connection $client,
                                \Vsd\Common\AbstractClasses\AbstractApi $api) 
	{
		$this->client = $client;
        $this->api = $api;
	}

    public function update(): self
    {
        $this->execute($this->api->update(), get_object_vars($this));
        return $this;
    }

    public function delete(): self
    {
        $this->execute($this->api->delete(), ['ID' => $this->ID]);
        return $this;
    }

    public function enumerate($api, array $options = null): VsdIterator
    {
        return new VsdIterator(
            $this,
            $this->execute($api, $options)
        );
    }

    public function populateFromArray(array $data): self
    {
        foreach ($data as $key => $val) {
            if (property_exists($this, $key)) {
                $this->{$key} = $val;
            }
        }
        return $this;
    }

    protected function builder($builder): \Vsd\Common\AbstractClasses\AbstractBuilder
    {
        return new $builder($this->client);
    }
    
}