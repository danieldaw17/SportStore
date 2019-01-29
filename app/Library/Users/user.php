<?php
	namespace App\Library\users;

	class user {

		private $id;
		private $nick;
		private $password;
		private $role;

		function constructor($id, $nick, $password, $role) {
			$this->id = $id;
			$this->nick = $nick;
			$this->password = $password;
			$this->role = $role;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'nick':
					return $this->nick;
					break;

				case 'password':
					return $this->password;
					break;

				case 'role':
					return $this->role;
					break;
			}
		}

		function __SET($attribute, $newValue) {

			switch($attribute) {
				case 'id':
					$this->id = $newValue;
					break;

				case 'nick':
					$this->nick = $newValue;
					break;

				case 'password':
					$this->password = $newValue;
					break;

				case 'role':
					$this->role = $newValue;
					break;
			}
		}

	}


 ?>
