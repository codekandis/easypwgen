<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Configurations;

use CodeKandis\EasyPwGenApi\Actions\Api;
use CodeKandis\Tiphy\Http\Requests\Methods;

return [
	'routes' => [
		'/'         => [
			Methods::GET => Api\Get\IndexAction::class
		],
		'/password' => [
			Methods::GET => Api\Get\PasswordAction::class
		]
	]
];
