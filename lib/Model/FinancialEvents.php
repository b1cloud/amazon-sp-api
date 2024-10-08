<?php
/**
 * FinancialEvents
 *
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace B1\AmazonSPAPI\Model;

use \ArrayAccess;
use \B1\AmazonSPAPI\ObjectSerializer;

/**
 * FinancialEvents Class Doc Comment
 *
 * @category Class
 * @description Contains all information related to a financial event.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialEvents  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialEvents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipmentEventList' => '\B1\AmazonSPAPI\Model\ShipmentEvent[]',
        'refundEventList' => '\B1\AmazonSPAPI\Model\ShipmentEvent[]',
        'guaranteeClaimEventList' => '\B1\AmazonSPAPI\Model\ShipmentEvent[]',
        'chargebackEventList' => '\B1\AmazonSPAPI\Model\ShipmentEvent[]',
        'payWithAmazonEventList' => '\B1\AmazonSPAPI\Model\PayWithAmazonEvent[]',
        'serviceProviderCreditEventList' => '\B1\AmazonSPAPI\Model\SolutionProviderCreditEvent[]',
        'retrochargeEventList' => '\B1\AmazonSPAPI\Model\RetrochargeEvent[]',
        'rentalTransactionEventList' => '\B1\AmazonSPAPI\Model\RentalTransactionEvent[]',
        'productAdsPaymentEventList' => '\B1\AmazonSPAPI\Model\ProductAdsPaymentEvent[]',
        'serviceFeeEventList' => '\B1\AmazonSPAPI\Model\ServiceFeeEvent[]',
        'sellerDealPaymentEventList' => '\B1\AmazonSPAPI\Model\SellerDealPaymentEvent[]',
        'debtRecoveryEventList' => '\B1\AmazonSPAPI\Model\DebtRecoveryEvent[]',
        'loanServicingEventList' => '\B1\AmazonSPAPI\Model\LoanServicingEvent[]',
        'adjustmentEventList' => '\B1\AmazonSPAPI\Model\AdjustmentEvent[]',
        'sAFETReimbursementEventList' => '\B1\AmazonSPAPI\Model\SAFETReimbursementEvent[]',
        'sellerReviewEnrollmentPaymentEventList' => '\B1\AmazonSPAPI\Model\SellerReviewEnrollmentPaymentEvent[]',
        'fBALiquidationEventList' => '\B1\AmazonSPAPI\Model\FBALiquidationEvent[]',
        'couponPaymentEventList' => '\B1\AmazonSPAPI\Model\CouponPaymentEvent[]',
        'imagingServicesFeeEventList' => '\B1\AmazonSPAPI\Model\ImagingServicesFeeEvent[]',
        'networkComminglingTransactionEventList' => '\B1\AmazonSPAPI\Model\NetworkComminglingTransactionEvent[]',
        'affordabilityExpenseEventList' => '\B1\AmazonSPAPI\Model\AffordabilityExpenseEvent[]',
        'affordabilityExpenseReversalEventList' => '\B1\AmazonSPAPI\Model\AffordabilityExpenseEvent[]',
        'trialShipmentEventList' => '\B1\AmazonSPAPI\Model\TrialShipmentEvent[]',
        'shipmentSettleEventList' => '\B1\AmazonSPAPI\Model\ShipmentSettleEvent[]',
        'taxWithholdingEventList' => '\B1\AmazonSPAPI\Model\TaxWithholdingEvent[]',
        'removalShipmentEventList' => '\B1\AmazonSPAPI\Model\RemovalShipmentEvent[]',
        'removalShipmentAdjustmentEventList' => '\B1\AmazonSPAPI\Model\RemovalShipmentAdjustmentEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipmentEventList' => null,
        'refundEventList' => null,
        'guaranteeClaimEventList' => null,
        'chargebackEventList' => null,
        'payWithAmazonEventList' => null,
        'serviceProviderCreditEventList' => null,
        'retrochargeEventList' => null,
        'rentalTransactionEventList' => null,
        'productAdsPaymentEventList' => null,
        'serviceFeeEventList' => null,
        'sellerDealPaymentEventList' => null,
        'debtRecoveryEventList' => null,
        'loanServicingEventList' => null,
        'adjustmentEventList' => null,
        'sAFETReimbursementEventList' => null,
        'sellerReviewEnrollmentPaymentEventList' => null,
        'fBALiquidationEventList' => null,
        'couponPaymentEventList' => null,
        'imagingServicesFeeEventList' => null,
        'networkComminglingTransactionEventList' => null,
        'affordabilityExpenseEventList' => null,
        'affordabilityExpenseReversalEventList' => null,
        'trialShipmentEventList' => null,
        'shipmentSettleEventList' => null,
        'taxWithholdingEventList' => null,
        'removalShipmentEventList' => null,
        'removalShipmentAdjustmentEventList' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipmentEventList' => 'ShipmentEventList',
        'refundEventList' => 'RefundEventList',
        'guaranteeClaimEventList' => 'GuaranteeClaimEventList',
        'chargebackEventList' => 'ChargebackEventList',
        'payWithAmazonEventList' => 'PayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'ServiceProviderCreditEventList',
        'retrochargeEventList' => 'RetrochargeEventList',
        'rentalTransactionEventList' => 'RentalTransactionEventList',
        'productAdsPaymentEventList' => 'ProductAdsPaymentEventList',
        'serviceFeeEventList' => 'ServiceFeeEventList',
        'sellerDealPaymentEventList' => 'SellerDealPaymentEventList',
        'debtRecoveryEventList' => 'DebtRecoveryEventList',
        'loanServicingEventList' => 'LoanServicingEventList',
        'adjustmentEventList' => 'AdjustmentEventList',
        'sAFETReimbursementEventList' => 'SAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'SellerReviewEnrollmentPaymentEventList',
        'fBALiquidationEventList' => 'FBALiquidationEventList',
        'couponPaymentEventList' => 'CouponPaymentEventList',
        'imagingServicesFeeEventList' => 'ImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'NetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'AffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'AffordabilityExpenseReversalEventList',
        'trialShipmentEventList' => 'TrialShipmentEventList',
        'shipmentSettleEventList' => 'ShipmentSettleEventList',
        'taxWithholdingEventList' => 'TaxWithholdingEventList',
        'removalShipmentEventList' => 'RemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'RemovalShipmentAdjustmentEventList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentEventList' => 'setShipmentEventList',
        'refundEventList' => 'setRefundEventList',
        'guaranteeClaimEventList' => 'setGuaranteeClaimEventList',
        'chargebackEventList' => 'setChargebackEventList',
        'payWithAmazonEventList' => 'setPayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'setServiceProviderCreditEventList',
        'retrochargeEventList' => 'setRetrochargeEventList',
        'rentalTransactionEventList' => 'setRentalTransactionEventList',
        'productAdsPaymentEventList' => 'setProductAdsPaymentEventList',
        'serviceFeeEventList' => 'setServiceFeeEventList',
        'sellerDealPaymentEventList' => 'setSellerDealPaymentEventList',
        'debtRecoveryEventList' => 'setDebtRecoveryEventList',
        'loanServicingEventList' => 'setLoanServicingEventList',
        'adjustmentEventList' => 'setAdjustmentEventList',
        'sAFETReimbursementEventList' => 'setSAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'setSellerReviewEnrollmentPaymentEventList',
        'fBALiquidationEventList' => 'setFBALiquidationEventList',
        'couponPaymentEventList' => 'setCouponPaymentEventList',
        'imagingServicesFeeEventList' => 'setImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'setNetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'setAffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'setAffordabilityExpenseReversalEventList',
        'trialShipmentEventList' => 'setTrialShipmentEventList',
        'shipmentSettleEventList' => 'setShipmentSettleEventList',
        'taxWithholdingEventList' => 'setTaxWithholdingEventList',
        'removalShipmentEventList' => 'setRemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'setRemovalShipmentAdjustmentEventList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentEventList' => 'getShipmentEventList',
        'refundEventList' => 'getRefundEventList',
        'guaranteeClaimEventList' => 'getGuaranteeClaimEventList',
        'chargebackEventList' => 'getChargebackEventList',
        'payWithAmazonEventList' => 'getPayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'getServiceProviderCreditEventList',
        'retrochargeEventList' => 'getRetrochargeEventList',
        'rentalTransactionEventList' => 'getRentalTransactionEventList',
        'productAdsPaymentEventList' => 'getProductAdsPaymentEventList',
        'serviceFeeEventList' => 'getServiceFeeEventList',
        'sellerDealPaymentEventList' => 'getSellerDealPaymentEventList',
        'debtRecoveryEventList' => 'getDebtRecoveryEventList',
        'loanServicingEventList' => 'getLoanServicingEventList',
        'adjustmentEventList' => 'getAdjustmentEventList',
        'sAFETReimbursementEventList' => 'getSAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'getSellerReviewEnrollmentPaymentEventList',
        'fBALiquidationEventList' => 'getFBALiquidationEventList',
        'couponPaymentEventList' => 'getCouponPaymentEventList',
        'imagingServicesFeeEventList' => 'getImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'getNetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'getAffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'getAffordabilityExpenseReversalEventList',
        'trialShipmentEventList' => 'getTrialShipmentEventList',
        'shipmentSettleEventList' => 'getShipmentSettleEventList',
        'taxWithholdingEventList' => 'getTaxWithholdingEventList',
        'removalShipmentEventList' => 'getRemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'getRemovalShipmentAdjustmentEventList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipmentEventList'] = isset($data['shipmentEventList']) ? $data['shipmentEventList'] : null;
        $this->container['refundEventList'] = isset($data['refundEventList']) ? $data['refundEventList'] : null;
        $this->container['guaranteeClaimEventList'] = isset($data['guaranteeClaimEventList']) ? $data['guaranteeClaimEventList'] : null;
        $this->container['chargebackEventList'] = isset($data['chargebackEventList']) ? $data['chargebackEventList'] : null;
        $this->container['payWithAmazonEventList'] = isset($data['payWithAmazonEventList']) ? $data['payWithAmazonEventList'] : null;
        $this->container['serviceProviderCreditEventList'] = isset($data['serviceProviderCreditEventList']) ? $data['serviceProviderCreditEventList'] : null;
        $this->container['retrochargeEventList'] = isset($data['retrochargeEventList']) ? $data['retrochargeEventList'] : null;
        $this->container['rentalTransactionEventList'] = isset($data['rentalTransactionEventList']) ? $data['rentalTransactionEventList'] : null;
        $this->container['productAdsPaymentEventList'] = isset($data['productAdsPaymentEventList']) ? $data['productAdsPaymentEventList'] : null;
        $this->container['serviceFeeEventList'] = isset($data['serviceFeeEventList']) ? $data['serviceFeeEventList'] : null;
        $this->container['sellerDealPaymentEventList'] = isset($data['sellerDealPaymentEventList']) ? $data['sellerDealPaymentEventList'] : null;
        $this->container['debtRecoveryEventList'] = isset($data['debtRecoveryEventList']) ? $data['debtRecoveryEventList'] : null;
        $this->container['loanServicingEventList'] = isset($data['loanServicingEventList']) ? $data['loanServicingEventList'] : null;
        $this->container['adjustmentEventList'] = isset($data['adjustmentEventList']) ? $data['adjustmentEventList'] : null;
        $this->container['sAFETReimbursementEventList'] = isset($data['sAFETReimbursementEventList']) ? $data['sAFETReimbursementEventList'] : null;
        $this->container['sellerReviewEnrollmentPaymentEventList'] = isset($data['sellerReviewEnrollmentPaymentEventList']) ? $data['sellerReviewEnrollmentPaymentEventList'] : null;
        $this->container['fBALiquidationEventList'] = isset($data['fBALiquidationEventList']) ? $data['fBALiquidationEventList'] : null;
        $this->container['couponPaymentEventList'] = isset($data['couponPaymentEventList']) ? $data['couponPaymentEventList'] : null;
        $this->container['imagingServicesFeeEventList'] = isset($data['imagingServicesFeeEventList']) ? $data['imagingServicesFeeEventList'] : null;
        $this->container['networkComminglingTransactionEventList'] = isset($data['networkComminglingTransactionEventList']) ? $data['networkComminglingTransactionEventList'] : null;
        $this->container['affordabilityExpenseEventList'] = isset($data['affordabilityExpenseEventList']) ? $data['affordabilityExpenseEventList'] : null;
        $this->container['affordabilityExpenseReversalEventList'] = isset($data['affordabilityExpenseReversalEventList']) ? $data['affordabilityExpenseReversalEventList'] : null;
        $this->container['trialShipmentEventList'] = isset($data['trialShipmentEventList']) ? $data['trialShipmentEventList'] : null;
        $this->container['shipmentSettleEventList'] = isset($data['shipmentSettleEventList']) ? $data['shipmentSettleEventList'] : null;
        $this->container['taxWithholdingEventList'] = isset($data['taxWithholdingEventList']) ? $data['taxWithholdingEventList'] : null;
        $this->container['removalShipmentEventList'] = isset($data['removalShipmentEventList']) ? $data['removalShipmentEventList'] : null;
        $this->container['removalShipmentAdjustmentEventList'] = isset($data['removalShipmentAdjustmentEventList']) ? $data['removalShipmentAdjustmentEventList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipmentEventList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentEvent[]|null
     */
    public function getShipmentEventList()
    {
        return $this->container['shipmentEventList'];
    }

    /**
     * Sets shipmentEventList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentEventList $shipmentEventList A list of shipment events.
     *
     * @return $this
     */
    public function setShipmentEventList($shipmentEventList)
    {
        $this->container['shipmentEventList'] = $shipmentEventList;

        return $this;
    }

    /**
     * Gets refundEventList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentEvent[]|null
     */
    public function getRefundEventList()
    {
        return $this->container['refundEventList'];
    }

    /**
     * Sets refundEventList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentEventList $refundEventList A list of refund events.
     *
     * @return $this
     */
    public function setRefundEventList($refundEventList)
    {
        $this->container['refundEventList'] = $refundEventList;

        return $this;
    }

    /**
     * Gets guaranteeClaimEventList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentEvent[]|null
     */
    public function getGuaranteeClaimEventList()
    {
        return $this->container['guaranteeClaimEventList'];
    }

    /**
     * Sets guaranteeClaimEventList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentEventList $guaranteeClaimEventList A list of guarantee claim events.
     *
     * @return $this
     */
    public function setGuaranteeClaimEventList($guaranteeClaimEventList)
    {
        $this->container['guaranteeClaimEventList'] = $guaranteeClaimEventList;

        return $this;
    }

    /**
     * Gets chargebackEventList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentEvent[]|null
     */
    public function getChargebackEventList()
    {
        return $this->container['chargebackEventList'];
    }

    /**
     * Sets chargebackEventList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentEventList $chargebackEventList A list of chargeback events.
     *
     * @return $this
     */
    public function setChargebackEventList($chargebackEventList)
    {
        $this->container['chargebackEventList'] = $chargebackEventList;

        return $this;
    }

    /**
     * Gets payWithAmazonEventList
     *
     * @return \B1\AmazonSPAPI\Model\PayWithAmazonEvent[]
     */
    public function getPayWithAmazonEventList()
    {
        return $this->container['payWithAmazonEventList'];
    }

    /**
     * Sets payWithAmazonEventList
     *
     * @param \B1\AmazonSPAPI\Model\PayWithAmazonEventList $payWithAmazonEventList payWithAmazonEventList
     *
     * @return $this
     */
    public function setPayWithAmazonEventList($payWithAmazonEventList)
    {
        $this->container['payWithAmazonEventList'] = $payWithAmazonEventList;

        return $this;
    }

    /**
     * Gets serviceProviderCreditEventList
     *
     * @return \B1\AmazonSPAPI\Model\SolutionProviderCreditEvent[]
     */
    public function getServiceProviderCreditEventList()
    {
        return $this->container['serviceProviderCreditEventList'];
    }

    /**
     * Sets serviceProviderCreditEventList
     *
     * @param \B1\AmazonSPAPI\Model\SolutionProviderCreditEventList $serviceProviderCreditEventList serviceProviderCreditEventList
     *
     * @return $this
     */
    public function setServiceProviderCreditEventList($serviceProviderCreditEventList)
    {
        $this->container['serviceProviderCreditEventList'] = $serviceProviderCreditEventList;

        return $this;
    }

    /**
     * Gets retrochargeEventList
     *
     * @return \B1\AmazonSPAPI\Model\RetrochargeEvent[]
     */
    public function getRetrochargeEventList()
    {
        return $this->container['retrochargeEventList'];
    }

    /**
     * Sets retrochargeEventList
     *
     * @param \B1\AmazonSPAPI\Model\RetrochargeEventList $retrochargeEventList retrochargeEventList
     *
     * @return $this
     */
    public function setRetrochargeEventList($retrochargeEventList)
    {
        $this->container['retrochargeEventList'] = $retrochargeEventList;

        return $this;
    }

    /**
     * Gets rentalTransactionEventList
     *
     * @return \B1\AmazonSPAPI\Model\RentalTransactionEvent[]
     */
    public function getRentalTransactionEventList()
    {
        return $this->container['rentalTransactionEventList'];
    }

    /**
     * Sets rentalTransactionEventList
     *
     * @param \B1\AmazonSPAPI\Model\RentalTransactionEventList $rentalTransactionEventList rentalTransactionEventList
     *
     * @return $this
     */
    public function setRentalTransactionEventList($rentalTransactionEventList)
    {
        $this->container['rentalTransactionEventList'] = $rentalTransactionEventList;

        return $this;
    }

    /**
     * Gets productAdsPaymentEventList
     *
     * @return \B1\AmazonSPAPI\Model\ProductAdsPaymentEvent[]
     */
    public function getProductAdsPaymentEventList()
    {
        return $this->container['productAdsPaymentEventList'];
    }

    /**
     * Sets productAdsPaymentEventList
     *
     * @param \B1\AmazonSPAPI\Model\ProductAdsPaymentEventList $productAdsPaymentEventList productAdsPaymentEventList
     *
     * @return $this
     */
    public function setProductAdsPaymentEventList($productAdsPaymentEventList)
    {
        $this->container['productAdsPaymentEventList'] = $productAdsPaymentEventList;

        return $this;
    }

    /**
     * Gets serviceFeeEventList
     *
     * @return \B1\AmazonSPAPI\Model\ServiceFeeEvent[]
     */
    public function getServiceFeeEventList()
    {
        return $this->container['serviceFeeEventList'];
    }

    /**
     * Sets serviceFeeEventList
     *
     * @param \B1\AmazonSPAPI\Model\ServiceFeeEventList $serviceFeeEventList serviceFeeEventList
     *
     * @return $this
     */
    public function setServiceFeeEventList($serviceFeeEventList)
    {
        $this->container['serviceFeeEventList'] = $serviceFeeEventList;

        return $this;
    }

    /**
     * Gets sellerDealPaymentEventList
     *
     * @return \B1\AmazonSPAPI\Model\SellerDealPaymentEvent[]
     */
    public function getSellerDealPaymentEventList()
    {
        return $this->container['sellerDealPaymentEventList'];
    }

    /**
     * Sets sellerDealPaymentEventList
     *
     * @param \B1\AmazonSPAPI\Model\SellerDealPaymentEventList $sellerDealPaymentEventList sellerDealPaymentEventList
     *
     * @return $this
     */
    public function setSellerDealPaymentEventList($sellerDealPaymentEventList)
    {
        $this->container['sellerDealPaymentEventList'] = $sellerDealPaymentEventList;

        return $this;
    }

    /**
     * Gets debtRecoveryEventList
     *
     * @return \B1\AmazonSPAPI\Model\DebtRecoveryEvent[]
     */
    public function getDebtRecoveryEventList()
    {
        return $this->container['debtRecoveryEventList'];
    }

    /**
     * Sets debtRecoveryEventList
     *
     * @param \B1\AmazonSPAPI\Model\DebtRecoveryEventList $debtRecoveryEventList debtRecoveryEventList
     *
     * @return $this
     */
    public function setDebtRecoveryEventList($debtRecoveryEventList)
    {
        $this->container['debtRecoveryEventList'] = $debtRecoveryEventList;

        return $this;
    }

    /**
     * Gets loanServicingEventList
     *
     * @return \B1\AmazonSPAPI\Model\LoanServicingEvent[]
     */
    public function getLoanServicingEventList()
    {
        return $this->container['loanServicingEventList'];
    }

    /**
     * Sets loanServicingEventList
     *
     * @param \B1\AmazonSPAPI\Model\LoanServicingEventList $loanServicingEventList loanServicingEventList
     *
     * @return $this
     */
    public function setLoanServicingEventList($loanServicingEventList)
    {
        $this->container['loanServicingEventList'] = $loanServicingEventList;

        return $this;
    }

    /**
     * Gets adjustmentEventList
     *
     * @return \B1\AmazonSPAPI\Model\AdjustmentEvent[]
     */
    public function getAdjustmentEventList()
    {
        return $this->container['adjustmentEventList'];
    }

    /**
     * Sets adjustmentEventList
     *
     * @param \B1\AmazonSPAPI\Model\AdjustmentEventList $adjustmentEventList adjustmentEventList
     *
     * @return $this
     */
    public function setAdjustmentEventList($adjustmentEventList)
    {
        $this->container['adjustmentEventList'] = $adjustmentEventList;

        return $this;
    }

    /**
     * Gets sAFETReimbursementEventList
     *
     * @return \B1\AmazonSPAPI\Model\SAFETReimbursementEvent[]
     */
    public function getSAFETReimbursementEventList()
    {
        return $this->container['sAFETReimbursementEventList'];
    }

    /**
     * Sets sAFETReimbursementEventList
     *
     * @param \B1\AmazonSPAPI\Model\SAFETReimbursementEventList $sAFETReimbursementEventList sAFETReimbursementEventList
     *
     * @return $this
     */
    public function setSAFETReimbursementEventList($sAFETReimbursementEventList)
    {
        $this->container['sAFETReimbursementEventList'] = $sAFETReimbursementEventList;

        return $this;
    }

    /**
     * Gets sellerReviewEnrollmentPaymentEventList
     *
     * @return \B1\AmazonSPAPI\Model\SellerReviewEnrollmentPaymentEvent[]
     */
    public function getSellerReviewEnrollmentPaymentEventList()
    {
        return $this->container['sellerReviewEnrollmentPaymentEventList'];
    }

    /**
     * Sets sellerReviewEnrollmentPaymentEventList
     *
     * @param \B1\AmazonSPAPI\Model\SellerReviewEnrollmentPaymentEventList $sellerReviewEnrollmentPaymentEventList sellerReviewEnrollmentPaymentEventList
     *
     * @return $this
     */
    public function setSellerReviewEnrollmentPaymentEventList($sellerReviewEnrollmentPaymentEventList)
    {
        $this->container['sellerReviewEnrollmentPaymentEventList'] = $sellerReviewEnrollmentPaymentEventList;

        return $this;
    }

    /**
     * Gets fBALiquidationEventList
     *
     * @return \B1\AmazonSPAPI\Model\FBALiquidationEvent[]
     */
    public function getFBALiquidationEventList()
    {
        return $this->container['fBALiquidationEventList'];
    }

    /**
     * Sets fBALiquidationEventList
     *
     * @param \B1\AmazonSPAPI\Model\FBALiquidationEventList $fBALiquidationEventList fBALiquidationEventList
     *
     * @return $this
     */
    public function setFBALiquidationEventList($fBALiquidationEventList)
    {
        $this->container['fBALiquidationEventList'] = $fBALiquidationEventList;

        return $this;
    }

    /**
     * Gets couponPaymentEventList
     *
     * @return \B1\AmazonSPAPI\Model\CouponPaymentEvent[]
     */
    public function getCouponPaymentEventList()
    {
        return $this->container['couponPaymentEventList'];
    }

    /**
     * Sets couponPaymentEventList
     *
     * @param \B1\AmazonSPAPI\Model\CouponPaymentEventList $couponPaymentEventList couponPaymentEventList
     *
     * @return $this
     */
    public function setCouponPaymentEventList($couponPaymentEventList)
    {
        $this->container['couponPaymentEventList'] = $couponPaymentEventList;

        return $this;
    }

    /**
     * Gets imagingServicesFeeEventList
     *
     * @return \B1\AmazonSPAPI\Model\ImagingServicesFeeEvent[]
     */
    public function getImagingServicesFeeEventList()
    {
        return $this->container['imagingServicesFeeEventList'];
    }

    /**
     * Sets imagingServicesFeeEventList
     *
     * @param \B1\AmazonSPAPI\Model\ImagingServicesFeeEventList $imagingServicesFeeEventList imagingServicesFeeEventList
     *
     * @return $this
     */
    public function setImagingServicesFeeEventList($imagingServicesFeeEventList)
    {
        $this->container['imagingServicesFeeEventList'] = $imagingServicesFeeEventList;

        return $this;
    }

    /**
     * Gets networkComminglingTransactionEventList
     *
     * @return \B1\AmazonSPAPI\Model\NetworkComminglingTransactionEvent[]
     */
    public function getNetworkComminglingTransactionEventList()
    {
        return $this->container['networkComminglingTransactionEventList'];
    }

    /**
     * Sets networkComminglingTransactionEventList
     *
     * @param \B1\AmazonSPAPI\Model\NetworkComminglingTransactionEventList $networkComminglingTransactionEventList networkComminglingTransactionEventList
     *
     * @return $this
     */
    public function setNetworkComminglingTransactionEventList($networkComminglingTransactionEventList)
    {
        $this->container['networkComminglingTransactionEventList'] = $networkComminglingTransactionEventList;

        return $this;
    }

    /**
     * Gets affordabilityExpenseEventList
     *
     * @return \B1\AmazonSPAPI\Model\AffordabilityExpenseEvent[]
     */
    public function getAffordabilityExpenseEventList()
    {
        return $this->container['affordabilityExpenseEventList'];
    }

    /**
     * Sets affordabilityExpenseEventList
     *
     * @param \B1\AmazonSPAPI\Model\AffordabilityExpenseEventList $affordabilityExpenseEventList affordabilityExpenseEventList
     *
     * @return $this
     */
    public function setAffordabilityExpenseEventList($affordabilityExpenseEventList)
    {
        $this->container['affordabilityExpenseEventList'] = $affordabilityExpenseEventList;

        return $this;
    }

    /**
     * Gets affordabilityExpenseReversalEventList
     *
     * @return \B1\AmazonSPAPI\Model\AffordabilityExpenseEvent[]
     */
    public function getAffordabilityExpenseReversalEventList()
    {
        return $this->container['affordabilityExpenseReversalEventList'];
    }

    /**
     * Sets affordabilityExpenseReversalEventList
     *
     * @param \B1\AmazonSPAPI\Model\AffordabilityExpenseEventList $affordabilityExpenseReversalEventList affordabilityExpenseReversalEventList
     *
     * @return $this
     */
    public function setAffordabilityExpenseReversalEventList($affordabilityExpenseReversalEventList)
    {
        $this->container['affordabilityExpenseReversalEventList'] = $affordabilityExpenseReversalEventList;

        return $this;
    }

    /**
     * Gets trialShipmentEventList
     *
     * @return \B1\AmazonSPAPI\Model\TrialShipmentEvent[]
     */
    public function getTrialShipmentEventList()
    {
        return $this->container['trialShipmentEventList'];
    }

    /**
     * Sets trialShipmentEventList
     *
     * @param \B1\AmazonSPAPI\Model\TrialShipmentEventList $trialShipmentEventList trialShipmentEventList
     *
     * @return $this
     */
    public function setTrialShipmentEventList($trialShipmentEventList)
    {
        $this->container['trialShipmentEventList'] = $trialShipmentEventList;

        return $this;
    }

    /**
     * Gets shipmentSettleEventList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentSettleEventList
     */
    public function getShipmentSettleEventList()
    {
        return $this->container['shipmentSettleEventList'];
    }

    /**
     * Sets shipmentSettleEventList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentSettleEventList $shipmentSettleEventList shipmentSettleEventList
     *
     * @return $this
     */
    public function setShipmentSettleEventList($shipmentSettleEventList)
    {
        $this->container['shipmentSettleEventList'] = $shipmentSettleEventList;

        return $this;
    }

    /**
     * Gets taxWithholdingEventList
     *
     * @return \B1\AmazonSPAPI\Model\TaxWithholdingEvent[]
     */
    public function getTaxWithholdingEventList()
    {
        return $this->container['taxWithholdingEventList'];
    }

    /**
     * Sets taxWithholdingEventList
     *
     * @param \B1\AmazonSPAPI\Model\TaxWithholdingEventList $taxWithholdingEventList taxWithholdingEventList
     *
     * @return $this
     */
    public function setTaxWithholdingEventList($taxWithholdingEventList)
    {
        $this->container['taxWithholdingEventList'] = $taxWithholdingEventList;

        return $this;
    }

    /**
     * Gets removalShipmentEventList
     *
     * @return \B1\AmazonSPAPI\Model\RemovalShipmentEvent[]
     */
    public function getRemovalShipmentEventList()
    {
        return $this->container['removalShipmentEventList'];
    }

    /**
     * Sets removalShipmentEventList
     *
     * @param \B1\AmazonSPAPI\Model\RemovalShipmentEventList $removalShipmentEventList removalShipmentEventList
     *
     * @return $this
     */
    public function setRemovalShipmentEventList($removalShipmentEventList)
    {
        $this->container['removalShipmentEventList'] = $removalShipmentEventList;

        return $this;
    }

    /**
     * Gets removalShipmentAdjustmentEventList
     *
     * @return \B1\AmazonSPAPI\Model\RemovalShipmentAdjustmentEvent[]
     */
    public function getRemovalShipmentAdjustmentEventList()
    {
        return $this->container['removalShipmentAdjustmentEventList'];
    }

    /**
     * Sets removalShipmentAdjustmentEventList
     *
     * @param \B1\AmazonSPAPI\Model\RemovalShipmentAdjustmentEventList $removalShipmentAdjustmentEventList removalShipmentAdjustmentEventList
     *
     * @return $this
     */
    public function setRemovalShipmentAdjustmentEventList($removalShipmentAdjustmentEventList)
    {
        $this->container['removalShipmentAdjustmentEventList'] = $removalShipmentAdjustmentEventList;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


