# B1\AmazonSPAPI\ShipmentApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateShipmentStatus**](ShipmentApi.md#updateShipmentStatus) | **POST** /orders/v0/orders/{orderId}/shipment | 


# **updateShipmentStatus**
> updateShipmentStatus($orderId, $payload)



Update the shipment status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = "orderId_example"; // string | An Amazon-defined order identifier, in 3-7-7 format.
$payload = new \B1\AmazonSPAPI\Model\UpdateShipmentStatusRequest(); // \B1\AmazonSPAPI\Model\UpdateShipmentStatusRequest | Request to update the shipment status.

try {
    $apiInstance->updateShipmentStatus($orderId, $payload);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->updateShipmentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **payload** | [**\B1\AmazonSPAPI\Model\UpdateShipmentStatusRequest**](../Model/UpdateShipmentStatusRequest.md)| Request to update the shipment status. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

