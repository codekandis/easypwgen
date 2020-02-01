<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Actions\Api\Read;

use CodeKandis\EasyPwGenApi\Entities\PasswordEntity;
use CodeKandis\EasyPwGenApi\Generators\RandomizedPasswordGenerator;
use CodeKandis\Tiphy\Actions\AbstractAction;
use CodeKandis\Tiphy\Http\Responses\JsonResponder;
use CodeKandis\Tiphy\Http\Responses\StatusCodes;
use JsonException;

/**
 * Represents the HTTP `GET` password action.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class GetPasswordAction extends AbstractAction
{
	/**
	 * Executes the action.
	 * @throws JsonException An error occurred during the response encoding.
	 */
	public function execute(): void
	{
		$password        = new PasswordEntity();
		$password->value = ( new RandomizedPasswordGenerator() )
			->generate( 8 );

		$responseData = [
			'password' => $password,
		];

		$response = new JsonResponder( StatusCodes::OK, $responseData );
		$response->respond();
	}
}
