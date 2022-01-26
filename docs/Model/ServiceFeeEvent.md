# ServiceFeeEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazonOrderId** | **string** | An Amazon-defined identifier for an order. | [optional] 
**feeReason** | **string** | A short description of the service fee reason. | [optional] 
**feeList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of fee components associated with the service fee. | [optional] 
**sellerSKU** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#39;s seller ID, which is included with every call to the Selling Partner API. | [optional] 
**fnSKU** | **string** | A unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center. | [optional] 
**feeDescription** | **string** | A short description of the service fee event. | [optional] 
**aSIN** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


