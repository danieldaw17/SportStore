<?php
	namespace App\Library\products;

	class cloth extends product {

		private $size;
		private $gender;


		function __construct($size, $gender) {
				parent::__construct();

				$this->size = $size;
				$this->gender = $gender;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'size':
					return $this->size;
					break;

				case 'gender':
					return $this->gender;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'size':
					$this->size = $newValue;
					break;

				case 'gender':
					$this->gender = $newValue;
					break;
			}
		}

	}


 ?>
