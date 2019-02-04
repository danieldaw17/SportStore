function validateSportForm() {
	var name = document.getElementById('name').value;

	if (name.length>30 && name!=null) {
		var error = "Error: The sport name must not be longer than 30 characters";
		var errorName = document.getElementById("errorName");
		errorName.innerHTML = error;
		return false;
	}
}
