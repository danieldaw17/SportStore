// Personal information
function validatePersonalInformation(){

	// Error text
	var textFieldNull = "This field can not be blank";
    var textOnlyLetters = "This field only allows letters";
    var textIncorrectLetterNif = "Wrong letter";
    var textInvalidFormatNif = "Invalid length";

    // Patterns
	var onlyLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0\u00FC\s]+$/;
	var nifLetters = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

	// Name and surnames
	var fieldName = document.getElementById("nameInfoProfile");
	var nameValue = document.getElementById("nameInfoProfile").value;
	var fieldSurnames = document.getElementById("surnamesInfoProfile");
	var surnamesValue = document.getElementById("surnamesInfoProfile").value;
	if(nameValue == null || nameValue.length == 0 || nameValue.trim()==""){
		var error = document.getElementById("errorNameInfoProfile");
		error.innerHTML = textFieldNull;
		fieldName.focus();
		return false;
	}else if(onlyLetters.test(nameValue) == false){
		var error = document.getElementById("errorNameInfoProfile");
		error.innerHTML = textOnlyLetters;
		fieldName.focus();
		return false;
	}else if(surnamesValue == null || surnamesValue.length == 0 || surnamesValue.trim()==""){
		var error = document.getElementById("errorSurnamesInfoProfile");
		error.innerHTML = textFieldNull;
		fieldSurnames.focus();
		return false;
	}else if(onlyLetters.test(surnamesValue) == false){
		var error = document.getElementById("errorSurnamesInfoProfile");
		error.innerHTML = textOnlyLetters;
		fieldSurnames.focus();
		return false;
	}

	// NIF
	var fieldNif = document.getElementById("nifInfoProfile");
    var nifValue = document.getElementById("nifInfoProfile").value;
    if(nifValue == null || nifValue.length == 0 || nifValue.trim()==""){
		var error = document.getElementById("errorNifInfoProfile");
		error.innerHTML = textFieldNull;
		fieldNif.focus();
		return false;
	}else if(nifValue.length < 9 || nifValue.length > 9){
		var error = document.getElementById("errorNifInfoProfile");
		error.innerHTML = textInvalidFormatNif;
		fieldNif.focus();
        return false;
    }else if(nifValue.charAt(8).toUpperCase() != nifLetters[(nifValue.substring(0,8))%23]){
        var error = document.getElementById("errorNifInfoProfile");
		error.innerHTML = textIncorrectLetterNif;
		fieldNif.focus();
        return false
    }

}

// Shipping address
function validateShippingAddress(){

	// Error text
	var textOption = "Select a valid option";
	var textFieldNull = "This field can not be blank";
    var textOnlyLetters = "This field only allows letters";
    var textOnlyNumbers = "This field only allows numbers";
    var textInvalidFormatZipCode = "Invalid length";

    // Patterns
	var onlyLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0\u00FC\s]+$/;
	var onlyNumbers = /^\d{5}$/;

	// Road type
	var fieldRoadtype = document.getElementById("roadTypeShippingAddress");
	var roadTypeValue = document.getElementById("roadTypeShippingAddress").value;
	if(roadTypeValue == 1){
		var error = document.getElementById("errorRoadTypeShippingAddress");
		error.innerHTML = textOption;
		fieldRoadtype.focus();
		return false;
	}

	// Road name
	var fieldRoadName = document.getElementById("roadNameShippingAddress");
	var roadNameValue = document.getElementById("roadNameShippingAddress").value;
	if(roadNameValue == null || roadNameValue.length == 0 || roadNameValue.trim()==""){
		var error = document.getElementById("errorRoadNameShippingAddress");
		error.innerHTML = textFieldNull;
		fieldRoadName.focus();
		return false;
	}

	// City, province and country
	var fieldCity = document.getElementById("cityShippingAddress");
	var cityValue = document.getElementById("cityShippingAddress").value;
	var fieldProvince = document.getElementById("provinceShippingAddress");
	var provinceValue = document.getElementById("provinceShippingAddress").value;
	var fieldCountry = document.getElementById("countryShippingAddress");
	var countryValue = document.getElementById("countryShippingAddress").value;
	if(cityValue == null || cityValue.length == 0 || cityValue.trim()==""){
		var error = document.getElementById("errorCityShippingAddress");
		error.innerHTML = textFieldNull;
		fieldCity.focus();
		return false;
	}else if(onlyLetters.test(cityValue) == false){
		var error = document.getElementById("errorCityShippingAddress");
		error.innerHTML = textOnlyLetters;
		fieldCity.focus();
		return false;
	}else if(provinceValue == null || provinceValue.length == 0 || provinceValue.trim()==""){
		var error = document.getElementById("errorProvinceShippingAddress");
		error.innerHTML = textFieldNull;
		fieldProvince.focus();
		return false;
	}else if(onlyLetters.test(provinceValue) == false){
		var error = document.getElementById("errorProvinceShippingAddress");
		error.innerHTML = textOnlyLetters;
		fieldProvince.focus();
		return false;
	}else if(countryValue == null || countryValue.length == 0 || countryValue.trim()==""){
		var error = document.getElementById("errorCountryShippingAddress");
		error.innerHTML = textFieldNull;
		fieldCountry.focus();
		return false;
	}else if(onlyLetters.test(countryValue) == false){
		var error = document.getElementById("errorCountryShippingAddress");
		error.innerHTML = textOnlyLetters;
		fieldCountry.focus();
		return false;
	}

	// Zip code
	var fieldZipCode = document.getElementById("zipCodeShippingAddress");
	var zipCodeValue = document.getElementById("zipCodeShippingAddress").value;
	if(zipCodeValue == null || zipCodeValue.length == 0 || zipCodeValue.trim()==""){
		var error = document.getElementById("errorZipCodeShippingAddress");
		error.innerHTML = textFieldNull;
		fieldZipCode.focus();
		return false;
	}else if(onlyNumbers.test(zipCodeValue) == false){
		var error = document.getElementById("errorZipCodeShippingAddress");
		if(zipCodeValue < 5 || zipCodeValue > 5){
			error.innerHTML = textInvalidFormatZipCode;
		}else{
			error.innerHTML = textOnlyNumbers;
		}
		fieldZipCode.focus();
		return false;
		
	}

}

