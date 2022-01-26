# PayWithAmazonEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sellerOrderId** | **string** | An order identifier that is specified by the seller. | [optional] 
**transactionPostedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the payment transaction is posted. In ISO 8601 date time format. | [optional] 
**businessObjectType** | **string** | The type of business object. | [optional] 
**salesChannel** | **string** | The sales channel for the transaction. | [optional] 
**charge** | [**\B1\AmazonSPAPI\Model\ChargeComponent**](ChargeComponent.md) | The charge associated with the event. | [optional] 
**feeList** | [**\B1\AmazonSPAPI\Model\FeeComponentList**](FeeComponentList.md) | A list of fees associated with the event. | [optional] 
**paymentAmountType** | **string** | The type of payment.  Possible values:  * Sales | [optional] 
**amountDescription** | **string** | A short description of this payment event. | [optional] 
**fulfillmentChannel** | **string** | The fulfillment channel.  Possible values:  * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)  * MFN - Merchant Fulfillment Network (self-fulfilled) | [optional] 
**storeName** | **string** | The store name where the event occurred. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


