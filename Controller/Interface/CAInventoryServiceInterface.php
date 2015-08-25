<?php
	namespace MPS\CA
	interface CAInventoryServiceInterface{
		/*
		Purpose: Create upsell relationships between inventory items.***
		Input Custom Object:
		Response:
		*/
		public function AddUpsellRelationship(string $accountID, InventoryUpsellInfoSubmit[] $upsellInfoList);
		/*
		Purpose: Assign a list of Labels to a list of SKUs.
		Input Custom Object:
		Response:
		*/
		public function AssignLabelListToInventoryItemList(string $accountID,  string[] $labelList, boolean $createLabelIfNotExist, string[] $skuList, string $assignReasonDesc=null);
		/*
		Purpose: Delete an Inventory Item.
		Input Custom Object:
		Response:
		*/
		public function DeleteInventoryItem(string accountID, string sku);
		/*
		Purpose: Delete upsell relationships.
		Input Custom Object:
		Response:
		*/
		public function DeleteUpsellRelationship(string $accountID, string $parentSKU, string[] childSKUList);
		/*
		Purpose: Retrieve whether or not a particular SKU exists in the system.
		Input Custom Object:
		Response:
		*/
		public function DoesSkuExist(string $accountID, string $sku);
		/*
		Purpose: Retrieve whether or not a list of SKUs exist in the system.
		Input Custom Object:
		Response:
		*/
		public function DoesSkuExistList(string $accountID, string[] $skuList);
		/*
		Purpose: Retrieve a list of the Classifications (and attribute details) configured in an account.
		Input Custom Object:
		Response:
		*/
		public function GetClassificationConfigurationInformation(string $accountID);
		/*
		Purpose: Retrieve all distribution centers available in an account.
		Input Custom Object:
		Response:
		*/
		public function GetDistributionCenterList(string $accountID);
		/*
		Purpose: Retrieve a filtered, paginated list of items and their basic details. ****
		Input Custom Object:
		Response:
		*/
		public function GetFilteredInventoryItemList(string $accountID, InventoryItemCriteria $itemCriteria, InventoryItemDetailLevel $detailLevel, InventoryItemSortField $sortField, SortDirection $sortDirection);
		/*
		Purpose: Retrieve a filtered, paginated list of SKUs in an account.
		Input Custom Object:
		Response:
		*/
		public function GetFilteredSkuList(string $accountID, InventoryItemCriteria $itemCriteria, InventoryItemSortField $sortField=null,  SortDirection  $sortDirection=null);
		/*
		Purpose: Retrieve the list of Attributes for an inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemAttributeList(string $accountID, string $sku);
		/*
		Purpose: Retrieve the basic details for a list of inventory items.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemList(string $accountID, string[] $skuList);
		/*
		Purpose: Retrieve the detailed Quantity information for an inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemQuantityInfo(string $accountID, string $sku);
		/*
		Purpose: Retrieve the detailed Store information for an inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemStoreInfo(string $accountID, string $sku );
		/*
		Purpose: Retrieve the list of Images (with Thumbnails) associated with an inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemImageList(string $accountID, string $sku);
		/*
		Purpose: Retrieve the detailed Shipping Rate information for an inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemShippingInfo(string $accountID, string $sku);
		/*
		Purpose: Retrieve the detailed Variation information for an inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryItemVariationInfo(string $accountID, string $sku);
		/*
		Purpose: Retrieve the AVAILABLE quantity of a single inventory item.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryQuantity(string $accountID, string $sku);
		/*
		Purpose: Retrieve the AVAILABLE quantity of a list of inventory items.
		Input Custom Object:
		Response:
		*/
		public function GetInventoryQuantityList(string $accountID, string[] $skuList);
		/*
		Purpose: Retrieve the upsell relationships for a list of inventory items.
		Input Custom Object:
		Response:
		*/
		public function GetUpsellRelationship(string $accountID, string[] $parentSKUList);
		/*
		Purpose: Returns OK if the service is available.
		Input Custom Object:
		Response:
		*/
		public function Ping();
		/*
		Purpose: Remove the list of Labels from the list of SKUs.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function RemoveLabelListFromInventoryItemList(string $accountID, string[] $labelList, string[] $skuList, string $removeReasonDesc);
		/*
		Purpose: Add or Update an inventory item. ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SynchInventoryItem(string $accountID, InventoryItemSubmit $item);
		/*
		Purpose: Add or Update a list of inventory items. ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SynchInventoryItemList(string $accountID, InventoryItemSubmit[] $itemList);
		/*
		Purpose: Update ONLY the quantity and price values for the specified SKU. ****
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function UpdateInventoryItemQuantityAndPrice(string $accountID, InventoryItemQuantityAndPrice $itemQuantityAndPrice);
		/*
		Purpose: Update ONLY the quantity and price values for a list of SKUs. ****
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function UpdateInventoryItemQuantityAndPriceList(string $accountID, InventoryItemQuantityAndPrice[] $itemQuantityAndPriceList);
	}
?>