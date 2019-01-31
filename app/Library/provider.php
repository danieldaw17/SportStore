<?php
	namespace App\Library;

	class provider {

		private $id;
		private $name;
		private $hoursMax;
		private $price;

		function __construct($id, $name, $hoursMax, $price) {
			$this->id = $id;
			$this->name = $name;
			$this->hoursMax = $hoursMax;
			$this->price = $price;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'name':
					return $this->name;
					break;

				case 'hoursMax':
					return $this->hoursMax;
					break;

				case 'price':
					return $this->price;
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

				case 'hoursMax':
					$this->hoursMax = $newValue;
					break;

				case 'price':
					$this->price = $newValue;
					break;
			}
		}

	}


 ?>
