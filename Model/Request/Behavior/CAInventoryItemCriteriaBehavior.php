<?php	
	namespace MPS\CA
	class  CAInventoryItemCriteriaBehavior{
		private  InventoryItemDateRangeField $DateRangeField=null;
		private DateTime $DateRangeStartGMT=null;
		private DateTime $DateRangeEndGMT=null;
		private string $PartialSku=null;
		private string $SkuStartsWith=null;
		private string $SkuEndsWith=null;
		private string $ClassificationName=null;
		private string $LabelName=null;
		private InventoryItemQuantityCheckField $QuantityCheckField=null;
		private NumericFilterType $QuantityCheckType =null;
		private int $QuantityCheckValue=null;
		private int $PageNumber=null;
		private int $PageSize=null;
		
	}
?>