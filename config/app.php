<?php

return [
	'env'       => 'production',
	'debug'     => true,
	'providers' => [
		Illuminate\Cache\CacheServiceProvider::class,
		Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
		Illuminate\Database\DatabaseServiceProvider::class,
		Illuminate\Filesystem\FilesystemServiceProvider::class,
		Illuminate\Foundation\Providers\FoundationServiceProvider::class,
		Illuminate\Pagination\PaginationServiceProvider::class,
		Illuminate\View\ViewServiceProvider::class,
		App\Providers\RouteServiceProvider::class,
	],
];