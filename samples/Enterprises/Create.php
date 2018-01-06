<?php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);

$enterprise = $vsd->enterprises()->create([
	'name'        => '{name}',
	'description' => '{description}',
]);
