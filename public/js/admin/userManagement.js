// Show shipping address
function showShippingAddress(){

	var view = document.getElementById("viewShippingAddress");
	var show = document.getElementById("shippingAddress");

	show.style.display = "block";
	view.innerHTML = "";
	view.style.marginBottom = "2%";

}

// Hide shipping address
function hideShippingAddress(){

	var view = document.getElementById("viewShippingAddress");
	var hide = document.getElementById("hideShippingAddress");
	var show = document.getElementById("shippingAddress");

	hide.style.display = "block";
	show.style.display = "none";
	view.innerHTML = "View";

}

// Show billing address
function showBillingAddress(){

	var view = document.getElementById("viewBillingAddress");
	var show = document.getElementById("billingAddress");

	show.style.display = "block";
	view.innerHTML = "";
	view.style.marginBottom = "2%";

}

// Hide shipping address
function hideBillingAddress(){

	var view = document.getElementById("viewBillingAddress");
	var hide = document.getElementById("hideBillingAddress");
	var show = document.getElementById("billingAddress");

	hide.style.display = "block";
	show.style.display = "none";
	view.innerHTML = "View";

}

// Hide table users
function showFormUser(){

	var tableUsers = document.getElementById("tableUsers");
	var formEditUser = document.getElementById("formUser");
	var menu = document.getElementById("menuUserManagement");

	tableUsers.style.display = "none";
	formEditUser.style.display = "block";
	menu.style.display = "none";

}