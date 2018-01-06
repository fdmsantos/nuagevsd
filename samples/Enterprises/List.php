<?php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);


// All
foreach ($vsd->enterprises()->list() as $enterprise) {
	/** @var $enterprise \Vsd\Models\Enterprise */
}

// Filter By Name
foreach ($vsd->enterprises()->list(['name' => '{name}']) as $enterprise) {
	/** @var $enterprise \Vsd\Models\Enterprise */
}