// Billing address
function validateBillingAddress(){

	// Error text
	var textOption = "Select a valid option";
	var textFieldNull = "This field can not be blank";
    var textOnlyLetters = "This field only allows letters";
    var textOnlyNumbers = "This field only allows numbers";
    var textInvalidFormatZipCode = "Invalid length";

    // Patterns
	var onlyLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0\u00FC\s]+$/;
	var onlyNumbers = /^\d{5}$/;

	// Road type
	var fieldRoadtype = document.getElementById("roadTypeBillingAddress");
	var roadTypeValue = document.getElementById("roadTypeBillingAddress").value;
	if(roadTypeValue == 1){
		var error = document.getElementById("errorRoadTypeBillingAddress");
		error.innerHTML = textOption;
		fieldRoadtype.focus();
		return false;
	}

	// Road name
	var fieldRoadName = document.getElementById("roadNameBillingAddress");
	var roadNameValue = document.getElementById("roadNameBillingAddress").value;
	if(roadNameValue == null || roadNameValue.length == 0 || roadNameValue.trim()==""){
		var error = document.getElementById("errorRoadNameBillingAddress");
		error.innerHTML = textFieldNull;
		fieldRoadName.focus();
		return false;
	}

	// City, province and country
	var fieldCity = document.getElementById("cityBillingAddress");
	var cityValue = document.getElementById("cityBillingAddress").value;
	var fieldProvince = document.getElementById("provinceBillingAddress");
	var provinceValue = document.getElementById("provinceBillingAddress").value;
	var fieldCountry = document.getElementById("countryBillingAddress");
	var countryValue = document.getElementById("countryBillingAddress").value;
	if(cityValue == null || cityValue.length == 0 || cityValue.trim()==""){
		var error = document.getElementById("errorCityBillingAddress");
		error.innerHTML = textFieldNull;
		fieldCity.focus();
		return false;
	}else if(onlyLetters.test(cityValue) == false){
		var error = document.getElementById("errorCityBillingAddress");
		error.innerHTML = textOnlyLetters;
		fieldCity.focus();
		return false;
	}else if(provinceValue == null || provinceValue.length == 0 || provinceValue.trim()==""){
		var error = document.getElementById("errorProvinceBillingAddress");
		error.innerHTML = textFieldNull;
		fieldProvince.focus();
		return false;
	}else if(onlyLetters.test(provinceValue) == false){
		var error = document.getElementById("errorProvinceBillingAddress");
		error.innerHTML = textOnlyLetters;
		fieldProvince.focus();
		return false;
	}else if(countryValue == null || countryValue.length == 0 || countryValue.trim()==""){
		var error = document.getElementById("countryBillingAddress");
		error.innerHTML = textFieldNull;
		fieldCountry.focus();
		return false;
	}else if(onlyLetters.test(countryValue) == false){
		var error = document.getElementById("countryBillingAddress");
		error.innerHTML = textOnlyLetters;
		fieldCountry.focus();
		return false;
	}

	// Zip code
	var fieldZipCode = document.getElementById("zipCodeBillingAddress");
	var zipCodeValue = document.getElementById("zipCodeBillingAddress").value;
	if(zipCodeValue == null || zipCodeValue.length == 0 || zipCodeValue.trim()==""){
		var error = document.getElementById("errorZipCodeBillingAddress");
		error.innerHTML = textFieldNull;
		fieldZipCode.focus();
		return false;
	}else if(onlyNumbers.test(zipCodeValue) == false){
		var error = document.getElementById("errorZipCodeBillingAddress");
		if(zipCodeValue < 5 || zipCodeValue > 5){
			error.innerHTML = textInvalidFormatZipCode;
		}else{
			error.innerHTML = textOnlyNumbers;
		}
		fieldZipCode.focus();
		return false;
		
	}

}

