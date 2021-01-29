<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Generators;

/**
 * Represents a reandomized password generator.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class RandomizedPasswordGenerator implements RandomizedPasswordGeneratorInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function generate( int $length ): string
	{
		$consonantGenerator = new RandomizedConsonantGenerator();
		$vocalGenerator     = new RandomizedVocalGenerator();
		$password           = '';
		for ( $n = 0; $n < $length; $n++ )
		{
			switch ( $n % 2 )
			{
				case 0:
				{
					$password .= $consonantGenerator->generate();
					break;
				}
				case 1:
				{
					$password .= $vocalGenerator->generate();
					break;
				}
			}
		}

		return $password;
	}
}
