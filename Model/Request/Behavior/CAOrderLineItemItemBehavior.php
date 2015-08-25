<?php	
	namespace MPS\CA
	class CAOrderLineItemItemBehavior extends CAOrderLineItemBaseBehavior{
		private string $LineItemType=null;
		private float $UnitPrice=null;
		private int $LineItemID=null;
		private int $AllowNegativeQuantity=null;
		private int $Quantity=null;
		private SiteToken $ItemSaleSource=null;
		private string $SKU=null;
		private string $Title=null;
		private string $BuyerUserID=null;
		private string $BuyerFeedbackRating=null;
		private string $SalesSourceID=null;
		private float $VATRate=null;
		private float $UnitWeight=null;
		private string $WarehouseLocation=null;
		private float $TaxCost=null;
		private float $ShippingCost=null;
		private float $ShippingTaxCost=null;
		private float $RecyclingFee=null;
		private float $GiftWrapCost=null;
		private float $GiftWrapTaxCost=null;
		private string $GiftMessage=null;
		private string $GiftWrapLevel=null;
		private string $UserName=null;
		private string $DistributionCenterCode=null;
		private int $IsExternallyFulfilled=null;
		private OrderLineItemItemPromo $ItemPromoList=array();
		private string $ItemSaleSourceTransactionID=null;
		private string $FulfillmentType=null;
	}