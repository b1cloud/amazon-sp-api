<?php
/**
 * AuthorizationApi
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Authorization
 *
 * The Selling Partner API for Authorization helps developers manage authorizations and check the specific permissions associated with a given authorization.
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

/**
 * AuthorizationApi Class Doc Comment
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizationApi
{
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAuthorizationCode
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $sellingPartnerId The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developerId Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mwsAuthToken The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse
     */
    public function getAuthorizationCode($sellingPartnerId, $developerId, $mwsAuthToken)
    {
        list($response) = $this->getAuthorizationCodeWithHttpInfo($sellingPartnerId, $developerId, $mwsAuthToken);
        return $response;
    }

    /**
     * Operation getAuthorizationCodeWithHttpInfo
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $sellingPartnerId The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developerId Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mwsAuthToken The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthorizationCodeWithHttpInfo($sellingPartnerId, $developerId, $mwsAuthToken)
    {
        $returnType = '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse';
        $request = $this->getAuthorizationCodeRequest($sellingPartnerId, $developerId, $mwsAuthToken);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuthorizationCodeAsync
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $sellingPartnerId The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developerId Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mwsAuthToken The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsync($sellingPartnerId, $developerId, $mwsAuthToken)
    {
        return $this->getAuthorizationCodeAsyncWithHttpInfo($sellingPartnerId, $developerId, $mwsAuthToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuthorizationCodeAsyncWithHttpInfo
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $sellingPartnerId The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developerId Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mwsAuthToken The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsyncWithHttpInfo($sellingPartnerId, $developerId, $mwsAuthToken)
    {
        $returnType = '\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse';
        $request = $this->getAuthorizationCodeRequest($sellingPartnerId, $developerId, $mwsAuthToken);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAuthorizationCode'
     *
     * @param  string $sellingPartnerId The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developerId Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mwsAuthToken The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuthorizationCodeRequest($sellingPartnerId, $developerId, $mwsAuthToken)
    {
        // verify the required parameter 'sellingPartnerId' is set
        if ($sellingPartnerId === null || (is_array($sellingPartnerId) && count($sellingPartnerId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sellingPartnerId when calling getAuthorizationCode'
            );
        }
        // verify the required parameter 'developerId' is set
        if ($developerId === null || (is_array($developerId) && count($developerId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $developerId when calling getAuthorizationCode'
            );
        }
        // verify the required parameter 'mwsAuthToken' is set
        if ($mwsAuthToken === null || (is_array($mwsAuthToken) && count($mwsAuthToken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mwsAuthToken when calling getAuthorizationCode'
            );
        }

        $resourcePath = '/authorization/v1/authorizationCode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sellingPartnerId !== null) {
            $queryParams['sellingPartnerId'] = ObjectSerializer::toQueryValue($sellingPartnerId);
        }
        // query params
        if ($developerId !== null) {
            $queryParams['developerId'] = ObjectSerializer::toQueryValue($developerId);
        }
        // query params
        if ($mwsAuthToken !== null) {
            $queryParams['mwsAuthToken'] = ObjectSerializer::toQueryValue($mwsAuthToken);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
