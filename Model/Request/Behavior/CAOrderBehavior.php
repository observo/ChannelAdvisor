<?php	
	namespace MPS\CA
	class CAOrderBehavior{
		private DateTime $OrderTimeGMT=null;
		private string $ClientOrderIdentifier=null;
		private string $SellerOrderID=null;
		private OrderStatus $OrderStatus=null;
		private string $BuyerEmailAddress=null;
		private int $EmailOptIn=null;
		private string $ResllerID=null;
		private BillingInfo $BillingInfo=null;
		private PaymentInfo $PaymentInfo=null;
		private OrderCart $ShoppingCart=null;
		private CustomValue $CustomValueList=array();
	}
?>