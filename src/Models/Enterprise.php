<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;

class Enterprise extends AbstractModel
{
	public $id;
	public $name;
	public $description;
	public $customerId;
	public $owner;

	protected $aliases = [
		'ID'         => 'id',
		'customerID' => 'customerId'
	];

}