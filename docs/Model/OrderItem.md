# OrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aSIN** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | 
**sellerSKU** | **string** | The seller stock keeping unit (SKU) of the item. | [optional] 
**orderItemId** | **string** | An Amazon-defined order item identifier. | 
**title** | **string** | The name of the item. | [optional] 
**quantityOrdered** | **int** | The number of items in the order. | 
**quantityShipped** | **int** | The number of items shipped. | [optional] 
**productInfo** | [**\B1\AmazonSPAPI\Model\ProductInfoDetail**](ProductInfoDetail.md) | Product information for the item. | [optional] 
**pointsGranted** | [**\B1\AmazonSPAPI\Model\PointsGrantedDetail**](PointsGrantedDetail.md) | The number and value of Amazon Points granted with the purchase of an item. | [optional] 
**itemPrice** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The selling price of the order item. Note that an order item is an item and a quantity. This means that the value of ItemPrice is equal to the selling price of the item multiplied by the quantity ordered. Note that ItemPrice excludes ShippingPrice and GiftWrapPrice. | [optional] 
**shippingPrice** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The shipping price of the item. | [optional] 
**itemTax** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The tax on the item price. | [optional] 
**shippingTax** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The tax on the shipping price. | [optional] 
**shippingDiscount** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The discount on the shipping price. | [optional] 
**shippingDiscountTax** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The tax on the discount on the shipping price. | [optional] 
**promotionDiscount** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The total of all promotional discounts in the offer. | [optional] 
**promotionDiscountTax** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The tax on the total of all promotional discounts in the offer. | [optional] 
**promotionIds** | [**\B1\AmazonSPAPI\Model\PromotionIdList**](PromotionIdList.md) |  | [optional] 
**cODFee** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The fee charged for COD service. | [optional] 
**cODFeeDiscount** | [**\B1\AmazonSPAPI\Model\Money**](Money.md) | The discount on the COD fee. | [optional] 
**isGift** | **bool** | When true, the item is a gift. | [optional] 
**conditionNote** | **string** | The condition of the item as described by the seller. | [optional] 
**conditionId** | **string** | The condition of the item.  Possible values: New, Used, Collectible, Refurbished, Preorder, Club. | [optional] 
**conditionSubtypeId** | **string** | The subcondition of the item.  Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other. | [optional] 
**scheduledDeliveryStartDate** | **string** | The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format. | [optional] 
**scheduledDeliveryEndDate** | **string** | The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format. | [optional] 
**priceDesignation** | **string** | Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).   Possible values: BusinessPrice - A special price that is available only for Amazon Business orders. | [optional] 
**taxCollection** | [**\B1\AmazonSPAPI\Model\TaxCollection**](TaxCollection.md) | Information about withheld taxes. | [optional] 
**serialNumberRequired** | **bool** | When true, the product type for this item has a serial number.  Returned only for Amazon Easy Ship orders. | [optional] 
**isTransparency** | **bool** | When true, transparency codes are required. | [optional] 
**iossNumber** | **string** | The IOSS number for the marketplace. Sellers shipping to the European Union (EU) from outside of the EU must provide this IOSS number to their carrier when Amazon has collected the VAT on the sale. | [optional] 
**storeChainStoreId** | **string** | The store chain store identifier. Linked to a specific store in a store chain. | [optional] 
**deemedResellerCategory** | **string** | The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK. | [optional] 
**buyerInfo** | [**\B1\AmazonSPAPI\Model\ItemBuyerInfo**](ItemBuyerInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


