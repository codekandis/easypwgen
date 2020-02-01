<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Generators;

use Throwable;
use function count;
use function random_int;

/**
 * Represents a randomized consonant generator.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class RandomizedConsonantGenerator implements RandomizedConsonantGeneratorInterface
{
	/**
	 * Stores the set of available consonants.
	 * @var string[]
	 */
	private const AVAILABLE_CONSONANTS = [
		'b',
		'c',
		'd',
		'f',
		'g',
		'h',
		'j',
		'k',
		'l',
		'm',
		'n',
		'p',
		'q',
		'r',
		's',
		't',
		'v',
		'w',
		'x',
		'y',
		'z'
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
				count( static::AVAILABLE_CONSONANTS ) - 1
			);
		}
		catch ( Throwable $throwable )
		{
			throw new RandomizedValueGenerationException( 'An error occured during the randomized consonant generation.', 0, $throwable );
		}

		return static::AVAILABLE_CONSONANTS[ $randomIndex ];
	}
}
