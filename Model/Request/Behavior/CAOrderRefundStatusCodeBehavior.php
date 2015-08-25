<?php	
	namespace MPS\CA
	abstract class CAOrderRefundStatusCodeBehavior{
		const NOREFUNDS='NoRefunds';
		const ORDERLEVEL='OrderLevel';
		const LINEITEMLEVEL='LineItemLevel';
		const ORDERANDLINEITEMLEVEL='OrderAndLineItemLevel';
		const FAILEDATTEMPTSONLY='FailedAttemptsOnly';
	}
?>
