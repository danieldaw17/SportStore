$('#category').on('change', function(e){
	console.log(e);
	var cat_id = e.target.value;

	//ajax
	$.get('ajax_subcat?cat_id=' + cat_id, function(data){
		//success data
		$('#subcategory').empty();
		$.each(data, function(index, subcatObj){
			$('#subcategory').append('<option value="' +subcatObj.id+'">'+subcatObj.name+'</option>');
		})
	})
})