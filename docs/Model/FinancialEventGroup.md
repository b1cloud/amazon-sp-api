# FinancialEventGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**financialEventGroupId** | **string** | A unique identifier for the financial event group. | [optional] 
**processingStatus** | **string** | The processing status of the financial event group indicates whether the balance of the financial event group is settled.  Possible values:  * Open  * Closed | [optional] 
**fundTransferStatus** | **string** | The status of the fund transfer. | [optional] 
**originalTotal** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total amount in the currency of the marketplace in which the transactions occurred. | [optional] 
**convertedTotal** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total amount in the currency of the marketplace in which the funds were disbursed. | [optional] 
**fundTransferDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the disbursement or charge was initiated. Only present for closed settlements. In ISO 8601 date time format. | [optional] 
**traceId** | **string** | The trace identifier used by sellers to look up transactions externally. | [optional] 
**accountTail** | **string** | The account tail of the payment instrument. | [optional] 
**beginningBalance** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The balance at the beginning of the settlement period. | [optional] 
**financialEventGroupStart** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time at which the financial event group is opened. In ISO 8601 date time format. | [optional] 
**financialEventGroupEnd** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time at which the financial event group is closed. In ISO 8601 date time format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


