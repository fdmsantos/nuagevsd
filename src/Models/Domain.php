<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Domains;
use Vsd\Builders\EgressAclTemplates;
use Vsd\Builders\IngressAclTemplates;
use Vsd\Builders\Zones;
use Vsd\Builders\VPorts;
use Vsd\Builders\BridgeInterfaces;
use Vsd\Builders\DhcpOptions;
use Vsd\Builders\Subnets;
use Vsd\Builders\StaticRoutes;

class Domain extends AbstractModel
{
	public $ID;
	public $parentID;
	public $name;
	public $templateID;
	public $underlayEnabled;
	public $PATEnabled;
	public $encryption;
	protected $resourceKey = 'domains';
	protected $relations = [
		'zones'               => Zones::class,
		'egressAclTemplates'  => EgressAclTemplates::class,
		'ingressAclTemplates' => IngressAclTemplates::class,
		'vports'              => Vports::class,
		'bridgeInterfaces'    => BridgeInterfaces::class,
		'dhcpoptions'         => DhcpOptions::class,
		'subnets'             => Subnets::class,
        'staticRoutes'        => StaticRoutes::class
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Domains());
	}
}