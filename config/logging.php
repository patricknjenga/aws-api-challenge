<?php

use Monolog\Handler\NullHandler;

return [
	'default'  => 'null',
	'channels' => [
		'null' => [
			'driver'  => 'monolog',
			'handler' => NullHandler::class,
		],
	],
];