// Account
function validateAccount(){

	// Error text
	var textFieldNull = "This field can not be blank";
	var invalidEmail = "Invalid format";

	// Patterns
	var email = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i; // cliente@servidor.dominio // permite acentos, ñ, numeros...

	// Nickname
	var fieldNick = document.getElementById("nickInfoProfile");
	var nickValue = document.getElementById("nickInfoProfile").value;
	if(nickValue == null || nickValue.length == 0 || nickValue.trim()==""){
		var error = document.getElementById("errorNickInfoProfile");
		error.innerHTML = textFieldNull;
		fieldNick.focus();
		return false;
	}

	// Email
	var fieldEmail = document.getElementById("emailInfoProfile");
	var emailValue = document.getElementById("emailInfoProfile").value;
	if(emailValue == null || emailValue.length == 0 || emailValue.trim()==""){
		var error = document.getElementById("errorEmailInfoProfile");
		error.innerHTML = textFieldNull;
		fieldEmail.focus();
		return false;
	}else if(email.test(emailValue) == false){
		var error = document.getElementById("errorEmailInfoProfile");
		error.innerHTML = invalidEmail;
		fieldEmail.focus();
		return false;
	}

}

// Change password
function validateChangePassword(){

	// Error text
	var textFieldNull = "This field can not be blank";
	var unmatchPasswords = "Passwords do not match";
	var noRepeatPasswords = "The old password can not be the same as the new one";


	// Actual password
	var fieldActualPassword = document.getElementById("actualPass");
	var actualPasswordValue = document.getElementById("actualPass").value;
	if(actualPasswordValue == null || actualPasswordValue.length == 0 || actualPasswordValue.trim()==""){
		var error = document.getElementById("errorActualPass");
		error.innerHTML = textFieldNull;
		fieldActualPassword.focus();
		return false;
	}

	// New password and confirm password
	var fieldNewPassword = document.getElementById("newPassword");
	var newPasswordValue = document.getElementById("newPassword").value;
	var fieldConfirmNewPassword = document.getElementById("confirmNewPassword");
	var confirmNewPasswordValue = document.getElementById("confirmNewPassword").value;
	if(newPasswordValue == null || newPasswordValue.length == 0 || newPasswordValue.trim()==""){
		var error = document.getElementById("errorNewPassword");
		error.innerHTML = textFieldNull;
		fieldNewPassword.focus();
		return false;
	}else if(confirmNewPasswordValue == null || confirmNewPasswordValue.length == 0 || confirmNewPasswordValue.trim()==""){
		var error = document.getElementById("errorConfirmNewPassword");
		error.innerHTML = textFieldNull;
		fieldConfirmNewPassword.focus();
		return false;
	}

	// Confirm password
	if(newPasswordValue != confirmNewPasswordValue){
		var error = document.getElementById("errorConfirmNewPassword");
		error.innerHTML = unmatchPasswords;
		fieldConfirmNewPassword.focus();
		return false;
	}

	actualPasswordValue = "hola";

	// No repeat actual and new password
	if(newPasswordValue == actualPasswordValue){
		var error = document.getElementById("errorNewPassword");
		error.innerHTML = noRepeatPasswords;
		fieldConfirmNewPassword.focus();
		return false;
	}

}

// Show form change password and hide form change email
function showFormChangePassword(){

	var formPassword = document.getElementById("changePass");
	var formEmail = document.getElementById("changeEmail");

	formPassword.style.display = "block";
	formEmail.style.display = "none";

}

// Show form change email and hide form change password
function showFormChangeEmail(){

	var formPassword = document.getElementById("changePass");
	var formEmail = document.getElementById("changeEmail");

	formPassword.style.display = "none";
	formEmail.style.display = "block";

}

// Validate password new user from Admin
function validatePassword(){

	// Error text
	var textFieldNull = "This field can not be blank";
	var unmatchPasswords = "Passwords do not match";

	// New password and confirm password
	var fieldNewPassword = document.getElementById("newPassword");
	var newPasswordValue = document.getElementById("newPassword").value;
	var fieldConfirmNewPassword = document.getElementById("confirmNewPassword");
	var confirmNewPasswordValue = document.getElementById("confirmNewPassword").value;
	if(newPasswordValue == null || newPasswordValue.length == 0 || newPasswordValue.trim()==""){
		var error = document.getElementById("errorNewPassword");
		error.innerHTML = textFieldNull;
		fieldNewPassword.focus();
		return false;
	}else if(confirmNewPasswordValue == null || confirmNewPasswordValue.length == 0 || confirmNewPasswordValue.trim()==""){
		var error = document.getElementById("errorConfirmNewPassword");
		error.innerHTML = textFieldNull;
		fieldConfirmNewPassword.focus();
		return false;
	}

	// Confirm password
	if(newPasswordValue != confirmNewPasswordValue){
		var error = document.getElementById("errorConfirmNewPassword");
		error.innerHTML = unmatchPasswords;
		fieldConfirmNewPassword.focus();
		return false;
	}

}