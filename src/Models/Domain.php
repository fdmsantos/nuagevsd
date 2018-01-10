<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Domains;
use Vsd\Builders\EgressAclTemplates;
use Vsd\Builders\IngressAclTemplates;
use Vsd\Builders\Zones;

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
		'zones' => Zones::class,
		'egressAclTemplates'  => EgressAclTemplates::class,
		'ingressAclTemplates' => IngressAclTemplates::class
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Domains());
	}
}