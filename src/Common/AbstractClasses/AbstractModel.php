<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;
use Vsd\Common\Resources\VsdIterator;
use Vsd\Common\Resources\Params;

abstract class AbstractModel
{
	protected $client;
	protected $api;

	public function __construct(\Vsd\Common\Resources\Connection $client, \Vsd\Common\AbstractClasses\AbstractApi $api) 
	{
		$this->client = $client;
		$this->api = $api;
	}

	public function retrieve()
    {
        return $this->populateFromArray($this->client->sendRequest($this->api->get(), ['id' => $this->id])[0]);
    }

    public function create(): self
    {
        return $this->populateFromArray($this->client->sendRequest($this->api->create(),get_object_vars($this))[0]);
    }

    public function update(): self
    {
        $this->client->sendRequest($this->api->update(),get_object_vars($this));
        return $this;
    }

    public function delete(): self
    {
        $this->client->sendRequest($this->api->delete(),['id' => $this->id]);
        return $this;
    }

    public function enumerate(array $options, array $filter = null): VsdIterator
    {
        return new VsdIterator(
            $this,
            $this->client->sendRequest($options, $filter)
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
}