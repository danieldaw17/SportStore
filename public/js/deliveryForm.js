function validateDeliveryForm() {
	var regexp = /^\d+(\.\d{1,2})?$/;

	var name = document.getElementById('name').value;
	var hoursMax = document.getElementById('hoursMax').value;
	var price = document.getElementById('price').value;


	//NAME
		if (name.length>30) {
			var errors = "The name may not be greater than 30 characters.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

		if (name=="") {
			var errors = "The name field is required.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

	//HOURSMAX
		if (isNaN(hoursMax)) {
			var errors = "The hoursMax field must be a number.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

		if (hoursMax=="") {
			var errors = "The hoursMax field is required.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}


		if (!regexp.test(hoursMax)) {
			var errors = "The hoursMax field must be a number with a maximun of two decimals.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

	//PRICE
		if (isNaN(price)) {
			var errors = "The price field must be a number.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

		if (price=="") {
			var errors = "The price field is required.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

		if (!regexp.test(price)) {
			var errors = "The price field must be a number with a maximun of two decimals.</br>";
			var errorsSpan = document.getElementById("errors");
			errorsSpan.innerHTML = errors;
			return false;
		}

	return true;
}
