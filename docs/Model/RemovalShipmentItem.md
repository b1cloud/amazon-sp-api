# RemovalShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removalShipmentItemId** | **string** | An identifier for an item in a removal shipment. | [optional] 
**taxCollectionModel** | **string** | The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon. | [optional] 
**fulfillmentNetworkSKU** | **string** | The Amazon fulfillment network SKU for the item. | [optional] 
**quantity** | **int** | The quantity of the item. | [optional] 
**revenue** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total amount paid to the seller for the removed item. | [optional] 
**feeAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The fee that Amazon charged to the seller for the removal of the item. The amount is a negative number. | [optional] 
**taxAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Tax collected on the revenue. | [optional] 
**taxWithheld** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The tax withheld and remitted to the taxing authority by Amazon on behalf of the seller. If TaxCollectionModel&#x3D;MarketplaceFacilitator, then TaxWithheld&#x3D;TaxAmount (except the TaxWithheld amount is a negative number). Otherwise TaxWithheld&#x3D;0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


