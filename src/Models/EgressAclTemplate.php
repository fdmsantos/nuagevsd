<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\EgressAclTemplates;

class EgressAclTemplate extends AbstractModel
{
	public $ID;
	public $parentID;
	public $parentType;
	public $name;
	public $defaultAllowIP;
	public $defaultAllowNonIP;
	public $active;

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new EgressAclTemplates());
	}

}