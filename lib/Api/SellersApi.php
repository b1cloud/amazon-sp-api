<?php
/**
 * SellersApi
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Sellers
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace B1\AmazonSPAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use B1\AmazonSPAPI\ApiException;
use B1\AmazonSPAPI\Configuration;
use B1\AmazonSPAPI\HeaderSelector;
use B1\AmazonSPAPI\ObjectSerializer;
use B1\AmazonSPAPI\Helpers\SellingPartnerApiRequest;

/**
 * SellersApi Class Doc Comment
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SellersApi
{
    use SellingPartnerApiRequest;
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param Configuration   $config
     */
    public function __construct(
        Configuration $config = null
    ) {
        $this->client =  new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getMarketplaceParticipations
     *
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \B1\AmazonSPAPI\Model\GetMarketplaceParticipationsResponse
     */
    public function getMarketplaceParticipations()
    {
        list($response) = $this->getMarketplaceParticipationsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getMarketplaceParticipationsWithHttpInfo
     *
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \B1\AmazonSPAPI\Model\GetMarketplaceParticipationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMarketplaceParticipationsWithHttpInfo()
    {
        $returnType = '\B1\AmazonSPAPI\Model\GetMarketplaceParticipationsResponse';
        $request = $this->getMarketplaceParticipationsRequest();
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getMarketplaceParticipationsAsync
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMarketplaceParticipationsAsync()
    {
        return $this->getMarketplaceParticipationsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMarketplaceParticipationsAsyncWithHttpInfo
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMarketplaceParticipationsAsyncWithHttpInfo()
    {
        $returnType = '\B1\AmazonSPAPI\Model\GetMarketplaceParticipationsResponse';
        $request = $this->getMarketplaceParticipationsRequest();
        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getMarketplaceParticipations'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMarketplaceParticipationsRequest()
    {

        $resourcePath = '/sellers/v1/marketplaceParticipations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);


    }

}
