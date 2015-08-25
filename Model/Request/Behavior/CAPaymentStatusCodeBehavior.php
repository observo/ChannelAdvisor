 <?php	
	namespace MPS\CA
	abstract class CAPaymentStatusCodeBehavior{
		const NOCHANGE='NoChange';
		const NOTSUBMITTED='NotSubmitted';
		const SUBMITTED='Submitted';
		const DEPOSITED='Deposited';
		const CLEARED='Cleared';
		const FAILED='Failed';
	}
?>