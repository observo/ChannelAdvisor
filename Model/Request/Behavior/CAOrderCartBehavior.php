<?php	
	namespace MPS\CA
	class CAOrderCartBehavior{
		private int $PaymentType=null;
		private CheckoutSourceType $CreditCardLast4=null;
		private VAT_Calculation_Type $PaypalID=null;
		private VAT_Calculation_Type $MerchantReferenceNumber=null;
		private VAT_Calculation_Type $PaymentTransactionID =null;
		private OrderLineItemItem $PaymentType=array();
		private OrderLineItemPromo $PaymentType=array();
		private OrderLineItemInvoice $PaymentType=array();
	}