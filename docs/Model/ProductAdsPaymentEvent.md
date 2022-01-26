# ProductAdsPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**transactionType** | **string** | Indicates if the transaction is for a charge or a refund.  Possible values:  * charge - Charge  * refund - Refund | [optional] 
**invoiceId** | **string** | Identifier for the invoice that the transaction appears in. | [optional] 
**baseValue** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Base amount of the transaction, before tax. | [optional] 
**taxValue** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Tax amount of the transaction. | [optional] 
**transactionValue** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total amount of the transaction. Equal to baseValue + taxValue. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


