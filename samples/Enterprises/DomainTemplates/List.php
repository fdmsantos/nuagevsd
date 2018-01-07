<?php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);


// All Domain Templates for Enterprise
$domainTemplates = $vsd->enterprises()->get('{id}')->domainTemplates()->get();
foreach ($domainTemplates as $domainTemplate) {
	/** @var $enterprise \Vsd\Models\DomainTemplate */
}

// All Domain Templates for Enterprise Filter By Name
$domainTemplates = $vsd->enterprises()->get('{id}')->domainTemplates()->list([
	'name' => '{filter}'
]);
foreach ($domainTemplates as $domainTemplate) {
	/** @var $enterprise \Vsd\Models\DomainTemplate */
}