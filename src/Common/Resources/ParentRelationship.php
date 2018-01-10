<?php
namespace Vsd\Common\Resources;

class ParentRelationship 
{
	private $resource;
	private $parentType;
	private $parentID;
	private $client;

	public function __construct($resource, $parentType, $parentID, $client)
	{
		$this->resource = $resource;
		$this->parentID = $parentID;
		$this->parentType = $parentType;
		$this->client = $client;
	}

	public function get(): \Vsd\Common\Resources\VsdIterator
	{
		return $this->builder($this->resource)->listByParent([
			'parentType' => $this->parentType,
			'parentID'   => $this->parentID
		]);
	}

	public function create(array $options = []): \Vsd\Common\AbstractClasses\AbstractModel
	{
		return $this->builder($this->resource)->create(array_merge([
			'parentType' => $this->parentType,
			'parentID'   => $this->parentID
		], $options));
	}

	private function builder($builder): \Vsd\Common\AbstractClasses\AbstractBuilder
    {
        return new $builder($this->client);
    }

}