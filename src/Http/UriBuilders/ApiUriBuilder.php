<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Http\UriBuilders;

use CodeKandis\Tiphy\Http\UriBuilders\AbstractUriBuilder;

/**
 * Represents an API URI builder.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class ApiUriBuilder extends AbstractUriBuilder implements ApiUriBuilderInterface
{
	/**
	 * Builds the URI of the index.
	 * @return string The URI of the index.
	 */
	public function buildIndexUri(): string
	{
		return $this->build( 'index' );
	}

	/**
	 * Builds the URI of the password.
	 * @return string The URI of the password.
	 */
	public function buildPasswordUri(): string
	{
		return $this->build( 'password' );
	}
}
