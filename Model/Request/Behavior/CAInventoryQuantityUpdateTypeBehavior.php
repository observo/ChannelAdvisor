<?php	
	namespace MPS\CA
	abstract class CAInventoryQuantityUpdateTypeBehavior{
		//Sets the inventory quantity for this item to the value of the submitted quantity. 
		const ABSOLUTE='Absolute';
		//Adds the value of the submitted quantity to the current inventory quantity. Negative numbers are acceptable. 
		const RELATIVE='Relative';
		//Takes the submitted value of quantity, subtracts out any open listings for this item and sets the remaining value as the inventory quantity. 
		const AVAILABLE='Available';
		//Takes the submitted value of quantity, subtracts out any open listings, pending checkouts, and pending payments for this item and sets the remaining value as the inventory quantity. 
		const INSTOCK='InStock';
		//Takes the submitted value of quantity, subtracts out any open listings, pending checkouts, pending payments and pending shipments for this item and sets the remaining value as the inventory quantity. 
		const UNSHIPPED='UnShipped';
	}
?>