<?php
	namespace App\Library\users;

	class user_Information {

		private $id;
		private $name;
		private $lastName;
		private $nif;
		private $email;
		private $user;

		function __construct($id, $name, $lastName, $nif, $email, $user) {
			$this->id = $id;
			$this->name = $name;
			$this->lastName = $lastName;
			$this->nif = $nif;
			$this->email = $email;
			$this->user = $user;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'name':
					return $this->name;
					break;

				case 'lastName':
					return $this->lastName;
					break;

				case 'nif':
					return $this->nif;
					break;

				case 'email':
					return $this->email;
					break;

				case 'user':
					return $this->user;
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

				case 'lastName':
					$this->lastName = $newValue;
					break;

				case 'nif':
					$this->nif = $newValue;
					break;

				case 'email':
					$this->email = $newValue;
					break;

				case 'user':
					$this->user = $newValue;
					break;
			}
		}

	}


 ?>
