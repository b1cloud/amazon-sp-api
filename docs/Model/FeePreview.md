# FeePreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) value used to identify the item. | [optional] 
**price** | [**\B1\AmazonSPAPI\Model\MoneyType**](MoneyType.md) | The price that the seller plans to charge for the item. | [optional] 
**feeBreakdown** | [**\B1\AmazonSPAPI\Model\FeeLineItem[]**](FeeLineItem.md) | A list of the Small and Light fees for the item. | [optional] 
**totalFees** | [**\B1\AmazonSPAPI\Model\MoneyType**](MoneyType.md) | The total fees charged if the item participated in the Small and Light program. | [optional] 
**errors** | [**\B1\AmazonSPAPI\Model\Error[]**](Error.md) | One or more unexpected errors occurred during the getSmallAndLightFeePreview operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


