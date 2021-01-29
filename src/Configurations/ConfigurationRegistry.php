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
	 * @inheritDoc
	 */
	protected function initialize(): void
	{
		$this->initializeSentryClientConfiguration();
		$this->initializeRoutesConfiguration();
		$this->initializeUriBuilderConfiguration();
	}

	private function initializeSentryClientConfiguration(): void
	{
		$this->setPlainSentryClientConfiguration(
			require dirname( __DIR__, 2 ) . '/config/sentryClient.php'
		);
	}

	private function initializeRoutesConfiguration(): void
	{
		$this->setPlainRoutesConfiguration(
			( require dirname( __DIR__, 2 ) . '/config/routes.php' )
			+ ( require __DIR__ . '/Plain/routes.php' )
		);
	}

	private function initializeUriBuilderConfiguration(): void
	{
		$this->setPlainUriBuilderConfiguration(
			( require dirname( __DIR__, 2 ) . '/config/uriBuilder.php' )
			+ ( require __DIR__ . '/Plain/uriBuilder.php' )
		);
	}
}
