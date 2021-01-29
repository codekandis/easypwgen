<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Http\UriBuilders;

/**
 * Represents the interface of all API URI builders.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ApiUriBuilderInterface
{
	/**
	 * Builds the URI of the index.
	 * @return string The URI of the index.
	 */
	public function buildIndexUri(): string;

	/**
	 * Builds the URI of the password.
	 * @return string The URI of the password.
	 */
	public function buildPasswordUri(): string;
}
