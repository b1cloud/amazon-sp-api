# SellerDealPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**dealId** | **string** | The unique identifier of the deal. | [optional] 
**dealDescription** | **string** | The internal description of the deal. | [optional] 
**eventType** | **string** | The type of event: SellerDealComplete. | [optional] 
**feeType** | **string** | The type of fee: RunLightningDealFee. | [optional] 
**feeAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The monetary amount of the fee. | [optional] 
**taxAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The monetary amount of the tax applied. | [optional] 
**totalAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total monetary amount paid. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


