# SellerReviewEnrollmentPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**enrollmentId** | **string** | An enrollment identifier. | [optional] 
**parentASIN** | **string** | The Amazon Standard Identification Number (ASIN) of the item that was enrolled in the Early Reviewer Program. | [optional] 
**feeComponent** | [**\B1\AmazonSPAPI\Model\FeeComponent**](FeeComponent.md) |  | [optional] 
**chargeComponent** | [**\B1\AmazonSPAPI\Model\ChargeComponent**](ChargeComponent.md) |  | [optional] 
**totalAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The FeeComponent value plus the ChargeComponent value. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


