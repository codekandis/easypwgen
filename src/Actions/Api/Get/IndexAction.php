<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Actions\Api\Get;

use CodeKandis\EasyPwGenApi\Configurations\ConfigurationRegistry;
use CodeKandis\EasyPwGenApi\Entities\IndexEntity;
use CodeKandis\EasyPwGenApi\Entities\UriExtenders\IndexApiUriExtender;
use CodeKandis\EasyPwGenApi\Http\UriBuilders\ApiUriBuilder;
use CodeKandis\EasyPwGenApi\Http\UriBuilders\ApiUriBuilderInterface;
use CodeKandis\Tiphy\Actions\AbstractAction;
use CodeKandis\Tiphy\Http\Responses\JsonResponder;
use CodeKandis\Tiphy\Http\Responses\StatusCodes;
use JsonException;

/**
 * Represents the HTTP `GET` index action.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexAction extends AbstractAction
{
	/**
	 * Stores the API URI builder.
	 * @var ApiUriBuilderInterface
	 */
	private ApiUriBuilderInterface $apiUriBuilder;

	/**
	 * Gets the API URI builder.
	 * @return ApiUriBuilder The API URI builder.
	 */
	private function getUriBuilder(): ApiUriBuilderInterface
	{
		return $this->apiUriBuilder ?? $this->apiUriBuilder = new ApiUriBuilder( ConfigurationRegistry::_()->getUriBuilderConfiguration() );
	}

	/**
	 * Executes the action.
	 * @throws JsonException An error occurred during the response encoding.
	 */
	public function execute(): void
	{
		$index = new IndexEntity();
		$this->extendUris( $index );

		$responderData = [
			'index' => $index,
		];
		$responder     = new JsonResponder( StatusCodes::OK, $responderData );
		$responder->respond();
	}

	/**
	 * Extends the URIs of the index entity.
	 * @param IndexEntity $index The index entity.
	 */
	private function extendUris( IndexEntity $index ): void
	{
		$uriBuilder = $this->getUriBuilder();
		( new IndexApiUriExtender( $uriBuilder, $index ) )
			->extend();
	}
}
