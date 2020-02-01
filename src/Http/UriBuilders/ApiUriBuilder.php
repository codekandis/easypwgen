<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Http\UriBuilders;

use CodeKandis\Tiphy\Http\UriBuilders\AbstractUriBuilder;

/**
 * Represents the URI builder of the API.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class ApiUriBuilder extends AbstractUriBuilder
{
	/**
	 * Gets the URI of the index.
	 * @return string The URI of the index.
	 */
	public function getIndexUri(): string
	{
		return $this->getUri( 'index' );
	}
}
