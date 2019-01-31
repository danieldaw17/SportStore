<?php
	namespace App\Library\products;

	class accessories extends product {

		private $gender;


		function __construct($gender) {
				parent::__construct();

				$this->gender = $gender;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'gender':
					return $this->gender;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'gender':
					$this->gender = $newValue;
					break;
			}
		}

	}


 ?>
