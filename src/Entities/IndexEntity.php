<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Entities;

use CodeKandis\Tiphy\Entities\AbstractEntity;

/**
 * Represents the entity of the index.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexEntity extends AbstractEntity
{
	/**
	 * Stores the URI of the index.
	 * @var string
	 */
	public $uri = '';
}
