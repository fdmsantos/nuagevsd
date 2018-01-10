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
	protected $resourceKey = 'zones';
	protected $relations = [
		'subnets' => Subnets::class
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Zones());
	}

}