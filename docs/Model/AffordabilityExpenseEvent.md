# AffordabilityExpenseEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazonOrderId** | **string** | An Amazon-defined identifier for an order. | [optional] 
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was created. | [optional] 
**marketplaceId** | **string** | An encrypted, Amazon-defined marketplace identifier. | [optional] 
**transactionType** | **string** | Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal. | [optional] 
**baseExpense** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The amount charged for clicks incurred under the Sponsored Products program. | [optional] 
**taxTypeCGST** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Central Goods and Service Tax, charged and collected by the central government. | 
**taxTypeSGST** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | State Goods and Service Tax, charged and collected by the state government. | 
**taxTypeIGST** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | Integrated Goods and Service Tax, charged and collected by the central government. | 
**totalExpense** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The total amount charged to the seller. TotalExpense &#x3D; BaseExpense + TaxTypeIGST + TaxTypeCGST + TaxTypeSGST. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


