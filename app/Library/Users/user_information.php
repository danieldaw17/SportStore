<?php
	namespace App\Library\users;

	class user_Information {

		private $id;
		private $name;
		private $lastName;
		private $nif;
		private $email;
		private $user;

		function constructor($id, $name, $lastName, $nif, $email, $user) {
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
					return $this->id = $newValue;
					break;

				case 'name':
					return $this->name = $newValue;
					break;

				case 'lastName':
					return $this->lastName = $newValue;
					break;

				case 'nif':
					return $this->nif = $newValue;
					break;

				case 'email':
					return $this->email = $newValue;
					break;

				case 'user':
					return $this->user = $newValue;
					break;
			}
		}

	}


 ?>
