<?php	
	namespace MPS\CA
	abstract class CAShippingStatusCodeBehavior{
		const NOCHANGE='NoChange';
		const UNSHIPPED='Unshipped';
		const PENDINGSHIPMENT='PendingShipment';
		const PARTIALLYSHIPPED='PartiallyShipped';
		const SHIPPED='Shipped';
	}
?>
