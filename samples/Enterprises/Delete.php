<?php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);

// There is Two Ways
// First
$enterprise = $vsd->enterprises()->delete('{id}');

// Second
$enterprise = $vsd->enterprises()->get('{id}');
$enterprise->delete();