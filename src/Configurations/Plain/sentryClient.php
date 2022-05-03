<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Configurations\Plain;

use const E_ALL;

return [
	'dsn'           => '',
	'displayErrors' => false,
	'errorTypes'    => E_ALL,
	'environment'   => 'development',
	'release'       => 'dev-development',
	'serverName'    => 'api.easypwgen.codekandis'
];
