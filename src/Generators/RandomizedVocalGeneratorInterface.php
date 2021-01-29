<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Generators;

/**
 * Represents the interface of all randomized vocal generators.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RandomizedVocalGeneratorInterface
{
	/**
	 * Generates a randomized vocal.
	 * @return string The randomized vocal.
	 * @throws RandomizedValueGenerationException An error occurred during the generation of the randomized vocal.
	 */
	public function generate(): string;
}
