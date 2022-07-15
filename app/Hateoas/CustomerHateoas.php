<?php

namespace App\Hateoas;

use App\Models\Customer;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class CustomerHateoas
{
	use CreatesLinks;

	public function self(Customer $customer): ?Link
	{
		return $this->link('customer.show', ['customer' => $customer]);
	}

	public function delete(Customer $customer): ?Link
	{
		return $this->link('customer.destroy', ['customer' => $customer]);
	}

	public function update(Customer $customer): ?Link
	{
		return $this->link('customer.update', ['customer' => $customer]);
	}
}