<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Configurations;

use CodeKandis\EasyPwGenApi\Actions\Api;
use CodeKandis\Tiphy\Http\Requests\Methods;

return [
	'^/$'         => [
		Methods::GET => Api\Read\GetIndexAction::class
	],
	'^/password$' => [
		Methods::GET => Api\Read\GetPasswordAction::class
	]
];
