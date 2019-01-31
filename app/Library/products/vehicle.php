<?php
	namespace App\Library\products;

	class vehicle extends product {

		private $sizeWheel;
		private $gender;
		private $shifts;
		private $weight;
		private $wheelsAmount;


		function __construct($sizeWheel, $gender, $shifts, $weight,
			$wheelsAmount) {
				parent::__construct();

				$this->sizeWheel = $sizeWheel;
				$this->gender = $gender;
				$this->shifts = $shifts;
				$this->$weight = $weight;
				$this->$wheelsAmount = $wheelsAmount;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'sizeWheel':
					return $this->sizeWheel;
					break;

				case 'gender':
					return $this->gender;
					break;

				case 'shifts':
					return $this->shifts;
					break;

				case 'weight':
					return $this->weight;
					break;

				case 'wheelsAmount':
					return $this->wheelsAmount;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'sizeWheel':
					$this->sizeWheel = $newValue;
					break;

				case 'gender':
					$this->gender = $newValue;
					break;

				case 'shifts':
					$this->shifts = $newValue;
					break;

				case 'weight':
					$this->weight = $newValue;
					break;

				case 'wheelsAmount':
					$this->wheelsAmount = $newValue;
					break;
			}
		}

	}


 ?>
