function validateBrandForm() {
	var name = document.getElementById('name').value;

	if (name.length>30 && name!=null) {
		alert("Error: The brand name must not be longer than 30 characters");
		return false;
	}
}
