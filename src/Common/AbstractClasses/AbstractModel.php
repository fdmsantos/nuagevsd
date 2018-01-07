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

	public function __construct(\Vsd\Common\Resources\Connection $client) 
	{
		$this->client = $client;
	}

	public function retrieve()
    {
        return $this->populateFromArray($this->execute($this->api->get(), ['id' => $this->id])[0]);
    }

    public function create($options): self
    {
        $this->populateFromArray($options);
        return $this->populateFromArray($this->execute($this->api->create(),get_object_vars($this))[0]);
    }

    public function update(): self
    {
        $this->execute($this->api->update(),get_object_vars($this));
        return $this;
    }

    public function delete(): self
    {
        $this->execute($this->api->delete(),['id' => $this->id]);
        return $this;
    }

    public function enumerate(array $options = null): VsdIterator
    {
        return new VsdIterator(
            $this,
            $this->execute($this->api->all(), $options)
        );
    }

    public function populateFromArray(array $data): self
    {
        foreach ($data as $key => $val) {
            if (isSet($this->aliases[$key])) {
                $key = $this->aliases[$key];
            }
            if (property_exists($this, $key)) {
                $this->{$key} = $val;
            }
        }
        return $this;
    }

    private function execute($options, $params = null)
    {
        if (isSet($params)) {
            foreach ($params as $param => $value) {
                if ($property = array_search ($param, $this->aliases)) {
                    $params[$property] = $value;
                    unset($params[$param]);
                }
            }
        }
        return $this->client->sendRequest($options, $params);
    }

    
}