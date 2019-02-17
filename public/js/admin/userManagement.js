// Show shipping address
function showShippingAddress(contador){

	var view = document.getElementById("viewShippingAddress"+contador);
	var show = document.getElementById("shippingAddress"+contador);

	show.style.display = "block";
	view.innerHTML = "";
	view.style.marginBottom = "2%";

}

// Hide shipping address
function hideShippingAddress(contador){

	var view = document.getElementById("viewShippingAddress"+contador);
	var hide = document.getElementById("hideShippingAddress"+contador);
	var show = document.getElementById("shippingAddress"+contador);

	hide.style.display = "block";
	show.style.display = "none";
	view.innerHTML = "View";

}

// Show billing address
function showBillingAddress(contador){

	var view = document.getElementById("viewBillingAddress"+contador);
	var show = document.getElementById("billingAddress"+contador);

	show.style.display = "block";
	view.innerHTML = "";
	view.style.marginBottom = "2%";

}

// Hide shipping address
function hideBillingAddress(contador){

	var view = document.getElementById("viewBillingAddress"+contador);
	var hide = document.getElementById("hideBillingAddress"+contador);
	var show = document.getElementById("billingAddress"+contador);

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