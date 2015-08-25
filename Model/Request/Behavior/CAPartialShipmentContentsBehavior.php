<?php	
	namespace MPS\CA
	class CAPartialShipmentContentsBehavior{
		private LineItem $LineItemList=array();
		private DateTime $DateShippedGMT=null;
		private string $CarrierCode=null;
		private string $ClassCode=null;
		private string $TrackingNumber=null;
		private string  $SellerFulfillmentID=null;
		private float $ShipmentCost=null;
		private float $ShipmentTaxCost=null;
		private float $InsuranceCost=null;
		private string $FulfillmentType=null;
		private string $FulfillmentStatus=null;
	}
?>