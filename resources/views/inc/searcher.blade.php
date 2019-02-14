<div class="searcher">
	<div id="custom-search-input">
    	<form action="/search" method="POST" role="search">
		    @csrf
		    <div class="form-row">
		    	{{-- CATEGORY --}}
		    	<div class="form-group widthField">
		    		<label for="category">Category:</label>
		    		<select class="form-control" name="category" id="category">
		        	  	<option value="0" selected="selected">Select category</option>
		        	  	@if(isset($categoriesNav))
		        	  		@foreach($categoriesNav as $category)
		        	  			<option value="{{$category->id}}">{{$category->name}}</option>
		        	  		@endforeach
		        	  	@endif
		        	 </select>
		    	</div>
		    	{{-- SUBCATEGORY --}}
		    	<div class="form-group widthField">
		    		<label for="subcategory">Subcategory:</label>
		    		<select class="form-control"  name="subcategory" id="subcategory">
		        	  	<option value="0" selected="selected">First select category</option>
		        	</select>	
		    	</div>
		    	{{-- BRAND --}}
		    	<div class="form-group widthField">
		    		<label for="brand">Brand:</label>
		    		<select class="form-control"  name="brand" id="brand">
		        	  	<option value="0" selected="selected">Select brand</option>
		        	  	@if(isset($brands))
		        	  		@foreach($brands as $brand)
		        	  			<option value="{{$brand->id}}">{{$brand->name}}</option>
		        	  		@endforeach
		        	  	@endif
	        	    </select>	
		    	</div>
		    	{{-- GENDER --}}
		    	<div class="form-group widthField">
			    	<label for="gender">Gender:</label>
			    	<select class="form-control"  name="gender" id="gender">
						<option value="0" selected="selected">Select gender</option>
						@if(isset($genders))
							@foreach($genders as $gender)
								@php
									$sex = explode('{"gender":"',$gender);
									$sex = explode('"}', $sex[1]);
									$sexUpper = $sex[0];
									$sexUpper = ucwords($sex[0]);
								@endphp
								<option value="{{$sex[0]}}">{{$sexUpper}}</option>
							@endforeach
						@endif
					</select>
				</div>
		    </div>
		    <div class="form-group widthText">
		        <div class="input-group">
	        	  <input type="text" class="form-control" name="text" id="text" placeholder="Your search...">
		          <div class="input-group-prepend">
		          	<button type="submit" class="btn btn-succes submitSearch">
		          		<i class="fa fa-search prefix grey-text fa-1g" aria-hidden="true"></i>
		          	</button>
		          </div>
		        </div>
	        </div>
		</form>
	</div>
</div>