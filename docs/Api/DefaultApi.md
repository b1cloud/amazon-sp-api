# B1\AmazonSPAPI\DefaultApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFinancialEventGroups**](DefaultApi.md#listFinancialEventGroups) | **GET** /finances/v0/financialEventGroups | 
[**listFinancialEvents**](DefaultApi.md#listFinancialEvents) | **GET** /finances/v0/financialEvents | 
[**listFinancialEventsByGroupId**](DefaultApi.md#listFinancialEventsByGroupId) | **GET** /finances/v0/financialEventGroups/{eventGroupId}/financialEvents | 
[**listFinancialEventsByOrderId**](DefaultApi.md#listFinancialEventsByOrderId) | **GET** /finances/v0/orders/{orderId}/financialEvents | 


# **listFinancialEventGroups**
> \B1\AmazonSPAPI\Model\ListFinancialEventGroupsResponse listFinancialEventGroups($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken)



Returns financial event groups for a given date range.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$maxResultsPerPage = 100; // int | The maximum number of results to return per page.
$financialEventGroupStartedBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned.
$financialEventGroupStartedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted.
$nextToken = "nextToken_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventGroups($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEventGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResultsPerPage** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **financialEventGroupStartedBefore** | **\DateTime**| A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. | [optional]
 **financialEventGroupStartedAfter** | **\DateTime**| A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. | [optional]
 **nextToken** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\ListFinancialEventGroupsResponse**](../Model/ListFinancialEventGroupsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFinancialEvents**
> \B1\AmazonSPAPI\Model\ListFinancialEventsResponse listFinancialEvents($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken)



Returns financial events for the specified data range.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$maxResultsPerPage = 100; // int | The maximum number of results to return per page.
$postedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
$postedBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
$nextToken = "nextToken_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEvents($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResultsPerPage** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **postedAfter** | **\DateTime**| A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. | [optional]
 **postedBefore** | **\DateTime**| A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. | [optional]
 **nextToken** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\ListFinancialEventsResponse**](../Model/ListFinancialEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFinancialEventsByGroupId**
> \B1\AmazonSPAPI\Model\ListFinancialEventsResponse listFinancialEventsByGroupId($eventGroupId, $maxResultsPerPage, $nextToken)



Returns all financial events for the specified financial event group.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eventGroupId = "eventGroupId_example"; // string | The identifier of the financial event group to which the events belong.
$maxResultsPerPage = 100; // int | The maximum number of results to return per page.
$nextToken = "nextToken_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByGroupId($eventGroupId, $maxResultsPerPage, $nextToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEventsByGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventGroupId** | **string**| The identifier of the financial event group to which the events belong. |
 **maxResultsPerPage** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **nextToken** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\ListFinancialEventsResponse**](../Model/ListFinancialEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFinancialEventsByOrderId**
> \B1\AmazonSPAPI\Model\ListFinancialEventsResponse listFinancialEventsByOrderId($orderId, $maxResultsPerPage, $nextToken)



Returns all financial events for the specified order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = "orderId_example"; // string | An Amazon-defined order identifier, in 3-7-7 format.
$maxResultsPerPage = 100; // int | The maximum number of results to return per page.
$nextToken = "nextToken_example"; // string | A string token returned in the response of your previous request.

try {
    $result = $apiInstance->listFinancialEventsByOrderId($orderId, $maxResultsPerPage, $nextToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFinancialEventsByOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **maxResultsPerPage** | **int**| The maximum number of results to return per page. | [optional] [default to 100]
 **nextToken** | **string**| A string token returned in the response of your previous request. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\ListFinancialEventsResponse**](../Model/ListFinancialEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

