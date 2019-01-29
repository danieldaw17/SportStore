<?php
	namespace App\Library\users;

	class user_Information {

		private $id;
		private $roadType;
		private $roadName;
		private $city;
		private $province;
		private $zipCode;
		private $country;
		private $nif;
		private $userName;
		private $lastName;
		private $user;

		function constructor($id, $roadType, $city, $province, $zipCode,
			$country, $nif, $userName, $lastName, $user) {

				$this->user = $user;
				$this->id = $id;
				$this->roadType = $roadType;
				$this->city = $city;
				$this->province = $province;
				$this->zipCode = $zipCode;
				$this->country = $country;
				$this->nif = $nif;
				$this->userName = $userName;
				$this->lastName = $lastName;
		}

		function __GET($attribute) {

			switch($attribute) {
				case 'id':
					return $this->id;
					break;

				case 'roadType':
					return $this->name;
					break;

				case 'lastName':
					return $this->roadType;
					break;

				case 'roadName':
					return $this->roadName;
					break;

				case 'city':
					return $this->city;
					break;

				case 'province':
					return $this->province;
					break;

				case 'zipCode':
					return $this->zipCode;
					break;

				case 'country':
					return $this->country;
					break;

				case 'nif':
					return $this->nif;
					break;

				case 'userName':
					return $this->userName;
					break;

				case 'lastName':
					return $this->lastName;
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
