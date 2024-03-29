<?php
/**
 * FinancesApi
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
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
 * FinancesApi Class Doc Comment
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancesApi
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
     * Operation listFinancialEventGroups
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $financialEventGroupStartedBefore A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param  \DateTime $financialEventGroupStartedAfter A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \B1\AmazonSPAPI\Model\ListFinancialEventGroupsResponse
     */
    public function listFinancialEventGroups($maxResultsPerPage = '100', $financialEventGroupStartedBefore = null, $financialEventGroupStartedAfter = null, $nextToken = null)
    {
        list($response) = $this->listFinancialEventGroupsWithHttpInfo($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken);
        return $response;
    }

    /**
     * Operation listFinancialEventGroupsWithHttpInfo
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $financialEventGroupStartedBefore A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param  \DateTime $financialEventGroupStartedAfter A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \B1\AmazonSPAPI\Model\ListFinancialEventGroupsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventGroupsWithHttpInfo($maxResultsPerPage = '100', $financialEventGroupStartedBefore = null, $financialEventGroupStartedAfter = null, $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventGroupsResponse';
        $request = $this->listFinancialEventGroupsRequest($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken);
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listFinancialEventGroupsAsync
     *
     *
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $financialEventGroupStartedBefore A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param  \DateTime $financialEventGroupStartedAfter A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventGroupsAsync($maxResultsPerPage = '100', $financialEventGroupStartedBefore = null, $financialEventGroupStartedAfter = null, $nextToken = null)
    {
        return $this->listFinancialEventGroupsAsyncWithHttpInfo($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventGroupsAsyncWithHttpInfo
     *
     *
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $financialEventGroupStartedBefore A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param  \DateTime $financialEventGroupStartedAfter A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventGroupsAsyncWithHttpInfo($maxResultsPerPage = '100', $financialEventGroupStartedBefore = null, $financialEventGroupStartedAfter = null, $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventGroupsResponse';
        $request = $this->listFinancialEventGroupsRequest($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken);
        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listFinancialEventGroups'
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $financialEventGroupStartedBefore A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param  \DateTime $financialEventGroupStartedAfter A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventGroupsRequest($maxResultsPerPage = '100', $financialEventGroupStartedBefore = null, $financialEventGroupStartedAfter = null, $nextToken = null)
    {
        if ($maxResultsPerPage !== null && $maxResultsPerPage > 100) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEventGroups, must be smaller than or equal to 100.');
        }
        if ($maxResultsPerPage !== null && $maxResultsPerPage < 1) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEventGroups, must be bigger than or equal to 1.');
        }


        $resourcePath = '/finances/v0/financialEventGroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($maxResultsPerPage !== null) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($maxResultsPerPage);
        }
        // query params
        if ($financialEventGroupStartedBefore !== null) {
            $queryParams['FinancialEventGroupStartedBefore'] = ObjectSerializer::toQueryValue($financialEventGroupStartedBefore);
        }
        // query params
        if ($financialEventGroupStartedAfter !== null) {
            $queryParams['FinancialEventGroupStartedAfter'] = ObjectSerializer::toQueryValue($financialEventGroupStartedAfter);
        }
        // query params
        if ($nextToken !== null) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($nextToken);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listFinancialEvents
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $postedAfter A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param  \DateTime $postedBefore A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \B1\AmazonSPAPI\Model\ListFinancialEventsResponse
     */
    public function listFinancialEvents($maxResultsPerPage = '100', $postedAfter = null, $postedBefore = null, $nextToken = null)
    {
        list($response) = $this->listFinancialEventsWithHttpInfo($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);
        return $response;
    }

    /**
     * Operation listFinancialEventsWithHttpInfo
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $postedAfter A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param  \DateTime $postedBefore A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \B1\AmazonSPAPI\Model\ListFinancialEventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventsWithHttpInfo($maxResultsPerPage = '100', $postedAfter = null, $postedBefore = null, $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventsResponse';
        $request = $this->listFinancialEventsRequest($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listFinancialEventsAsync
     *
     *
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $postedAfter A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param  \DateTime $postedBefore A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsAsync($maxResultsPerPage = '100', $postedAfter = null, $postedBefore = null, $nextToken = null)
    {
        return $this->listFinancialEventsAsyncWithHttpInfo($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventsAsyncWithHttpInfo
     *
     *
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $postedAfter A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param  \DateTime $postedBefore A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsAsyncWithHttpInfo($maxResultsPerPage = '100', $postedAfter = null, $postedBefore = null, $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventsResponse';
        $request = $this->listFinancialEventsRequest($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);
        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listFinancialEvents'
     *
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  \DateTime $postedAfter A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param  \DateTime $postedBefore A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventsRequest($maxResultsPerPage = '100', $postedAfter = null, $postedBefore = null, $nextToken = null)
    {
        if ($maxResultsPerPage !== null && $maxResultsPerPage > 100) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEvents, must be smaller than or equal to 100.');
        }
        if ($maxResultsPerPage !== null && $maxResultsPerPage < 1) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEvents, must be bigger than or equal to 1.');
        }


        $resourcePath = '/finances/v0/financialEvents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($maxResultsPerPage !== null) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($maxResultsPerPage);
        }
        // query params
        if ($postedAfter !== null) {
            $queryParams['PostedAfter'] = ObjectSerializer::toQueryValue($postedAfter);
        }
        // query params
        if ($postedBefore !== null) {
            $queryParams['PostedBefore'] = ObjectSerializer::toQueryValue($postedBefore);
        }
        // query params
        if ($nextToken !== null) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($nextToken);
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listFinancialEventsByGroupId
     *
     * @param  string $eventGroupId The identifier of the financial event group to which the events belong. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \B1\AmazonSPAPI\Model\ListFinancialEventsResponse
     */
    public function listFinancialEventsByGroupId($eventGroupId, $maxResultsPerPage = '100', $nextToken = null)
    {
        list($response) = $this->listFinancialEventsByGroupIdWithHttpInfo($eventGroupId, $maxResultsPerPage, $nextToken);
        return $response;
    }

    /**
     * Operation listFinancialEventsByGroupIdWithHttpInfo
     *
     * @param  string $eventGroupId The identifier of the financial event group to which the events belong. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \B1\AmazonSPAPI\Model\ListFinancialEventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventsByGroupIdWithHttpInfo($eventGroupId, $maxResultsPerPage = '100', $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventsResponse';
        $request = $this->listFinancialEventsByGroupIdRequest($eventGroupId, $maxResultsPerPage, $nextToken);
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listFinancialEventsByGroupIdAsync
     *
     *
     *
     * @param  string $eventGroupId The identifier of the financial event group to which the events belong. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByGroupIdAsync($eventGroupId, $maxResultsPerPage = '100', $nextToken = null)
    {
        return $this->listFinancialEventsByGroupIdAsyncWithHttpInfo($eventGroupId, $maxResultsPerPage, $nextToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventsByGroupIdAsyncWithHttpInfo
     *
     *
     *
     * @param  string $eventGroupId The identifier of the financial event group to which the events belong. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByGroupIdAsyncWithHttpInfo($eventGroupId, $maxResultsPerPage = '100', $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventsResponse';
        $request = $this->listFinancialEventsByGroupIdRequest($eventGroupId, $maxResultsPerPage, $nextToken);
        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listFinancialEventsByGroupId'
     *
     * @param  string $eventGroupId The identifier of the financial event group to which the events belong. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventsByGroupIdRequest($eventGroupId, $maxResultsPerPage = '100', $nextToken = null)
    {
        // verify the required parameter 'eventGroupId' is set
        if ($eventGroupId === null || (is_array($eventGroupId) && count($eventGroupId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $eventGroupId when calling listFinancialEventsByGroupId'
            );
        }
        if ($maxResultsPerPage !== null && $maxResultsPerPage > 100) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEventsByGroupId, must be smaller than or equal to 100.');
        }
        if ($maxResultsPerPage !== null && $maxResultsPerPage < 1) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEventsByGroupId, must be bigger than or equal to 1.');
        }


        $resourcePath = '/finances/v0/financialEventGroups/{eventGroupId}/financialEvents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($maxResultsPerPage !== null) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($maxResultsPerPage);
        }
        // query params
        if ($nextToken !== null) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($nextToken);
        }

        // path params
        if ($eventGroupId !== null) {
            $resourcePath = str_replace(
                '{' . 'eventGroupId' . '}',
                ObjectSerializer::toPathValue($eventGroupId),
                $resourcePath
            );
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listFinancialEventsByOrderId
     *
     * @param  string $orderId An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \B1\AmazonSPAPI\Model\ListFinancialEventsResponse
     */
    public function listFinancialEventsByOrderId($orderId, $maxResultsPerPage = '100', $nextToken = null)
    {
        list($response) = $this->listFinancialEventsByOrderIdWithHttpInfo($orderId, $maxResultsPerPage, $nextToken);
        return $response;
    }

    /**
     * Operation listFinancialEventsByOrderIdWithHttpInfo
     *
     * @param  string $orderId An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \B1\AmazonSPAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \B1\AmazonSPAPI\Model\ListFinancialEventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventsByOrderIdWithHttpInfo($orderId, $maxResultsPerPage = '100', $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventsResponse';
        $request = $this->listFinancialEventsByOrderIdRequest($orderId, $maxResultsPerPage, $nextToken);
        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listFinancialEventsByOrderIdAsync
     *
     *
     *
     * @param  string $orderId An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByOrderIdAsync($orderId, $maxResultsPerPage = '100', $nextToken = null)
    {
        return $this->listFinancialEventsByOrderIdAsyncWithHttpInfo($orderId, $maxResultsPerPage, $nextToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventsByOrderIdAsyncWithHttpInfo
     *
     *
     *
     * @param  string $orderId An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByOrderIdAsyncWithHttpInfo($orderId, $maxResultsPerPage = '100', $nextToken = null)
    {
        $returnType = '\B1\AmazonSPAPI\Model\ListFinancialEventsResponse';
        $request = $this->listFinancialEventsByOrderIdRequest($orderId, $maxResultsPerPage, $nextToken);
        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listFinancialEventsByOrderId'
     *
     * @param  string $orderId An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param  int $maxResultsPerPage The maximum number of results to return per page. (optional, default to 100)
     * @param  string $nextToken A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventsByOrderIdRequest($orderId, $maxResultsPerPage = '100', $nextToken = null)
    {
        // verify the required parameter 'orderId' is set
        if ($orderId === null || (is_array($orderId) && count($orderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orderId when calling listFinancialEventsByOrderId'
            );
        }
        if ($maxResultsPerPage !== null && $maxResultsPerPage > 100) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEventsByOrderId, must be smaller than or equal to 100.');
        }
        if ($maxResultsPerPage !== null && $maxResultsPerPage < 1) {
            throw new \InvalidArgumentException('invalid value for "$maxResultsPerPage" when calling FinancesApi.listFinancialEventsByOrderId, must be bigger than or equal to 1.');
        }


        $resourcePath = '/finances/v0/orders/{orderId}/financialEvents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($maxResultsPerPage !== null) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($maxResultsPerPage);
        }
        // query params
        if ($nextToken !== null) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($nextToken);
        }

        // path params
        if ($orderId !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($orderId),
                $resourcePath
            );
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
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
        }

        return $options;
    }
}
