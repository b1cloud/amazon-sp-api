# ShippingService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shippingServiceName** | **string** | A plain text representation of a carrier&#39;s shipping service. For example, \&quot;UPS Ground\&quot; or \&quot;FedEx Standard Overnight\&quot;. | 
**carrierName** | **string** | The name of the carrier. | 
**shippingServiceId** | [**\B1\AmazonSPAPI\Model\ShippingServiceIdentifier**](ShippingServiceIdentifier.md) |  | 
**shippingServiceOfferId** | **string** | An Amazon-defined shipping service offer identifier. | 
**shipDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | The date that the carrier will ship the package. | 
**earliestEstimatedDeliveryDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | The earliest date by which the shipment will be delivered. | [optional] 
**latestEstimatedDeliveryDate** | [**\B1\AmazonSPAPI\Model\Timestamp**](Timestamp.md) | The latest date by which the shipment will be delivered. | [optional] 
**rate** | [**\B1\AmazonSPAPI\Model\CurrencyAmount**](CurrencyAmount.md) | The amount that the carrier will charge for the shipment. | 
**shippingServiceOptions** | [**\B1\AmazonSPAPI\Model\ShippingServiceOptions**](ShippingServiceOptions.md) | Extra services offered by the carrier. | 
**availableShippingServiceOptions** | [**\B1\AmazonSPAPI\Model\AvailableShippingServiceOptions**](AvailableShippingServiceOptions.md) |  | [optional] 
**availableLabelFormats** | [**\B1\AmazonSPAPI\Model\LabelFormatList**](LabelFormatList.md) |  | [optional] 
**availableFormatOptionsForLabel** | [**\B1\AmazonSPAPI\Model\AvailableFormatOptionsForLabelList**](AvailableFormatOptionsForLabelList.md) |  | [optional] 
**requiresAdditionalSellerInputs** | **bool** | When true, additional seller inputs are required. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


