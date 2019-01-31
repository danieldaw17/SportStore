<?php
	namespace App\Library\users;

	class shipping_address {

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

		function __construct($id, $roadType, $city, $province, $zipCode,
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
					$this->id = $newValue;
					break;

				case 'roadType':
					$this->roadType = $newValue;
					break;

				case 'roadName':
					$this->roadName = $newValue;
					break;

				case 'city':
					$this->city = $newValue;
					break;

				case 'province':
					$this->province = $newValue;
					break;

				case 'zipCode':
					$this->zipCode = $newValue;
					break;

				case 'country':
					$this->country = $newValue;
					break;

				case 'nif':
					$this->nif = $newValue;
					break;

				case 'userName':
					$this->userName = $newValue;
					break;

				case 'lastName':
					$this->lastName = $newValue;
					break;
			}
		}

	}


 ?>
