# ShipmentRequestDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazonOrderId** | [**\B1\AmazonSPAPI\Model\AmazonOrderId**](AmazonOrderId.md) | An Amazon-defined order identifier in 3-7-7 format. | 
**sellerOrderId** | [**\B1\AmazonSPAPI\Model\SellerOrderId**](SellerOrderId.md) | A seller-defined order identifier. | [optional] 
**itemList** | [**\B1\AmazonSPAPI\Model\ItemList**](ItemList.md) |  | 
**shipFromAddress** | [**\B1\AmazonSPAPI\Model\Address**](Address.md) | The address of the sender. | 
**packageDimensions** | [**\B1\AmazonSPAPI\Model\PackageDimensions**](PackageDimensions.md) | The package dimensions. | 
**weight** | [**\B1\AmazonSPAPI\Model\Weight**](Weight.md) | The package weight. | 
**mustArriveByDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | The date by which the package must arrive to keep the promise to the customer, in ISO 8601 datetime format. If MustArriveByDate is specified, only shipping service offers that can be delivered by that date are returned. | [optional] 
**shipDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | When used in a request, this is the date and time that the seller wants to ship the package. When used in a response, this is the date and time that the package can be shipped by the indicated method. | [optional] 
**shippingServiceOptions** | [**\B1\AmazonSPAPI\Model\ShippingServiceOptions**](ShippingServiceOptions.md) | Extra services offered by the carrier. | 
**labelCustomization** | [**\B1\AmazonSPAPI\Model\LabelCustomization**](LabelCustomization.md) | Label customization options. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


