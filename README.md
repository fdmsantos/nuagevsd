# PHP Nuage Networks SDK

`fdmsantos/nuagevsd` is an SDK which allows PHP developers to easily connect to Nuage Networks VSD API in a simple and 
idiomatic way.

## Requirements

* PHP 7.0

## How to install

```bash
composer require fdmsantos/nuagevsd
```
## How to Use

```php
require 'vendor/autoload.php';
use Vsd\Vsd;

$vsd = new Vsd([
	'baseUri'      => '{base_uri}',
	'organization' => '{organization}',
	'user'         => '{user}',
	'password'     => '{password}',
]);

// Create Enterprise
$enterprise = $vsd->enterprises()->create([
	'name'        => '{name}',
	'description' => '{description}',
]);

// Delete Enterprise
$enterprise->delete();

// List Enterprises
foreach ($vsd->enterprises()->list() as $enterprise) {
	print $enterprise->name."\n";
}
```

Please see samples folder to more examples.
