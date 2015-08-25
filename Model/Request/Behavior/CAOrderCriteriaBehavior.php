<?php	
	namespace MPS\CA
	class CAOrderCriteriaBehavior{
		private DateTime $OrderCreationFilterBeginTimeGMT=null;
		private DateTime $OrderCreationFilterEndTimeGMT=null;
		private DateTime $StatusUpdateFilterBeginTimeGMT=null;
		private DateTime $StatusUpdateFilterEndTimeGMT=null;
		private int $JoinDateFiltersWithOr=null;
		private DetailLevelType $DetailLevel=null;
		private ExportStateType $ExportState=null;
		private int $OrderIDList=array();
		private string $ClientOrderIdentifierList=array();
		private OrderStateCode $OrderStateFilter=null;
		private PaymentStatusCode $PaymentStatusFilter=null;
		private CheckoutStatusCode $CheckoutStatusFilter=null;
		private ShippingStatusCode $ShippingStatusFilter=null;
		private OrderRefundStatusCode $RefundStatusFilter=null;
		private string $DistributionCenterCode=null;
		private string $FulfillmentTypeFilter=null;
		private int $PageNumberFilter=null;
		private int $PageSize=null;
	}
?>