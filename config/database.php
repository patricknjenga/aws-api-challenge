<?php

return [
	'default'     => 'mongodb',
	'connections' => [
		'mongodb' => [
			'database' => 'test',
			'driver'   => 'mongodb',
			// Disposable shared DB
			'dsn'      => env('MONGO_DSN', 'mongodb+srv://mongo:o3aVZAlQwAAZmJob@cluster0.22alo.mongodb.net/?retryWrites=true&w=majority'),
		],
	],
];