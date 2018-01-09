<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Zones;
use Vsd\Builders\Subnets;

class Zone extends AbstractModel
{
	public $ID;
	public $name;
	public $parentID;
	public $description;

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Zones());
	}

	public function createSubnet(array $options = []): AbstractModel
	{
		return $this->builder(Subnets::class)->create(array_merge([
			'parentID' => $this->ID
		], $options));
	}

	public function subnets(): \Vsd\Common\Resources\VsdIterator 
	{
		return $this->builder(Subnets::class)->byZones($this->ID);
	}

}