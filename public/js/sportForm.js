function validateSportForm() {
	var name = document.getElementById('name').value;

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

	return true;
}
