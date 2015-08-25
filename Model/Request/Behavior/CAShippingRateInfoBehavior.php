<?php	
	namespace MPS\CA
	class CAShippingRateInfoBehavior{
		private string $DestinationZoneName=null;
		private string $CarrierCode=null;
		private string $ClassCode=null;
		private ShippingRateAttribute $FirstItemRateAttribute=null;
		private float $FirstItemRate=null;
		private HandlingRateAttribute $FirstItemHandlingRateAttribute=null; 
		private float $FirstItemHandlingRate=null; 
		private ShippingRateAttribute $AdditionalItemRateAttribute=null; 
		private float $AdditionalItemRate=null; 
		private HandlingRateAttribute $AdditionalItemHandlingRateAttribute=null; 
		private float $AdditionalItemHandlingRate=null; 
		private int $FreeShippingIfBuyItNow=null;
	?>
?>