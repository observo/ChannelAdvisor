<?php	
	namespace MPS\CA
	class CAInventoryItemSubmitBehavior{
		private string $Sku=null;
		private string $Title=null;
		private string $Subtitle=null;
		private string $ShortDescription=null;
		private string $Description=null;
		private float $Weight=null;
		private string $SupplierCode=null;
		private string $WarehouseLocation=null;
		private string $TaxProductCode=null;
		private FlagType $DestinationZoneName=null;
		private string $FlagStyle=null;
		private int $FlagDescription=null;
		private string $IsBlocked=null;
		private int $BlockComment=null;
		private int $BlockExternalQuantity=null;
		private string $ASIN=null;
		private string $ISBN=null;
		private string $UPC=null;
		private string $MPN=null;
		private string $EAN=null;
		private string $Manufacturer=null;
		private string $Brand=null;
		private string $Condition=null;
		private string $Warranty=null;
		private float $ProductMargin=null;
		private string $SupplierPO=null;
		private string $HarmonizedCode=null;
		private float $Height=null;
		private float $Length=null;
		private float $Width=null;
		private string $Classification=null;
		private string $DCQuantityUpdateType=null;
		private DistributionCenterInfoSubmit $DistributionCenterList=array();
		private PriceInfo $PriceInfo=null;
		private  AttributeInfo $AttributeList=array();
		private VariationInfo $VariationInfo=null;
		private  StoreInfo $StoreInfo=null;
		private  ImageInfoSubmit $ImageList=array();
		private string $LabelList=array();
		private string $MetaDescription=null;
	?>
?>