# FBALiquidationEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**originalRemovalOrderId** | **string** | The identifier for the original removal order. | [optional] 
**liquidationProceedsAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The amount paid by the liquidator for the seller&#39;s inventory. The seller receives this amount minus LiquidationFeeAmount. | [optional] 
**liquidationFeeAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The fee charged to the seller by Amazon for liquidating the seller&#39;s FBA inventory. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


