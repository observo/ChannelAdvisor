<?php
	namespace MPS\CA
	interface CAAdminServiceInterface{
		/*
		Purpose: Gets a list of all of the Account Authorizations for your Developer Key.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function GetAuthorizationList(int $localID=null);
		/*
		Purpose: Allows you to submit a request for access to a specific MAP Account
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function RequestAccess(int $localID);
		/*
		Purpose: Returns OK if the service is available.
		Input Custom Object:
		Input Optional Parameters:
		Response:
		*/
		public function Ping();
	}
?>