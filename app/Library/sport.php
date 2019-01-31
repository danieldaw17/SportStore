<?php
	namespace App\Library;

	class sport {

		private $id;
		private $name;
		private $imagePath;

		function __construct($id, $name, $imagePath) {
			$this->id = $id;
			$this->name = $name;
			$this->imagePath = $imagePath;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'name':
					return $this->name;
					break;

				case 'imagePath':
					return $this->imagePath;
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

				case 'imagePath':
					$this->imagePath = $newValue;
					break;
			}
		}

	}


 ?>
