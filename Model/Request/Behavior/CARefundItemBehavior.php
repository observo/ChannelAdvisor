 <?php	
	namespace MPS\CA
	class CARefundItemBehavior{
		private int $LineItemID =null;
		private string $SKU=null;
		private float $Amount=null;
		private float $ShippingAmount=null;
		private float $ShippingTaxAmount=null;
		private float $TaxAmount=null;
		private float $RecyclingFee=null;
		private float $GiftWrapAmount=null;
		private float $GiftWrapTaxAmount=null;
		private int $Quantity=null;
		private int $RefundRequestID=null;
		private int $RefundRequested=null;
		private RefundAdjustmentReason $AdjustmentReason=null;
		private int $RestockQuantity=null;
		private string $SellerRefundID=null;
	}
?>