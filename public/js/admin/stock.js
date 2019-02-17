// Cuando la pagina esté OK
$(document).ready(function(){

	fetch_data();

	function fetch_data(query = ''){

		$.ajax({
			url: "checkStock/action",
			method: 'GET',
			data: {query:query},
			dataType: 'json',
			success:function(data){
				$('tbody').html(data.table_data);
			}
		})

	}

	$(document).on('keyup', '#search', function(){
		var query = $(this).val();
		fetch_data(query);
	});

});