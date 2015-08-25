<?php
	namespace MPS\CA
	interface CACartServiceInterface{
		/*
		Purpose: Creates a new shopping cart. ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function CreateCart(string $accountID, string $buyerEmail, CartItemRequest[] $lineItemList);
		/*
		Purpose: Retrieve details of a shopping cart.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetCart(string $accountID, int $cartID);
		/*
		Purpose: Removes a shopping cart.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function DeleteCart(string $accountID, int $cartID);
		/*
		Purpose: Updates the contents of an existing shopping cart.***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function ModifyCart(string, int, string, CartItemRequest[] $lineItemList);
		/*
		Purpose: Returns OK if the service is available.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function Ping();
	}
?>