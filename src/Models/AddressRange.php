<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\AddressRange as ApiAddressRange;

class AddressRange extends AbstractModel
{
	public $ID;
	public $name;
	public $parentID;
	public $DHCPPoolType;
	public $entityScope;
	public $IpType;
	public $maxAddress;
	public $minAddress;
	
	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new ApiAddressRange());
	}

}