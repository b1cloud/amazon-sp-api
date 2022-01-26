# ShipmentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazonOrderId** | **string** | An Amazon-defined identifier for an order. | [optional] 
**sellerOrderId** | **string** | A seller-defined identifier for an order. | [optional] 
**marketplaceName** | **string** | The name of the marketplace where the event occurred. | [optional] 
**orderChargeList** | [**\B1\AmazonSPAPI\Model\ChargeComponentList**](ChargeComponentList.md) | A list of order-level charges. These charges are applicable to Multi-Channel Fulfillment COD orders. | [optional] 
**orderChargeAdjustmentList** | [**\B1\AmazonSPAPI\Model\ChargeComponentList**](ChargeComponentList.md) | A list of order-level charge adjustments. These adjustments are applicable to Multi-Channel Fulfillment COD orders. | [optional] 
**shipmentFeeList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of shipment-level fees. | [optional] 
**shipmentFeeAdjustmentList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of shipment-level fee adjustments. | [optional] 
**orderFeeList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of order-level fees. These charges are applicable to Multi-Channel Fulfillment orders. | [optional] 
**orderFeeAdjustmentList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of order-level fee adjustments. These adjustments are applicable to Multi-Channel Fulfillment orders. | [optional] 
**directPaymentList** | [**\B1\AmazonSPAPI\Model\DirectPaymentList**](DirectPaymentList.md) | A list of transactions where buyers pay Amazon through one of the credit cards offered by Amazon or where buyers pay a seller directly through COD. | [optional] 
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**shipmentItemList** | [**\B1\AmazonSPAPI\Model\ShipmentItemList**](ShipmentItemList.md) |  | [optional] 
**shipmentItemAdjustmentList** | [**\B1\AmazonSPAPI\Model\ShipmentItemList**](ShipmentItemList.md) | A list of shipment item adjustments. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


