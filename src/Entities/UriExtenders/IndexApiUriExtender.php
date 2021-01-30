<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Entities\UriExtenders;

use CodeKandis\EasyPwGenApi\Entities\IndexEntity;
use CodeKandis\EasyPwGenApi\Http\UriBuilders\ApiUriBuilderInterface;

/**
 * Represents an index API URI extender.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexApiUriExtender extends AbstractApiUriExtender
{
	/**
	 * Stores the index entity of the API URI extender.
	 * @var IndexEntity
	 */
	private IndexEntity $index;

	/**
	 * Constructor method.
	 * @param ApiUriBuilderInterface $apiUriBuilder The API URI builder of the API URI extender.
	 * @param IndexEntity $index The index entity of the API URI extender.
	 */
	public function __construct( ApiUriBuilderInterface $apiUriBuilder, IndexEntity $index )
	{
		parent::__construct( $apiUriBuilder );
		$this->index = $index;
	}

	/**
	 * @inheritDoc
	 */
	public function extend(): void
	{
		$this->addCanonicalUri();
		$this->addPasswordUri();
	}

	/**
	 * Adds the canonical URI of the index.
	 */
	private function addCanonicalUri(): void
	{
		$this->index->canonicalUri = $this->apiUriBuilder->buildIndexUri();
	}

	/**
	 * Adds the URI of the password.
	 */
	private function addPasswordUri(): void
	{
		$this->index->passwordUri = $this->apiUriBuilder->buildPasswordUri();
	}
}
