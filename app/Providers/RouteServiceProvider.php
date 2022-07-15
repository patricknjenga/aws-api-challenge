<?php

namespace App\Providers;

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends \Illuminate\Foundation\Support\Providers\RouteServiceProvider
{
	public function boot()
	{
		request()->headers->set('accept', 'application/json');
		Route::apiResource('customer', CustomerController::class);
		Route::fallback(fn() => ['api' => 'aws-api-challenge-api']);
	}
}