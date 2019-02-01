function validateLogin(){

	// Error text
	var fieldNull = "This field can not be blank";
	var invalidEmail = "Invalid format";

	// Patterns
	var email = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i; // cliente@servidor.dominio // permite acentos, ñ, numeros...

	// Login
	// Email
	var fieldEmailLogin = document.getElementById("email");
	var emailLogin = document.getElementById("email").value;
	if(emailLogin == null || emailLogin.length == 0 || emailLogin.trim()==""){
		var error = document.getElementById("errorEmailLogin");
		error.innerHTML = fieldNull;
		fieldEmailLogin.focus();
		return false;
	}else if(email.test(emailLogin) == false){
		var error = document.getElementById("errorEmailLogin");
		error.innerHTML = invalidEmail;
		fieldEmailLogin.focus();
		return false;
	}

	// Pass
	var fieldPassLogin = document.getElementById("passLogin");
	var passLogin = document.getElementById("passLogin").value;
	if(passLogin == null || passLogin.length == 0 || passLogin.trim()==""){
		var error = document.getElementById("errorPassLogin");
		error.innerHTML = fieldNull;
		fieldPassLogin.focus();
		return false;
	}

}

function validateRegister(){

	// Error text
	var fieldNull = "This field can not be blank";
	var invalidEmail = "Invalid format";
	var unmatchPasswords = "Passwords do not match";

	// Patterns
	var email = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i; // cliente@servidor.dominio // permite acentos, ñ, numeros...

	// Register
	// Email
	var fieldEmailRegister = document.getElementById("emailRegister");
	var emailRegister = document.getElementById("emailRegister").value;
	if(emailRegister == null || emailRegister.length == 0 || emailRegister.trim()==""){
		var error = document.getElementById("errorEmailRegister");
		error.innerHTML = fieldNull;
		fieldEmailRegister.focus();
		return false;
	}else if(email.test(emailRegister) == false){
		var error = document.getElementById("errorEmailRegister");
		error.innerHTML = invalidEmail;
		fieldEmailRegister.focus();
		return false;
	}

	// Pass
	var fieldPassRegister = document.getElementById("passRegister");
	var passRegister = document.getElementById("passRegister").value;
	if(passRegister == null || passRegister.length == 0 || passRegister.trim()==""){
		var error = document.getElementById("errorPassRegister");
		error.innerHTML = fieldNull;
		fieldPassRegister.focus();
		return false;
	}

	// Pass 2
	var fieldPassRegister2 = document.getElementById("confirmPass");
	var passRegister2 = document.getElementById("confirmPass").value;
	if(passRegister2 == null || passRegister2.length == 0 || passRegister2.trim()==""){
		var error = document.getElementById("errorConfirmPass");
		error.innerHTML = fieldNull;
		fieldPassRegister2.focus();
		return false;
	}

	// Confirm pass
	if(passRegister != passRegister2){
		var error = document.getElementById("errorConfirmPass");
		error.innerHTML = unmatchPasswords;
		fieldPassRegister2.focus();
		return false;
	}

}

function showFormRegister(){

	var loginForm = document.getElementById("loginForm");
	var registerForm = document.getElementById("registerForm");

	registerForm.style.display="block";
	loginForm.style.display="none";

}

function showFormLogin(){

	var loginForm = document.getElementById("loginForm");
	var registerForm = document.getElementById("registerForm");

	registerForm.style.display="none";
	loginForm.style.display="block";

}