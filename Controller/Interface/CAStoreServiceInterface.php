<?php
	namespace MPS\CA
	interface CAStoreServiceInterface{
		/*
		Purpose: Returns OK if the service is available.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/		
		public function Ping();
		/*
		Purpose: Retrieves statistical analysis on Buyer Searches against your ChannelAdvisor Store.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetSearchAnalysisStats(string $accountID, datetime $startDateUTC, datetime $endDateUTC);
	}
?>