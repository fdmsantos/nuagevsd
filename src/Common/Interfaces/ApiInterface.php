<?php declare(strict_types=1);

namespace Vsd\Common\Interfaces;

interface ApiInterface
{
	public function all(): array;
	public function get(): array;
	public function create(): array;
	public function delete(): array;
	public function update(): array;
}