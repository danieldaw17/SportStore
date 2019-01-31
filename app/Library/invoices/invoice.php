<?php
	namespace App\Library\invoices;

	class invoice {

		private $id;
		private $customer;
		private $shippingAddress;
		private $billingAddress;
		private $totalPrice;

		function __construct($id, $customer, $shippingAddress, $billingAddress, $totalPrice) {
			$this->id = $id;
			$this->customer = $customer;
			$this->shippingAddress = $shippingAddress;
			$this->billingAddress = $billingAddress;
			$this->totalPrice = $totalPrice;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'customer':
					return $this->customer;
					break;

				case 'shippingAddress':
					return $this->shippingAddress;
					break;

				case 'billingAddress':
					return $this->billingAddress;
					break;

				case 'totalPrice':
					return $this->totalPrice;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'id':
					$this->id = $newValue;
					break;

				case 'customer':
					$this->customer = $newValue;
					break;

				case 'shippingAddress':
					$this->shippingAddress = $newValue;
					break;

				case 'billingAddress':
					$this->billingAddress = $newValue;
					break;

				case 'totalPrice':
					$this->totalPrice = $newValue;
					break;
			}
		}

	}


 ?>
