<?php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);

$domainTemplate = $vsd->enterprises()->get('{id}')->domainTemplates()->create([
	'name' => '{name}'
]);