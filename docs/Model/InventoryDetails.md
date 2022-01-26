# InventoryDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillableQuantity** | **int** | The item quantity that can be picked, packed, and shipped. | [optional] 
**inboundWorkingQuantity** | **int** | The number of units in an inbound shipment for which you have notified Amazon. | [optional] 
**inboundShippedQuantity** | **int** | The number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number. | [optional] 
**inboundReceivingQuantity** | **int** | The number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed. | [optional] 
**reservedQuantity** | [**\B1\AmazonSPAPI\Model\ReservedQuantity**](ReservedQuantity.md) |  | [optional] 
**researchingQuantity** | [**\B1\AmazonSPAPI\Model\ResearchingQuantity**](ResearchingQuantity.md) |  | [optional] 
**unfulfillableQuantity** | [**\B1\AmazonSPAPI\Model\UnfulfillableQuantity**](UnfulfillableQuantity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


