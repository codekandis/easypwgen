<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Configurations;

use CodeKandis\TiphySentryClientIntegration\Configurations\AbstractConfigurationRegistry;
use function dirname;

/**
 * Represents the configuration registry of the API.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class ConfigurationRegistry extends AbstractConfigurationRegistry
{
	/**
	 * {@inheritdoc}
	 */
	protected function initialize(): void
	{
		$this->setSentryClientConfigurationPath( dirname( __DIR__, 2 ) . '/config/sentryClient.php' );
		$this->setRoutesConfigurationPath( dirname( __DIR__, 2 ) . '/config/routes.php' );
		$this->setUriBuilderConfigurationPath( dirname( __DIR__, 2 ) . '/config/uriBuilder.php' );
	}
}
