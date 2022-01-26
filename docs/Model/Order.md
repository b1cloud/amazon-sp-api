# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazonOrderId** | **string** | An Amazon-defined order identifier, in 3-7-7 format. | 
**sellerOrderId** | **string** | A seller-defined order identifier. | [optional] 
**purchaseDate** | **string** | The date when the order was created. | 
**lastUpdateDate** | **string** | The date when the order was last updated.  Note: LastUpdateDate is returned with an incorrect date for orders that were last updated before 2009-04-01. | 
**orderStatus** | **string** | The current order status. | 
**fulfillmentChannel** | **string** | Whether the order was fulfilled by Amazon (AFN) or by the seller (MFN). | [optional] 
**salesChannel** | **string** | The sales channel of the first item in the order. | [optional] 
**orderChannel** | **string** | The order channel of the first item in the order. | [optional] 
**shipServiceLevel** | **string** | The shipment service level of the order. | [optional] 
**orderTotal** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The total charge for this order. | [optional] 
**numberOfItemsShipped** | **int** | The number of items shipped. | [optional] 
**numberOfItemsUnshipped** | **int** | The number of items unshipped. | [optional] 
**paymentExecutionDetail** | [**\B1\AmazonSPAPI\Model\PaymentExecutionDetailItemList**](PaymentExecutionDetailItemList.md) | Information about sub-payment methods for a Cash On Delivery (COD) order.  Note: For a COD order that is paid for using one sub-payment method, one PaymentExecutionDetailItem object is returned, with PaymentExecutionDetailItem/PaymentMethod &#x3D; COD. For a COD order that is paid for using multiple sub-payment methods, two or more PaymentExecutionDetailItem objects are returned. | [optional] 
**paymentMethod** | **string** | The payment method for the order. This property is limited to Cash On Delivery (COD) and Convenience Store (CVS) payment methods. Unless you need the specific COD payment information provided by the PaymentExecutionDetailItem object, we recommend using the PaymentMethodDetails property to get payment method information. | [optional] 
**paymentMethodDetails** | [**\B1\AmazonSPAPI\Model\PaymentMethodDetailItemList**](PaymentMethodDetailItemList.md) | A list of payment methods for the order. | [optional] 
**marketplaceId** | **string** | The identifier for the marketplace where the order was placed. | [optional] 
**shipmentServiceLevelCategory** | **string** | The shipment service level category of the order.  Possible values: Expedited, FreeEconomy, NextDay, SameDay, SecondDay, Scheduled, Standard. | [optional] 
**easyShipShipmentStatus** | **string** | The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.  Possible values: PendingPickUp, LabelCanceled, PickedUp, OutForDelivery, Damaged, Delivered, RejectedByBuyer, Undeliverable, ReturnedToSeller, ReturningToSeller. | [optional] 
**cbaDisplayableShippingLabel** | **string** | Custom ship label for Checkout by Amazon (CBA). | [optional] 
**orderType** | **string** | The type of the order. | [optional] 
**earliestShipDate** | **string** | The start of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.  Note: EarliestShipDate might not be returned for orders placed before February 1, 2013. | [optional] 
**latestShipDate** | **string** | The end of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.  Note: LatestShipDate might not be returned for orders placed before February 1, 2013. | [optional] 
**earliestDeliveryDate** | **string** | The start of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders. | [optional] 
**latestDeliveryDate** | **string** | The end of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders that do not have a PendingAvailability, Pending, or Canceled status. | [optional] 
**isBusinessOrder** | **bool** | When true, the order is an Amazon Business order. An Amazon Business order is an order where the buyer is a Verified Business Buyer. | [optional] 
**isPrime** | **bool** | When true, the order is a seller-fulfilled Amazon Prime order. | [optional] 
**isPremiumOrder** | **bool** | When true, the order has a Premium Shipping Service Level Agreement. For more information about Premium Shipping orders, see \&quot;Premium Shipping Options\&quot; in the Seller Central Help for your marketplace. | [optional] 
**isGlobalExpressEnabled** | **bool** | When true, the order is a GlobalExpress order. | [optional] 
**replacedOrderId** | **string** | The order ID value for the order that is being replaced. Returned only if IsReplacementOrder &#x3D; true. | [optional] 
**isReplacementOrder** | **bool** | When true, this is a replacement order. | [optional] 
**promiseResponseDueDate** | **string** | Indicates the date by which the seller must respond to the buyer with an estimated ship date. Returned only for Sourcing on Demand orders. | [optional] 
**isEstimatedShipDateSet** | **bool** | When true, the estimated ship date is set for the order. Returned only for Sourcing on Demand orders. | [optional] 
**isSoldByAB** | **bool** | When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller. | [optional] 
**defaultShipFromLocationAddress** | [**\B1\AmazonSPAPI\Model\Address**](Address.md) | The recommended location for the seller to ship the items from. It is calculated at checkout. The seller may or may not choose to ship from this location. | [optional] 
**buyerInvoicePreference** | **string** | The buyer’s invoicing preference. | [optional] 
**buyerTaxInformation** | [**\B1\AmazonSPAPI\Model\BuyerTaxInformation**](BuyerTaxInformation.md) | Contains the business invoice tax information. | [optional] 
**fulfillmentInstruction** | [**\B1\AmazonSPAPI\Model\FulfillmentInstruction**](FulfillmentInstruction.md) | Contains the instructions about the fulfillment like where should it be fulfilled from. | [optional] 
**isISPU** | **bool** | When true, this order is marked to be picked up from a store rather than delivered. | [optional] 
**marketplaceTaxInfo** | [**\B1\AmazonSPAPI\Model\MarketplaceTaxInfo**](MarketplaceTaxInfo.md) | Tax information about the marketplace. | [optional] 
**sellerDisplayName** | **string** | The seller’s friendly name registered in the marketplace. | [optional] 
**shippingAddress** | [**\B1\AmazonSPAPI\Model\Address**](Address.md) |  | [optional] 
**buyerInfo** | [**\B1\AmazonSPAPI\Model\BuyerInfo**](BuyerInfo.md) |  | [optional] 
**automatedShippingSettings** | [**\B1\AmazonSPAPI\Model\AutomatedShippingSettings**](AutomatedShippingSettings.md) | Contains information regarding the Shipping Settings Automaton program, such as whether the order&#39;s shipping settings were generated automatically, and what those settings are. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


