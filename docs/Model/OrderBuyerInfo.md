# OrderBuyerInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazonOrderId** | **string** | An Amazon-defined order identifier, in 3-7-7 format. | 
**buyerEmail** | **string** | The anonymized email address of the buyer. | [optional] 
**buyerName** | **string** | The name of the buyer. | [optional] 
**buyerCounty** | **string** | The county of the buyer. | [optional] 
**buyerTaxInfo** | [**\B1\AmazonSPAPI\Model\BuyerTaxInfo**](BuyerTaxInfo.md) | Tax information about the buyer. | [optional] 
**purchaseOrderNumber** | **string** | The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


