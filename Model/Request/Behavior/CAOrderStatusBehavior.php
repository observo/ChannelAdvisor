<?php	
	namespace MPS\CA
	class CAOrderStatusBehavior{
		private CheckoutStatusCode $CheckoutStatus=null;
		private DateTime $CheckoutDateGMT=null;
		private PaymentStatusCode $PaymentStatus=null;
		private DateTime $PaymentDateGMT=null;
		private ShippingStatusCode $ShippingStatus=null;
		private DateTime $ShippingDateGMT=null;
		private OrderRefundStatusCode $OrderRefundStatus=null;
	}
?>