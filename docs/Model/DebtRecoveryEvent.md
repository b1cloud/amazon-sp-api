# DebtRecoveryEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debtRecoveryType** | **string** | The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment | [optional] 
**recoveryAmount** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The amount applied for recovery. | [optional] 
**overPaymentCredit** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The amount returned for overpayment. | [optional] 
**debtRecoveryItemList** | [**\B1\AmazonSPAPI\Model\DebtRecoveryItemList**](DebtRecoveryItemList.md) |  | [optional] 
**chargeInstrumentList** | [**\B1\AmazonSPAPI\Model\ChargeInstrumentList**](ChargeInstrumentList.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


