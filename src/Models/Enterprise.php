<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Builders\DomainTemplate;
use Vsd\Builders\Domain;
use Vsd\Api\Enterprises;

class Enterprise extends AbstractModel
{
	public $ID;
	public $name;
	public $description;
	public $customerID;
	public $owner;
	protected $resourceKey = 'enterprises';
	protected $relations = [
		'domains'          => Domain::class,
		'domainsTemplates' => DomainTemplate::class,
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Enterprises());
	}
}