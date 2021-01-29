<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Generators;

/**
 * Represents the interface of all randomized password generators.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RandomizedPasswordGeneratorInterface
{
	/**
	 * Generates a randomized password.
	 * @param int $length The length of the password.
	 * @return string The randomized vocal.
	 * @throws RandomizedValueGenerationException An error occurred during the generation of the randomized password.
	 */
	public function generate( int $length ): string;
}
