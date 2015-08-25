<?php	
	namespace MPS\CA
	class CADistributionCenterInfoSubmitBehavior{
		private string $DistributionCenterCode=null;
		private int $Quantity=null;
		private InventoryQuantityUpdateType $QuantityUpdateType=null;
		private string $WarehouseLocation=null;
		private DateTime $ReceivedInInventory=null;
		private ShippingRateInfo $ShippingRateList=array();
	}
?>