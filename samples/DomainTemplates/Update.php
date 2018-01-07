<?php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);

$domainTemplate = $vsd->domainTemplates()->get('{id}');
$domainTemplate->description = "{description}";
$domainTemplate->update();