<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Entities;

use CodeKandis\Entities\AbstractEntity;

/**
 * Represents an index entity.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexEntity extends AbstractEntity
{
	/**
	 * Stores the canonical URI of the index.
	 * @var string
	 */
	public string $canonicalUri = '';

	/**
	 * Stores the URI of the password.
	 * @var string
	 */
	public string $passwordUri = '';
}
