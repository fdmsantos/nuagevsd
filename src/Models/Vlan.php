<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Vlans;

class Vlan extends AbstractModel
{
	public $ID;
	public $gatewayID;
	public $parentID;
	public $description;
	public $status;
	public $templateID;
	public $type;
	public $value;
	public $vportID;
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Vlans());
	}

}