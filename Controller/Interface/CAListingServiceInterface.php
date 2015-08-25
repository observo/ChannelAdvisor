<?php
	namespace MPS\CA
	interface CAListingServiceInterface{
		/*
		Purpose: Submits a withdraw request to the marketplace for listings based on SKU or individual listing IDs.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function WithdrawListings(string $accountID, string[] $skuList, string[] $listingIDList, WithdrawReason $withdrawReason);
	}
?>