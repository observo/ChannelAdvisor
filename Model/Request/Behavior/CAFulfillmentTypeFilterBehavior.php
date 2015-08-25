<?php	
	namespace MPS\CA
	abstract class CAFulfillmentTypeFilterBehavior{
		const ALL='All';
		const EXTERNALONLY='ExternalOnly';
		const SELLERONLY='SellerOnly';
		const SELLERSHIPONLY='SellerShipOnly';
		const SELLERPICKUPONLY='SellerPickupOnly';
		const SELLERSHIPTOSTOREONLY='SellerShipToStoreOnly';
		const SELLERCOURIERONLY='SellerCourierOnly';
	}
?>