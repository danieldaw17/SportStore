/* Cambia la imagen principal por la seleccionada */
function changePic(path, alt, title){
	document.getElementById("imgProduct").src=path;
	document.getElementById("imgProduct").alt=alt;
	document.getElementById("imgProduct").title=title;
}

/* Proporciona los datos de la imagen */
function imgBigProduct(path, alt, title){
	document.getElementById("imgBig").src=path;
	document.getElementById("imgBig").alt=alt;
	document.getElementById("imgBig").title=title;
}

function loadAmount(event) {
	var amount = $(':selected', event).attr("amount");
	$("#amount").attr({
       "max" : amount,
       "min" : 1
    });
}
