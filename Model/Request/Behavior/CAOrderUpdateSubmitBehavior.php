<?php	
	namespace MPS\CA
	class CAOrderUpdateSubmitBehavior{
		private int $OrderID=null;
		private string $NewClientOrderIdentifier=null;
		private FlagType $FlagStyle=null;
		private string $FlagDescription=null;
		private TransactionNoteSubmit $TransactionNotes=null;
		private OrderStatusUpdateSubmit $OrderStatusUpdate=null;
		private ShippingInfoUpdateSubmit $ShippingInfo=null;
		private BillingInfoUpdateSubmit $BillingInfo=null;
		private PaymentInfoUpdateSubmit $PaymentInfo=null;
		private ShippingMethodInfoUpdateSubmit $RequestedShippingMethodInfo=null;
	}
?>