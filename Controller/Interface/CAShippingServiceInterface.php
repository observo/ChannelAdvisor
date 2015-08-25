<?php
	namespace MPS\CA
	interface CAShippingServiceInterface{
		/*
		Purpose: Returns OK if the service is available.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function Ping();
		/*
		Purpose: Retrieve the shipment history of an order.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetOrderShipmentHistoryList(string $accountID, int[] $orderIDList,  string[] $clientOrderIdentifierList);
		/*
		Purpose: Retrieve a list of shipping rates for a shopping cart.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetShippingRateList(string $accountID, int c$artID, string $street, string $city, string $state, string $postalCode, string $country);
		/*
		Purpose: Get a list of all shipping methods supported by an account.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetShippingCarrierList(string $accountID);
		/*
		Purpose: Create partial or full shipment details for one or more orders.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SubmitOrderShipmentList(string $accountID, OrderShipment[] $shipmentList);
	}
?>