<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\NsPorts;
use Vsd\Builders\Vlans;

class NsPort extends AbstractModel
{
	public $ID;
	public $name;
	public $parentID;
	public $description;
	public $mtu;
	public $NATTraversal;
	public $physicalName;
	public $portType;
	public $speed;
	public $status;
	public $templateID;
	public $VLANRange;
	protected $resourceKey = 'nsports';
	protected $relations = [
		'vlans' => Vlans::class
	];
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new NsPorts());
	}

}