<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
	public function index(Request $request): AnonymousResourceCollection
	{
		return CustomerResource::collection(Customer::query()
			->where($request->all())
			->simplePaginate());
	}

	public function store(Request $request): CustomerResource
	{
		return new CustomerResource(Customer::query()
			->create($request->toArray()));
	}

	public function show($id): CustomerResource
	{
		return new CustomerResource(Customer::query()
			->findOrFail($id));
	}

	public function update(Request $request, string $id): int
	{
		return Customer::query()
			->whereKey($id)
			->update($request->toArray());
	}

	public function destroy(string $id): int
	{
		return Customer::destroy($id);
	}
}