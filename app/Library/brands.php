<?php
	namespace App\Library;

	class brand {

		private $id;
		private $name;

		function __construct($id, $name) {
			$this->id = $id;
			$this->name = $name;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'name':
					return $this->name;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			case 'id':
				$this->id = $newValue;
				break;

			case 'name':
				$this->name = $newValue;
				break;
			}
		}

	}


 ?>
