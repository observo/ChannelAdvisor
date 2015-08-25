<?php	
	namespace MPS\CA
	class CAOrderShipmentBehavior{
		private int $OrderID=null;
		private string $ClientOrderIdentifier=null;
		private string $ShipmentType=null;
		private PartialShipmentContents $PartialShipment=null;
		private FullShipmentContents $FullShipment=null;
	}
?>