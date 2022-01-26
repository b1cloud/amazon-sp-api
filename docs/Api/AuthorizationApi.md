# B1\AmazonSPAPI\AuthorizationApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthorizationCode**](AuthorizationApi.md#getAuthorizationCode) | **GET** /authorization/v1/authorizationCode | Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.


# **getAuthorizationCode**
> \B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse getAuthorizationCode($sellingPartnerId, $developerId, $mwsAuthToken)

Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.

With the getAuthorizationCode operation, you can request a Login With Amazon (LWA) authorization code that will allow you to call a Selling Partner API on behalf of a seller who has already authorized you to call Amazon Marketplace Web Service (Amazon MWS). You specify a developer ID, an MWS auth token, and a seller ID. Taken together, these represent the Amazon MWS authorization that the seller previously granted you. The operation returns an LWA authorization code that can be exchanged for a refresh token and access token representing authorization to call the Selling Partner API on the seller's behalf. By using this API, sellers who have already authorized you for Amazon MWS do not need to re-authorize you for the Selling Partner API.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sellingPartnerId = "sellingPartnerId_example"; // string | The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore.
$developerId = "developerId_example"; // string | Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central.
$mwsAuthToken = "mwsAuthToken_example"; // string | The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore.

try {
    $result = $apiInstance->getAuthorizationCode($sellingPartnerId, $developerId, $mwsAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sellingPartnerId** | **string**| The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. |
 **developerId** | **string**| Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. |
 **mwsAuthToken** | **string**| The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. |

### Return type

[**\B1\AmazonSPAPI\Model\GetAuthorizationCodeResponse**](../Model/GetAuthorizationCodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

