<?php
	namespace MPS\CA
	class CAFulfillmentCreateSubmitBehavior extends CAFulfillmentItemSubmitBehavior{
		private string FulfillmentType=null;
		private string FulfillmentStatus=null;
		private string CarrierCode=null;
		private string ClassCode=null;
		private string TrackingNumber=null;
		private string DistributionCenterCode=null;
		private float Cost=null;
		private float TaxCost=null;
		private float InsuranceCost=null;
		private DateTime ShippedDateGMT=null;
		private string SellerFulfillmentID=null;
		private CAFulfillmentItemSubmitBehavior ItemList=array();
	}
?>