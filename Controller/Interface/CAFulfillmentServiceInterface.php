<?php
	namespace MPS\CA
	interface CAFulfillmentServiceInterface{
		/*
		Purpose: Create a new fulfillment, setting fulfillment type and status, carrier, class, tracking, DC, cost (for unpaid orders), shipped date, seller fulfillment ID, and items***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function CreateOrderFulfillments(string $accountID, int $orderID, string $clientOrderIdentifier,  FulfillmentCreateSubmit[] $fulfillmentList);
		/*
		Purpose: Retrieve all fulfillment details of one or more orders.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetOrderFulfillmentDetailList(string $accountID, int[] $orderIDList, string[] $clientOrderIdentifierList);
		/*
		Purpose: Move all or partial quantity of a list of fulfillment items from one or more fulfillments into a specified fulfillment for a single order ****
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function MoveFulfillmentItems(string $accountID, int $orderID, string $clientOrderIdentifier, int $destinationFulfillmentID, FulfillmentItemSubmit[] $sourceFulfillmentItemList);
		/*
		Purpose: Set the details of one or more fulfillments for a single order ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function UpdateOrderFulfillments(string $accountID, int $orderID, string $clientOrderIdentifier , FulfillmentUpdateSubmit[] $fulfillmentUpdateList);
	}
?>