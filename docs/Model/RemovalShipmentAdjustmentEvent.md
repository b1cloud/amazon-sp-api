# RemovalShipmentAdjustmentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date when the financial event was posted. | [optional] 
**adjustmentEventId** | **string** | The unique identifier for the adjustment event. | [optional] 
**merchantOrderId** | **string** | The merchant removal orderId. | [optional] 
**orderId** | **string** | The orderId for shipping inventory. | [optional] 
**transactionType** | **string** | The type of removal order.  Possible values:  * WHOLESALE_LIQUIDATION. | [optional] 
**removalShipmentItemAdjustmentList** | [**\B1\AmazonSPAPI\Model\RemovalShipmentItemAdjustment[]**](RemovalShipmentItemAdjustment.md) | A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


