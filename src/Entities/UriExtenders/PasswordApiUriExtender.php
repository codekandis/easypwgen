<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Entities\UriExtenders;

use CodeKandis\EasyPwGenApi\Entities\PasswordEntity;
use CodeKandis\EasyPwGenApi\Http\UriBuilders\ApiUriBuilderInterface;

/**
 * Represents a password API URI extender.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class PasswordApiUriExtender extends AbstractApiUriExtender
{
	/**
	 * Stores the password entity of the API URI extender.
	 * @var PasswordEntity
	 */
	private PasswordEntity $password;

	/**
	 * Constructor method.
	 * @param ApiUriBuilderInterface $apiUriBuilder The API URI builder of the API URI extender.
	 * @param PasswordEntity $password The password entity of the API URI extender.
	 */
	public function __construct( ApiUriBuilderInterface $apiUriBuilder, PasswordEntity $password )
	{
		parent::__construct( $apiUriBuilder );
		$this->password = $password;
	}

	/**
	 * @inheritDoc
	 */
	public function extend(): void
	{
		$this->addCanonicalUri();
	}

	/**
	 * Adds the canonical URI of the password.
	 */
	private function addCanonicalUri(): void
	{
		$this->password->canonicalUri = $this->apiUriBuilder->buildPasswordUri();
	}
}
