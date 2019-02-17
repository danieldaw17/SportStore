$('#deactivatedButton').click(function() {
	var productId = $(this).attr('productId');

	$.ajax({
		url: "/api/product/"+productId+"/defuse",
		type: "get",
		dataType: "json",
		success: function(data) {
			alert("Product deleted succesfully");
			location.reload();

		},
		error: function() {
			alert("Product could not be deleted");
			location.reload();
		}
	})
});
