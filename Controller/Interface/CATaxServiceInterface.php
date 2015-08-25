<?php
	namespace MPS\CA
	interface CATaxServiceInterface{
		/*
		Purpose: Retrieve tax rates for a shopping cart.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/	
		public function GetTaxRateList(string $accountID, int $cartID, string $street, string $city, string $state, string $postalCode, string $country);
		/*
		Purpose: Returns OK if the service is available.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/	
		public function Ping();
	}
?>