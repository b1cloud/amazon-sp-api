# SolutionProviderCreditEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**providerTransactionType** | **string** | The transaction type. | [optional] 
**sellerOrderId** | **string** | A seller-defined identifier for an order. | [optional] 
**marketplaceId** | **string** | The identifier of the marketplace where the order was placed. | [optional] 
**marketplaceCountryCode** | **string** | The two-letter country code of the country associated with the marketplace where the order was placed. | [optional] 
**sellerId** | **string** | The Amazon-defined identifier of the seller. | [optional] 
**sellerStoreName** | **string** | The store name where the payment event occurred. | [optional] 
**providerId** | **string** | The Amazon-defined identifier of the solution provider. | [optional] 
**providerStoreName** | **string** | The store name where the payment event occurred. | [optional] 
**transactionAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The amount of the credit. | [optional] 
**transactionCreationDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time that the credit transaction was created, in ISO 8601 date time format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


