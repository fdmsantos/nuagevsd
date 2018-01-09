<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Subnets;
use Vsd\Common\Traits\Relations\AddressRangeTrait;

class Subnet extends AbstractModel
{
	use AddressRangeTrait;

	public $ID;
	public $name;
	public $parentID;
	public $description;
	public $address;
	public $netmask;
	public $gateway;
	public $resourceKey = 'subnets';
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Subnets());
	}

}