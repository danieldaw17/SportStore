<?php
	namespace App\Library\invoices;

	class invoice_line {

		private $id;
		private $product;
		private $line;
		private $invoice;
		private $amount;
		private $basePrice;
		private $category;
		private $subCategory;


		function __construct($id, $product, $line, $invoice, $amount,
			$basePrice, $category, $subCategory) {

				$this->id = $id;
				$this->product = $product;
				$this->line = $line;
				$this->invoice = $invoice;
				$this->amount = $amount;
				$this->basePrice = $basePrice;
				$this->category = $category;
				$this->subCategory = $subCategory;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'product':
					return $this->product;
					break;

				case 'line':
					return $this->line;
					break;

				case 'invoice':
					return $this->invoice;
					break;

				case 'amount':
					return $this->amount;
					break;

				case 'basePrice':
					return $this->basePrice;
					break;

				case 'category':
					return $this->category;
					break;

				case 'subCategory':
					return $this->subCategory;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'id':
					$this->id = $newValue;
					break;

				case 'product':
					$this->product = $newValue;
					break;

				case 'line':
					$this->line = $newValue;
					break;

				case 'invoice':
					$this->invoice = $newValue;
					break;

				case 'amount':
					$this->amount = $newValue;
					break;

				case 'basePrice':
					$this->basePrice = $newValue;
					break;

				case 'category':
					$this->category = $newValue;
					break;

				case 'subCategory':
					$this->subCategory = $newValue;
					break;
			}
		}

	}


 ?>
