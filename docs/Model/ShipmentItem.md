# ShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sellerSKU** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#39;s seller ID, which is included with every call to the Selling Partner API. | [optional] 
**orderItemId** | **string** | An Amazon-defined order item identifier. | [optional] 
**orderAdjustmentItemId** | **string** | An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events. | [optional] 
**quantityShipped** | **int** | The number of items shipped. | [optional] 
**itemChargeList** | [**\B1\AmazonSPAPI\Model\ChargeComponentList**](ChargeComponentList.md) | A list of charges associated with the shipment item. | [optional] 
**itemChargeAdjustmentList** | [**\B1\AmazonSPAPI\Model\ChargeComponentList**](ChargeComponentList.md) | A list of charge adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 
**itemFeeList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of fees associated with the shipment item. | [optional] 
**itemFeeAdjustmentList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of fee adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 
**itemTaxWithheldList** | [**\B1\AmazonSPAPI\Model\TaxWithheldComponentList**](TaxWithheldComponentList.md) | A list of taxes withheld information for a shipment item. | [optional] 
**promotionList** | [**\B1\AmazonSPAPI\Model\PromotionList**](PromotionList.md) |  | [optional] 
**promotionAdjustmentList** | [**\B1\AmazonSPAPI\Model\PromotionList**](PromotionList.md) | A list of promotion adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 
**costOfPointsGranted** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The cost of Amazon Points granted for a shipment item. | [optional] 
**costOfPointsReturned** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The cost of Amazon Points returned for a shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


