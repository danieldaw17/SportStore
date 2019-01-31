<?php
	namespace App\Library\products;

	class vehicles {

		protected $id;
		protected $name;
		protected $shortDescription;
		protected $category;
		protected $subCategory;
		protected $provider;
		protected $brand;
		protected $basePrice;
		protected $sport;
		protected $description;

		function __construct($id, $name, $shortDescription, $category
			$subCategory, $provider, $brand, $basePrice, $sport, $description) {

				$this->id = $id;
				$this->name = $name;
				$this->$shortDescription = $shortDescription;
				$this->category = $category;
				$this->subCategory = $subCategory;
				$this->provider = $provider;
				$this->brand = $brand;
				$this->basePrice = $basePrice;
				$this->sport = $sport;
				$this->description = $description;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'name':
					return $this->name;
					break;

				case 'shortDescription':
					return $this->shortDescription;
					break;

				case 'category':
					return $this->category;
					break;

				case 'subCategory':
					return $this->subCategory;
					break;

				case 'provider':
					return $this->provider;
					break;

				case 'brand':
					return $this->brand;
					break;

				case 'basePrice':
					return $this->basePrice;
					break;

				case 'sport':
					return $this->sport;
					break;

				case 'description':
					return $this->description;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'id':
					$this->id = $newValue;
					break;

				case 'name':
					$this->name = $newValue;
					break;

				case 'shortDescription':
					$this->shortDescription = $newValue;
					break;

				case 'category':
					$this->category = $newValue;
					break;

				case 'subCategory':
					$this->subCategory = $newValue;
					break;

				case 'provider':
					$this->provider = $newValue;
					break;

				case 'brand':
					$this->brand = $newValue;
					break;

				case 'basePrice':
					$this->basePrice = $newValue;
					break;

				case 'sport':
					$this->sport = $newValue;
					break;

				case 'description':
					$this->description = $newValue;
					break;
			}
		}

	}


 ?>
