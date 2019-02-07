// Add one more
function add(){

	var text = document.getElementById("quantity");
	var quantity = document.getElementById("quantity").innerHTML;
	quantity = parseInt(quantity);
	text.innerHTML = quantity + 1;

}

// Rest one more
function rest(){

	var text = document.getElementById("quantity");
	var quantity = document.getElementById("quantity").innerHTML;
	quantity = parseInt(quantity);
	text.innerHTML = quantity - 1;

	if(quantity == 0){
		text.innerHTML = 0;
	}

}

// Total
function total(){

	var unitPrice = document.getElementById("unitPrice").innerHTML;
	unitPrice = parseFloat(unitPrice);
	var quantity = document.getElementById("quantity").innerHTML;
	quantity = parseInt(quantity);
	var text = document.getElementById("total");
	var total = document.getElementById("total").innerHTML;
	text.innerHTML = unitPrice * quantity + "€";

}

// Total modal cart
function totalModal(){

	var unitPrice = document.getElementById("unitPriceModal").innerHTML;
	unitPrice = parseFloat(unitPrice);
	var quantity = document.getElementById("quantityModal").value;
	var text = document.getElementById("totalModal");
	var total = document.getElementById("totalModal").innerHTML;
	text.innerHTML = unitPrice * quantity + "€";


}