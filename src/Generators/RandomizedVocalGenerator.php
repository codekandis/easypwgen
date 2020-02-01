<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Generators;

use Throwable;
use function count;
use function random_int;

/**
 * Represents a randomized vocal generator.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class RandomizedVocalGenerator implements RandomizedVocalGeneratorInterface
{
	/**
	 * Stores the set of available vocals.
	 * @var string[]
	 */
	private const AVAILABLE_VOCALS = [
		'a',
		'e',
		'i',
		'o',
		'u'
	];

	/**
	 * {@inheritdoc}
	 */
	public function generate(): string
	{
		try
		{
			$randomIndex = random_int(
				0,
				count( static::AVAILABLE_VOCALS ) - 1
			);
		}
		catch ( Throwable $throwable )
		{
			throw new RandomizedValueGenerationException( 'An error occured during the randomized vocal generation.', 0, $throwable );
		}

		return static::AVAILABLE_VOCALS[ $randomIndex ];
	}
}
