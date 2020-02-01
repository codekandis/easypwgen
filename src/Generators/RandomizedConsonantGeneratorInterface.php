<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Generators;

/**
 * Represents the interface of all randomized consonant generators.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RandomizedConsonantGeneratorInterface
{
	/**
	 * Generates a randomized consonant.
	 * @return string The randomized consonant.
	 * @throws RandomizedValueGenerationException An error occurred during the generation of the randomized consonant.
	 */
	public function generate(): string;
}
