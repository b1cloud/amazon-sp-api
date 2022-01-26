# RemovalShipmentItemAdjustment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removalShipmentItemId** | **string** | An identifier for an item in a removal shipment. | [optional] 
**taxCollectionModel** | **string** | The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon. | [optional] 
**fulfillmentNetworkSKU** | **string** | The Amazon fulfillment network SKU for the item. | [optional] 
**adjustedQuantity** | **int** | Adjusted quantity of removal shipmentItemAdjustment items. | [optional] 
**revenueAdjustment** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total amount adjusted for disputed items. | [optional] 
**taxAmountAdjustment** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Adjustment on the Tax collected amount on the adjusted revenue. | [optional] 
**taxWithheldAdjustment** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Adjustment the tax withheld and remitted to the taxing authority by Amazon on behalf of the seller. If TaxCollectionModel&#x3D;MarketplaceFacilitator, then TaxWithheld&#x3D;TaxAmount (except the TaxWithheld amount is a negative number). Otherwise TaxWithheld&#x3D;0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


