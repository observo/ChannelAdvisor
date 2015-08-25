<?php	
	namespace MPS\CA
	class CAFullShipmentContentsBehavior{
		private DateTime $DateShippedGMT=null;
		private string $CarrierCode=null;
		private string $ClassCode=null;
		private string $TrackingNumber=null;
		private string $SellerFulfillmentID=null;
		private float $ShipmentCost=null;
		private float $ShipmentTaxCost=null;
		private float $InsuranceCost=null;
	}
?>