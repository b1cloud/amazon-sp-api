# CouponPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**couponId** | **string** | A coupon identifier. | [optional] 
**sellerCouponDescription** | **string** | The description provided by the seller when they created the coupon. | [optional] 
**clipOrRedemptionCount** | **int** | The number of coupon clips or redemptions. | [optional] 
**paymentEventId** | **string** | A payment event identifier. | [optional] 
**feeComponent** | [**\B1\AmazonSPAPI\Model\FeeComponent**](FeeComponent.md) |  | [optional] 
**chargeComponent** | [**\B1\AmazonSPAPI\Model\ChargeComponent**](ChargeComponent.md) |  | [optional] 
**totalAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The FeeComponent value plus the ChargeComponent value. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


