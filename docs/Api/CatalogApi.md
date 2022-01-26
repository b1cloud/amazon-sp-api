# B1\AmazonSPAPI\CatalogApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem**](CatalogApi.md#getCatalogItem) | **GET** /catalog/v0/items/{asin} | 
[**listCatalogCategories**](CatalogApi.md#listCatalogCategories) | **GET** /catalog/v0/categories | 
[**listCatalogItems**](CatalogApi.md#listCatalogItems) | **GET** /catalog/v0/items | 


# **getCatalogItem**
> \B1\AmazonSPAPI\Model\GetCatalogItemResponse getCatalogItem($marketplaceId, $asin)



Returns a specified item and its attributes.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 2 | 20 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplaceId = "marketplaceId_example"; // string | A marketplace identifier. Specifies the marketplace for the item.
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.

try {
    $result = $apiInstance->getCatalogItem($marketplaceId, $asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| A marketplace identifier. Specifies the marketplace for the item. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |

### Return type

[**\B1\AmazonSPAPI\Model\GetCatalogItemResponse**](../Model/GetCatalogItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCatalogCategories**
> \B1\AmazonSPAPI\Model\ListCatalogCategoriesResponse listCatalogCategories($marketplaceId, $aSIN, $sellerSKU)



Returns the parent categories to which an item belongs, based on the specified ASIN or SellerSKU.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1 | 40 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplaceId = "marketplaceId_example"; // string | A marketplace identifier. Specifies the marketplace for the item.
$aSIN = "aSIN_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.
$sellerSKU = "sellerSKU_example"; // string | Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->listCatalogCategories($marketplaceId, $aSIN, $sellerSKU);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->listCatalogCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| A marketplace identifier. Specifies the marketplace for the item. |
 **aSIN** | **string**| The Amazon Standard Identification Number (ASIN) of the item. | [optional]
 **sellerSKU** | **string**| Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\ListCatalogCategoriesResponse**](../Model/ListCatalogCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCatalogItems**
> \B1\AmazonSPAPI\Model\ListCatalogItemsResponse listCatalogItems($marketplaceId, $query, $queryContextId, $sellerSKU, $uPC, $eAN, $iSBN, $jAN)



Returns a list of items and their attributes, based on a search query or item identifiers that you specify. When based on a search query, provide the Query parameter and optionally, the QueryContextId parameter. When based on item identifiers, provide a single appropriate parameter based on the identifier type, and specify the associated item value.  MarketplaceId is always required. At least one of Query, SellerSKU, UPC, EAN, ISBN, JAN is also required.  This operation returns a maximum of ten products and does not return non-buyable products.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 6 | 40 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new B1\AmazonSPAPI\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplaceId = "marketplaceId_example"; // string | A marketplace identifier. Specifies the marketplace for which items are returned.
$query = "query_example"; // string | Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
$queryContextId = "queryContextId_example"; // string | An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
$sellerSKU = "sellerSKU_example"; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$uPC = "uPC_example"; // string | A 12-digit bar code used for retail packaging.
$eAN = "eAN_example"; // string | A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
$iSBN = "iSBN_example"; // string | The unique commercial book identifier used to identify books internationally.
$jAN = "jAN_example"; // string | A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.

try {
    $result = $apiInstance->listCatalogItems($marketplaceId, $query, $queryContextId, $sellerSKU, $uPC, $eAN, $iSBN, $jAN);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| A marketplace identifier. Specifies the marketplace for which items are returned. |
 **query** | **string**| Keyword(s) to use to search for items in the catalog. Example: &#39;harry potter books&#39;. | [optional]
 **queryContextId** | **string**| An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. | [optional]
 **sellerSKU** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. | [optional]
 **uPC** | **string**| A 12-digit bar code used for retail packaging. | [optional]
 **eAN** | **string**| A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. | [optional]
 **iSBN** | **string**| The unique commercial book identifier used to identify books internationally. | [optional]
 **jAN** | **string**| A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. | [optional]

### Return type

[**\B1\AmazonSPAPI\Model\ListCatalogItemsResponse**](../Model/ListCatalogItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

