<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\NsGateways;

class NsGateway extends AbstractModel
{
	public $ID;
	public $name;
	public $parentID;
	public $templateID;
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new NsGateways());
	}

}