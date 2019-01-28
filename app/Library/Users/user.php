<?php

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
					return $attribute;
					break;

				case 'nick':
					return $nick;
					break;

				case 'password':
					return $password;
					break;

				case 'role':
					return $role;
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
