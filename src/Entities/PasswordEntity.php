<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Entities;

use CodeKandis\Tiphy\Entities\AbstractEntity;

/**
 * Represents a password entity.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class PasswordEntity extends AbstractEntity
{
	/**
	 * Stores the canonical URI of the password.
	 * @var string
	 */
	public string $canonicalUri = '';

	/**
	 * Stores the value of the password.
	 * @var string
	 */
	public string $value = '';
}
