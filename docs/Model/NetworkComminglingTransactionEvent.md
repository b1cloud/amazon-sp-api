# NetworkComminglingTransactionEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionType** | **string** | The type of network item swap.  Possible values:  * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.  * ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces. | [optional] 
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**netCoTransactionID** | **string** | The identifier for the network item swap. | [optional] 
**swapReason** | **string** | The reason for the network item swap. | [optional] 
**aSIN** | **string** | The Amazon Standard Identification Number (ASIN) of the swapped item. | [optional] 
**marketplaceId** | **string** | The marketplace in which the event took place. | [optional] 
**taxExclusiveAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The price of the swapped item minus TaxAmount. | [optional] 
**taxAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The tax on the network item swap paid by the seller. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


