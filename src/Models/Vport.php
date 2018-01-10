<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\VPorts;
use Vsd\Builders\BridgeInterfaces;

class VPort extends AbstractModel
{
	public $ID;
	public $parentID;
	public $name;
	public $active;
	public $addressSpoofing;
	public $description;
	public $DPI;
	public $type;
	public $VLANID;
	public $zoneID;
	protected $resourceKey = 'vports';
	protected $relations = [
		'bridgeInterfaces'    => BridgeInterfaces::class,
	];
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new VPorts());
	}

}