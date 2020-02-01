<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Actions\Api\Read;

use CodeKandis\EasyPwGenApi\Configurations\ConfigurationRegistry;
use CodeKandis\EasyPwGenApi\Entities\IndexEntity;
use CodeKandis\EasyPwGenApi\Http\UriBuilders\ApiUriBuilder;
use CodeKandis\Tiphy\Actions\AbstractAction;
use CodeKandis\Tiphy\Http\Responses\JsonResponder;
use CodeKandis\Tiphy\Http\Responses\StatusCodes;
use JsonException;

/**
 * Represents the HTTP `GET` index action.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class GetIndexAction extends AbstractAction
{
	/**
	 * Stores the API URI builder.
	 * @var ApiUriBuilder
	 */
	private $apiUriBuilder;

	/**
	 * Gets the API URI builder.
	 * @return ApiUriBuilder The API URI builder.
	 */
	private function getUriBuilder(): ApiUriBuilder
	{
		if ( null === $this->apiUriBuilder )
		{
			$uriBuilderConfiguration = ConfigurationRegistry::_()->getUriBuilderConfiguration();
			$this->apiUriBuilder     = new ApiUriBuilder( $uriBuilderConfiguration );
		}

		return $this->apiUriBuilder;
	}

	/**
	 * Executes the action.
	 * @throws JsonException An error occurred during the response encoding.
	 */
	public function execute(): void
	{
		$index = new IndexEntity;
		$this->addIndexUri( $index );

		$responderData = [
			'index' => $index,
		];
		$responder     = new JsonResponder( StatusCodes::OK, $responderData );
		$responder->respond();
	}

	/**
	 * Adds the URI of the index.
	 * @param IndexEntity $index The index entity.
	 */
	private function addIndexUri( IndexEntity $index ): void
	{
		$index->uri = $this->getUriBuilder()->getIndexUri();
	}
}
