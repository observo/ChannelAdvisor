<?php
	namespace MPS\CA
	interface CAMarketplaceAdServiceInterface{
		/*
		Purpose: Creates a single Marketplace Ad and returns the identifier. ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function AddMarketplaceAd(string $accountID, MarketplaceAd $adProperties );
		/*
		Purpose: Creates a Marketplace Ad for each of the SKUs provided and returns the associated identifiers.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function AddMarketplaceAdForSkuList(string $accountID, MarketplaceAdSkuRequest[] $skuList, string $postingTemplate, string $adTemplate, string $schedule, FlagType $flagStyle, string $flagDescription, string $primaryCategory, string $secondaryCategory, string $primaryStoreCategory, string $secondaryStoreCategory);
		/*
		Purpose: Deletes a Marketplace Ad by its unique identifier.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function DeleteMarketplaceAd(string $accountID, int $marketplaceAdID);
	}
?>