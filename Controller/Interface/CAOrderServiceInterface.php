<?php
	namespace MPS\CA
	interface CAOrderServiceInterface{
		/*
		Purpose: Retrieve a set of orders based on the criteria sent by the caller. ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetOrderList(string $accountID, OrderCriteria  $orderCriteria);
		/*
		Purpose: Retrieve the history of refunds for an order.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetOrderRefundHistory(string $accountID, int $orderID);
		/*
		Purpose: Return OK if the service is available.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function Ping();
		/*
		Purpose: Merge multiple orders into a single order.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function OrderMerge(string $accountID, int $primaryOrderID , int[] $orderIDMergeList);
		/*
		Purpose: Split an order into two separate orders.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function OrderSplit(string $accountID, int $orderID, int[] $lineItemIDList);
		/*
		Purpose: Split an order into two separate orders. ***
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SubmitOrder(string $accountID, OrderSubmit $order);
		/*
		Purpose: Submit a full or partial refund for an existing order. ****
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SubmitOrderRefund(string $accountID, string $ClientOrderIdentifier, int $OrderID, decimal $Amount,  RefundAdjustmentReason $AdjustmentReason, string $SellerRefundID 
,  RefundItem[] $RefundItems);
		/*
		Purpose: Submit an array of ClientOrderIdentifier values to mark those orders as exported.  This works in conjunction with GetOrderList to filter on ExportState.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SetOrdersExportStatus(string $accountID, int[] $orderIDList, string[] $clientOrderIdentifierList, boolean $markAsExported);
		/*
		Purpose: Set the SellerOrderID value for an order.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SetSellerOrderID(string $accountID, int[] $orderIDList, string[] $sellerOrderIDList);
		/*
		Purpose: Set the SellerOrderItemID value for line items in an order.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function SetSellerOrderItemIDList(string $accountID, int $orderID, int[] $lineItemIDList, string[] $sellerOrderItemIDList);
		/*
		Purpose: Update a list of orders.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function UpdateOrderList(string $accountID, OrderUpdateSubmit[] $updateOrderSubmitList);
	}
?>