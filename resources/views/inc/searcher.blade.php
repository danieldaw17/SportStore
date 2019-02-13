<div class="searcher">
	<div id="custom-search-input">
	    <div class="input-group col-md-12">
	    	<form action="/search" method="POST" role="search">
			    @csrf
			    <div class="input-group">
			        <input type="text" class="form-control" name="text" id="text" placeholder="Search users">
			    </div>
			</form>
	    </div>
	</div>
</div>