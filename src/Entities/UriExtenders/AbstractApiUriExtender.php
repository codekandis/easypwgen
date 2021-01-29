<?php declare( strict_types = 1 );
namespace CodeKandis\EasyPwGenApi\Entities\UriExtenders;

use CodeKandis\EasyPwGenApi\Http\UriBuilders\ApiUriBuilderInterface;
use CodeKandis\Tiphy\Entities\UriExtenders\UriExtenderInterface;

/**
 * Represents the base class of all API URI extenders.
 * @package codekandis/easypwgen-api
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractApiUriExtender implements UriExtenderInterface
{
	/**
	 * Stores the API URI builder of the API URI extender.
	 * @var ApiUriBuilderInterface
	 */
	protected ApiUriBuilderInterface $apiUriBuilder;

	/**
	 * Constructor method.
	 * @param ApiUriBuilderInterface $apiUriBuilder The API URI builder of the API URI extender.
	 */
	public function __construct( ApiUriBuilderInterface $apiUriBuilder )
	{
		$this->apiUriBuilder = $apiUriBuilder;
	}
}
