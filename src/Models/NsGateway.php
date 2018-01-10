<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\NsGateways;
use Vsd\Builders\NsPorts;

class NsGateway extends AbstractModel
{
	public $ID;
	public $name;
	public $parentID;
	public $templateID;
	protected $resourceKey = 'nsgateways';
	protected $relations = [
		'nsports' => NsPorts::class
	];
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new NsGateways());
	}

}