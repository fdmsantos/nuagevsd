<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Subnets;
use Vsd\Builders\AddressRange;
use Vsd\Builders\DhcpOptions;

class Subnet extends AbstractModel
{
	public $ID;
	public $name;
	public $parentID;
	public $description;
	public $address;
	public $netmask;
	public $gateway;
	protected $resourceKey = 'subnets';
	protected $relations = [
		'addressRanges' => AddressRange::class,
		'dhcpoptions'   => DhcpOptions::class
	];
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Subnets());
	}

}