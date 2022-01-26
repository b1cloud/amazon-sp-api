# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentId** | [**\B1\AmazonSPAPI\Model\ShipmentId**](ShipmentId.md) |  | 
**amazonOrderId** | [**\B1\AmazonSPAPI\Model\AmazonOrderId**](AmazonOrderId.md) |  | 
**sellerOrderId** | [**\B1\AmazonSPAPI\Model\SellerOrderId**](SellerOrderId.md) |  | [optional] 
**itemList** | [**\B1\AmazonSPAPI\Model\ItemList**](ItemList.md) |  | 
**shipFromAddress** | [**\B1\AmazonSPAPI\Model\Address**](Address.md) | The address of the sender. | 
**shipToAddress** | [**\B1\AmazonSPAPI\Model\Address**](Address.md) | The destination address for the shipment. | 
**packageDimensions** | [**\B1\AmazonSPAPI\Model\PackageDimensions**](PackageDimensions.md) |  | 
**weight** | [**\B1\AmazonSPAPI\Model\Weight**](Weight.md) | The package weight. | 
**insurance** | [**\B1\AmazonSPAPI\Model\CurrencyAmount**](CurrencyAmount.md) | If DeclaredValue was specified in a previous call to the createShipment operation, then Insurance indicates the amount that the carrier will use to insure the shipment. If DeclaredValue was not specified with a previous call to the createShipment operation, then the shipment will be insured for the carrier&#39;s minimum insurance amount, or the combined sale prices that the items are listed for in the shipment, whichever is less. | 
**shippingService** | [**\B1\AmazonSPAPI\Model\ShippingService**](ShippingService.md) |  | 
**label** | [**\B1\AmazonSPAPI\Model\Label**](Label.md) | Data for creating a shipping label and dimensions for printing the label. If the shipment is canceled, an empty Label is returned. | 
**status** | [**\B1\AmazonSPAPI\Model\ShipmentStatus**](ShipmentStatus.md) | The shipment status. | 
**trackingId** | [**\B1\AmazonSPAPI\Model\TrackingId**](TrackingId.md) |  | [optional] 
**createdDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | The date and time the shipment was created. | 
**lastUpdatedDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | The date and time of the last update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


