<?php	
	namespace MPS\CA
	abstract class CACheckoutStatusCodeBehavior{
		const NOCHANGE='NoChange';
		const NOTVISITED='NotVisited';
		const VISITED='Visited';
		const ONHOLD='OnHold';
		const COMPLETED='Completed';
		const COMPLETEDOFFLINE='CompletedOffline';
		const CANCELLED='Cancelled';
	}
?>
