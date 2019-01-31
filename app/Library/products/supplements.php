<?php
	namespace App\Library\products;

	class accessories extends product {

		private $type;
		private $volume;


		function __construct($type, $volume) {
				parent::__construct();

				$this->type = $type;
				$this->volume = $volume;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'type':
					return $this->type;
					break;

				case 'volume':
					return $this->volume;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'type':
					$this->type = $newValue;
					break;

				case 'volume':
					$this->volume = $newValue;
					break;
			}
		}

	}


 ?>
