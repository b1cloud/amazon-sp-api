# B1\AmazonSPAPI\FbaInventoryApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventorySummaries**](FbaInventoryApi.md#getInventorySummaries) | **GET** /fba/inventory/v1/summaries | 


# **getInventorySummaries**
> \B1\AmazonSPAPI\Model\GetInventorySummariesResponse getInventorySummaries($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $nextToken)



Returns a list of inventory summaries. The summaries returned depend on the presence or absence of the startDateTime and sellerSkus parameters:  - All inventory summaries with available details are returned when the startDateTime and sellerSkus parameters are omitted. - When startDateTime is provided, the operation returns inventory summaries that have had changes after the date and time specified. The sellerSkus parameter is ignored. - When the sellerSkus parameter is provided, the operation returns inventory summaries for only the specified sellerSkus.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\FbaInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$granularityType = "granularityType_example"; // string | The granularity type for the inventory aggregation level.
$granularityId = "granularityId_example"; // string | The granularity ID for the inventory aggregation level.
$marketplaceIds = array("marketplaceIds_example"); // string[] | The marketplace ID for the marketplace for which to return inventory summaries.
$details = false; // bool | true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value).
$startDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected.
$sellerSkus = array("sellerSkus_example"); // string[] | A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs.
$nextToken = "nextToken_example"; // string | String token returned in the response of your previous request.

try {
    $result = $apiInstance->getInventorySummaries($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $nextToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInventoryApi->getInventorySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **granularityType** | **string**| The granularity type for the inventory aggregation level. |
 **granularityId** | **string**| The granularity ID for the inventory aggregation level. |
 **marketplaceIds** | [**string[]**](../Model/string.md)| The marketplace ID for the marketplace for which to return inventory summaries. |
 **details** | **bool**| true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). | [optional] [default to false]
 **startDateTime** | **\DateTime**| A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. | [optional]
 **sellerSkus** | [**string[]**](../Model/string.md)| A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. | [optional]
 **nextToken** | **string**| String token returned in the response of your previous request. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\GetInventorySummariesResponse**](../Model/GetInventorySummariesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

