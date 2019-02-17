$('#activateButton').click(function() {
	var productId = $(this).attr('productId');

	$.ajax({
		url: "/api/product/"+productId+"/activate",
		type: "get",
		dataType: "json",
		success: function(data) {
			alert("Product activated succesfully");
			location.reload();

		},
		error: function() {
			alert("Product could not be activated");
			location.reload();
		}
	})
});
