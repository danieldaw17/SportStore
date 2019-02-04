
<script>
	function validateSportForm() {
		var name = document.getElementById('name').value;

		if (name.length>30) {
			alert("Error: The sport name must not be longer than 30 characters");
			return false;
		}
	}
</script>

@if (isset($sport))
	<form action('SportsController@update') method='post' onsubmit="return validateSportForm()">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<label for='nane'>
			<input type='text' name='name' id='name' value="{{$sport->name}}">
		</label>

		<label for='imagePath'>
			<input type='text' name='imagePath' id='imagePath' value="{{$sport->imagePath}}">
		</label>
	</form>

@else
	<form action('SportsController@store') method='post' onsubmit="return validateSportForm()">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<label for='nane'>
			<input type='text' name='name' id='name'>
		</label>

		<label for='imagePath'>
			<input type='text' name='imagePath' id='imagePath'>
		</label>
	</form>
@endif
