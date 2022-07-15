<?php

namespace App\Hateoas;

use App\Models\Customer;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class CustomerHateoas
{
	use CreatesLinks;

	public function self(Customer $model): ?Link
	{
		return $this->link('model.show', ['model' => $model]);
	}

	public function delete(Customer $model): ?Link
	{
		return $this->link('model.destroy', ['model' => $model]);
	}

	public function update(Customer $model): ?Link
	{
		return $this->link('model.update', ['model' => $model]);
	}
}