<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\BridgeInterfaces;

class BridgeInterface extends AbstractModel
{
	public $ID;
	public $domainID;
	public $domainName;
	public $name;
	public $netmask;
	public $networkName;
	public $VPortID;
	public $VPortName;
	public $zoneID;
	public $zoneName;
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new BridgeInterfaces());
	}

}